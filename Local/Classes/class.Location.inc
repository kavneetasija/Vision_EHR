<?php

/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-11-05
 * Time: 2:50 PM
 */
include('config.inc');
include('mysql_db.inc');
?>
<?php
class Location extends MySQLDatabase
{
    private $locationId;
    private $locationType;
    private $locationName;
private $locationAddress;

    /**
     * @param $locationType
     * @return bool|mysqli_result|string
     */
    //get location list by location type.
    function getAllLocationsByType($locationType){
        $sqlSelectLocations = "SELECT tbl_locations.location_id,name,reference_name,tbl_locations.email,phone,tbl_users.first_name,tbl_users.last_name FROM vision_ehr.tbl_locations
                                LEFT OUTER JOIN tbl_users ON assigned_doctor = user_id WHERE type = '$locationType'";
        try{

            //try to run query
            $result = mysqli_query($this->connection,$sqlSelectLocations);
            if(!$result){
                throw new Exception("Query failed".mysqli_error($this->connection));

            }
            else{
                return $result;
            }
        }
        catch(Exception $e){
            //return error message on error
            return $e->getMessage();
        }
    }

    //set sessions for new location
    private function setSessionDateByLocation($locationId,$sessionDate){
        $sqlCreateSession = "INSERT INTO tbl_sessions (location_id, date) VALUES ('$locationId','$sessionDate');";
        //Try to query and create new session
        try{
            $result = mysqli_query($this->connection,$sqlCreateSession);
            if($result){
                return true;
            }
            else{
                throw new Exception("Sorry can not query: ". mysqli_error($this->connection));
            }
        }
        catch(Exception $e){
            return $e->getMessage();
        }

    }
    /**
     * @param $name
     * @param $type
     * @param $referenceName
     * @param $email
     * @param $phone
     * @param $address
     * @param $city
     * @param $province
     * @param $postalCode
     * @param $assignedDoctor
     * @return int|string
     */
    //Insert new Location in Database
    function createLocation($name,$type,$referenceName,$email,$phone,$address,$city,$province,$postalCode,$assignedDoctor){
        $name = mysqli_real_escape_string($this->connection,trim($name));
        $type = mysqli_real_escape_string($this->connection,trim($type));
        $referenceName = mysqli_real_escape_string($this->connection,trim($referenceName));
        $email = mysqli_real_escape_string($this->connection,trim($email));
        $phone = mysqli_real_escape_string($this->connection,trim($phone));
        $address = mysqli_real_escape_string($this->connection,trim($address));
        $city = mysqli_real_escape_string($this->connection,trim($city));
        $province = mysqli_real_escape_string($this->connection,trim($province));
        $postalCode = mysqli_real_escape_string($this->connection,trim($postalCode));
        $assignedDoctor = mysqli_real_escape_string($this->connection,trim($assignedDoctor));

        $sqlCreateLocation = "INSERT INTO tbl_locations(type,name,reference_name,email,phone,address,city,province,postal_code,assigned_doctor)
                              VALUES('$type','$name','$referenceName','$email','$phone','$address','$city','$province','$postalCode','$assignedDoctor')";
        try{
            //if successfully inserted return inserted record's id value or else throw exception.
            if(mysqli_query($this->connection,$sqlCreateLocation)){

                return (mysqli_insert_id($this->connection));
            }
            else{
                throw new Exception("Sorry can not query : ". mysqli_error($this->connection));
            }
        }
        catch(Exception $e){
            return false;
        }
    }

    //get location by location id
    /**
     * @param $locationId
     * @return bool|mysqli_result|string
     */
    function getAllLocationsById($locationId){

        $sqlSelectLocation = "SELECT * FROM tbl_locations  WHERE location_id = '$locationId'";
        try{
            if($result = mysqli_query($this->connection,$sqlSelectLocation)){
                return $result;
            }
            else{
                throw new Exception("Sorry Can not query: ".mysqli_error($this->connection));
            }
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }


    //get registered patients for location @ Appointment booking
    function getRegisteredPatients($locationId){
        $sqlSelectPatients = "SELECT tbl_patients.patient_id, tbl_patients.first_name,tbl_patients.last_name,tbl_patients.birth_date,tbl_patients.OHIP_number,tbl_patients.gender,tbl_patients.type,tbl_sessions.date,tbl_appointments.time FROM tbl_appointments
                              right JOIN tbl_patients ON tbl_patients.patient_id = tbl_appointments.patient_id
                              left join tbl_sessions ON tbl_appointments.session_id = tbl_sessions.session_id
                              where tbl_patients.location_id = '$locationId';";
        $result = $this->queryDatabase($sqlSelectPatients);
        return $result;
    }

    //Get list of doctors
    function getDoctorsList(){
        $sqlSelectUserDoctor = "SELECT user_id,first_name,last_name FROM tbl_users WHERE user_role = 'Doctor'";
        return $this->queryDatabase($sqlSelectUserDoctor);
    }
    //Update Location by location id
    function updateLocationById($locationId,$name,$type,$referenceName,$email,$phone,$address,$city,$province,$postalCode,$assignedDoctor){
        $name = mysqli_real_escape_string($this->connection,trim($name));
        $type = mysqli_real_escape_string($this->connection,trim($type));
        $referenceName = mysqli_real_escape_string($this->connection,trim($referenceName));
        $email = mysqli_real_escape_string($this->connection,trim($email));
        $phone = mysqli_real_escape_string($this->connection,trim($phone));
        $address = mysqli_real_escape_string($this->connection,trim($address));
        $city = mysqli_real_escape_string($this->connection,trim($city));
        $province = mysqli_real_escape_string($this->connection,trim($province));
        $postalCode = mysqli_real_escape_string($this->connection,trim($postalCode));
        $assignedDoctor = mysqli_real_escape_string($this->connection,trim($assignedDoctor));
        $sqlUpdateLocation = "UPDATE tbl_locations SET type = '$type',
                                                       name = '$name',
                                                       reference_name = '$referenceName',
                                                       email ='$email',
                                                       phone = '$phone',
                                                       address = '$address',
                                                       city = '$city',
                                                       province = '$province',
                                                       postal_code = '$postalCode',
                                                       assigned_doctor = '$assignedDoctor'
                                                        WHERE location_id = '$locationId'";

        $result =  $this->queryDatabase($sqlUpdateLocation);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }
    //Delete location by location_id
    function deleteLocationByID($locationID){
        $sqlDeleteLocation = "DELETE FROM tbl_locations WHERE location_id = '$locationID'";
        return $this->queryDatabase($sqlDeleteLocation);
    }


    //Get all assigned location to a doctor for session Date
    function getLocationForDoctorDashboard($doctorID){
        $sqlSelectLocation = "SELECT tbl_locations.*,tbl_sessions.date,tbl_sessions.session_id,(select count(*) from tbl_appointments where tbl_appointments.session_id = tbl_sessions.session_id and tbl_appointments.patient_id NOT IN
                              (select patient_id from tbl_exam)) as appointments
                              FROM tbl_locations
                              RIGHT JOIN tbl_sessions ON tbl_locations.location_id = tbl_sessions.location_id
                              WHERE tbl_locations.assigned_doctor = '$doctorID' ORDER BY tbl_sessions.date";

        return $this->queryDatabase($sqlSelectLocation);
    }

    //Get all appointments for session todo remove already checked appointments
    function getAppointmentsBySessionId($sessionId){
        $sqlSelectAppointments = "SELECT tbl_patients.*, tbl_sessions.date,tbl_appointments.time FROM tbl_appointments
                                  LEFT JOIN tbl_patients ON tbl_appointments.patient_id = tbl_patients.patient_id
                                  RIGHT JOIN tbl_sessions ON tbl_appointments.session_id = tbl_sessions.session_id
                                  WHERE tbl_sessions.session_id = '$sessionId'
                                  AND tbl_patients.patient_id NOT IN (select patient_id from tbl_exam)";

        return $this->queryDatabase($sqlSelectAppointments);
    }
}
?>
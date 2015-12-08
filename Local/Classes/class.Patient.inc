<?php

/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-11-12
 * Time: 9:46 PM
 */
include('config.inc');
include('mysql_db.inc');
?>
<?php
class Patient extends MySQLDatabase
{
    //Create New patient todo display error message for duplicate OHIP number
    /**
     * @param $location
     * @param $firstName
     * @param $lastName
     * @param $ohipNumber
     * @param $ohipVirsion
     * @param $birthDate
     * @param $gender
     * @param $address
     * @param $type
     * @return mixed
     */
    function createPatient($location,$firstName,$lastName,$ohipNumber,$ohipVirsion,$birthDate,$gender,$address,$city,$province,$postalCode,$type){
        $location = mysqli_real_escape_string($this->connection,trim($location));
        $firstName = mysqli_real_escape_string($this->connection,trim($firstName));
        $lastName = mysqli_real_escape_string($this->connection,trim($lastName));
        $ohipNumber = mysqli_real_escape_string($this->connection,trim($ohipNumber));
        $ohipVirsion = mysqli_real_escape_string($this->connection,trim($ohipVirsion));
        $birthDate = mysqli_real_escape_string($this->connection,trim($birthDate));
        $gender = mysqli_real_escape_string($this->connection,trim($gender));
        $address = mysqli_real_escape_string($this->connection,trim($address));
        $city = mysqli_real_escape_string($this->connection,trim($city));
        $province = mysqli_real_escape_string($this->connection,trim($province));
        $postalCode = mysqli_real_escape_string($this->connection,trim($postalCode));
        $type = mysqli_real_escape_string($this->connection,trim($type));

        //get locationID to store
        $sqlGetLocation = "SELECT location_id FROM tbl_locations WHERE name = '$location'";
        $locationResult = $this->queryDatabase($sqlGetLocation);
        $getLocation = mysqli_fetch_assoc($locationResult);

        //
        $sqlCreatePatient = "INSERT INTO tbl_patients(location_id,first_name,last_name,OHIP_number,OHIP_virsion,birth_date,gender,address,city,province,postal_code,type)
                             VALUES('$getLocation[location_id]','$firstName','$lastName','$ohipNumber','$ohipVirsion','$birthDate','$gender','$address','$city','$province','$postalCode','$type')";
        $result = $this->queryDatabase($sqlCreatePatient);
        $returnValue['sqlResult']= $result;
        $returnValue['insertId'] = mysqli_insert_id($this->connection);
        return $returnValue;
        //Don't close connection till insert Relational and health history details.
    }

    //add student relational details in tbl_student_relations
    /**
     * @param $patientId
     * @param $firstName
     * @param $lastName
     * @param $phone
     * @param $otherPhone
     * @param $email
     * @param $teacherName
     * @param $grade
     * @param $class
     * @return bool|mysqli_result|string
     */
    function createStudentRelation($patientId,$firstName,$lastName,$phone,$otherPhone,$email,$teacherName,$grade,$class ){
        $firstName = mysqli_real_escape_string($this->connection,trim($firstName));
        $lastName = mysqli_real_escape_string($this->connection,trim($lastName));
        $phone = mysqli_real_escape_string($this->connection,trim($phone));
        $otherPhone = mysqli_real_escape_string($this->connection,trim($otherPhone));
        $email = mysqli_real_escape_string($this->connection,trim($email));
        $teacherName = mysqli_real_escape_string($this->connection,trim($teacherName));
        $grade = mysqli_real_escape_string($this->connection,trim($grade));
        $class = mysqli_real_escape_string($this->connection,trim($class));

        $sqlPatientRelation = "INSERT INTO tbl_student_relations(patient_id,first_name,last_name,phone,other_phone,email,teacher_name,grade,class)
                                VALUES ('$patientId','$firstName','$lastName','$phone','$otherPhone','$email','$teacherName','$grade','$class')";
        $result = $this->queryDatabase($sqlPatientRelation);
        return $result;
    }
    //add health history in tbl_student_health
    /**
     * @param $patintId
     * @param $share
     * @param $firstExam
     * @param $lastExamYear
     * @param $eyeConditions
     * @param $medicalCondition
     * @param $medicalConditionText
     * @param $medication
     * @param $medicationText
     * @param $allergies
     * @param $allergiesText
     * @param $relativeEyeCondition
     * @param $relativeEyeConditionText
     * @param $other
     * @return bool|mysqli_result|string
     */
    function createStudentHealth($patintId,$share,$firstExam,$lastExamYear,$eyeConditions,$medicalCondition,$medicalConditionText,
                                 $medication,$medicationText,$allergies,$allergiesText,$relativeEyeCondition,$relativeEyeConditionText,$other){
        $share = mysqli_real_escape_string($this->connection,trim($share));
        $firstExam = mysqli_real_escape_string($this->connection,trim($firstExam));
        $lastExamYear = mysqli_real_escape_string($this->connection,trim($lastExamYear));
        $eyeConditions = mysqli_real_escape_string($this->connection,trim($eyeConditions));
        $medicalCondition = mysqli_real_escape_string($this->connection,trim($medicalCondition));
        $medicalConditionText = mysqli_real_escape_string($this->connection,trim($medicalConditionText));
        $medication = mysqli_real_escape_string($this->connection,trim($medication));
        $medicationText = mysqli_real_escape_string($this->connection,trim($medicationText));
        $allergies = mysqli_real_escape_string($this->connection,trim($allergies));
        $allergiesText = mysqli_real_escape_string($this->connection,trim($allergiesText));
        $relativeEyeCondition = mysqli_real_escape_string($this->connection,trim($relativeEyeCondition));
        $relativeEyeConditionText = mysqli_real_escape_string($this->connection,trim($relativeEyeConditionText));
        $other = mysqli_real_escape_string($this->connection,trim($other));

        $sqlStudentHealth = "INSERT INTO tbl_student_health(patient_id,share_info,first_exam,last_exam_year,eye_condition,medical_condition,medical_condition_text,medication,medication_text,allergies,allergies_text,relative_eye_condition,relative_eye_condition_text,other_text)
                              VALUES ('$patintId','$share','$firstExam','$lastExamYear','$eyeConditions','$medicalCondition','$medicalConditionText','$medication','$medicationText','$allergies','$allergiesText','$relativeEyeCondition','$relativeEyeConditionText','$other')";
        $result = $this->queryDatabase($sqlStudentHealth);
        return $result;
    }

    //add senior relational details in tbl_senior_relation
    /**
     * @param $patientId
     * @param $room
     * @param $firstName
     * @param $lastName
     * @param $phone
     * @param $otherPhone
     * @param $email
     * @param $relation
     * @return bool|mysqli_result|string
     */
    function createSeniorRelation($patientId,$room,$firstName,$lastName,$phone,$otherPhone,$email,$relation){
        $firstName = mysqli_real_escape_string($this->connection,trim($firstName));
        $room = mysqli_real_escape_string($this->connection,trim($room));
        $lastName = mysqli_real_escape_string($this->connection,trim($lastName));
        $phone = mysqli_real_escape_string($this->connection,trim($phone));
        $otherPhone = mysqli_real_escape_string($this->connection,trim($otherPhone));
        $email = mysqli_real_escape_string($this->connection,trim($email));
        $relation = mysqli_real_escape_string($this->connection,trim($relation));

        $sqlPatientRelation = "INSERT INTO tbl_senior_relations(patient_id,room,first_name,last_name,phone,other_phone,email,relation)
                                VALUES ('$patientId','$room','$firstName','$lastName','$phone','$otherPhone','$email','$relation')";
        $result = $this->queryDatabase($sqlPatientRelation);
        return $result;

    }

    //Get All students to display
    /**
     * @param $type
     * @return bool|mysqli_result|string
     */
    function getAllPatientsByType($type){
        $sqlSelectPatient = "SELECT tbl_patients.*,tbl_sessions.date,tbl_appointments.time FROM tbl_appointments
                              right JOIN tbl_patients ON tbl_patients.patient_id = tbl_appointments.patient_id
                              left join tbl_sessions ON tbl_appointments.session_id = tbl_sessions.session_id
                              WHERE type = '$type'";
        $result = $this->queryDatabase($sqlSelectPatient);
        return $result;
    }

    //get patient by ID
    /**
     * @param $patientId
     * @return bool|mysqli_result|string
     */
    function getPatientById($patientId){
        $sqlSelectPatient = "SELECT tbl_patients.*,tbl_locations.name FROM tbl_patients LEFT JOIN tbl_locations ON tbl_locations.location_id = tbl_patients.location_id WHERE patient_id = '$patientId'";
        return $result = $this->queryDatabase($sqlSelectPatient);
    }

    //get student relations by patient id
    /**
     * @param $patientId
     * @return bool|mysqli_result|string
     */
    function getStudentRelationsByPatientId($patientId){
        $sqlSelectStudentRelation = "SELECT * FROM tbl_student_relations WHERE tbl_student_relations.patient_id = '$patientId'";
        return $result = $this->queryDatabase($sqlSelectStudentRelation);
    }

    //get senior relations by patient id
    /**
     * @param $patientId
     * @return bool|mysqli_result|string
     */
    function getSeniorRelationsByPatientId($patientId){
        $sqlSelectSeniorRelation = "SELECT * FROM tbl_senior_relations WHERE tbl_student_relations.patient_id = '$patientId'";
        return $result = $this->queryDatabase($sqlSelectSeniorRelation);
    }

    //get student health history by patient id
    /**
     * @param $patientId
     * @return bool|mysqli_result|string
     */
    function getHealthHistoryByPatientId($patientId){
        $sqlSelectStudentHealth = "SELECT * FROM tbl_student_health WHERE tbl_student_health.patient_id = '$patientId'";
        return $result = $this->queryDatabase($sqlSelectStudentHealth);
    }

    //get location name from patient id
    /**
     * @param $patientId
     * @return bool|mysqli_result|string
     */
    function getRegisteredLocation($patientId){
        $sqlSelectLocation = "SELECT tbl_locations.name FROM tbl_patients INNER JOIN tbl_locations
                              ON tbl_patients.location_id = tbl_locations.location_id
                              WHERE tbl_patients.patient_id ='$patientId'";
        $result = $this->queryDatabase($sqlSelectLocation);

        return $result;

    }
    //get Available session dates from registered patient's location id
    /**
     * @param $locationId
     * @return bool|mysqli_result|string
     */
    function getAvailableSessionDates($locationId){
        $sqlSelectAvailableDates = "SELECT * FROM tbl_sessions
                                    WHERE location_id = '$locationId'";
        $result = $this->queryDatabase($sqlSelectAvailableDates);
        return $result;
    }
    //Insert Appointment data in tbl_appointments table.
    /**
     * @param $sessionId
     * @param $patientId
     * @param $time
     * @return bool|mysqli_result|string
     */
    function bookAppointment($sessionId,$patientId,$time){
        $sqlInsertAppointmentTime = "INSERT INTO tbl_appointments(session_id,patient_id,time)
                                      VALUES ('$sessionId','$patientId','$time')";
        $result = $this->queryDatabase($sqlInsertAppointmentTime);
        return $result;
    }

    //Update patent  basic info
    /**
     * @param $patientId
     * @param $location
     * @param $firstName
     * @param $lastName
     * @param $ohipNumber
     * @param $ohipVirsion
     * @param $birthDate
     * @param $gender
     * @param $address
     * @param $city
     * @param $province
     * @param $postalCode
     * @return bool|mysqli_result|string
     */
    function updatePatientInfoById ($patientId,$location,$firstName,$lastName,$ohipNumber,$ohipVirsion,$birthDate,$gender,$address,$city,$province,$postalCode){
        $location = mysqli_real_escape_string($this->connection,trim($location));
        $firstName = mysqli_real_escape_string($this->connection,trim($firstName));
        $lastName = mysqli_real_escape_string($this->connection,trim($lastName));
        $ohipNumber = mysqli_real_escape_string($this->connection,trim($ohipNumber));
        $ohipVirsion = mysqli_real_escape_string($this->connection,trim($ohipVirsion));
        $birthDate = mysqli_real_escape_string($this->connection,trim($birthDate));
        $gender = mysqli_real_escape_string($this->connection,trim($gender));
        $address = mysqli_real_escape_string($this->connection,trim($address));
        $city = mysqli_real_escape_string($this->connection,trim($city));
        $province = mysqli_real_escape_string($this->connection,trim($province));
        $postalCode = mysqli_real_escape_string($this->connection,trim($postalCode));

        //get locationID to store
        $sqlGetLocation = "SELECT location_id FROM tbl_locations WHERE name = '$location'";
        $locationResult = $this->queryDatabase($sqlGetLocation);
        $locationId = mysqli_fetch_assoc($locationResult);
        //query for updating patient basic info
        $sqlUpdatePatient = "UPDATE tbl_patients SET  location_id = '$locationId[location_id]',
                                                                     first_name = '$firstName',
                                                                     last_name = '$lastName',
                                                                     OHIP_number = '$ohipNumber',
                                                                     OHIP_virsion = '$ohipVirsion',
                                                                     birth_date = '$birthDate',
                                                                     gender = '$gender',
                                                                     address = '$address',
                                                                     city = '$city',
                                                                     province = '$province',
                                                                     postal_code = '$postalCode'
                             WHERE `patient_id`='$patientId';";
        return $this->queryDatabase($sqlUpdatePatient);
    }

    //Update student relational info
    /**
     * @param $patientId
     * @param $firstName
     * @param $lastName
     * @param $phone
     * @param $otherPhone
     * @param $email
     * @param $teacherName
     * @param $grade
     * @param $class
     * @return bool|mysqli_result|string
     */
    function updateStudentRelationInfoByPatientId($patientId,$firstName,$lastName,$phone,$otherPhone,$email,$teacherName,$grade,$class ){
        //Search for relation id
        $sqlSelectRelationId = "SELECT tbl_student_relations.relation_id FROM tbl_student_relations WHERE patient_id = '$patientId'";
        $relationId = $this->queryDatabase($sqlSelectRelationId);
        //if relation record for patient exist then update else insert new record
        if(mysqli_num_rows($relationId) === 1){
            //filter input
            $firstName = mysqli_real_escape_string($this->connection,trim($firstName));
            $lastName = mysqli_real_escape_string($this->connection,trim($lastName));
            $phone = mysqli_real_escape_string($this->connection,trim($phone));
            $otherPhone = mysqli_real_escape_string($this->connection,trim($otherPhone));
            $email = mysqli_real_escape_string($this->connection,trim($email));
            $teacherName = mysqli_real_escape_string($this->connection,trim($teacherName));
            $grade = mysqli_real_escape_string($this->connection,trim($grade));
            $class = mysqli_real_escape_string($this->connection,trim($class));

            //get patient id
            $relationId = mysqli_fetch_assoc($relationId);
            $relationId = $relationId['relation_id'];
            //perform update
            $sqlUpdateStudentRelations = "UPDATE tbl_student_relations SET first_name = '$firstName',
                                                                       last_name = '$lastName',
                                                                       phone = '$phone',
                                                                       other_phone = '$otherPhone',
                                                                       email = '$email',
                                                                       teacher_name = '$teacherName',
                                                                       grade = '$grade',
                                                                       class = '$class'
                                          WHERE relation_id = '$relationId'";
            return $this->queryDatabase($sqlUpdateStudentRelations);
        }
        else{
            return $this->createStudentRelation($patientId,$firstName,$lastName,$phone,$otherPhone,$email,$teacherName,$grade,$class );
        }
    }

    //Update student Heath history
    /**
     * @param $patintId
     * @param $share
     * @param $firstExam
     * @param $lastExamYear
     * @param $eyeConditions
     * @param $medicalCondition
     * @param $medicalConditionText
     * @param $medication
     * @param $medicationText
     * @param $allergies
     * @param $allergiesText
     * @param $relativeEyeCondition
     * @param $relativeEyeConditionText
     * @param $other
     * @return bool|mysqli_result|string
     */
    function updateStudentHealthByPatientId($patintId,$share,$firstExam,$lastExamYear,$eyeConditions,$medicalCondition,$medicalConditionText,
                                            $medication,$medicationText,$allergies,$allergiesText,$relativeEyeCondition,$relativeEyeConditionText,$other){


        //Search for health id
        $sqlSelectStudentHealth = "SELECT tbl_student_health.health_id FROM tbl_student_health WHERE patient_id = '$patintId'";
        $healthId = $this->queryDatabase($sqlSelectStudentHealth);

        //if health record for patient exist then update else insert new record
        if(mysqli_num_rows($healthId) === 1){
            //filter input
            $share = mysqli_real_escape_string($this->connection,trim($share));
            $firstExam = mysqli_real_escape_string($this->connection,trim($firstExam));
            $lastExamYear = mysqli_real_escape_string($this->connection,trim($lastExamYear));
            $eyeConditions = mysqli_real_escape_string($this->connection,trim($eyeConditions));
            $medicalCondition = mysqli_real_escape_string($this->connection,trim($medicalCondition));
            $medicalConditionText = mysqli_real_escape_string($this->connection,trim($medicalConditionText));
            $medication = mysqli_real_escape_string($this->connection,trim($medication));
            $medicationText = mysqli_real_escape_string($this->connection,trim($medicationText));
            $allergies = mysqli_real_escape_string($this->connection,trim($allergies));
            $allergiesText = mysqli_real_escape_string($this->connection,trim($allergiesText));
            $relativeEyeCondition = mysqli_real_escape_string($this->connection,trim($relativeEyeCondition));
            $relativeEyeConditionText = mysqli_real_escape_string($this->connection,trim($relativeEyeConditionText));
            $other = mysqli_real_escape_string($this->connection,trim($other));

            //get health id
            $healthId = mysqli_fetch_assoc($healthId);
            $healthId = $healthId['health_id'];
            $sqlUpdateStudentHealth = "UPDATE tbl_student_health SET share_info = '$share',
                                                                     first_exam = '$firstExam',
                                                                     last_exam_year = '$lastExamYear',
                                                                     eye_condition = '$eyeConditions',
                                                                     medical_condition = '$medicalCondition',
                                                                     medical_condition_text = '$medicalConditionText',
                                                                     medication = '$medication',
                                                                     medication_text = '$medicationText',
                                                                     allergies = '$allergies',
                                                                     allergies_text = '$allergiesText',
                                                                     relative_eye_condition = '$relativeEyeCondition',
                                                                     relative_eye_condition_text = '$relativeEyeConditionText',
                                                                     other_text = '$other'
                                          WHERE health_id = '$healthId'";
            return $this->queryDatabase($sqlUpdateStudentHealth);
        }
        else{

            return $this->createStudentHealth($patintId,$share,$firstExam,$lastExamYear,$eyeConditions,$medicalCondition,$medicalConditionText,
                $medication,$medicationText,$allergies,$allergiesText,$relativeEyeCondition,$relativeEyeConditionText,$other);
        }

    }

    //Update senior relational info
    function updateSeniorRelationInfoByPatientId($patientId,$room,$firstName,$lastName,$phone,$otherPhone,$email,$relation){
        $firstName = mysqli_real_escape_string($this->connection,trim($firstName));
        $room = mysqli_real_escape_string($this->connection,trim($room));
        $lastName = mysqli_real_escape_string($this->connection,trim($lastName));
        $phone = mysqli_real_escape_string($this->connection,trim($phone));
        $otherPhone = mysqli_real_escape_string($this->connection,trim($otherPhone));
        $email = mysqli_real_escape_string($this->connection,trim($email));
        $relation = mysqli_real_escape_string($this->connection,trim($relation));

        $sqlUpdateStudentInfo = "UPDATE tbl_senior_relations SET room = '$room',
                                                                 first_name = '$firstName',
                                                                 last_name = '$lastName',
                                                                 phone = '$phone',
                                                                 other_phone = '$otherPhone',
                                                                 email = '$email',
                                                                 relation = '$relation'
                                  WHERE patient_id = '$patientId'";
        return $this->queryDatabase($sqlUpdateStudentInfo);
    }
}
?>
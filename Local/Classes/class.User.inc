<?php

/**
 * User: Dushyant
 * Date: 2015-11-02
 * Time: 11:55 PM
 */
include('config.inc');
include('mysql_db.inc');
?>
<?php

/**
 * Class User
 * Manage user data flow and Authentication
 */
class User extends MySQLDatabase
{
    //Create tbl_user methods
    /**
     * @param $firstName
     * @param $lastName
     * @param $email
     * @param $password
     * @param $userRole
     * @return bool|string
     */
    function createUser($firstName,$lastName,$email,$password,$userRole,$birthDate,
                        $gender,$cradentials,$workPhone,$cellPhone,$faxNumber,$address,
                        $city,$province,$postalCode,$registrationNumber,$licenseNumber){
        //Sanitize string for escape characters
        $firstName = mysqli_real_escape_string($this->connection,trim($firstName));
        $lastName = mysqli_real_escape_string($this->connection,trim($lastName));
        $email = mysqli_real_escape_string($this->connection,trim($email));
        $userRole = mysqli_real_escape_string($this->connection,trim($userRole));
        $password = mysqli_real_escape_string($this->connection,trim($password));
        $birthDate = mysqli_real_escape_string($this->connection,trim($birthDate));
        $gender = mysqli_real_escape_string($this->connection,trim($gender));
        $cradentials = mysqli_real_escape_string($this->connection,trim($cradentials));
        $workPhone = mysqli_real_escape_string($this->connection,trim($workPhone));
        $cellPhone = mysqli_real_escape_string($this->connection,trim($cellPhone));
        $faxNumber = mysqli_real_escape_string($this->connection,trim($faxNumber));
        $address = mysqli_real_escape_string($this->connection,trim($address));
        $city = mysqli_real_escape_string($this->connection,trim($city));
        $province = mysqli_real_escape_string($this->connection,trim($province));
        $postalCode = mysqli_real_escape_string($this->connection,trim($postalCode));
        $registrationNumber = mysqli_real_escape_string($this->connection,trim($registrationNumber));
        $licenseNumber = mysqli_real_escape_string($this->connection,trim($licenseNumber));

        //Encrypt password with md5
        $password = md5($password);

        //Sql query string
        $sqlCreateUser = "INSERT INTO tbl_users(first_name,last_name,email,password,user_role,birth_date,gender,cradentials,work_phone,cell_phone,fax_nuber,Address,city,province,postal_code,registration_number,license_number)
                          VALUES('$firstName','$lastName','$email','$password','$userRole','$birthDate','$gender','$cradentials','$workPhone','$cellPhone','$faxNumber','$address','$city','$province','$postalCode','$registrationNumber','$licenseNumber')";

        //query db
         return $this->queryDatabase($sqlCreateUser);

    }


    //Read tbl_user methods.
    /**
     * Read all users from tbl_user
     * @return bool|mysqli_result|string
     */
    function readUsers(){
        $sqlReadUsers = "SELECT * FROM tbl_users";
        $result = $this->queryDatabase($sqlReadUsers);
        $this->closeConnection();
        return $result;
    }

    /**
     * @param $userId
     * @return bool|mysqli_result|string
     */
    function  readUserById($userId){
        $sqlReadUsers = "SELECT * FROM tbl_users WHERE user_id = '$userId'";
        $result = $this->queryDatabase($sqlReadUsers);
        $this->closeConnection();
        return $result;
    }

    //Update tbl_user methods.
    function updateUser($userId,$firstName,$lastName,$email,$userRole,$birthDate,
                        $gender,$cradentials,$workPhone,$cellPhone,$faxNumber,$address,
                        $city,$province,$postalCode,$registrationNumber,$licenseNumber){
        //Sanitize string for escape characters
        $firstName = mysqli_real_escape_string($this->connection,trim($firstName));
        $lastName = mysqli_real_escape_string($this->connection,trim($lastName));
        $email = mysqli_real_escape_string($this->connection,trim($email));
        $userRole = mysqli_real_escape_string($this->connection,trim($userRole));
        $birthDate = mysqli_real_escape_string($this->connection,trim($birthDate));
        $gender = mysqli_real_escape_string($this->connection,trim($gender));
        $cradentials = mysqli_real_escape_string($this->connection,trim($cradentials));
        $workPhone = mysqli_real_escape_string($this->connection,trim($workPhone));
        $cellPhone = mysqli_real_escape_string($this->connection,trim($cellPhone));
        $faxNumber = mysqli_real_escape_string($this->connection,trim($faxNumber));
        $address = mysqli_real_escape_string($this->connection,trim($address));
        $city = mysqli_real_escape_string($this->connection,trim($city));
        $province = mysqli_real_escape_string($this->connection,trim($province));
        $postalCode = mysqli_real_escape_string($this->connection,trim($postalCode));
        $registrationNumber = mysqli_real_escape_string($this->connection,trim($registrationNumber));
        $licenseNumber = mysqli_real_escape_string($this->connection,trim($licenseNumber));


        $sqlUpdateUser ="UPDATE tbl_users SET first_name = '$firstName',
                                              last_name = '$lastName',
                                              email = '$email',
                                               user_role = '$userRole',
                                                birth_date = '$birthDate',
                                                gender ='$gender',
                                                cradentials = '$cradentials',
                                                work_phone = '$workPhone',
                                                cell_phone = '$cellPhone',
                                                fax_nuber = '$faxNumber',
                                                address = '$address',
                                                city = '$city',
                                                province = '$province',
                                                postal_code = '$postalCode',
                                                registration_number = '$registrationNumber',
                                                license_number = '$licenseNumber'
                                               WHERE user_id = '$userId'";

        return $this->queryDatabase($sqlUpdateUser);
    }


    /**
     * @param $userId
     * @return bool
     */
    //todo add try catch to perform task
    function deleteUserById($userId){
        $sqlDeleteUser = "DELETE FROM tbl_users WHERE user_id = $userId";
        if(mysqli_query($this->connection,$sqlDeleteUser)){
            return true;
        }
        else{
            return false;
        }
    }


    /**
     * @param $email
     * @param $password
     * @return Exception
     */
    function authenticateUser($email,$password){
        //Query string
        $sqlSelectUserByEmail ="SELECT password,user_role,user_id,first_name FROM tbl_users where email = '$email'";//retrieve user_role and first_name to set session from login.php
        //encrypt input password to compare with the result
        $password = md5($password);
        try{
            //try to execute query
           $result = mysqli_query($this->connection,$sqlSelectUserByEmail);
            if(!$result){
                throw new Exception(('Could not query:' . mysqli_error($this->connection)));
            }
            else{
                //Fetch data from result
                $validUser = mysqli_fetch_assoc($result);
                //Try to match encrypted password strings
                if($validUser['password'] == $password){
                    //if it matches return user role for redirecting user to particular Dashboard.
                    return $validUser;
                }
                else{
                    throw new Exception('Sorry! Email or password is not valid.');
                }
            }
        }
        catch(Exception $e){
                return $e->getMessage();
        }
    }
}
?>
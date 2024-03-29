<?php

/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-11-08
 * Time: 7:18 PM
 */

?>
<?php
class Session extends Location
{
    //create new session for location
    function setSessionDateByLocation($locationId,$sessionDate){
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
            return false;
        }

    }

    //Get all sessions by location Id
    function getSessionByLocationId($locationId){
        $sqlSelectSession = "SELECT session_id,date FROM tbl_sessions WHERE tbl_sessions.location_id = '$locationId'";
        return ( $this->queryDatabase($sqlSelectSession));
    }

    //delete session by session id
    function deleteSessionBySessionId($sessionId){
        // todo Retrieve date for session id and check if it i overdue
        $sqlSelectDate="SELECT FROM tbl_session WHERE tbl_session.session_id = '$sessionId'";
        if($sqlSelectDate > Date()){
            $sqlDeleteSession = "DELETE FROM tbl_sessions WHERE tbl_sessions.session_id = '$sessionId'";
        }
        else{
            return "You can not delete this session";
        }

        return ($this->queryDatabase($sqlDeleteSession));
    }
    //Update session by session id
    function updateAllSessionBySessionId($sessionId,$newDate){
        $sqlDeleteSession = "UPDATE tbl_sessions   SET tbl_sessions.date = '$newDate' WHERE tbl_sessions.session_id = '$sessionId'";
        $result = ($this->queryDatabase($sqlDeleteSession));
        if($result){
            return true;
        }
        else{
            return false;
        }
    }
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-04-28
 * Time: 12:09 PM
 */
require_once("config.inc");
?>
<?php
class MySQLDatabase {

protected  $connection;

    /**
     * MySQLDatabase constructor.
     * make connection to data base.
     */
    function __construct(){
        $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
        if (!$this->connection) {
            die("Database connection failed: " .mysqli_error($this->connection) );
        }
    }
    //close connection
    protected function closeConnection(){
        mysqli_close($this->connection);
    }

    /**
     * try query database and return query result, on fail return error message.
     * @param $sqlString
     * @return bool|mysqli_result|string
     */
    protected function queryDatabase($sqlString){
        try{
            $result = mysqli_query($this->connection,$sqlString);
            if($result){
                return $result;
            }
            else{
                throw new Exception("Sorry can not perform query: ".mysqli_error($this->connection));
            }
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

}
?>
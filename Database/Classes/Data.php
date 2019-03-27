<?php

class Data{
    protected static $con;
    /*brief connect to the database
    */
    private function   __contruct(){
        try{
            // below is a localhost connect
            self::$con = new PDO('mysql:charset=utf8mb4;host=localhost;port=3306;dbname=login_course', 'root','' );

            //set PDO attributes
            self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
            SELF::$con->setAttribute(PDO::ATTR_PERSISTEBT, false);

        }catch(PDOException $e){
            echo "Could not connect database";
            echo $e->getMessage();
            exit;
        }
    }
    /*
    * @return return the database object
     */
     public static function getConnection(){
         //if this instance was not beeb started, start it
         if(!self::$con){
             new Data();
         }
         //return the writeable data connection
         return self::$con;
     }
}

?>
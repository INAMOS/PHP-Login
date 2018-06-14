<?php  

class Connection{

    public static function connect(){
        /** 
        *Connection to the database 
        *
        *@return connection
        */ 
        try{

            $cn=new PDO("mysql:host=localhost;dbname=login-php","root","");

            return $cn;

        }catch(PDOException $e){

            die($e->getMessage());
        }
    }
}

//Connection::connect();

?>
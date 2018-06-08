<?php

include 'Connection.php';
include '../entities/User.php';

class UserDAO extends Connection{

    protected static $cnx;

    public static function getConnection(){
        self::$cnx=Connection::connect();
    }

    private static function disconnect(){
        self::$cnx=null;
    }

    /**
     * 
     * @param object $user
     * @return boolean
     */
    public static function login($user){

        $query="SELECT * FROM users WHERE user=:user AND password=:password";

        self::getConnection();

        $result=self::$cnx->prepare($query);

        @$result->bindParam(":user",$user->getUser());
        @$result->bindParam(":password",$user->getPassword());

        $result->execute();

        if($result->rowCount()>0){

            $rows=$result->fetch();

            if($rows["user"]==$user->getUser() && $rows["password"]==$user->getPassword()){
                return true;
            }

           
        }

        return false;

    }

}

?>
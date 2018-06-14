<?php

include '../data/UserDAO.php';

class UserController{

    public static  function login($user,$password){

        $obj_user=new User();
        $obj_user->setUser($user);
        $obj_user->setPassword($password);

        return UserDAO::login($obj_user);
    }

    /**
     * 
     * @param  object  $user
     * @return object
     */

    public function getUser($user,$password){
        
        $obj_user=new User();
        $obj_user->setUser($user);
        $obj_user->setPassword($password);

        return UserDAO::getUser($obj_user);
    }

    public function register($user,$password,$email,$name,$privilege){
        
        $obj_user=new User();

        $obj_user->setUser($user);
        $obj_user->setPassword($password);
        $obj_user->setEmail($email);
        $obj_user->setName($name);
        $obj_user->setPrivilege($privilege);
        

        return UserDAO::register($obj_user);
    }

}

?>
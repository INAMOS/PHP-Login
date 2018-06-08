<?php

include '../data/UserDAO.php';

class UserController{

    public static  function login($user,$password){

        $obj_user=new User();
        $obj_user->setUser($user);
        $obj_user->setPassword($password);

        return UserDAO::login($obj_user);
    }

}

?>
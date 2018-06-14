<?php
include '../controller/UserController.php';
include '../helps/helps.php';

session_start();
header("content-type:application/json");

$result=array();

if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(isset($_POST["txtuser"]) && isset($_POST["txtpassword"])){

        $user=validateValue($_POST["txtuser"]);
        $password=validateValue($_POST["txtpassword"]);

        if(UserController::login($user,$password)){

            $user=UserController::getUser($user,$password);
            $_SESSION["user"]=array(
                
            );
            $result=array("state"=>"true");
            return print(json_encode($result));

        }
    }

}

$result=array("state"=>"false");
return print(json_encode($result))

?>
<?php
include '../controller/UserController.php';

$result=array();

if(isset($_POST["txtuser"]) && isset($_POST["txtpassword"])){

    $user=$_POST["txtuser"];
    $password=$_POST["txtpassword"];

    if(UserController::login($user,$password)){
        $result=array("state"=>"true");
        return print(json_encode($result));
    }
}

$result=array("state"=>"false");
return print(json_encode($result))

?>
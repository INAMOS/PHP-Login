<?php
include '../controller/UserController.php';
include '../helps/helps.php';

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(
       isset($_POST["txtuser"]) && isset($_POST["txtpassword"]) && 
       isset($_POST["txtemail"]) && isset($_POST["txtname"])
    ){

        $user=validateValue($_POST["txtuser"]);
        $password=validateValue($_POST["txtpassword"]);
        $email=validateValue($_POST["txtemail"]);
        $name=validateValue($_POST["txtname"]);
        $privilege=2;
        
        if(UserController::register($user,$password,$email,$name,$privilege)){

            $user=UserController::getUser($user,$password);
            
            $_SESSION["user"]=array(
                "id"=>$user->getId(),
                "name"=>$user->getName(),
                "userName"=>$user->getUser(),
                "email"=>$user->getEmail(),
                "privilege"=>$user->getPrivilege()
            );

            header("location:admin.php");

        }
    }

}else{
    
    header("location:register.php?error=1");
}


?>
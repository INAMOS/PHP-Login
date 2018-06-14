<?php include 'partials/head.php'; ?>

<?php
    if(isset($_SESSION["user"])){

        if($_SESSION["user"]["privilege"]==2){
            header("location:user.php");
        }
    }else{
        header("location:login.php");
    }
?>

<?php include 'partials/menu.php'; ?>
    
<div class="PHP ">
    <h1>Bienvenido <?php echo $_SESSION["user"]["name"]?></h1>

    <button onclick="location.href='close-session.php'">Exit</button>
</div>    

<?php

    include 'partials/footer.php';  
?>
<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>
    
<div class="PHP ">
    <h1>Login with php!</h1>
    <?php if(isset($_SESSION["user"])){ ?>
        <button onclick="location.href='close-session.php'">Exit</button>
    <?php }else{ ?>
        <button onclick="location.href='login.php'">Login</button>
    <?php } ?>
</div>    

<?php

    include 'partials/footer.php';  
?>
    
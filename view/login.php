<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>
    
<div class="PHP">
    <h1>Login</h1>
    <form id="loginForm" action="ValidateCode.php" method="POST">
        <label for="">User</label>
        <input type="text" name="txtuser" required>
        <label for="">Password</label>
        <input type="password" name="txtpassword" id="" required>
        <input type="submit" value="Login">
    </form>
    

    
</div>    

<?php
    include 'partials/footer.php';  
?>
    
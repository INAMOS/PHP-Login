<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>
    
<div class="PHP">
    <h1>Register</h1>

    <form id="registerForm" action="RegisterCode.php" method="POST">
        <label for="">Name</label>
        <input type="text" name="txtname" required>
        <label for="">Email</label>
        <input type="email" name="txtemail" id="" required><br><br>
        <label for="">User</label>
        <input type="text" name="txtuser" required>
        <label for="">Password</label>
        <input type="password" name="txtpassword" id="" required>
        <input type="submit" value="Register">
    </form>
    

    
</div>    

<?php
    include 'partials/footer.php';  
?>
    
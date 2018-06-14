<header>
        <nav>
            <ul>
                <li>
                    <a href="">Login with PHP</a>
                </li>
                <li>
                    <a href="index.php">Principal</a>
                </li>
                <?php if(!isset($_SESSION["user"])){ ?> 

                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="register.php">Register</a>
                    </li>

                <?php }else{ ?>
                    <li>
                        <a href="admin.php"><?php echo $_SESSION["user"]["privilege"]==1? "Admin":"User" ?></a>
                    </li>
                <?php } ?>
            </ul>
            
        </nav>
</header>
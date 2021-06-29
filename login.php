<?php
 include_once 'header.php';
?>
        <div class="login-box">
            <h2>Login</h2>
            <form action="includes/login.inc.php" method="post">
                <div class="user-box">
                    <input type="text" name="uid">
                    <label>Username or Email</label>
                </div>
                <div class="user-box">
                    <input type="password" name="pwd">
                    <label>Password</label>
                </div>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
            <?php
        if(isset($_GET["error"])){
            if($_GET["error"]=="emptyinput"){
                echo " <p>fill in all fields</p>";
            }
            elseif($_GET["error"]=="wronglogin"){
                echo "<p> this user does not exist</p>";

            }
            elseif($_GET["error"]=="wrongpassword"){
                echo "<p> check your password</p>";
                
            }
        }
    ?>
   <?php
 include_once 'footer.php';
   ?>
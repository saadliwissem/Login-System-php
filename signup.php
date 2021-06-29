<?php
    include_once "header.php"
?>
    <div class="login-box">
                <h2>sign-up</h2>
                <form action="includes/signup.inc.php" method="post">
                    <div class="user-box">
                        <input type="text" name="name">
                        <label>full name...</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="email">
                        <label>Email</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="uid">
                        <label>username</label>
                    </div> 
                    <div class="user-box">
                        <input type="password" name="pwd">
                        <label> password</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="pwdrepeat">
                        <label>repeat password</label>
                    </div>
                    <button type="submit" name="submit">sign up</button>
                </form>
    </div>
<?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo " <p>fill in all fields</p>";
            }
            elseif($_GET["error"] == "invaliduid"){
                echo "<p> choose a proper username</p>";

            }
            elseif($_GET["error"] == "invalidemail"){
                echo "<p> check your Email</p>";
                
            }
            elseif($_GET["error"] == "passwordincorrect"){
                echo "<p> you have to repeat the same password</p>";
                
            }
            elseif($_GET["error"] == "usernametaken"){
                echo "<p> choose an other username or another email</p>";
                
            }
            elseif($_GET["error"] == "stmtfailed"){
                echo "<p> something went wrong ! please try again</p>";
                
            }
            elseif($_GET["error"] == "trouble"){
                echo "<p> something went wrong ! please try again</p>";
                
            }
            elseif($_GET["error"] == "none"){
                echo "<center><p>welcome to the bride house</p></center>";
                
            }
        }
    ?>
    <?php
    include_once "footer.php"
?>
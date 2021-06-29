<?php

if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $username=$_POST["uid"];
        $pwd=$_POST["pwd"];
        $pwdrepeat=$_POST["pwdrepeat"];

        require_once "dbh.inc.php";
        require_once "functions.inc.php";

        if(emptyinputsp($name,$email, $username,$pwd,$pwdrepeat)!==false)
        {
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        if(invaliduid($username)!==false)
        {
            header("location: ../signup.php?error=invaliduid");
            exit();
        }
        if(invalidemail($email)!==false)
        {
            header("location: ../signup.php?error=invalidemail");
            exit();
        }
        if(pwdmatch($pwd,$pwdrepeat)!==false)
        {
            header("location: ../signup.php?error=passwordincorrect");
            exit();
        }
        if(uidexist( $conn,$username,$email)!==false)
        {
            header("location: ../signup.php?error=usernametaken");
            exit();
        }
        createuser($conn,$name,$email,$username,$pwd);

    }
else
    {
        header("location: ../signup.php");
        exit();

    }
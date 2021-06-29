<?php
  if(isset($_POST["submit"])){

      $username=$_POST["uid"];
      $pwd=$_POST["pwd"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if(emptyinputlogin($username,$pwd)!==false)
      {
        header("location: ../login.php?error=emptyinput");
         exit();
      }
    loginuser($conn,$username,$pwd);}
  else{
    header("location: ../login.php");
    exit();
  }
<?php

function emptyinputsp($name,$email,$username,$pwd,$pwdrepeat) {
    
    if(empty($name)||empty($email)||empty($username)||empty($pwd)||empty($pwdrepeat))
    {
        $result= true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invaliduid($username){
    
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidemail($email){
  
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function pwdmatch($pwd,$pwdrepeat){
    
    if($pwd!==$pwdrepeat){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function uidexist( $conn,$username,$email){
    $sql = "SELECT * FROM users WHERE usersuid = ? OR usersemail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$username,$email);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultdata)){
        return $row;
    }
    else{
        $result=false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createuser($conn,$name,$email,$username,$pwd){
    $sql = "INSERT INTO users (usersname,usersemail,usersuid,userspwd) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=trouble");
        exit();
    }
    $hashedpwd = password_hash($pwd,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$username,$hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
    exit();
}
function emptyinputlogin($username,$pwd) {
   
    if(empty($username)||empty($pwd))
    {
        $result= true;
    }
    else{
        $result=false;
    }
    return $result;
}
function loginuser($conn,$username,$pwd){
    $uidexist = uidexist( $conn,$username,$username);

    if($uidexist===false){
        header("location: ../signup.php?error=wronglogin");
        exit();
    }

    $pwdhashed = $uidexist["userspwd"];
    $checkpwd = password_verify($pwd,$pwdhashed);
    if($checkpwd===false){
        header("location: ../login.php?error=wrongpassword");
        exit();
    }
    else if($checkpwd===true){
        session_start();
        $_SESSION["userid"] =  $uidexist["usersid"];
        $_SESSION["useruid"] =  $uidexist["usersuid"];
        header("location: ../index.php");
        exit();
    }
}

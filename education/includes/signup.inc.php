<?php

include'dbh.inc.php';

if(isset($_POST['btnSignup'])){
    
    $name=$_POST['name'];
//    $surname=$_POST['surname'];
    $school=$_POST['school_name'];
    $email=$_POST['email'];
    $district=$_POST['district'];
    $qualif=$_POST['qualif'];
    $pwd=$_POST['pwd'];
    $pwdConf=$_POST['pwdConf'];
    
    echo "$name"." hi";
    if(empty($name) || empty($district) || empty($school) || empty($qualif) || empty($pwd) ){
        header("Location: ../index.php?signup=empty");
        exit();
    }
    
    //error handlers
    if(!preg_match("/[A-Za-z0-9\.]/",$name)){
        header("Location: ../index.php?error=name&school=$school&email=$email&qualifi=$qualifi");
        exit();
    }
    else if(!preg_match("/[A-Za-z0-9\.]/",$qualif)){
         header("Location: ../index.php?error=qualif&school=$school&email=$email");
        exit();
    }
            
    else if(!preg_match("/[A-Za-z0-9\.]/",$school)){
         header("Location: ../index.php?error=school");
        exit();
    }
            
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
         header("Location: ../index.php?error=email");
        exit();
    } 
//    else if($pwd!=$pwdConf){
//       header("Location: ../index.php?error=pwd");
//        exit();
//    }
    else{
        $hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);
        $sql="INSERT INTO login(name,email,school,district,qualification,pwd)
                          VALUES('$name','$email','$school','$district','$qualif','$hashedPwd');";
     $result=  mysqli_query($conn,$sql);
    
    }
        
    
}


?>
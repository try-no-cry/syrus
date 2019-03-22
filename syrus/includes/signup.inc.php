<?php
require_once('dbh.inc.php');

if(isset($_POST['signup'])){
    
   
    
    $name=$_POST['name'];
    $school=$_POST['school_name'];
    $email=$_POST['email'];
    $district=$_POST['district'];
    $qualif=$_POST['qualif'];
    $pwd=$_POST['pwd'];
    $pwdConf=$_POST['pwdConf'];
   
    
    //checking for empty inputs
    
    if( empty($name) || empty($school ) ||empty($email) ||empty($district) || empty($qualif)||empty($pwd) ||empty($pwdConf) ){
        
        header("Location: ../index.php?error=emptyField&name=$name&school=$school& &email=$email&district=$district&qualif=$qualif");
        exit();
    }
    
    //if not empty then
    
    else{
        //if any character other than albhabets is found preg_match return true
        if(preg_match("/[^a-zA-Z\s]/",$name)){  
           
           
            header("Location: ../index.php?&error=nameField&school=$school& &email=$email&district=$district&qualif=$qualif");
            exit();
        }
        
        
        elseif(preg_match("/[^a-zA-Z\.\s]/",$school)){
            
            header("Location: ../index.php?error=school&name=$name& &email=$email&district=$district&qualif=$qualif");
            exit();
        }
        
        elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            
            header("Location: ../index.php?error=email&name=$name&school=$school& &district=$district&qualif=$qualif");
            exit();
        }
        
        elseif(preg_match("/[^a-zA-Z\.\s]/",$district)){
            
            header("Location: ../index.php?error=district&name=$name&school=$school& &email=$email&qualif=$qualif");
            exit();
        }
        
        elseif($pwd!=$pwdConf){
            
            header("Location: ../index.php?error=passMismatch& name=$name&school=$school& &email=$email&district=$district&qualif=$qualif");
            exit();
        }
        
        else{
            
             //template for prepared statement
        $sql="SELECT * FROM login WHERE email=?";
        
        //creating prepared statement i.e initialization
        $stmt=mysqli_stmt_init($conn);
        
        //preparing the prepared statement
        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo "Not prepared";
        }
        else{
            //bind the parameters
            mysqli_stmt_bind_param($stmt,"s",$email);
            $query=mysqli_stmt_execute($stmt);
            
            $result=mysqli_stmt_get_result($stmt);
            
            if(mysqli_num_rows($result)!=0)
            {
                header("Location: ../index.php?error=duplicateEmail&name=$name&school=$school& &email=$email&district=$district&qualif=$qualif");
                exit();
            }
        }
        
            
            
            //NOW WE HASH THE PASSWORD
            $pwdHASH=password_hash($pwd,PASSWORD_DEFAULT);
            
            //template for preppared statement
            $sql="INSERT INTO login(name,school,email,district,qualif,pwd)
                              VALUES(?,?,?,?,?,?);";
               
            //initailizing the prepared statement
            $stmt=mysqli_stmt_init($conn);
           
            //preparing the prepared statement
            
            if(!mysqli_stmt_prepare($stmt,$sql)){
                echo "Error: Unprepared Statement";
            }
            else{
                
                //bind the parametrs
                
             mysqli_stmt_bind_param($stmt,"ssssss",$name,$school,$email,$district,$qualif,$pwdHASH);
                
                //executing the query
                mysqli_stmt_execute($stmt);
                
                //successful signup
                header("Location: ../index.php?signup=success&error=noerror");
                exit();
             

            }
            
            
            
            
        }
        
        
        
        
        
        
    }
    
}

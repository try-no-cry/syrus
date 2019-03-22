<?php

session_start();

require_once("dbh.inc.php");

if(isset($_POST['login'])){
    
    
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    
   
    
    if(empty($email) || empty($pwd)){
        header("Location: ../index.php?loginerror=empty");
        exit();
    }
    
    else{
        
         $_SESSION['email']=$email;
        
        //template for prepared statement
        $sql="SELECT pwd FROM login WHERE email=?";
        
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
            
            if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_assoc($result)){
                    //VERIFY THE PASSWORD
                   
//                  var_dump(password_verify("$pwd",$row['pwd']));  GET TRUE MESSAGE
                    
                    if(password_verify("$pwd",$row['pwd'])){
                        
                        header("Location: ../profile.php?login=success");
                        exit();

                    }
                    else{
                        header("Location: ../index.php?loginerror=wrong");
                        exit();
                    }
                    
                    
                }
                
            }
            else{
                 header("Location: ../index.php?loginerror=wrong");
                        exit();
            }
            
            
        }
        
    
    }


}
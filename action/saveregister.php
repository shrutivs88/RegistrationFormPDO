<?php
session_start();
if(isset($_SESSION['user'])){
    header("location: index.php");
    }
include "dbConfig.php";


    $fname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['emailid'];
    $password = $_POST['password'];
    
    if(isset($fname) && isset($mobile) && isset($email) && isset($password)){
    
        $sql = "insert into register(fullname, mobile, emailid, password) values('$fname', '$mobile', '$email', '$password')";
          $query = $conn->prepare($sql);
            $query->execute();
      
          if($query == true) {
              // $_SESSION['id'] = "user logged in";
            //   $_SESSION['time_start_login'] = time();
            $_SESSION['msg'] = '<label><center>Registered Successfully ! Login here</center></label>'; 
              header("location: ../login.php");
          } else {
             
              $_SESSION['msg'] = '<label>Username/Password is wrong</label>'; 
              header("location: ../index.php");
          }
      }
      
    

    



?>
<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
        <div class="container-fluid">
                <?php 
              
                    if(isset($_SESSION["id"]))  
                {  
                    echo '<h3>Login Success, Welcome -</h3>';
                    echo $_SESSION['name'];  
                    echo '<br /><br /><a href="logout.php">Logout</a>'; 
                } else{
                    $_SESSION['msg'] = "<p class='alert alert-warning'> Please Login ....</p>";
                    header("Location:login.php");
                }
                ?>
        </div>
    <!-- <div id="profile">
        <b id="welcome">Welcome : <i><?php //echo $login_session; ?></i></b>
        <b id="logout"><a href="logout.php">Log Out</a></b>
    </div> -->
</body>
</html>
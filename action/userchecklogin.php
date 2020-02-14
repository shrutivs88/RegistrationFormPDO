<?php
session_start();
include "dbConfig.php";

	$emailid = trim($_POST['emailid']);
	$password = trim($_POST['password']);
	if($emailid != "" && $password != "") {
		try {
			$query = "select * from `register` where `emailid`=:emailid and `password`=:password";
			$stmt = $conn->prepare($query);
			$stmt->bindParam('emailid', $emailid, PDO::PARAM_STR);
			$stmt->bindValue('password', $password, PDO::PARAM_STR);
			$stmt->execute();
			$count = $stmt->rowCount();
			$row   = $stmt->fetch(PDO::FETCH_ASSOC);
			if($count == 1) {
				/******************** Your code ***********************/
				$_SESSION['id']   = $row['id'];
				$_SESSION['name'] = $row['fullname'];
				$_SESSION['emailid'] = $row['emailid'];
				$_SESSION['mobile'] = $row['mobile'];
				header('location:../dashboard.php');
			} else {
                    $_SESSION['msg'] = "Invalid email id and password!";
                    header('location:../login.php');
			}
		} catch (PDOException $e) {
			echo "Error : ".$e->getMessage();
		}
	} else {
		$_SESSION['msg'] = "Both fields are required!";
	}



?>
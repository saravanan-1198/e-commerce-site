<?php require 'common.php';
     if(!isset($_SESSION['email'])){
          header('location:index.php');
         }
     $op=$_POST['oldpwd'];
     $np=$_POST['newpwd'];
     $rp=$_POST['repwd'];
     if($np != $rp){
     	$mismatch="Retype new password doesnot match new password"; 
     }
     $query="SELECT * FROM users where password=md5($op)";
     if(mysqli_num_rows(mysqli_query($con,$query))){
     	$query1="UPDATE users SET password=md($np) where password=md5($op)";
     	if(mysqli_query($con,$query1)){
     		$passwordsucc="SUCCEFULLY UPDATED";
     	}

     }
     else{
     	$fail="old password doesnot match!!";
     	header('location: Setting.php');
     }

?>
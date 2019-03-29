<?php
$con = mysqli_connect("localhost","root","","store") or die(msqli_error($con));
if(!isset($_SESSION)) 
    {  session_start();
    }
 ?>


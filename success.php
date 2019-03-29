 <?php require 'common.php';
         if(!isset($_SESSION['email'])){
          header('location:index.php');
         }
?> 

<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="index.css" rel="stylesheet">
    	 <title>Lifestyle Store</title>
    </head>
    <body>
        <?php 

         $id=$_GET['users_id'];
         $query="UPDATE `users_items` SET `status`=2 WHERE users_id=$id";
         $result=mysqli_query($con,$query);
         ?>
     <p>Your order is confirmed. Thank you for shopping
with us. <a href="Products.php">Click here</a> to purchase any other item.</p>
</body>
</html>

 <?php 
 require 'common.php';
 $id=$_GET['id'];
 $user_id=$_GET['user_id'];
 $query="DELETE FROM users_items WHERE user_id=$user_id AND item_id=$id";
 if(mysql_query($con,$query)){
 	header('location: cart.php');
 }        
 
?>  

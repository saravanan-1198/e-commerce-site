<?php
function check_if_added_to_cart($item_id){
	  require 'common.php';
        $user_id=$_SESSION['user_id'];  
        
       $query="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' AND status=1";
       $res=mysqli_query($con,$query);
       if(mysqli_num_rows($res)){
       	 return 1;
       	}
       	else{
       		return 0;
       	}
}
?>
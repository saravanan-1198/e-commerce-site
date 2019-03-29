   <?php require 'common.php';
         if(isset($_SESSION['email'])){
          header('location:Products.php');
         }
         $email=mysqli_real_escape_string($con, $_POST['email']);
         $password=mysqli_real_escape_string($con, $_POST['pwd']);
         $query="SELECT * FROM users WHERE email='$email' AND password='$password' ;";
         $result=mysqli_query($con,$query);
         if(mysqli_num_rows($result)==0){
            header('location: index.php? email_error="Invalid EmailId or Password"');
         }
         else{
            $array=mysqli_fetch_array($result);
            $_SESSION['email']=$array['email'];
            $_SESSION['user_id']=$array['id'];
            header('location:Products.php');
         }


         ?>

      
<?php 
       include('connection.php');
      $email= $_GET['email'];
      $sql="DELETE FROM student where email='$email'";
      $r = mysqli_query($conn, $sql);
      if($r){
          header('location:search.php');
      }else{
          echo "something went wrong";
      }
?>
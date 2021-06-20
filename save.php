<?php
   include('boostrap4.php');

    if(isset($_POST['add_btn']))
    {
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $email=$_POST['email'];
        $age=$_POST['age'];
        $city=$_POST['city'];
        $course=$_POST['course'];
        
        include('connection.php');

        $sql="INSERT INTO student (firstName,lastName,email,age,city,course) VALUES ('$firstName','$lastName','$email','$age','$city','$course')";

    
        if (mysqli_query($conn, $sql)) 
         {
            header('location: index.php');
            
         } 
        else
         {
            echo mysqli_error($conn);
         }
        
            mysqli_close($conn);
    }
    
?>
<br>
<br>
<a href="index.php" class="btn btn-primary">Home</a>

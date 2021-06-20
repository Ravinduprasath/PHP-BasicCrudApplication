<?php
    include('boostrap4.php');

    if(isset($_POST['update_btn']))
    {
        $newFirst=$_POST['firstName'];
        $newLast=$_POST['lastName'];
        $newEmail=$_POST['email'];
        $newAge=$_POST['age'];
        $newCity=$_POST['city'];
        $newCourse=$_POST['course'];

        
       include('connection.php');

        $sql="UPDATE student SET firstName='$newFirst',lastName='$newLast',email='$newEmail',age=$newAge,city='$newCity',course='$newCourse' WHERE email='$newEmail'";
        if (mysqli_query($conn, $sql)) 
          {
            header('location: index.php');
          } else 
          
          {
            echo "Error updating record: " . mysqli_error($conn);
          }
    }
     else if(isset($_POST['delete_btn']))
    {
        include('connection.php');
        $email= $_POST['email'];

        $sql="DELETE FROM student where email='$email'";
        $r = mysqli_query($conn, $sql);
        if($r)
        {
            header('location: index.php');
        } 
        else
        {
            echo "something went wrong";
        }
    }
?>
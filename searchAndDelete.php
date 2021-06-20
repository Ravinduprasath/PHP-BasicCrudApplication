<?php
    include('boostrap4.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">City</th>
                    <th scope="col">Course</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                    </tr>
                </thead>
                <tbody>
        <?php
            include('connection.php');
            if(isset($_POST['search_btn']))
            {
                $term=$_POST['search'];

                $sql = "SELECT * FROM student WHERE firstName='$term'";
                $result = mysqli_query($conn, $sql);
                        
                        while($row = mysqli_fetch_assoc($result ))
                        {
                            echo "<form action='update.php' method='post'>";
                            echo "<tr>";
                            $firstN=$row['firstName'];
                            echo "<td>"."<input required style='width: 150px;'class='form-control text-center' type='text' name='firstName' value='$firstN'/>"."</td>";
                            $lastN=$row['lastName'];
                            echo "<td>"."<input required style='width: 150px;' class='form-control text-center' type='text' name='lastName' value='$lastN'/>"."</td>";
                            $email=$row['email'];
                            echo "<td>"."<input required style='width: 250px;'class='form-control text-center' type='text' name='email' value='$email'/>"."</td>";
                            $age=$row['age'];
                            echo "<td>"."<input required style='width: 50px;'class='form-control text-center' type='text' name='age' value='$age'/>"."</td>";
                            $city=$row['city'];
                            echo "<td>"."<input required style='width: 150px;'class='form-control text-center' type='text' name='city' value='$city'/>"."</td>";
                            $course=$row['course'];
                            echo "<td>"."<input required style='width: 150px;'class='form-control text-center' type='text' name='course' value='$course'/>"."</td>";
                            echo "<td>"."<button class='btn btn-danger'class='form-control text-center' type='submit' name='delete_btn'>Delete</button>"."</td>";
                            echo "<td>"."<button class='btn btn-primary'class='form-control text-center' type='submit' name='update_btn'>Update</button>"."</td>";
                            echo "</tr>";
                            echo "</form>";
                        }
        }
        else if(isset($_POST['search_btn_all']))
           {
            $sql = "SELECT * FROM student";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result ))
            {
                echo "<form action='update.php' method='post'>";
                echo "<tr>";
                $firstN=$row['firstName'];
                echo "<td>"."<input required style='width: 150px;' class='form-control text-center' type='text' name='firstName' value='$firstN'/>"."</td>";
                $lastN=$row['lastName'];
                echo "<td>"."<input required style='width: 150px;' class='form-control text-center' type='text' name='lastName' value='$lastN'/>"."</td>";
                $email=$row['email'];
                echo "<td>"."<input required style='width: 250px;'class='form-control text-center' type='text' name='email' value='$email' readonly/>"."</td>";
                $age=$row['age'];
                echo "<td>"."<input required style='width: 50px;'class='form-control text-center' type='text' name='age' value='$age'/>"."</td>";
                $city=$row['city'];
                echo "<td>"."<input required style='width: 150px;'class='form-control text-center' type='text' name='city' value='$city'/>"."</td>";
                $course=$row['course'];
                echo "<td>"."<input required style='width: 150px;'class='form-control text-center' type='text' name='course' value='$course'/>"."</td>";
                echo "<td>"."<button class='btn btn-danger'class='form-control text-center' type='submit' name='delete_btn'>Delete</button>"."</td>";
                echo "<td>"."<button class='btn btn-primary'class='form-control text-center' type='submit' name='update_btn'>Update</button>"."</td>";
                echo "</tr>";
                echo "</form>";
            }
           }
        ?>
                </tbody>
                </table>
                <button type="button" onclick='window.location.reload();' class="btn btn-success">Refresh</button>
        </div>
    </div>
</div>

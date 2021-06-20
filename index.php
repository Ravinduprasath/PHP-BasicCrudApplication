<?php
    include('boostrap4.php');
?>
<div class="container-fluid col-sm">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Student Management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <form style="margin-left:500px;" action="searchAndDelete.php" method="post" class="form-inline my-2 my-lg-0">
        <input  class="form-control mr-sm-2 " type="text"  name="search" placeholder="First Name" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search_btn">Search</button>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search_btn_all">Display All Student</button>
       </form>
        </div>
        </nav>
</div>
<br>
<br>

<div class="container">
<div class="row">
    <div class="col-md-6">
    <div class="row">
        <div class="col">
            <form action="save.php" method="post">
            <div class="form-row">
                <div class="col mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" name="firstName" required placeholder="First name">
                </div>
                <div class="col mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" name="lastName" required placeholder="Last name">
                </div>  
            </div>
            <div class="form-row">
            <div class="col mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" required placeholder="Email">
                </div>  
            </div>
            <div class="form-row">
                <div class="col mb-3">
                <label for="age">Age</label>
                <input type="text" class="form-control" name="age" required placeholder="Age">
                </div>  
                <div class="col mb-3">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" required placeholder="City">
                </div>  
            </div>
            <div class="form-row">
            <div class="col mb-3">
                <label for="course">Course</label>
                <input type="text" class="form-control" name="course" required placeholder="Course">
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="add_btn">Add Student</button>
            </form>
        </div>
        </div>
        </div>
        <div class="col-md-1"> 
        </div>
        <div class="col-md-5">
        </div>
    </div>
</div>


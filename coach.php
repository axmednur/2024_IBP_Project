<?php

    $connect = mysqli_connect("localhost", "root", "", "gym");
    
  if(isset($_POST['submit'])){
 
     $id = $_POST['id'];
     $names = $_POST['names']; 
     $dates = $_POST['dates'];
     $phone = $_POST['phone']; 
     $experience = $_POST['experience']; 
     
    
     $sql = "INSERT INTO coach (id, names, dates, phone, experience) VALUES('$id','$names','$dates','$phone','$experience')";
    
     $result = mysqli_query($connect, $sql);
    
     if($result){
    
     echo "<script> alert ('Data is successed !') </script>"; 
     }else{
     echo "<script> alert ('Errors insertion try it again!') </script>";
     }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    




 <!--nar bar started-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin-login.php"> <img src="img/tt.png" alt="Gym Management System"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">GYM&FIT</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Coach.php">COACH</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Members.php">MEMBERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Membership.php">MEMBERSHIP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="Receptionist.php">RECEPTIONIST</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Billing.php">BILLING</a>
      </li>
    </ul>
  </div>
</nav>
<!--nar bar end-->

<!--form started--> 
<form action="Coach.php"; method="POST">
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Coach Id</label>
      <input type="text" name="id" class="form-control" id="inputEmail4" placeholder="Id">
    </div>
   <div class="form-group col-md-6">
      <label for="inputPassword4">Coach name</label>
      <input type="text" name="names" class="form-control" id="inputPassword4" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date of birth</label>
    <input type="text" name="dates" class="form-control" id="inputAddress" placeholder="Dob">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Mobile Phone</label>
    <input type="text" name="phone" class="form-control" id="inputAddress2" placeholder="Phone number">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Experience</label>
    <input type="text" name="experience" class="form-control" id="inputAddress2" placeholder="Experience">
  </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Save</button>
</form>
<!--form end-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
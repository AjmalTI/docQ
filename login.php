<?php
include "partials/navbar.php";
?>


<?php

$conn = mysqli_connect("localhost", "root", "", "docq");


?>

<div class="container" style="width:500px; margin-top:80px;">


<form method="post" action="">
    <h3>LogIn</h3>
    <br><br>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="name" id="form2Example1" name="name" class="form-control" />
    <label class="form-label" for="form2Example1">Name</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" name="pass" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  

  <!-- Submit button -->
  <button type="submit" name="login" class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <a href="register.php">Register</a>
   
  </div>
</form>

</div>


<?php
 
    if(isset($_POST['login']))
    {
        $id = $_POST['name'];
        $pass = $_POST['pass'];
        $query = "SELECT * FROM register WHERE name = '$id' AND password = '$pass' ";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['user']=$_POST['name'];
            header("location:user/index.php");
        }
        else
        {
            echo "<script> alert('Incorrect password or username'); </script>";
        }
    }

?>
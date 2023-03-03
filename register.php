<?php
include "partials/navbar.php";

?>

<div class="container" style="width:500px; margin-top:80px;">


<form method="post" action="">
    <h3>Register</h3>
    <br><br>

  <div class="form-outline mb-4">
    <input type="text" id="form2Example1" name="name" class="form-control" />
    <label class="form-label" for="form2Example1" >Name</label>
  </div>

  <div class="form-outline mb-4">
    <input type="email" id="form2Example2"  name="email" class="form-control" />
    <label class="form-label" for="form2Example2">Email</label>
  </div>

  
  <div class="form-outline mb-4">
    <input type="text" id="form2Example2" name="phone" class="form-control" />
    <label class="form-label" for="form2Example2" >Phone</label>
  </div>
   
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" name="pass" class="form-control" />
    <label class="form-label" for="form2Example2" >Password</label>
  </div>

  

  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Register</button>

  <!-- Register buttons -->
  <div class="text-center">
    <a href="login.php">Login</a>
   
  </div>
</form>

</div>

<?php

$conn = mysqli_connect("localhost", "root", "", "docq");


if(isset($_POST['submit']))
{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $pass = $_POST['pass'];

   $sql = "INSERT INTO register VALUES (NULL,'$name','$email','$phone','$pass')";
	 mysqli_query($conn, $sql);

}

?>


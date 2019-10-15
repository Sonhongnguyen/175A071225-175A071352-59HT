<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Loginv1</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 require('crigister.php');
} 
?>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h2>Register</h2>
    </div>
      

    <!-- Login Form -->
    <form method="post" action="register.php">
      <input type="text" id="Email" class="fadeIn second" name="txtEmail" placeholder="Email"
      value="<?php if (isset($_POST['txtEmail'])) echo $_POST['txtEmail']; ?>">


      
      <input type="password" id="password1" class="fadeIn third" name="txtPass1" placeholder="Password" value="<?php if (isset($_POST['txtPass1'])) echo $_POST['txtPass1']; ?>">
      
      <input type="password" id="password2" class="fadeIn third" name="txtPass2" placeholder="Confirm password again" value="<?php if (isset($_POST['txtPass2'])) echo $_POST['txtPass2']; ?>">
      
      <input type="submit" class="fadeIn fourth" value="Registration" name="register_btn">
    </form>

   

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="loginv1.php">Login</a><br>
      <a class="underlineHover" href="Forgotpassword.php">Forgot Password?</a>
    </div>

  </div>
</div>
  
</body>
</html>
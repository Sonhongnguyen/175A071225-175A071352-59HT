<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Loginv1</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h2>Login</h2>
    </div>

    <!-- Login Form -->
    <form method="post" action="loginv1.php">
      <input type="text" id="Email" class="fadeIn second" name="txtEmail" placeholder="Email">
      <input type="password" id="password" class="fadeIn third" name="txtPass" placeholder=" New password">
       <input type="password" id="password" class="fadeIn third" name="txtPass" placeholder="Confirm password again">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="register.php">Register</a><br>
      <a class="underlineHover" href="loginv1.php">Login</a>
    </div>

  </div>
</div>
  
</body>
</html>
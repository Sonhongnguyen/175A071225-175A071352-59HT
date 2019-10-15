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
    <form method="post" action="checklogin.php">
      <input type="text" id="Email" class="fadeIn second" name="txtEmail" placeholder="Email">
      <input type="password" id="password" class="fadeIn third" name="txtPass" placeholder="Password">
      <input type="submit" class="fadeIn fourth" name="login" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="register.php">Register</a><br>
      <a class="underlineHover" href="Forgotpassword.php">Forgot Password?</a>
    </div>

  </div>
</div>
  
</body>
</html>


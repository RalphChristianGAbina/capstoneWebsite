<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1885ed">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="loginstyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="login.js"></script>
<head>
    <title>Free Login HTML Page Temlate</title>
</head>

<body>
<form id="loginForm">
<!--ring div starts here-->
<div class="ring"> 
  <i style="--clr:#00ff0a;"></i>
  <i style="--clr:#ff0057;"></i>
  <i style="--clr:#fffd44;"></i>
  <div class="login">
    <h2>Login</h2>
    <div class="inputBx">
      <input type="text" id="username" name="username" placeholder="Username" required>
    </div>
    <div class="inputBx">
      <input type="password" id="password" name="password" placeholder="Password" required>
    </div>
    <div class="inputBx">
      <input type="submit" name="log in" value="Log in">
    </div>
    <div class="inputBx">
    <div id="responseMessage"></div>
    </div>
  </div>
</div>
<!--ring div ends here-->
</form>
</body>      
</html>
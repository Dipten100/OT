<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Login and Registration</title>
    <link rel="stylesheet" href="signup.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked />
          <input type="radio" name="slide" id="signup" />
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form method="post" action="logIn.php" class="login">
            <div class="field">
              <input type="text" name="email" placeholder="Email Address" required />
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password" required />
            </div>
            <div class="pass-link">
              <a href="#">Forgot password?</a>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="log" value="Login" />
            </div>
            <div class="signup-link">
              Not a member? <a href="#">Signup now</a>
            </div>
          </form>
          <form  method="post" action="registration.php" class="signup">
            <div class="field">
              <input type="text" id="name" name="name" placeholder="Enter Your Name" required />
            </div>
            <div class="field">
              <input type="text" id="Phno" name="Phno" placeholder="Enter Your Phone Number" required />
            </div>
            <div class="field">
              <input type="text" id="eid" name="eid" placeholder="Email Address" required />
            </div>
            <div class="field">
              <input type="password" id="passwd" name="passwd" placeholder="Password" required /><br><span id = "message4" style="color:orange"> </span><br>
            </div>
            <div class="field">
              <input type="password" id="Cpasswd" placeholder="Confirm password" required /><br><span id = "message5" style="color:orange"> </span><br>
            </div>
            <div class="field btn" onclick="passWdCheck()">
              <div class="btn-layer"></div>
              <button type="button" name="Check">Check<br>
            </div>
            <div class="field btn" onclick="submit()">
              <div class="btn-layer"></div>
              <input type="submit" name="Submit" value="Submit" /><br>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
  <script src="signup.js"></script>
</html>

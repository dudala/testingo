<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Testingo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,700' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <body>
  <div class="overlay"></div>
  <div class="modal position">
    <img src="logo.png" class="logo">
    <div class="brand login-text">
      Sign in with your email or username<br><br>
      <strong>OR</strong><br><br> Use Some text secure login for quick access to your account.
    </div>
    <button class="brand login flat-button facebook">Some dummy text here</button>
    <div class="form position">
      <a href="#"><button class="close">x</button></a>
      <div class="form-inner">
        <!-- Tabs-->
        <div class="tabs">
          <ul class="tabs">
            <li class="current" data-tab="member">
              <a href="#member">Login as</a>
            </li>
         <!--   <li data-tab="new">
              <a href="#new">I am new here</a>
            </li>-->
          </ul>
          <!--Login Form -->
          <div class="form-content current" id="member">
            <form id="sign-in">
                
              <p>
                  <label>
                    <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0">
                    School</label>
              
                  <label>
                    <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1">
                    Teacher</label>
                  
                  <label>
                    <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_2">
                    Parent</label>
                 
                  <label>
                    <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_3">
                    Student</label>
                 
              </p>
              <input type="email" name="login-id" id="user" placeholder="USERNAME / EMAIL" class="field" required>
              <input type="password" name="usrpw" placeholder="PASSWORD" class="field" required>
              <div class="clear"></div>
              <input type="checkbox" name="rmbrme" id="custom-check" class="check"><label for="custom-check" class="check-label secondary-text">Remember me</label><a href=""><span class="forgot secondary-text">Forgot password?</span></a>
              <button id="submit" name="sign-in-button" class="flat-button signin">Log In</button>
                
                <p><a href="student/index.php"><strong>Student Login</strong></a> | <a href="school/index.php"><strong>School Login</strong></a> | <a href="teachers/index.php"><strong>Teacher Login</strong></a> | <a href="#"></a>
                
                <br><br>
                </p>
                
            </form>
          </div>
          <!--Registration form-->
          <div class="form-content" id="new">
            <form id="reg">
              <input type="text" name="login-id" id="user" placeholder="USERNAME" class="field" required>
              <input type="email" name="email" id="usremail" placeholder="EMAIL ADDRESS" class="field" required>
              <input type="password" name="usrpw" placeholder="PASSWORD" class="field" required>
              <button id="submit" name="register-button" class="flat-button signin">Sign Up</button>
              <div class="clear"></div>
              <input type="checkbox" name="promo" id="promo-check" class="check" checked><label for="promo-check" class="check-label secondary-text promo">Terms and Conditions </label>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    

</body>
</html>

<?php
include("php/login.php");
?>
<!DOCTYPE html>
<html lang="en">
<!--Head tag (Start)-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="FAITH Examination Scheduling System">
  <meta name="author" content="Bitsparks">
  <title>FAITH Examination Scheduling System</title>

  <!--CSS > Bootstrap Core tags-->
  <link rel = "stylesheet" type = "text/css" href = "theme/css/bootstrap.min.css">
  <!--CSS > Theme Core tag-->
  <link rel = "stylesheet" type = "text/css" href="theme/css/theme/theme.css">
  <link href="theme/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>

  <!--Modal Panels -->
  <div id="logInModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div>
      <div>
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div>
              <h2 style = "text-align: center;">Log In Form</h2>
              <hr class="code-primary">

              <form role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="loginform" id="logInForm">
                <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Email"name="email" id="logInUsername">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>

                <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Password</label>
                    <input type="password" name = "password" class="form-control" placeholder="Password" id="logInPassword">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <input type="submit" name= "login" value="Login" id ="logInBtn" class= "btn btn-success btn-lg">
                    <button class="btn btn-danger btn-lg" name="back"><a href="landingIndex.php" style="text-decoration:none;color: #ffffff;">Back to Page</a></button>
                  </div>
                </div>
              </form>
              <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--script tags-->
  <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type = "text/javascript" src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type = "text/javascript" src = "theme/js/index.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script type = "text/javascript" src = "theme/js/theme.js"></script>
</body>
</html>

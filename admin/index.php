<?php
include("php/adminLogin.php");
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
  <link rel = "stylesheet" type = "text/css" href = "../theme/css/bootstrap.min.css">
  <!--CSS > Theme Core tag-->
  <link rel = "stylesheet" type = "text/css" href="../theme/css/theme/theme.css">
  <link href="../theme/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body style = "background-image: url('images/background.jpg');background-size:cover;">
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
              <h2 style = "text-align: center;">Administrator: Log In Form</h2>
              <hr>
              <em class="text-danger"><?php echo $result; ?></em>
              <form role="form" method="post" name="loginform" id="logInForm">
                <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Email</label>
                    <input type="text" class="form-control" name="username" id="username" required placeholder="Username"/>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>

                <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password" required placeholder="Password"/>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <button type="submit" class="btn btn-primary btn-lg" name="login" id="login">Login <i class="glyphicon glyphicon-log-in"></i></button>
                    <button class="btn btn-danger btn-lg" name="back"><a href="../index.php" style="text-decoration:none;color: #ffffff;">Back to Page</a></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery 2.1.3 -->
  <script src="../bootstrap/plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <script src="../bootstrap/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../bootstrap/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
</body>
</html>

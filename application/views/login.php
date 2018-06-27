
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="../../css/stylesheet.css" rel="stylesheet">

  <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>../../css/">
  <script type = 'text/javascript' src = "<?php echo base_url(); ?>../../js/"></script>

</head>

<body>

  <div class="dropdown help-dropdown">
    <div class="dropdown-toggle pull-right" data-toggle="dropdown">Help
      <span class="lnr lnr-chevron-down"></span></div>
      <ul class="dropdown-menu dropdown-menu-right">
        <li>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Contact to admin</li>
        <li>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;or</li>
        <li>mail us at something@gmail.com</a></li> 
      </ul>
    </div>

    <div class="container">
      <div class="col-md-12 text-center heading-wrapper">
        <span class="main-heading text-uppercase">service desk oneportal</span>
      </div>
      <div class="col-md-12 text-center user-icon">
        <span class="lnr lnr-user"></span>
      </div>
      <div class="col-md-4 col-md-offset-4">

        <form class="form-signin" action="<?php echo base_url("/index.php/Account/signin") ?>" method ="post">
          <?php  if($error) { ?>
          <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>User name or password is incorrect !</strong> 
          </div>
          <?php } ?>
          
          <input type="text" name ="userid" id="inputEmail" class="form-control" placeholder="Employee ID" required autofocus>
        </br>
        <input type="password"  name = "password" id="inputPassword" class="form-control" placeholder="Password" required>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>

        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
        <a href="#"><u class="text-center">Forgotten Password?</u></a>
      </form>
    </div>

  </div>
</body>
</html>

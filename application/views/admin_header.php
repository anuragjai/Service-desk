<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/icon-font.min.css">
  <script src="../../js/jquery-3.2.1.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link href="../../css/stylesheet.css" rel="stylesheet">

  <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>../../css/">
  <script type = 'text/javascript' src = "<?php echo base_url(); ?>../../js/"></script>
  
</head>
<body>


<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">SERVICE DESK</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/liveproject/index.php/Account/user_dashboard"><span class="lnr lnr-home"></span></a></li> 

      <li><a href="#" id="overview" class="links">Overview</a></li>
      
      <li><a href="#" id="Shift" class="links">Add Shift/Login</a></li>
      <li><a href="#" id="Metrics" class="links">Add Metrics</a></li>
      <li><a href="#" id="Training" class="links">Add Trainings</a></li>

      </ul>
      <form class="navbar-form navbar-left search-form col-md-4">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search HERE">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
      	<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
      		<div class="img-rounded profile-img">
      			<img class="img-circle" alt="User Image" width="40" height="40" src ="<?php echo base_url($username[0]['pic']) ?>"></img>
      		</div>
      		Hi <?php echo  $username[0]['name']; ?> <span class="caret"></span>
      	</a>

      	<ul class="dropdown-menu">
      		<li ><a href="#">Profile</a>
      		</li>
      		<li><a id="logOut" href="<?php echo base_url('/index.php/Account/logout') ?>">Logout</a></li>
      	</ul>
      </li>
    
      </ul>
    </div>

  </div>
</nav>

<script type="text/javascript">
	$(document).ready(function(){
		$('[data-toggle="popover"]').popover();
		$("#searchIcon").click(function(){
    		// $(".search-form").show();
    		$(".search-form").animate({right: "+=100px"});
    	});

	});



</script>

</body>
</html>
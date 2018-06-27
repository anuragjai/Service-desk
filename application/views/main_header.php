<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Profile</title>
  <link rel="icon" type="image/png" href="../../img/icon.jpg"/>
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

 <!-- <nav class="navbar navbar-inverse navbar-static-top"> -->
<nav class="navbar white navbar-default navbar-fixed-top navcolor" style="font-size:17px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand">SERVICE <b>DESK</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="nav-item nav-hover"><a href="http://localhost/liveproject/index.php/Account/user_dashboard"><span class="lnr lnr-home"></span>&nbsp;<b>Home</b></a></li> 
        <li><a href="#overview" id="overview" class="nav-design nav-hover">Overview</a></li>
        <li><a href="#shift" id="myShift" class="nav-design nav-hover">My Shift</a></li>
        <li><a href="#login" id="myLogin" class="nav-design nav-hover">My Login</a></li>
        <li><a href="#metrices" id="myMetrics" class="nav-design nav-hover">My Metrics</a></li>
        <li><a href="#trainings" id="myTraining" class="nav-design nav-hover">My Trainings</a></li>

      </ul>


      <ul class="nav navbar-nav">
        <li class="dropdown pull-right">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <span class="sr-only">Search</span>
          </a>
          <ul class="dropdown-menu navcolor" id="search-menu">
            <form class="form-inline">
              <button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button><input type="text" class="form-control pull-left" placeholder="Search">
            </form>
          </ul>
        </li>
      </ul>


      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
         <a class="dropdown-toggle nav-hover" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <div class="img-rounded profile-img">
           <img class="img-circle" alt="User Image" width="40" height="40" src ="<?php echo base_url($username[0]['pic']) ?>"></img>
         </div>
         Hi <?php echo  $username[0]['name']; ?> <span class="caret"></span>
       </a>
       
       <ul class="dropdown-menu">
        <li><div style="cursor:pointer; margin-left: 20px;" data-toggle="modal" data-target="#Modal">Profile</div>
        </li>
        <li><a id="logOut" href="<?php echo base_url('/index.php/Account/logout') ?>">Logout</a></li>
      </ul>
    </li>
    
  </ul>
</div>

</div>
</nav>


<!-- Modal -->
<div class="modal fade" id="Modal" role="dialog">
  <div class="modal-dialog modal-sm"> 
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">
          <div class="col-sm-3"></div>

          <div class="img-rounded profile-img col-sm-2">
            <img class="img-circle" alt="User Image" width="100" height="100" src ="<?php echo base_url($username[0]['pic']) ?>"></img>
          </div>

        </h4>
      </div>

      <div class="modal-body">
        <p><b>Name:</b> <?php echo  $username[0]['name']; ?></p>
        <p><b>Employee Id:</b> <?php echo  $username[0]['EmpId']; ?></p>
        <?php foreach($users as $rec){ ?>
        <p><b>Shift:</b> <?php echo"{$rec['shiftFrom']} "?>-<?php echo"{$rec['shiftTo']} "?></p>
        <p><b>Manager:</b> <?php echo"{$rec['mgr']} "?></p>
        <?php } ?>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>   
    </div>
  </div>
</div>


</body>
</html>
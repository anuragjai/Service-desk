<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Profile</title>
  <link rel="icon" type="image/png" href="../../img/icon.jpg"/>
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="../../css/icon-font.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="../../css/stylesheet.css" rel="stylesheet">

  <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>../../css/">
  <script type = 'text/javascript' src = "<?php echo base_url(); ?>../../js/"></script>


</head>

<body>


 <!-- Main content starts here -->


  <!-- Add Bootstrap Side Nav Bar -->

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
     <a href="http://localhost/liveproject/index.php/Account/user_dashboard" class="admin-nav nav-hover">Home</a>
     <a href="#Employee" id="showEmp" class="admin-nav nav-hover">Add Employee</a>
     <a href="#OT" id="showOT" class="admin-nav nav-hover">Add OT</a>
     <a href="#TH" id="showTH" class="admin-nav nav-hover">Add TH</a>
     <a href="#quiz" id="showQuiz" class="admin-nav nav-hover">Add Quiz</a>
     <a href="#shift" id="showShift" class="admin-nav nav-hover">Add Shift</a>
     <a href="#login" id="showLogin" class="admin-nav nav-hover">Add Login</a>
     <a href="#metrices" id="showMetrics" class="admin-nav nav-hover">Add Metrics</a>
     <a href="#comments" id="showComments" class="admin-nav nav-hover">Add Comments</a>
     <a href="#users" id="showUser" class="admin-nav nav-hover">All User</a>
     <a href="<?php echo base_url('/index.php/Account/logout') ?>">Logout</a>
   </ul>
 </div>

 <div id="main">
 <!--  <h2>Sidenav Push</h2>
 <p>Click on the Open below to open the side navigation menu, and push this content to the right.</p>  -->
 <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
    document.getElementById("main").style.marginLeft = "300px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }
</script>

<div class="col-sm-8 text-center" id="mainContent" style="margin-left:320px;">

    <h2>Welcome to Admin Dashboard</h2>      
    <span class="main-heading text-uppercase">service desk oneportal</span>  <hr>    

    <p class="text-center overview-font" id="overview"><b>Verizon Communications otherwise known as Verizon, is an American multinational telecommunications conglomerate and a corporate component of the Dow Jones Industrial Average.
    The company is based at 1095 Avenue of the Americas in Midtown Manhattan, New York City,
    but is incorporated in Delaware. What eventually became Verizon was founded as Bell Atlantic, which was one 
    of the seven Baby Bells that were formed after AT&T Corporation was forced to relinquish its control of the Bell System by order of the Justice Department of the United States.Bell Atlantic came into existence in 1984 with a footprint from New Jersey to Virginia, with each area having a separate operating company 
    (consisting of New Jersey Bell, Bell of Pennsylvania, Diamond State Telephone, and C&P Telephone).
    As part of the rebranding that the Baby Bells took in the mid-1990s, all of the operating companies 
    assumed the Bell Atlantic name. In 1997, Bell Atlantic expanded into New York and the New England states 
    by merging with fellow Baby Bell NYNEX. Although Bell Atlantic was the surviving company, the merged 
    company moved its headquarters from Philadelphia to NYNEX's old headquarters in New York City. In 2000,
    Bell Atlantic acquired GTE, which operated telecommunications companies across most of the rest of the country that was not already in Bell Atlantic's footprint. Bell Atlantic, the surviving company, changed 
    its name to "Verizon", a portmanteau of veritas (Latin for "truth") and horizon.
    In 2015, Verizon expanded into media ownership by acquiring AOL. Two years later, the company acquired Yahoo! Inc.; both AOL and Yahoo were amalgamated into a new division known as Oath.
    </b>
    </p>
  

  <!-- Access all user -->

  <div class="table-responsive" id="alluser" hidden>  
  <h2><strong>Employee's Information</strong></h2>
   <hr>        
    <table class="table" border="1"> 

      <th class="text-center">Emp_Id</th>
      <th class="text-center">User Name</th>
      <th class="text-center">Team Manager</th>
      <th class="text-center">Shift from</th>
      <th class="text-center">Shift To</th>

      <?php foreach($users as $k => $rec){ ?>

      <tr>
        <td class="col-md-2"><?php echo"{$rec['EmpId']} "?></td>
        <td class="col-sm-3"><?php echo"{$rec['name']} "?></td>
        <td class="col-sm-3"><?php echo"{$rec['mgr']} "?></td>
        <td class="col-sm-2"><?php echo"{$rec['shiftFrom']} "?></td>
        <td class="col-sm-2"><?php echo"{$rec['shiftTo']} "?></td>

      </tr>
      <?php } ?>

    </table>
  </div>
  

  <!-- End Access all user -->


  <!-- Add Employee Information -->

  <div target="_blank" method="POST" id="addEmp" hidden>

   <h2><strong>Add New Employee Information</strong></h2>
    <hr>
   <div style="margin-left:25%">

    <div class="text-center">

      <div class="row" style="margin-top:20px;" >

        <form id="EmpForm" class="form-horizontal" onsubmit="return false">
          <div class="form-group">
            <label class="control-label col-sm-3">Employee ID:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="Id" id="" placeholder="Enter Employee ID">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Password:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="password" id="" placeholder="Enter Password">
            </div>
          </div>
           <div class="form-group">
              <label class="control-label col-sm-3">Manager ID:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="managerId" id="" placeholder="Enter Manager ID">
              </div>
            </div>

          <div class="form-group">
            <label class="control-label col-sm-3">User Name:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="username" id="" placeholder="Enter User Name">
            </div>
          </div>
          

          <!-- <div class="form-group">
            <label class="control-label col-sm-3">Birth Date:</label>
            <div class="col-sm-4">
              <div class="docs-datepicker">
                <div class="input-group">
                  <input type="date" class="form-control docs-date" name="st_date" placeholder="Enter Birth Date">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-default docs-datepicker-trigger" disabled>
                      <i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
                    </button>
                  </span>
                </div>
                <div class="docs-datepicker-container"></div>
              </div>
            </div>
          </div>


            <div class="form-group">
              <label class="control-label col-sm-2">End Date:</label>
              <div class="col-sm-4">

                <div class="docs-datepicker">
                  <div class="input-group">
                    <input type="date" class="form-control docs-date" name="en_date" placeholder="Pick a end date">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default docs-datepicker-trigger" disabled>
                        <i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
                      </button>
                    </span>
                  </div>
                  <div class="docs-datepicker-container"></div>
                </div>
              </div>
            </div> -->


           <!--  <div class="form-group">
              <label class="control-label col-sm-3">Profile Image:</label>
              <div class="col-sm-4">
                <input type="file" class="form-control" id="" name="image" placeholder="Enter Profile Image">
              </div>
            </div> -->

            <div class="form-group">
              <label class="control-label col-sm-3">Shift From:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="Sfrom" id="" placeholder="Enter Shift From">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-3">Shift To:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="Sto" id="" placeholder="Enter Shift To">
              </div>
            </div>

           

           <!--  <div class="form-group">
              <label class="control-label col-sm-3" for="email">Comments:</label>
              <div class="col-sm-4">
                <textarea name="desc" style="height:100px;width:300px;"></textarea>
              </div>
            </div> -->

            

            <div class="form-group">
              <div class="col-sm-offset-0 col-sm-10">
                <button id="EmpFormSubmit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>

      </div>

    </div>

  </div>

 <!-- End Add New Employee Information -->





 <!-- Add Operational Tips Information -->

 <div target="_blank" method="POST" id="addOT" hidden>

   <h2><strong>Add Operational Tips Information</strong></h2>
   <hr>
   <div style="margin-left:165px;">

    <div class="text-center">
      <div class="row" style="margin-top:25px;" >
        <form id="opTipForm" class="form-horizontal" onsubmit="return false">
          <div class="form-group">
            <label class="control-label col-sm-3">Tip Message:</label>
            <div class="col-sm-4">
              <textarea name="message" class="form-control" style="height:100px;width:300px;"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Tip Description:</label>
            <div class="col-sm-4">
              <textarea name="desc" class="form-control" style="height:100px;width:300px;"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-0 col-sm-10">
              <button id="opTipFormSubmit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


 <!-- End Operational Tips Information -->




 <!-- Add Trainer House Information -->

 <div target="_blank" method="POST" id="addTH" hidden>

   <h2><strong>Add Trainer House Information</strong></h2>
    <hr>
   <div style="margin-left:165px;">
    <div class="text-center">
      <div class="row" style="margin-top:25px;" >
        <form id="thTipForm" class="form-horizontal" onsubmit="return false">
         <div class="form-group">
          <label class="control-label col-sm-3">Knowladge Aptizer Message:</label>
          <div class="col-sm-4">
            <textarea name="msg" class="form-control" style="height:100px;width:300px;"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Knowladge Aptizer Description:</label>
          <div class="col-sm-4">
            <textarea name="des" class="form-control" style="height:100px;width:300px;"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-0 col-sm-10">
            <button id="thTipFormSubmit" type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>


 <!-- End Trainer House Information -->



  <!-- Add Quiz Information -->

  <div target="_blank" method="POST" id="addQuiz" hidden>

   <h2><strong>Add Quiz Questions</strong></h2>
   <hr>
     <div style="margin-left:25%">
      <div class="text-center">
        <div class="row" style="margin-top:20px;" >
          <form id="quizForm" class="form-horizontal" onsubmit="return false">
          <div class="form-group">
          <label class="control-label col-sm-3">Question:</label>
          <div class="col-sm-4">
            <textarea name="ques" style="height:100px;width:300px;"></textarea>
          </div>
         </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Option 1:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="op1" id="" placeholder="Enter Option 1">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-3">Option 2:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="op2" id="" placeholder="Enter Option 2">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Option 3:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="op3" id="" placeholder="Enter Option 3">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Option 4:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="op4" id="" placeholder="Enter Option 4">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Correct Answer:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="ans" id="" placeholder="Enter Correct Answer">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-0 col-sm-10">
              <button id="quizFormSubmit" type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

 <!-- End Quiz Information -->



 <!-- Add Shift Information -->


 <div class="text-center" target="_blank" method="POST" id="addshift" hidden>
   <h2><strong>Add Shift Information</strong></h2>
   <hr>
   <div style="margin-left:25%">
    <div class="text-center">
      <div class="row" style="margin-top:20px;" >
        <form id="shiftForm" class="form-horizontal" onsubmit="return false">
          <div class="form-group">
            <label class="control-label col-sm-3">Employee ID:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="Empid" id="" placeholder="Enter Employee ID">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Manager ID:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="Manid" id="" placeholder="Enter Manager ID">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Shift From:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="shiftStart" id="" placeholder="Enter Shift From">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Shift To:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="shiftEnd" id="" placeholder="Enter Shift To">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-0 col-sm-10">
              <button id="shiftFormSubmit" type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- End Shift Information -->




<!-- Add Login Information -->

<div target="_blank" method="POST" id="addLogin" hidden>
  <h2><strong>Add Login Information</strong></h2>
  <hr>
   <div style="margin-left:25%">
    <div class="text-center">
      <div class="row" style="margin-top:20px;" >
        <form id="loginForm" class="form-horizontal" onsubmit="return false">
        <div class="form-group">
            <label class="control-label col-sm-3">Employee ID:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="emp_id" id="" placeholder="Enter Employee ID">
          </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">Manager ID:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="man_id" id="" placeholder="Enter Manager ID">
            </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Sun:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="sun" id="" placeholder="Enter Sunday Login">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Mon:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="mon" id="" placeholder="Enter Monday Login">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Tue:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="tue" id="" placeholder="Enter Tuesday Login">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Wed:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="wed" id="" placeholder="Enter Wednesday Login">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Thu:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="thu" id="" placeholder="Enter Thursday Login">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Fri:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="fri" id="" placeholder="Enter Friday Login">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Sat:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="sat" id="" placeholder="Enter Saturday Login">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-0 col-sm-10">
            <button id="loginFormSubmit" type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

 <!-- End Login Information -->



 <!-- Add Metrics Information -->


 <div class="text-center" target="_blank" method="POST" id="addmetrics" hidden>
   <h2><strong>Add Metrics Information</strong></h2>
   <hr>
   <div style="margin-left:25%">
    <div class="text-center">
      <div class="row" style="margin-top:20px;" >
        <form id="metricsForm" class="form-horizontal" onsubmit="return false">
          <div class="form-group">
            <label class="control-label col-sm-3">Employee ID:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="empId" id="" placeholder="Enter Employee ID">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Manager ID:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="manId" id="" placeholder="Enter Manager ID">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">CSAT:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="csat_metrics" id="" placeholder="Enter CSAT in %">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">AHT:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="aht_metrics" id="" placeholder="Enter AHT in MM:SS">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">RR:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="rr_metrics" id="" placeholder="Enter RR in %">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-0 col-sm-10">
              <button id="metricsFormSubmit" type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- End add Metrics Information -->


  <!-- Add Quiz Information -->

  <div target="_blank" method="POST" id="addComment" hidden>

   <h2><strong>Add Comments</strong></h2>
   <hr>
     <div style="margin-left:25%">
      <div class="text-center">
        <div class="row" style="margin-top:20px;" >
          <form id="commentForm" class="form-horizontal" onsubmit="return false">

            <div class="form-group">
              <label class="control-label col-sm-3">Employee ID:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="EID" id="" placeholder="Enter Employee ID">
              </div>
          </div>
          <div class="form-group">
          <label class="control-label col-sm-3">Comment Message:</label>
          <div class="col-sm-4">
            <textarea name="msg" class="form-control" style="height:100px;width:300px;"></textarea>
          </div>
        </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Commentor ID:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="com" id="" placeholder="Enter Commentor ID">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-0 col-sm-10">
              <button id="commentFormSubmit" type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- End Comment here -->


</div>



<!-- End Main Content -->


<script>

  $(document).ready(function(e){



    $("#EmpFormSubmit").click(function(){
      var formData = $('#EmpForm').serialize();
      console.log(formData);
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url("/index.php/Admin/addEmp") ?>',
        data: formData,
        success: function(res){
          res = JSON.parse(res);
          if(res.status){
            $(".form-control").val('');
            alert(res.msg);
          }
          else{
            console.log(res);
          }
        },
        error: function(){}
      });
      return false;
    });



    $("#opTipFormSubmit").click(function(){
      var formData = $('#opTipForm').serialize();
      console.log(formData);
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url("/index.php/Admin/addOpTip") ?>',
        data: formData,
        success: function(res){
          res = JSON.parse(res);
          if(res.status){
            $(".form-control").val('');
            alert(res.msg);

          }
          else{
            console.log(res);
          }
        },
        error: function(){}
      });
      return false;
    });



    $("#thTipFormSubmit").click(function(){
      var formData = $('#thTipForm').serialize();
      // console.log(formData);
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url("/index.php/Admin/addThTip") ?>',
        data: formData,
        success: function(res){
          res = JSON.parse(res);
          if(res.status){
            $(".form-control").val('');
            alert(res.msg);
          }
          else{
            console.log(res);
          }
        },
        error: function(){}
      });
      return false;
    });


    $("#quizFormSubmit").click(function(){
      var formData = $('#quizForm').serialize();
      // console.log(formData);
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url("/index.php/Admin/addquiz") ?>',
        data: formData,
        success: function(res){
          res = JSON.parse(res);
          if(res.status){
            $(".form-control").val('');
            alert(res.msg);
          }
          else{
            console.log(res);
          }
        },
        error: function(){}
      });
      return false;
    });



      $("#shiftFormSubmit").click(function(){
      var formData = $('#shiftForm').serialize();
      // console.log(formData);
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url("/index.php/Admin/addshift") ?>',
        data: formData,
        success: function(res){
          res = JSON.parse(res);
          if(res.status){
            $(".form-control").val('');
            alert(res.msg);
          }
          else{
            console.log(res);
          }
        },
        error: function(){}
      });
      return false;
    });



     $("#loginFormSubmit").click(function(){
      var formData = $('#loginForm').serialize();
      // console.log(formData);
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url("/index.php/Admin/addlogin") ?>',
        data: formData,
        success: function(res){
          res = JSON.parse(res);
          if(res.status){
            $(".form-control").val(''); // used to clear the text after uploading the data
            alert(res.msg);
          }
          else{
            console.log(res);
          }
        },
        error: function(){}
      });
      return false;
    });



      $("#metricsFormSubmit").click(function(){
      var formData = $('#metricsForm').serialize();
      // console.log(formData);
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url("/index.php/Admin/addmetrics") ?>',
        data: formData,
        success: function(res){
          res = JSON.parse(res);
          if(res.status){
            $(".form-control").val('');
            alert(res.msg);
          }
          else{
            console.log(res);
          }
        },
        error: function(){}
      });
      return false;
    });


      $("#commentFormSubmit").click(function(){
      var formData = $('#commentForm').serialize();
      // console.log(formData);
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url("/index.php/Admin/addComment") ?>',
        data: formData,
        success: function(res){
          res = JSON.parse(res);
          if(res.status){
            $(".form-control").val('');
            alert(res.msg);
          }
          else{
            console.log(res);
          }
        },
        error: function(){}
      });
      return false;
    });



    $("#showUser").click(function(){
      $("#overview").hide();
      $("#alluser").show();
      $("#addEmp").hide();
      $("#addOT").hide();
      $("#addTH").hide();
      $("#addQuiz").hide();
      $("#addLogin").hide();
      $("#addmetrics").hide();
      $("#addComment").hide();
      $("#addshift").hide();
    })

    $("#showEmp").click(function(){
      $("#overview").hide();
      $("#addshift").hide();
      $("#addOT").hide();
      $("#addTH").hide();
      $("#addQuiz").hide();
      $("#addEmp").show();
      $("#addLogin").hide();
      $("#addmetrics").hide();
      $("#addComment").hide();
      $("#alluser").hide();
    })

    $("#showShift").click(function(){
      $("#overview").hide();
      $("#addshift").show();
      $("#addOT").hide();
      $("#addTH").hide();
      $("#addQuiz").hide();
      $("#addEmp").hide();
      $("#addLogin").hide();
      $("#addmetrics").hide();
      $("#alluser").hide();
    })

    $("#showOT").click(function(){
      $("#addOT").show();
      $("#addTH").hide();
      $("#overview").hide();
      $("#addshift").hide();
      $("#addQuiz").hide();
      $("#addEmp").hide();
      $("#addLogin").hide();
      $("#addmetrics").hide();
      $("#alluser").hide();
      $("#addComment").hide();
    })

    $("#showTH").click(function(){
      $("#addTH").show();
      $("#addOT").hide();
      $("#overview").hide();
      $("#addshift").hide();
      $("#addQuiz").hide();
      $("#addEmp").hide();
      $("#addLogin").hide();
      $("#addmetrics").hide();
      $("#alluser").hide();
      $("#addComment").hide();
    })

    $("#showQuiz").click(function(){
      $("#addQuiz").show();
      $("#addTH").hide();
      $("#addOT").hide();
      $("#overview").hide();
      $("#addshift").hide();
      $("#addEmp").hide();
      $("#addLogin").hide();
      $("#addmetrics").hide();
      $("#alluser").hide();
      $("#addComment").hide();
    })


    $("#showLogin").click(function(){
      $("#addLogin").show()
      $("#addmetrics").hide();
      $("#addQuiz").hide();
      $("#addTH").hide();
      $("#addOT").hide();
      $("#overview").hide();
      $("#addshift").hide();
      $("#addEmp").hide();
      $("#alluser").hide();
      $("#addComment").hide();
    })

     $("#showMetrics").click(function(){
      $("#addmetrics").show();
      $("#addLogin").hide();
      $("#addQuiz").hide();
      $("#addTH").hide();
      $("#addOT").hide();
      $("#overview").hide();
      $("#addshift").hide();
      $("#addEmp").hide();
      $("#alluser").hide();
      $("#addComment").hide();
    })

      $("#showComments").click(function(){
      $("#addComment").show();
      $("#addmetrics").hide();
      $("#addLogin").hide();
      $("#addQuiz").hide();
      $("#addTH").hide();
      $("#addOT").hide();
      $("#overview").hide();
      $("#addshift").hide();
      $("#addEmp").hide();
      $("#alluser").hide();
    })

}); //ready function

</script>

</body>

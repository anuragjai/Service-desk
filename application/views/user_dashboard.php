<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Profile</title>
  <link rel="icon" type="image/png" href="../../img/icon.png"/>



  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href="../../css/stylesheet.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>


  <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>../../css/">
  <script type = 'text/javascript' src = "<?php echo base_url(); ?>../../js/"></script>
          



<!-- Main css -->
  <link href="../../css/stylesheet.css" rel="stylesheet">


</head>

<body>

  <!-- Main content starts here -->
  <div class="container-fluid topfixed" id="mainContent">
    <div class="col-md-12" >
      <h2>Welcome to YOUR</h2>      
      <span class="main-heading text-uppercase">service desk oneportal</span>      
    </div>

    <form action= "/liveproject/index.php/Account/user_dashboard" method='post'>
      <div class="col-md-12 my-container">

        <div class='col-md-2 col-md-offset-7'>
          <div class="form-group">
            <label class="control-label">Start Date</label>
            <div class="date">
              <div class="input-group input-append date" id="datePicker1">
                <input type="text" name="start_date" id="start_date" class="form-control">
                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
              </div>
            </div>
          </div>
        </div>

        <div class='col-md-2'>
          <div class="form-group">
            <label class="control-label">End Date</label>
            <div class="date">
              <div class="input-group input-append date" id="datePicker2">
                <input type="text" name="end_date" id="end_date" class="form-control">
                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
              </div>
            </div>
          </div>
        </div>

        <!-- Filter button add here -->

        <div class="col-md-1 pull-right" style="padding-top:25px;">
          <input type="submit" name="filter" id="new_filter" value="submit" class="btn btn-primary">

        </div>
      </form>

      
      <div class="col-md-12">
        <div class="row">

        </div>
        <div class="col-md-4 text-center vertical-line">
          <div class="row"><a href="#" id="operationalTipsLink" class="anchor-heading hover-link-1">Operational Tips</a></div>
          
          <img src="../../img/PeopleSearch.jpg"  width="240" height="240" class="center-block">
        </div>

        <div class="col-md-4 text-center div2 vertical-line">
          <div class="row"><a href="#" id="trainersHouseLink" class="anchor-heading hover-link-1">Trainers House</a></div>
          
          <img src="../../img/key.jpg"  width="240" height="240" class="center-block">
        </div>

        <div class="col-md-4 text-center div3 vertical-line" style="border:none;">
          <div class="row"><a href="#" id="quizLink" class="anchor-heading hover-link-1">Quiz!!!</a></div>
          
          <img src="../../img/quiz.png" width="240" height="240" class="center-block">
        </div>

      </div>
      
    </div>
  </div>
  <br>


  <!-- Main content ends here -->


  <!-- operational tips starts here -->
  <div class="container-fluid topfixed" id="operationalTips" hidden>
    <div class="col-md-12">
      <div class="col-md-12 anchor-heading">Operational Tips</div>

      <div class="col-md-12 operational-tips-content">

        <?php foreach($ot as $k => $rec){ ?>
        <div class="col-md-12 bullet-wrapper">
          <div class="col-md-1 bullet"></div>
          <div class="col-md-11 bullet-points-wrapper"> 

            <a type="button" class="anchor-heading pop" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<?php echo $rec['desc']?>"
              data-original-title=""  title="More info. about Tip <?php echo $k+1?>">Tip <?php echo $k+1?></a> 
              <span class="bullet-points"> - <?php echo $rec['msg'] ?></span>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>

    <!-- operational tips ends here -->


    <!-- Trainer House starts here -->

    <div class="container-fluid topfixed" id="trainersHouse" hidden>
      <div class="col-md-12">
        <div class="col-md-12 anchor-heading">Trainers House</div>

        <div class="col-md-12 trainer-house-content">

          <?php foreach($th as $k => $rec){ ?>
          <div class="col-md-12 bullet-wrapper">
            <div class="col-md-1 bullet"></div>
            <div class="col-md-11 bullet-points-wrapper"> 
              <a type="button" class="anchor-heading pop" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<?php echo $rec['desc']?>"
                data-original-title=""  title="More info. about Knowledge Appetizers <?php echo $k+1?>">Knowledge Appetizers <?php echo $k+1?></a> 
                <span class="bullet-points"> - <?php echo $rec['msg'] ?></span>
              </div>
            </div>
            <?php } ?>

          </div>
        </div>
      </div>

      <!-- Trainer House ends here -->


      <!-- Quiz start here -->

      <div class="container-fluid topfixed" id="quiz" hidden>
        <div class="col-md-12">
          <div class="col-md-12 anchor-heading">Quiz!!!</div>

          <div class="col-md-6" style="margin:0; padding:0">
            <div class="quiz-content" style="border-right: 1px solid;">
              <?php  $a=0;$b=0;$c=0;$d=0;?>
              <?php foreach($quizdata as $k => $rec){ ?>
              <div class='len'>
                <span ><?php echo $k+1?>.</span>
                <span id="ques<?php echo $k+1?>" value='<?php echo $rec["s_no"]?>'><?php echo $rec['question']?></span>
                <div class="rr<?php echo $k?>">
                  <div class="radio ">
                    <label for="radios-0">
                      <input type="radio" class="radios1<?php echo $b?>" name="radios1<?php echo $b?>" id="op1<?php echo $a?>" value="<?php  echo $rec['options1']?>">
                      <?php  echo $rec['options1']?>
                    </label>
                  </div>
                  <div class="radio">
                    <label for="radios-1">
                      <input type="radio" class="radios1<?php echo $b?>" name="radios1<?php echo $b?>" id="op2<?php echo $b?>" value="<?php  echo $rec['options2']?>">
                      <?php  echo $rec['options2']?>
                    </label>
                  </div>
                  <div class="radio">
                    <label for="radios-1">
                      <input type="radio" class="radios1<?php echo $b?>" name="radios1<?php echo $b?>" id="op3<?php echo $c?>" value="<?php  echo $rec['options3']?>">
                      <?php  echo $rec['options3']?>
                    </label>
                  </div>
                  <div class="radio">
                    <label for="radios-1">
                      <input type="radio" class="radios1<?php echo $b?>"  name="radios1<?php echo $b?>" id="op4<?php echo $d?>" value=" <?php  echo $rec['options4']?>">
                      <?php  echo $rec['options4']?>
                    </label>
                  </div>
                </div>
              </div>
              <hr class="quiz-line">
              <?php $a=$a+1; $b=$b+1;$c=$c+1;$d=$d+1; ?>
              <?php }?>

            </div>

          </div>
          <form class="form-signin" action="<?php echo base_url("/index.php/Account/user_dashboard") ?>" method ="post">
            <div class="col-md-6 quiz-content text-middle text-center" style="border-left: 1px solid; padding:100px;">

              <!-- <div id="qAns"></div> -->
              <div type="submit" class="btn btn-primary btn-lg round-btn round-btn-1" onclick="ans()" name="submitans">Submit</div>
              <div class="report">
                <span class="report-score">score | <i id="qAns">0 %</i></span>
              </div>

            </div>
          </form>
        </div> 
      </div>

      <script>

        function ans(){
          var arr={};
          $('.len').each(function(i, values){
            var que = $($(values).find('span')[1]).attr('value');
            var ans = $(values).find('input:checked');
            if(ans.length > 0){
              arr[que] = ans.val().trim();
            }
          });
          var JSONString = JSON.stringify(arr);


          $.ajax({
            type: 'POST',
            url: '<?php echo base_url("/index.php/Account/add") ?>',
            data: {"quiz-content" :JSONString},
            success: function(res){
              $("#qAns").html(res+' %');
            },
            error: function(){}
          });



        }
      </script>

      <!-- Quiz Ends here -->


      <!-- Model for show Comments -->

      <div class="col-md-4 div1 " data-toggle="modal" data-target="#myModal"></div>
      <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" >

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header text-center">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h1 class="modal-title"><?php echo json_decode($userDetails, true)[0]['name']; ?>
                <!-- <h1 class="modal-title" id="userName"></h1> -->
                <h1>
                  <span>WOW! Comments from our Customers</span>
                </h1>

              </div>
              <div class="modal-body img-circle text-center ">
                <img class="img-circle" height = "170" width ="170" alt="User Image" src ="<?php echo base_url(json_decode($userDetails, true)[0]['pic']) ?>"></img>
                <div id="comments" class="text-left">
                 <?php foreach($comments as $k => $rec){ ?>

                 <p><?php echo $rec; ?></p>

                 <?php } ?>

               </div>
             </div>
             <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>



          </div>

        </div>
      </div>

      <!-- overview container-->

      <div class="container topfixed" id="showOverView" hidden>

        <h2 class="text-center">Company Name</h2>
        <hr>
        <!-- <p title=About Portal></p> -->
        <!-- <pre>This is pre tag</pre> -->

        <p class="text-center overview-font"><b>Verizon Communications otherwise known as Verizon, is an American multinational telecommunications conglomerate and a corporate component of the Dow Jones Industrial Average.
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
          As of 2016, Verizon is one of three companies that had their roots in the former Baby Bells. The other two, like Verizon, exist as a result of mergers among fellow former Baby Bell members. One, SBC Communications, bought out the Bells' former parent AT&T Corporation and assumed the AT&T name. The other, CenturyLink, was formed initially in 2011 by the acquisition of Qwest (formerly named US West). Its Verizon Wireless subsidiary is the largest U.S. wireless communications service provider as of September 2014, with 147 million mobile customers.</b>
        </p>

      </div>


      <!-- MY Shift/Login click-->

      <div class="container topfixed" id="showMyshift" hidden>
      <!-- <h2 class="text-center">Company Name</h2>
      <hr> -->
      <div class="col-md-12 text-middle">
        <div class="col-md-12">
          <div class="col-md-3 text-center round-medium">My Shift
          </div>  
          <!--  <div class="col-md-7 col-md-offset-1"> -->
          <div class="text-center"><b>Last Updated -</b> <?php echo @date('d-m-Y H:i:s'); ?></div>

          <div class="col-md-9">
           <!-- my shift picker -->
           <div class="form-group" style="margin-top: 150px;">

            <form action= "/liveproject/index.php/Account/user_dashboard#shift" method='post'>

              <div class='col-md-4'>
                <div class="form-group">
                  <label class="control-label">Start Date</label>
                  <div class="date">
                    <div class="input-group input-append date" id="datePicker3">
                      <input type="text" name="start_date" id="start_date" class="form-control">
                      <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class='col-md-4'>
                <div class="form-group">
                  <label class="control-label">End Date</label>
                  <div class="date">
                    <div class="input-group input-append date" id="datePicker4">
                      <input type="text" name="end_date" id="end_date" class="form-control">
                      <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                  </div>
                </div>
              </div>

              <input type="submit" name="filter" id="new_filter" value="submit" class="btn btn-primary" style="margin-top: 25px;margin-left: 15px;">
            </form>

            <br> &nbsp; &nbsp;
            <a id="showshift" class="breakupfont hover-link-1">Breakup</a>
          </div> 
          <br>
          <div class="col-md-9 table-responsive shift" style="display: none;">          
            <table class="table" border="1">
              <thead>
                <tr>
                  <!-- <th>#</th> -->
                  <th>Employee ID</th>
                  <th>Shift (IST)</th>                  
                </tr>
              </thead>
              <tbody>
                <?php foreach($shift as $rec){ ?>
                <tr>
                  <!-- <td>1</td> -->
                  <td><?php echo"{$rec['EmpId']}"?></td>
                  <td><?php echo"{$rec['shiftFrom']}"?> - <?php echo"{$rec['shiftTo']}"?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div> 
        </div> 
      </div>
    </div>
  </div>


  <!-- MY Login click-->

  <div class="container topfixed" id="showMylogin" hidden>
      <!-- <h2 class="text-center">Company Name</h2>
      <hr> -->

      <div class="col-md-12 text-middle">
        <div class="col-md-12">
          <div class="col-md-3 text-center round-medium">My Login

          </div>  

          <div class="text-center"><b>Last Updated -</b> <?php echo @date('d-m-Y H:i:s'); ?></div>

          <div class="col-md-9">
            <!-- My Login Date picker -->
            <div class="form-group" style="margin-top: 150px;">

              <form action= "/liveproject/index.php/Account/user_dashboard#login" method='post'>

                <div class='col-md-4'>
                  <div class="form-group">
                    <label class="control-label">Start Date</label>
                    <div class="date">
                      <div class="input-group input-append date" id="datePicker5">
                        <input type="text" name="start_date" id="start_date" class="form-control">
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class='col-md-4'>
                  <div class="form-group">
                    <label class="control-label">End Date</label>
                    <div class="date">
                      <div class="input-group input-append date" id="datePicker6">
                        <input type="text" name="end_date" id="end_date" class="form-control">
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                      </div>
                    </div>
                  </div>
                </div>


                <input type="submit" name="filter" id="new_filter" value="submit" class="btn btn-primary" style="margin-top: 25px; margin-left: 15px;">

              </form>
              <br> &nbsp; &nbsp;
              <a id="showlogin" class="breakupfont hover-link-1">Breakup</a>

            </div> 
            <br>
            <div class="col-md-9 table-responsive login" style="display: none;">          
              <table class="table" border="1">
                <thead>
                  <tr>
                    <th>Emp ID</th>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                  </tr>
                </thead>
                <tbody>
                 <?php foreach($emp as $rec){ ?>
                 <tr>
                  <td><?php echo"{$rec['EmpId']}"?></td>
                  <td><?php echo"{$rec['Sun']} "?></td>
                  <td><?php echo"{$rec['Mon']} "?></td>
                  <td><?php echo"{$rec['Tue']} "?></td>
                  <td><?php echo"{$rec['Wed']} "?></td>
                  <td><?php echo"{$rec['Thu']} "?></td>
                  <td><?php echo"{$rec['Fri']} "?></td>
                  <td><?php echo"{$rec['Sat']} "?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div> 

      </div>
    </div>
  </div>



  <!-- MY Metrics start here-->

  <div class="container topfixed" id="showMymetrics" hidden>
    <!-- <h2 class="text-center">Company Name</h2>
    <hr> -->
    <div class="text-center" style="margin-left: 285px"><b>Last Updated -</b> <?php echo @date('d-m-Y H:i:s'); ?></div>

    <div class="col-md-12 text-middle">
      <!-- <div class="col-md-12"> -->
      <div class="col-md-3 text-center btn btn-lg round-btn round-small">CSAT
      </div> 

      <div class="col-md-6 pb-wrapper">

    <!-- Skills Progress Bar -->
    <section id="skills-pgr">
        <div class="progress">
            <?php foreach($metrics as $rec){ ?>
            <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="<?php echo"{$rec['csat']}"?>">
                <span>CSAT- <?php echo"{$rec['csat']}"?></span>
            </div>
            <?php } ?>
      </div>
  </section>


     <div class="badge" id="tCSAT">90%</div>
   </div>
   <div class="col-md-1 pb-wrapper">
    <a id="showcsat" class="breakupfont hover-link-1">Breakup</a>
  </div>

  <div class="col-md-3">    
    <div class="table-responsive csat" style="display: none;">          
      <table class="table" border="1">
        <thead>
          <tr>
            <th>Employee ID</th>
            <th>CSAT%</th>

          </tr>
        </thead>
        <tbody>
          <?php foreach($metrics as $rec){ ?>
          <tr>
           <td><?php echo"{$rec['EmpId']}"?></td>
           <td><?php echo"{$rec['csat']}"?></td>

         </tr>
         <?php } ?>
       </tbody>
     </table>
   </div> 
 </div>

</div>




<div class="col-md-12">
  <div class="col-md-3 text-center btn btn-lg round-btn round-small">AHT
  </div>  
  <div class="col-md-6 pb-wrapper">
       <!-- Skills Progress Bar -->
    <section id="skills-pgr">
        <div class="progress">
            <?php foreach($metrics as $rec){ ?>
            <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="<?php echo"{$rec['aht']}"?>" style=" max-width: 50%;">
                <span>AHT- <?php echo"{$rec['aht']}"?></span>
            </div>
            <?php } ?>
      </div>
  </section>

  <div class="badge" id="tAHT">13 Mins</div>
</div>
<div class="col-md-1 pb-wrapper">
  <a id="showaht" class="breakupfont hover-link-1">Breakup</a>
</div>
<div class="col-md-3">    
  <div class="table-responsive aht" style="display: none;">          
    <table class="table" border="1">
      <thead>
        <tr>
         <th>Employee ID</th>
         <th>AHT(mm:ss)</th>
       </tr>
     </thead>
     <tbody>
      <?php foreach($metrics as $rec){ ?>
      <tr>
       <!-- <td>1</td> -->
       <td><?php echo"{$rec['EmpId']}"?></td>
       <td><?php echo"{$rec['aht']}"?></td>

     </tr>
     <?php } ?>
   </tbody>
 </table>
</div> 
</div>
</div>




<div class="col-md-12">
  <div class="col-md-3 text-center btn btn-lg round-btn round-small">RR

  </div>  
  <div class="col-md-6 pb-wrapper">
       <!-- Skills Progress Bar -->
    <section id="skills-pgr">
        <div class="progress">
            <?php foreach($metrics as $rec){ ?>
            <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="<?php echo"{$rec['rr']}"?>">
                <span>RR- <?php echo"{$rec['rr']}"?></span>
            </div>
            <?php } ?>
      </div>
  </section>

  <div class="badge" id="tRR">80%</div>
</div>

<div class="col-md-1 pb-wrapper">
  <a id="showrr" class="breakupfont hover-link-1">Breakup</a>
</div>
<div class="col-md-3">    
  <div class="table-responsive rr" style="display: none;">          
    <table class="table" border="1">
      <thead>
        <tr>
         <th>Employee ID</th>
         <th>RR%</th>

       </tr>
     </thead>
     <tbody>
      <tr>
        <?php foreach($metrics as $rec){ ?>
        <tr>
         <td><?php echo"{$rec['EmpId']}"?></td>
         <td><?php echo"{$rec['rr']}"?></td>
       </tr>
       <?php } ?>
     </tbody>
   </table>
 </div> 
</div>

</div>

</div>

</div>


<!-- MY Metices ends here-->



<!-- MY Training starts here -->


<div class="container topfixed" id="showMytraining" hidden>
  <!-- <h2 class="text-center">Company Name</h2>
  <hr> -->
  <div class="text-center" style="margin-left: 19em;"><b>Last Updated -</b> <?php echo @date('d-m-Y H:i:s'); ?></div>

  <div class="col-md-12 text-middle" style="margin-top:50px;">

      <div class="col-md-12 col-md-offset-5 text-center round-training">My Training </div> 

    <div class="col-md-12">


      <!-- Date Picker -->

      <div class='col-md-4 col-md-offset-2'>
        <div class="form-group">
          <label class="control-label">Start Date</label>
          <div class="date">
            <div class="input-group input-append date" id="datePicker7">
              <input type="text" class="form-control" name="date" />
              <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
          </div>
        </div>
      </div>

      <div class='col-md-4'>
        <div class="form-group">
          <label class="control-label">End Date</label>
          <div class="date">
            <div class="input-group input-append date" id="datePicker8">
              <input type="text" class="form-control" name="date" />
              <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
          </div>
        </div>
      </div>

      <div class='col-md-2'>
        <input type="submit" name="filter" id="new_filter" value="submit" class="btn btn-primary" style="margin-top: 25px; margin-left: 15px;">
      </div>

    </div>

    <div class="col-md-12 pb-wrapper text-center">
      <a id="showtraining" class="breakupfont hover-link-1">View Report</a>
    </div>
    <div class="col-md-12 text-center">    
      <div class="table-responsive training" style="display: none;">  
        <br>        
        <table class="table" border="1">
          <thead>
            <tr>
              <th class="text-center">S.no.</th>
              <th class="text-center">Employee</th>
              <th class="text-center">Training</th> 
              <th class="text-center">Date</th>
              <th class="text-center">Assesment</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Smith</td>
              <td>50</td>
              <td>20-11-2017</td>
              <td>45</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jackson</td>
              <td>94</td>
              <td>25-11-2017</td>
              <td>50</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Doe</td>
              <td>80</td>
              <td>28-11-2017</td>
              <td>40</td>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- MY Training ends here -->


<footer class="footer navbar-bottom" id="showfooter">
  <div class="container" style="margin-left: 60px;">
    <div class="footer-left col-md-4">
      <p class="about">
        <span> <b>About the company</b></span> Verizon Communications, otherwise known as Verizon, is an American multinational telecommunications conglomerate and a corporate component of the Dow Jones Industrial Average.The company is based at 1095 Avenue of the Americas in Midtown Manhattan, New York City,but is incorporated in Delaware.
      </p>

      <div >
        <a href="https://www.facebook.com/verizon/" target="_blank"><i class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></i></a>
        <a href="https://twitter.com/verizon?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" data-wow-delay="1.3s" target="_blank"><i class="fa fa-twitter wow fadeInUp"></i></a>
        <a href="https://www.linkedin.com/company/verizon/" target="_blank"><i class="fa fa-linkedin wow fadeInUp" data-wow-delay="1.6s"></i></a>
        <a href="https://plus.google.com/+verizon" target="_blank"><i class="fa fa-google wow fadeInUp" data-wow-delay="1.9s"></i></a>
        <a href="https://www.youtube.com/user/verizon" target="_blank"><i class="fa fa-youtube wow fadeInUp" data-wow-delay="2s"></i></a>

      </div>
    </div>

    <div class="footer-center col-md-4">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span> Raheja Mindspace, HITEC City</span>  Hyderabad, India</p>
      </div>
      <div>
        <i class="fa fa-phone"></i>
        <p> (+91) 040 4400 5000</p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="#"> office@company.com</a></p>
      </div>
    </div>

    <div class="footer-right col-md-4">
      <img src="../../img/verizon.png" class="img-rounded" alt="Company logo" width="300" height="75">
      <p class="menu">
        <a href="#"> Home</a> |
        <a href="#"> About</a> |
        <a href="#"> Services</a> |
        <a href="#"> Portfolio</a> |
        <a href="#"> News</a> |
        <a href="#"> Contact</a>
      </p>
      <p class="name"> Verizon &copy; 2017 | Design: Anurag</p>

   <!--  <ul class="nav pull-right scroll-top">
      <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
    </ul> -->

    <ul class="nav pull-right scroll-top">
      <li><a href="#back-top" class="go-top img-circle hover-link-2"><i class="fa fa-angle-up"></i></a></li>
    </ul>

  </div>

</div>
</footer>





<script>

  $(document).ready(function(e){

    var count=1;
    count = parseInt(localStorage.getItem('counter') || 0);
    console.log(count);
    localStorage.setItem('counter', ++count)
    if (localStorage.getItem('counter') == 1) {
    // console.log(comments);
    $('#myModal').modal('show');
    $('#modal').modal();
  }   

// Logout function

$("#logOut").click(function(){
  localStorage.setItem('counter', 0);
}); 

// Mouse pophover function for Oprational tips and Trainers House

$(".pop").popover({ trigger: "manual" , html: true, animation:false})
.on("mouseenter", function () {
  var _this = this;
  $(this).popover("show");
  $(".popover").on("mouseleave", function () {
    $(_this).popover('hide');
  });
}).on("mouseleave", function () {
  var _this = this;
  setTimeout(function () {
    if (!$(".popover:hover").length) {
      $(_this).popover("hide");
    }
  }, 300);
});

// Scroll to Top

$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
});



$('#datePicker1')
.datepicker({
  format: 'yyyy-mm-dd',
  todayHighlight: true,
  autoclose: true
})
.on('changeDate', function(e) {
            // Revalidate the date field
            // $('#eventForm').formValidation('revalidateField', 'date');
          });


$('#datePicker2')
.datepicker({
  format: 'yyyy-mm-dd',
  todayHighlight: true,
  autoclose: true
})
.on('changeDate', function(e) {
            // Revalidate the date field
            // $('#eventForm').formValidation('revalidateField', 'date');
          });

$('#datePicker3')
.datepicker({
  format: 'yyyy-mm-dd',
  todayHighlight: true,
  autoclose: true
})
.on('changeDate', function(e) {
            // Revalidate the date field
            // $('#eventForm').formValidation('revalidateField', 'date');
          });


$('#datePicker4')
.datepicker({
  format: 'yyyy-mm-dd',
  todayHighlight: true,
  autoclose: true
})
.on('changeDate', function(e) {
            // Revalidate the date field
            // $('#eventForm').formValidation('revalidateField', 'date');
          });

$('#datePicker5')
.datepicker({
  format: 'yyyy-mm-dd',
  todayHighlight: true,
  autoclose: true
})
.on('changeDate', function(e) {
            // Revalidate the date field
            // $('#eventForm').formValidation('revalidateField', 'date');
          });


$('#datePicker6')
.datepicker({
  format: 'yyyy-mm-dd',
  todayHighlight: true,
  autoclose: true
})
.on('changeDate', function(e) {
            // Revalidate the date field
            // $('#eventForm').formValidation('revalidateField', 'date');
          });


  // Start date picker for my training
  $('#datePicker7')
  .datepicker({
    format: 'yyyy-mm-dd',
    todayHighlight: true,
    autoclose: true
  })
  .on('changeDate', function(e) {
            // Revalidate the date field
            // $('#eventForm').formValidation('revalidateField', 'date');
          });
  // End date picker


  $('#datePicker8')
  .datepicker({
    format: 'yyyy-mm-dd',
    todayHighlight: true,
    autoclose: true
  })
  .on('changeDate', function(e) {
            // Revalidate the date field
            // $('#eventForm').formValidation('revalidateField', 'date');
          });




  $("#operationalTipsLink").click(function(){
    $("#mainContent").hide();
    $("#operationalTips").show();

  });

  $("#trainersHouseLink").click(function(){
    $("#mainContent").hide();
    $("#trainersHouse").show();

  });

  $("#quizLink").click(function(){
    $("#mainContent").hide();
    $("#quiz").show();
  });

  // To show overview 
  $("#overview").click(function(){
    $("#mainContent").hide();
    $("#showMyshift").hide();
    $("#showMylogin").hide();
    $("#showOverView").show();
    $("#showMymetrics").hide();
    $("#showMytraining").hide();
    $("#operationalTips").hide();
    $("#trainersHouse").hide();
    $("#quiz").hide();
    $("#showfooter").show();

  })

// To show My Shift

$("#myShift").click(function(){
  $("#showOverView").hide();
  $("#mainContent").hide();
  $("#showMyshift").show();
  $("#showMylogin").hide();
  $("#showMymetrics").hide();
  $("#showMytraining").hide();
  $("#operationalTips").hide();
  $("#trainersHouse").hide();
  $("#quiz").hide();
  $("#showfooter").show();

})

// To show Login

$("#myLogin").click(function(){
  $("#showOverView").hide();
  $("#mainContent").hide();
  $("#showMyshift").hide();
  $("#showMylogin").show();
  $("#showMymetrics").hide();
  $("#showMytraining").hide();
  $("#operationalTips").hide();
  $("#trainersHouse").hide();
  $("#quiz").hide();
  $("#showfooter").show();

})


// To show My Metrices
$("#myMetrics").click(function(){
  $("#showOverView").hide();
  $("#mainContent").hide();
  $("#showMyshift").hide();
  $("#showMylogin").hide();
  $("#showMymetrics").show();
  $("#showMytraining").hide();
  $("#operationalTips").hide();
  $("#trainersHouse").hide();
  $("#quiz").hide();
  $("#showfooter").show();

})


//To show My Training
$("#myTraining").click(function(){
  $("#showOverView").hide();
  $("#mainContent").hide();
  $("#showMyshift").hide();
  $("#showMylogin").hide();
  $("#showMymetrics").hide();
  $("#showMytraining").show();
  $("#operationalTips").hide();
  $("#trainersHouse").hide();
  $("#quiz").hide();
  $("#showfooter").show();

})


$('#showshift').click(function() {
  $('.shift').toggle("slide");
});

$('#showlogin').click(function() {
  $('.login').toggle("slide");
});

$('#showcsat').click(function() {
  $('.csat').toggle("slide");
});

$('#showaht').click(function() {
  $('.aht').toggle("slide");
});

$('#showrr').click(function() {
  $('.rr').toggle("slide");
});

$('#showtraining').click(function() {
  $('.training').toggle("slide");
});


// $("#shiftBreakup").click(function(){
//   $("#shiftTableWrapper").show();
// })


// $("#loginBreakup").click(function(){
//   $("#loginTableWrapper").show();
// })


// $("#csatBreakup").click(function(){
//   $("#csatTableWrapper").show();
// })

// $("#ahtBreakup").click(function(){
//   $("#ahtTableWrapper").show();
// })

// $("#rrBreakup").click(function(){
//   $("#rrTableWrapper").show();
// })


// $("#trainingBreakup").click(function(){
//   $("#trainingTableWrapper").show();
// })


  // When the user clicks on div, open the popup
  function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
  }


  // Skills Progress Bar
$('.progress-bar').each(function() {
  
    var $bar = $(this);
    var progress = setInterval(function() {
      
      var currWidth = parseInt($bar.attr('aria-valuenow'));
      var maxWidth = parseInt($bar.attr('aria-valuemax'));
      
    //update the progress
        $bar.width(currWidth+'%');
        $bar.attr('aria-valuenow',currWidth+10);
      
      //clear timer when max is reach
      if (currWidth >= maxWidth){
        clearInterval(progress);
      }
      
    }, 500);
  
});





}); //ready function

</script>


</body>

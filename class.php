<?php
session_start();   //session started

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - Eduyard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">

<link rel="stylesheet" href="css1/bootstrap.min.css"/>
  <link rel="stylesheet" href="css1/bootstrap-responsive.min.css"/>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<?php

include 'dbcon.php';


?>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">EDUYARD </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> <?php echo $_SESSION['name'];?> <b class="caret"></b></a>  <!--The Name of the user entered will be displayed using php session-->
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li><a href="index.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li><a href="reports.html"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
        <li><a href="guidely.html"><i class="icon-facetime-video"></i><span>App Tour</span> </a></li>
        <li><a href="charts.html"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
        <li><a href="shortcodes.html"><i class="icon-code"></i><span>Shortcodes</span> </a> </li>
        <li class="active"><a href="class.php"><i class="icon-th"></i><span>Class</span> </a> </li>-->
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="icons.html">Icons</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="pricing.html">Pricing Plans</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li>
            <li><a href="error.html">404</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Information based on Class</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<div class="tabbable">
						<ul class="nav nav-tabs">
						  <li class="active">
						    <a href="#formcontrols" data-toggle="tab">Select Class</a>
						  </li>
						  <!--<li  class="active"><a href="#jscontrols" data-toggle="tab">JS Controls</a></li>
						</ul>-->
						
						<br>
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form id="edit-profile" class="form-horizontal"  action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="GET">
									<fieldset>
										
                                        <div class="control-group">											
											<label class="control-label" for="radiobtns">Class:</label>
											
                                            <div class="controls">
                                              <div class="btn-group">
                                              <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> Select Class</a>
                                              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                              <ul class="dropdown-menu">
                                               
                                                <?php
                                                  $res=mysqli_query($con,"select * from class");
                                                  while($row=mysqli_fetch_array($res))
                                                  {
                                                    echo "<option>";
                                                    echo $row["name"];
                                                    echo "</option>";
                                                  }
                                                ?>
                                                
                                                </ul>
                                            </div>
                                              </div>	<!-- /controls -->			
										</div> <!-- /control-group -->
                           
                                    
  
										 <br />
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Proceed</button> 
                      
											<button class="btn">Cancel</button>
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
								</div>
								
								<div class="tab-pane active" id="jscontrols">
									<form id="edit-profile2" class="form-vertical">
										<fieldset>
		                         
											</div> <!-- /control-group -->                         
                                            
										</fieldset>
									</form>
								</div>
								
							</div>
						  
						  
						</div>
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	     
	
	  
    

    
<div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Roll No</th>
                  <th>Name</th>
                  <th>Guardian Name</th>
                  <th>Contact </th>
                  <th>Address</th>
                  <th>Edit</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                $res=mysqli_query($con,"select * from student");
                while ($row=mysqli_fetch_array($res))
                {
                  ?>
                  <tr>
                  <td class="center"><?php echo $row["roll_no"]; ?></td>
                  <td class="center"><?php echo $row["name"];?></td>
                  <td class="center"><?php echo $row["guardian"];?></td>
                  <td class="center"> <?php echo $row["phone"];?></td>
                  <td class="center"><?php echo $row["address"];?></td>
                  <td><a href="#">Edit</a></td>
                  
                </tr>
               

                  <?php
                }
                ?>
                
              </tbody>
            </table>
          </div>

          </div> <!-- /row -->
          </div> <!-- /container -->
	    
      </div> <!-- /main-inner -->
    
          </div> <!-- /main -->
          <div class="footer">
	
	<div class="footer-inner">
		
		<div class="container">
			
			<div class="row">
				
    			<div class="span12">
    				&copy; 2021 <a href="#">Eduyard</a>.
    			</div> <!-- /span12 -->
    			
    		</div> <!-- /row -->
    		
		</div> <!-- /container -->
		
	</div> <!-- /footer-inner -->
	
</div> <!-- /footer -->
    


<script src="js/jquery-1.7.2.min.js"></script>
	
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>


</body>
</html>

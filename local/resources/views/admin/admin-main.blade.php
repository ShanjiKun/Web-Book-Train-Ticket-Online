<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/admin-main.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />

                    </a> -->

                                      
                </div>
              
                <span class="logout-spn" >
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="/Web-Book-Train-Ticket-Online/admin/admin-sign-up"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="/Web-Book-Train-Ticket-Online/admin/admin-sign-in"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  </ul>

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
  
                    <li class="active-link">
                        <a href="index.html" ><i class="glyphicon glyphicon-th "></i>Dashboard <span class="caret"></span></a>
                        <!-- <ul>
                          <li><a href="#"><i>Hello</i></a></li>
                          <li><a href="#"><i>Hello</i></a></li>
                        </ul> -->
                    </li>
                   

                    <li>
                        <a href="ui.html"><i class="glyphicon glyphicon-list-alt "></i>Active<span class="caret"></span></a>
                    </li>
                    <li>
                        <a href="blank.html"><i class="glyphicon glyphicon-edit "></i>Update<span class="caret"></span></a>
                    </li>


                    <li>
                        <a href="#"><i class="glyphicon glyphicon-signal"></i>Chart</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-file"></i>Plan</a>
                    </li>

                    <li>
                        <a href="#"><i class="glyphicon glyphicon-check "></i>Check</a>
                    </li>
                    
                    
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr /> 
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                            <strong>Welcome Huyen! </strong> You Have No pending Task For Today.
                        </div>
                       
                    </div>
                </div>
                  <!-- /. ROW  --> 
                <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-envelope"></span> Messenger</a>
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-pencil"></span> Notice</a>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-cog"></span>Adjust</a>
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-book"></span> Schedule</a>
     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-user"></span> User Management</a>
                  </div>
                  
              </div>
                 <!-- /. ROW  --> 
                <div class="row text-center pad-top">
                  <div class="div-square">
                    <p>i have no idea what to put in here :)))</p>
                  </div>
                </div>
                  
                     
            </div>   
                  <!-- /. ROW  -->    
                 
                 <!-- /. ROW  -->  
                 
                  <!-- /. ROW  -->  
            <div class="row text-center pad-top"></div>
                 <!-- /. ROW  -->   
            <div class="row">
              <div class="col-lg-12 ">
              <br/>
                  <div class="alert alert-danger ">
                       <strong>Want to work more ? </strong> Checkout this <a target="_blank" href="#">Click Here</a>.
                  </div>
                 
              </div>
            </div>
                  <!-- /. ROW  --> 
        </div>
             <!-- /. PAGE INNER  -->
    </div>
         <!-- /. PAGE WRAPPER  -->
       
    <div class="footer">
      
    
            <div class="row">
                <div class="et-col-md-12 text-center" >
                    <img src="http://dsvn.vn/images/fptlogo.png" width="28" height="17">
                    Copyright by FPT Technology Solutions
                </div>
            </div>
    </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    
    
   
</body>
</html>

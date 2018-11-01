<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <meta charset="utf-8">
  <!-- extra link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- End extra link -->

    <!-- Title Page-->
    <title>AddItem</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <h2 style="color: white">ALBEDO</h2>
                        <!-- <a href="#"> -->
                            <!-- <img src="img/logo.jpg" alt="logo_albedo" /> -->
                        <!-- </a> -->
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li>
                                <a href="products.php">
                                    <i class="fas fa-info"></i>
                                    <span class="bot-line"></span>products</a>
                            </li>
                            <li>
                                <a href="view.php">
                                    <i class="fas fa-eye"></i>
                                    <span class="bot-line"></span>Customer</a>
                            </li>
                            <li>
                                <a href="report.php">
                                <i class="fas fa-chart-line"></i>Report
                                <span class="bot-line"></span></a>
                        </li>               
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                               
                                <div class="content">
                                    <a class="js-acc-btn" href="#">Sor Sai</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="login.php">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="dashboard.php">
                            <h2 style="color: white">ALBEDO</h2>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                      
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-info"></i>products</a>
                        </li>
                        <li>
                            <a href="view.php">
                                <i class="fas fa-eye"></i>Customer</a>
                        </li>   
                        <li>
                            <a href="report.php">
                                <i class="fas fa-chart-line"></i>Report</a>
                        </li>                                  
                    </ul>
                </div>
            </nav>
        </header>

        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="header-button-item has-noti js-item-menu">
                    <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                        
                    </div>
                </div>
                
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="content">
                            <a class="js-acc-btn" href="#">Sor Sai</a>
                        </div>
                        <div class="account-dropdown js-dropdown">  
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div> 
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="login.php">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

      <!-- DATA TABLE-->

      <div class="container">
  <h2>Create Repair Item</h2>
  <br>
    <form class="form-horizontal" action="new_repair_back_end_step_2.php" method="post">
    <div class="form-group">
      <!-- <label class="control-label col-sm-2">Customer Tel:</label>
      <div class="col-sm-3">
        <input type="CusTel" class="form-control" id="CusTel" placeholder="Enter Phone Number" name="CusTel">
      </div> -->
      <label class="control-label col-sm-2" for="dep">Item:</label>
      <div class="col-sm-3">          
        <select type="Item" class="form-control" id="Item" name="Item">
         <option value="ABAC00100">AC-001 KEY RING (KL-16)</option>
            <option value="ABAC00200">AC-002 KEY RING ( 543 )</option>
            <option value="ABAC00255">AC-002 KEY RING</option>
         </select>
      </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="dep">Repair form number:</label>
      <div class="col-sm-3">          
        <input type="RepForm" class="form-control" id="RepForm" placeholder="Enter Repair Number" name="RepForm">
      </div>
      <label class="control-label col-sm-2" for="dep">Department Store:</label>
      <div class="col-sm-3">          
        <select type="DeptStr" class="form-control" id="DeptStr" name="DeptStr">
        <option value="1">RO บางนา</option>
          <!-- <option value="2">RO บางนา</option> -->                      
        </select>
      </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="dep">Repair details:</label>
      <div class="col-sm-3">          
        <input type="RepDet" class="form-control" id="RepDet" placeholder="Enter Repair Details" name="RepDet">
        
      </div>
      <label class="control-label col-sm-2" for="pro">Warranty type:</label>
      <div class="col-sm-3">          
        <select type="WarType" class="form-control" id="WarType" name="WarType">
        <option value="1">ในประกัน</option>
            <option value="2">ในประกัน จ่ายส่วนต่าง</option>
         </select>
      </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="dep">Date of purchase:</label>
      <div class="col-sm-3">          
        <input type="Date" class="form-control" id="DoP" name="DoP" min="2018-04-01" max="2019-04-30">
      </div>
      <label class="control-label col-sm-2" for="pro">Pro number:</label>
      <div class="col-sm-3">          
        <select type="PRO" class="form-control" id="PRO" placeholder="Enter Pro Number" name="PRO">
            <option value='null'></option>
            <option value="PR18/002">PR18/002</option>
            <option value="PR18/003">PR18/003</option>
         </select>
      </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="dep">Repair location:</label>
      <div class="col-sm-3">          
        <select type="Loc" class="form-control" id="Loc" name="Loc">
        <option value="1">พี่พงษ์</option>
            <!-- <option value="2">PLAN</option> -->
        </select>
      </div>
      <label class="control-label col-sm-2" for="pro">Date receipt from customer:</label>
      <div class="col-sm-3">          
         <input type="Date" class="form-control" id="DRFC" name="DRFC" min="2018-04-01" max="2019-04-30">
      </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="rep">Date arrived at company:</label>
      <div class="col-sm-3">          
        <input type="Date" class="form-control" id="DAC" name="DAC" min="2018-04-01" max="2019-04-30">
      </div>
      <label class="control-label col-sm-2" for="rnum">Date send to factory:</label>
      <div class="col-sm-3">          
        <input type="date" class="form-control" id="DSF" name="DSF"min="2018-04-01" max="2019-04-30">
      </div>
     </div>
     
     <div class="form-group">
      <label class="control-label col-sm-2" for="rep">Date receipt back from factory:</label>
      <div class="col-sm-3">          
        <input type="Date" class="form-control" id="DRFF" name="DRFF" min="2018-04-01" max="2019-04-30">
      </div>
      <label class="control-label col-sm-2" for="rnum">Date return to department store: </label>
      <div class="col-sm-3">          
        <input type="date" class="form-control" id="DRDS" name="DRDS"min="2018-04-01" max="2019-04-30">
     </div>
     </div>
     
     <div class="form-group">
      <label class="control-label col-sm-2" for="dep">Send method type:</label>
      <div class="col-sm-3">          
        <select type="SendType" class="form-control" id="SendType" name="SendType">
        <option value="1">EMS</option>
            <option value="2">PLAN</option>
        </select>
      </div>  
      
      <label class="control-label col-sm-2" for="pro">Person sent:</label>
      <div class="col-sm-3">          
        <input type="PerSent" class="form-control" id="PerSent" placeholder="Enter Customer Name" name="PerSent">
        
     </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="dep">Note:</label>
      <div class="col-sm-5"> 
      <textarea type="note" class="form-control" id="note" name="note" rows="4" cols="50">
      </textarea>

      </div> 
      </div>
        
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button class="au-btn au-btn-icon au-btn--blue au-btn--small">Submit</button>
      </div>
    </div>
  </form>
</div>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p> ©ALBEDO PROJECT.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->







 <!-- Jquery JS-->
 <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <!-- <script>
        function myFunction() {
            window.print();
        }
        </script> -->    
</body>
</html>>
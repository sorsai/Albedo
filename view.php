<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Products</title>

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
                                    <span class="bot-line"></span>Products</a>
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
                                <i class="fas fa-info"></i>Products</a>
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
            <!-- <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- END BREADCRUMB-->

      <!-- DATA TABLE-->
      <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                <h3 class="title-5 m-b-35">Customer Infomation</h3>
                                        <div class="dropDownSelect2"></div>          
                                    <div class="rs-select2--light rs-select2--sm">
                                       
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                   
                                </div>


                                 
                                <!-- <div class="table-data__tool-right">

                                    <input type="text" name="TelNum">

                                   <input type="submit" name=""> -->
                                    <!-- <label class="control-label col-sm-2" for="dep">Telphone Number:</label>
                                       <div class="col-sm-2">          
                                             <input type="tel" class="form-control" id="tel" placeholder="Enter Telephone Number" name="tel">
                                         </div> -->
                                         
                                      
                                    <a href="new_customer_front_end.php"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>Add Customer</button>
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small"></button></a>
                                        <!-- <i class="zmdi zmdi-plus"></i>Print</button> -->
                                    </div>
                                </div>
                            </div>
                            <!-- <form action="viewrepair.php" method="get"> 
                                            
                                              <input type="submit" name="search" value="Submit" class="au-btn au-btn-icon au-btn--blue au-btn--small"style="float: right" />
                                                <div style="overflow: hidden; padding-right: .5em;">
                                                    <div class="col-xs-2">
     
                                                    <input class="form-control" id="ex1" placeholder="Enter Customer phone Number to view repair"  type="text">
                                                </div>
                                            </div>
                                         </form> -->
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Telephone Number</th>
                                            
                                         </tr>
                                    </thead>
                                    <?php
                                        $servername = "127.0.0.1";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "master_data_test";

                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        mysqli_set_charset($conn,"utf8");

                                        $sql = "SELECT *
                                         FROM `master_data_test`.`customer`;";
                
                                        $result = $conn -> query($sql);
                                            if ($result -> num_rows > 0) {
                                                // output data of each row
                                                while($row = $result -> fetch_assoc()) {
                                    ?>
                                    <tbody>
                                        <tr class="tr-shadow">
                                            
                                            <td> 
                                                <?php 
                                                    echo $row["Fname"];
                                                ?>
                                            </td>
                                            <td>
                                                <span>
                                                <?php 
                                                    echo $row["MName"];
                                                ?>
                                                </span>
                                            </td>
                                            <td>
                                                <?php 
                                                    echo $row["Lname"];
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    echo $row["Tel"];
                                                ?>
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <!-- <a href="receipt.php"><button class="item" data-toggle="tooltip" data-placement="top" title="Print">
                                                        <i class="zmdi zmdi-print" ></i>
                                                    </button></a> -->
                                                    <!-- <a href="update_customer_front_end.php">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                    </a> -->
                                                    <a href="delete_front_end.php">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete">
                                                                
                                                            </i>
                                                        </button>
                                                    </a>
                                                    <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button> -->
                                                </div>
                                            </td>
                                            <?php 
                                                    }
                                                } else {
                                                    echo "";
                                                }
                                            ?>
                                            <tr class="spacer"> </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
<!-- <div class="container"> 
        <form class="form-horizontal" action="veiw_repair.php" method="post">
        <label> Customer's phone number: </label>
            <input type="text" name="TelNum">

                <input type="submit" name=""> -->






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
     
















































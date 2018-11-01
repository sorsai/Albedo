<!DOCTYPE html>
<html>
<head>
  <style>
table, td {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

td {
    height: 50px;
}
</style>
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
    <title>Receipt</title>
    

    
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
    <style type="text/css">
@media print {
    body {-webkit-print-color-adjust: exact;}
    #printbtn {
        display :  none;
    }
    #backtomenu {
        display : none;
    }
    #linkhref {
        display: none;
    }
    #searchid {
        display: none;
    }
    #submit {
        display: none;
    }

}
    </style>
</head>
<body>
    <div class="page-wrapper">
      

      <!-- DATA TABLE-->
     <div class="container">
        <br>
        <div class="col-md-2 text-left">
      <a id="linkhref" href="dashboard.php"><button id="backtomenu" class="au-btn au-btn--small btn-primary">Back To Menu </button></a></div>
      <div class="col-md-7 text-right">
          <div class="form-group">
               <input type="text" class="form-control" id="searchid" placeholder="Enter Repair ID"> 
            </div>
       </div>
       <center>
       <div class="col-md-1 text-left">
            <button id="submit" class="au-btn au-btn-icon au-btn--blue au-btn--small">Submit</button>
       </div>
      <div class="col-md-2 text-right"><button id="printbtn" class="au-btn au-btn-icon au-btn--green au-btn--small" value="Print" onclick="window.print();" ><i class="fa fa-print"></i> Print </div>
</center>
      <br><br><br>
      <center>
      <h1>MBP LEATHER INDUSTRES CO., LTD.</h1>
      <p style="font-family:'Designil Font', 'Helvetica', sans-serif;">174 หมู่ 1 ถ.แพรกษา ต.แพรกษา อ.เมือง สมุทรปราการ 10280</p>
      <p>โทร  388-0176-9 แฟกซ์ 388-0180 E-mail : suphannee_albedo@hotmail.com , su@albedo-co.com</p>
<br><br>
     
  <u><h3>Repair Order<h3></u> 
</center>
  <!-- <div class="row"> -->
  
  <label class="col-sm-10 text-right">Document #</label>     
<!-- </div> -->
  <div class="col-sm-12"></div>
    
    
    <label class="control-label col-sm-4 text-center ">Company:</label>
    <label class="control-label col-sm-6 text-right" for="pro"><?php echo "  Date:" . date("m/d/y");  ?></label>
    <!-- table -->
    <div class="container">             
     <table class="table table-bordered" style="width=100%">
    <thead>
      <tr>
        <th>Number (#)</th>
        <th>Receipt From Number</th>
        <th>Product code</th>
        <th>Repair Details</th>
        <th>Note</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
      <td>asdas</td>
      <td></td>
      <td>adsad</td>
      <td></td>
      <td></td>
      
      </tr>
      <tr>
        <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>sada</td>
      
      </tr>
      <tr>
        <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      </tr>

      <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      </tr>

      <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      </tr>
      
    </tbody>
  </table>
</div>
<br>
<br>


    <!-- </form> -->
    

                         <header>
                             <div class="container">
                                   <!-- <div class="row"> -->

                             <div class="form-group">
                                 <label class="control-label col-sm-8" for=n1">ลงชื่อ................................................</label>
      
                                 <label class="control-label col-sm-3" for="n2">ลงชื่อ.................................................</label>
                              <div class="col-sm-1">          
        
                             </div>
      
                             </div>
    
                                  <div class="form-group">
                                     <label class="control-label col-sm-8" for=n1">(ผู้ส่งซ้อมสินค้า)</label>
      
                                    <label class="control-label col-sm-3" for="n2">(ผู้รับซ่อมสินค้า)</label>
                                      <div class="col-sm-3">          
        
                                   </div>
      
                                      </div>
                                         </div>
              
            <!-- </div> -->
        </div>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                            <h3 style="color: #ff0000"><strong><u> หมายเหตุ</u>: หากมีค่าใช้จ่ายในการซ่อมกรุณาแจ้งให้บริษัทฯ ทราบก่อนทำการซ่อม</strong></h3>                                <!-- <p> ©ALBEDO PROJECT.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
          
            <!-- <button id="printbtn" class="au-btn au-btn-icon au-btn--green au-btn--small"onclick="myFunction()">Print</button> -->







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
    <script> function myFunction() {
             window.print();}
    </script>
  
</body>
</html>
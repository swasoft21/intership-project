<?php
define('DIR','');
require_once DIR .'../config.php';
$control=new Controller();
$admin=new Admin();
?>
 <?php
    if(isset($_SESSION['admin_id'])){?>
   
   <?php echo"<script>window.location='index.php'</script>"; ?>

        <?php } else if(isset($_SESSION['emp_id'])){
         ?>
           <?php echo"<script>window.location='index.php'</script>"; ?>

 

   <?php } else if(isset($_SESSION['m_id'])){?>

     <?php echo"<script>window.location='index.php'</script>"; ?>

      <?php }else{ ?>

        <?php echo"<script>window.location='../login.php'</script>"; ?>

         <?php } ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <!-- <link rel="stylesheet" href="css/colors.css" /> -->
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->

            <?php
            if (isset($_SESSION['admin_id'])) { ?>
            <?php include 'sidebar.php' ?>

            <?php }else if(isset($_SESSION['emp_id'])){?>
           <?php include 'empsidebar.php'?>

               <?php }else{ ?>
                <?php include 'managersidebar.php'?>

                <?php } ?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
               <?php include 'header.php' ?>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     
                     <div class="row column1">
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-smile-o yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">Welcome</p>
                                    <!-- <p class="head_couter"></p> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-users blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">123.50</p>
                                    <p class="head_couter">Number of employee</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-paper-plane green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">1,805</p>
                                    <p class="head_couter">Number of request</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-reply red_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">54</p>
                                    <p class="head_couter">My request</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <!-- graph -->
                     
                     <!-- end graph -->
                    
                     
                  </div>
                  <!-- footer -->
                 
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <!-- <script src="js/jquery.min.js"></script> -->
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <!-- <script src="js/Chart.min.js"></script> -->
      <!-- <script src="js/Chart.bundle.min.js"></script> -->
      <script src="js/utils.js"></script>
      <!-- <script src="js/analyser.js"></script> -->
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <!-- <script src="js/chart_custom_style1.js"></script> -->
   </body>
</html>
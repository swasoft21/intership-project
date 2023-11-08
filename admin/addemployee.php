<?php
define('DIR','');
require_once DIR .'../config.php';
$control=new Controller();
$admin=new Admin();
?>
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
                                    <h2>Add employee</h2>
                                </div>
                            </div>
                        </div>
                        <div class="center verticle_center full_height">
                            <div class="login_section">
                                <div class="logo_login">
                                    <div class="center">
                                        <h5 style="color:wheat">Add employee</h5>
                                    </div>
                                </div>
                                <div class="login_form">
                                    <form method="POST" action="../controller/addemp.php">
                                        <fieldset>
                                        <div class="field">
                                                <label class="label_field">Name</label>
                                                <input type="text" name="name" placeholder="Name" required />
                                            </div>
                                            <div class="field">
                                                <label class="label_field">Email Address</label>
                                                <input type="email" name="email" placeholder="E-mail" required />
                                            </div>
                                           
                                                
                                                <input type="hidden" name="password" value="pass@123" placeholder="Password" />
                                            
                                            <div class="field">
                                                <label class="label_field">Department
                                    
                                                </label>
                                                <select name="role" id="cars" required>
                                                <option value="Application">Select department</option>

                                                <option value="Application">Application</option>
                                                    <option value="IT">IT</option>
                                                    <option value="Cloud">Cloud</option>
                                                    <option value="Netword">Netword</option>
                                                </select>
                                            </div>
                                            <div class="field">
                                                <label class="label_field">Joining date</label>
                                                <input type="date" name="join" placeholder="Password" required />
                                            </div>


                                            <div class="field margin_0">
                                                <label class="label_field hidden">hidden label</label>
                                                <button class="main_bt" type="submit">ADD</button>
                                            </div>
                                        </fieldset>
                                    </form>
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
    <script src="js/analyser.js"></script>
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
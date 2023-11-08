<?php
include '../config.php';
$admin = new Admin();

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

                        <div class="col-md-12">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>View my Request</h2>
                                    </div>
                                </div>


                                <div class="table_section padding_infor_info">
                                    <!-- <a href="addemployee.php" class="btn btn-primary">Add employee</a> -->
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Department</th>
                                                    <th>Request</th>
                                                    <th>Action</th>
                                                    <th>Status </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $id=$_SESSION['emp_id'];
                                                $employee = $admin->ret("select * FROM `request` WHERE emp_id='$id' ");
                                                $i = 0;
                                                while ($m = $employee->fetch(PDO::FETCH_ASSOC)) {



                                                ?>
                                                    <tr>
                                                        <td><b></b><?php echo ++$i; ?></b></td>
                                                        
                                                        <td style="color:black;"><b><?php echo  $m['department'] ?></b></td>
                                                        <td style="color:black;"><b><?php echo  $m['reason'] ?></b></td>
                                                        
                                                        <td>

                                                            <a href="../controller/deletereq.php?id=<?php echo  $m['req_id'] ?>" class="btn btn-danger"><i class="fa fa-trash white_color"></i></a>
                                                        </td>
                                                        
                                                        
                                                        <?php if ($m['status']==0){  ?>
                                                        
                                                        <td>
                                                        <a href="#" class="btn btn-primary">Pending</a>

                                                        </td>
                                                        
                                                        <?php }else if ($m['status']==1){?>

                                                            <td colspan="2">
                                                        <a href="#" class="btn btn-primary">Accepted</a>

                                                        </td>
                                                            <?php }else if($m['status']==2){ ?>
                                                                <td>
                                                        <a href="#" class="btn btn-primary">Rejected</a>

                                                        </td>
                                                        <?php }else if ($m['status']==3){ ?>
                                                                <td>
                                                        <a href="#" class="btn btn-success">Done</a>

                                                        </td>
                                                        <?php }else{ ?>
                                                            <td>
                                                        <a href="../controller/updatereqstatus.php?id=<?php echo  $m['req_id'] ?>" class="btn btn-primary">Something wentWorng......!</a>

                                                        </td>

                                                            <?php } ?>
                                                    </tr>
                          
                        </div>
                                                <?php } ?>
                                            </tbody>
                                        </table>
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
    <script src="js/jquery.min.js"></script>
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
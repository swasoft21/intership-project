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

            <?php } else if (isset($_SESSION['emp_id'])) { ?>
                <?php include 'empsidebar.php' ?>

            <?php } else { ?>
                <?php include 'managersidebar.php' ?>

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
                                        <h2>Employee</h2>
                                    </div>
                                </div>


                                <div class="table_section padding_infor_info">
                               <?php if(isset($_SESSION['admin_id'])){?>
                                    <a href="addemployee.php" class="btn btn-primary">Add employee</a>
                                    <?php } ?>
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Join date</th>
                                                    <?php if(isset($_SESSION['admin_id'])){?>
                                                    <th>Action</th>
<?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $employee = $admin->ret("select * FROM `employee`");
                                                $i = 0;
                                                while ($m = $employee->fetch(PDO::FETCH_ASSOC)) {



                                                ?>
                                                    <tr>
                                                        <td><b></b><?php echo ++$i; ?></b></td>

                                                        <td style="color:black;"><b><?php echo  $m['emp_name'] ?></b></td>
                                                        <td style="color:black;"><b><?php echo  $m['emp_email'] ?></b></td>
                                                        <td style="color:black;"><b><?php echo  $m['emp_role'] ?></b></td>
                                                        <td style="color:black;"><b><?php echo  $m['emp_joindate'] ?></b></td>

                                                        <?php
    if(isset($_SESSION['admin_id'])){?>
                                                        <td>

                                                            <a href="../controller/deleteuser.php?id=<?php echo  $m['emp_id'] ?>" class="btn btn-danger"><i class="fa fa-trash white_color"></i></a>
                                                        </td>
                                                        <td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal<?php echo $m['emp_id']; ?>"><i class="fa fa-pencil white_color"></i></button>

                                                        </td>
                                                        <?php } else if(isset($_SESSION['m_id'])){?>


                                                            <?php } ?>

                                                    </tr>
                                                    <div class="modal fade" id="exampleModal<?php echo $m['emp_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Update details</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="../controller/updateemp.php?id=<?php echo $m['emp_id']; ?>" class="card">
                                                                        <div class="card-body">
                                                                            <div class="mb-3">
                                                                                <input type="text" name="name" value="<?php echo $m['emp_name']; ?>" class="form-control" placeholder="user Id (101)" required />
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <input type="text" name="email" value="<?php echo $m['emp_email']; ?>" class="form-control" placeholder="user Id (101)" required />
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <select name="role" id="cars" class="form-control">
                                                                                    <option value="<?php echo $m['emp_role']; ?>"><?php echo $m['emp_role']; ?></option>
                                                                                    <option value="Application">Application</option>
                                                                                    <option value="IT">IT</option>
                                                                                    <option value="Cloud">Cloud</option>
                                                                                    <option value="Netword">Netword</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <input type="date" name="join" value="<?php echo $m['emp_joindate']; ?>" class="form-control" placeholder="user Id (101)" required />
                                                                            </div>
                                                                            <div class="mt-3">
                                                                                <button type="submit" name="submit" class="btn btn-success mb-3">update</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
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
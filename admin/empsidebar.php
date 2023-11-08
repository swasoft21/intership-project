
<nav id="sidebar">
      <div class="sidebar_blog_1">
         <div class="sidebar-header">
            <div class="logo_section">
               <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
            </div>
         </div>
         <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
               <!-- <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" /></div> -->
               <div class="user_info">
               <?php
                  $empid=$_SESSION['emp_id'];
                  $employee = $admin->ret("select * FROM `employee` WHERE `emp_id`='$empid'");
                  $m = $employee->fetch(PDO::FETCH_ASSOC)
                  ?>
                  <h6><?php echo $m['emp_name'] ?>
                  </h6>
                  <!-- <p><span class="online_animation"></span> Online</p> -->
               </div>
            </div>
         </div>
      </div>
      <div class="sidebar_blog_2">

         <ul class="list-unstyled components">
            <li class="active">
               <a href="index.php"  aria-expanded="false"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>

            </li>

            <li><a href="makerequest.php"><i class="fa fa-pencil-square-o orange_color"></i> <span>make request</span></a></li>

            <li><a href="myrequest.php"><i class="fa fa-table purple_color2"></i> <span>View my request</span></a></li>

            <li><a href="viewrequest.php"><i class="fa fa-briefcase blue1_color"></i> <span>view request</span></a></li>
            <li><a href="../controller/logout.php"><i class="fa fa-sign-out blue1_color"></i> <span>Sign out</span></a></li>



         </ul>
      </div>
   </nav>


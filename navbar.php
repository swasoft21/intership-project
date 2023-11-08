<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>


<div class="py-2 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-9 d-none d-lg-block">
        <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a>
        <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> +91 9645232954</a>
        <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a>
      </div>

      <?php
      if (isset($_SESSION['admin_id'])) { ?>
        <div class="col-lg-3 text-right">
          <a href="controller/logout.php" class="small mr-3"><span class="icon-lock-alt"></span> Log Out</a>
        </div>


      <?php  } else if (isset($_SESSION['emp_id'])) { ?>

        <div class="col-lg-3 text-right">
          <a href="controller/logout.php" class="small mr-3"><span class="icon-lock-alt"></span> Log Out</a>
        </div>
      <?php } else if (isset($_SESSION['m_id'])) { ?>

        <div class="col-lg-3 text-right">
          <a href="controller/logout.php" class="small mr-3"><span class="icon-lock-alt"></span> Log Out</a>
        </div>
      <?php } else { ?>

        <div class="col-lg-3 text-right">
          <a href="login.php" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>|
          <a href="setpassword.php" class="small mr-3">Set password</a>

        </div>
      <?php } ?>



    </div>
  </div>
</div>
<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

  <div class="container">
    <div class="d-flex align-items-center">
      <div class="site-logo">
        <a href="index.php" class="d-block">
          <img src="images/images (1).png" alt="Image" width="100px" class="img-fluid">
        </a>
      </div>
      <div class="mr-auto">
        <!-- <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="index.html" class="nav-link text-right">Home</a>
                </li>
                
                <li>
                  <a href="admissions.html" class="nav-link text-right">Dashboard</a>
                </li>
                
                
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav> -->

      </div>
      <div class="ml-auto">

        <nav class="site-navigation position-relative text-right" role="navigation">
          <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">



            <?php
            if (isset($_SESSION['admin_id'])) { ?>
              <li class="active">
                <a href="index.php" class="nav-link text-right">Home</a>
              </li>
              <li>
                <a href="admin/index.php" class="nav-link text-right">Dashboard</a>
              </li>

            <?php } else if (isset($_SESSION['emp_id'])) {

            ?>
              <li class="active">
                <a href="index.php" class="nav-link text-right">Home</a>
              </li>
              <li>
                <a href="admin/index.php" class="nav-link text-right">Dashboard</a>
              </li>
            <?php  } else if (isset($_SESSION['m_id'])) { ?>
              <li class="active">
                <a href="index.php" class="nav-link text-right">Home</a>
              </li>
              <li>


                <a href="admin/index.php" class="nav-link text-right">Dashboard</a>
              </li>
            <?php } else { ?>

              <li class="active">
                <a href="index.php" class="nav-link text-right">Home</a>
              </li>


              <li>
                <a href="admin/index.php" class="nav-link text-right">Dashboard</a>
              </li>
            <?php } ?>

          </ul>
          </ul>
        </nav>

        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
      </div>


    </div>
  </div>

</header>
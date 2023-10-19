<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
  <!-- site metas -->
  <title>The style Studio</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- site icon -->
  <link rel="icon" href="images/fevicon.png" type="image/png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="../images/tss_icon.ico" type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="../admin/css/bootstrap.min.css" />
  <!-- site css -->
  <link rel="stylesheet" href="../admin/style.css" />
  <!-- responsive css -->
  <link rel="stylesheet" href="../admin/css/responsive.css" />
  <!-- color css -->
  <link rel="stylesheet" href="../admin/css/colors.css" />
  <!-- select bootstrap -->
  <link rel="stylesheet" href="../admin/css/bootstrap-select.css" />
  <!-- scrollbar css -->
  <link rel="stylesheet" href="../admin/css/perfect-scrollbar.css" />
  <!-- custom css -->
  <link rel="stylesheet" href="../admin/css/custom.css" />
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="dashboard dashboard_1">
  <div class="full_container">
    <div class="inner_container">
      <!-- Sidebar  -->
      <nav id="sidebar">
        <div class="sidebar_blog_1">
          <div class="sidebar-header">
            <div class="logo_section">
              <a href="index.html"><img class="logo_icon img-responsive" src="../images/tss_icon.ico" alt="#" /></a>
            </div>
          </div>
          <div class="sidebar_user_info">
            <img src="../images/tss.jpg" alt="The Style Studio" width="100%" />
          </div>
        </div>
        <div class="sidebar_blog_2">
          <h4>General</h4>
          <br /><br /><br /><br />
          <ul class="list-unstyled components">
            <li class="active">
              <a href="admin.php"><i class="fa fa-dashboard iColor"></i>
                <span>Dashboard</span></a>
            </li>
            <li class="active">
              <a href="admin_users.php"><i class="fa fa-users iColor"></i> <span>Users</span></a>
            </li>
            <li class="active">
              <a href="admin_App.php"><i class="fa fa-table-list iColor"></i>
                <span>Appointments</span></a>
            </li>
              <li class="active">
                <a href="admin_fb.php"
                  ><i class="fa-solid fa-comments iColor"></i>
                  <span>Feedback</span></a
                >
              </li>
            <li class="active">
              <a href="home.php"><i class="fa-solid fa-right-from-bracket iColor"></i>
                <span>Log Out</span></a>
            </li>
          </ul>
          <br /><br /><br /><br />
        </div>
      </nav>
      <div id="content">
        <!-- topbar -->
        <div class="topbar">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="full">
              <button type="button" id="sidebarCollapse" class="sidebar_toggle">
                <i class="fa fa-bars"></i>
              </button>
              <div class="text-center py-auto" style="font-size: 40px; color: #911439">
                The Style Studio
              </div>
            </div>
          </nav>
        </div>
        <br /><br /><br /><br><br>

        <div class="container">
          <h1>USERS</h1>
          <br><br>
              <table class="table">
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                </tr>

        <?php
        require_once("connect.php");

        $qry = "select * from register";
        $res = mysqli_query($cn, $qry);

        if ($res) {
          while ($row = mysqli_fetch_row($res)) {
        ?>
            
                <tr>
                  <td><?php echo $row[1]; ?></td>
                  <td><?php echo $row[2]; ?></td>
                  <td><?php echo $row[3]; ?></td>
                </tr>
            <?php
          }
        }
            ?>
              </table>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery -->
  <script src="../admin/js/jquery.min.js"></script>
  <script src="../admin/js/popper.min.js"></script>
  <script src="../admin/js/bootstrap.min.js"></script>
  <!-- wow animation -->
  <script src="../admin/js/animate.js"></script>
  <!-- select country -->
  <script src="../admin/js/bootstrap-select.js"></script>
  <!-- owl carousel -->
  <script src="../admin/js/owl.carousel.js"></script>
  <!-- chart js -->
  <script src="../admin/js/Chart.min.js"></script>
  <script src="../admin/js/Chart.bundle.min.js"></script>
  <script src="../admin/js/utils.js"></script>
  <script src="../admin/js/analyser.js"></script>
  <!-- nice scrollbar -->
  <script src="../admin/js/perfect-scrollbar.min.js"></script>
  <script>
    var ps = new PerfectScrollbar("#sidebar");
  </script>
  <!-- custom js -->
  <script src="../admin/js/chart_custom_style1.js"></script>
  <script src="../admin/js/custom.js"></script>
</body>

</html>
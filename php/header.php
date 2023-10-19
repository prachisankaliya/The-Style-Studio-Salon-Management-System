<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="../images/tss_icon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <title>The Style Studio</title>
  <style> 
    .pages a:hover{
      color: #911439;
      background-color: white;
    }
    .pages li{
      line-height: 40px;
    }
  </style>
</head>

<body>
  <nav>
    <input type="checkbox" id="checkBox" />
    <label for="checkBox" id="checkBtn"><i class="fa-solid fa-bars"></i></label>
    <img class="logo" src="../images/tss.jpg" alt="The Style Studio" />
    <ul>
      <li><a href="../php/home.php">Home</a></li>
      <li><a href="../php/about.php">About</a></li>
      <li><a href="../php/services.php">Services</a></li>
      <li><div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
    </li>
      <li class="dropdown pages2">
        <a class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
          Pages
        </a>
        <ul class="dropdown-menu pages" style="line-height: 40px;">
          <li><a class="dropdown-item" href="../php/appointment.php">Appointments</a></li>
          <li><a class="dropdown-item" href="../php/portfolio.php">Portfolio</a></li>
          <li><a class="dropdown-item" href="../php/feedback.php">Feedback</a></li>
          <li><a class="dropdown-item" href="../php/terms.php">Terms & Condition</a></li>
        </ul>
      </li>
      <li><a href="../php/contact.php">Contact</a></li>
      <li><a href="../php/login.php">Profile</a></li>
    </ul>
  </nav>

  
</body>

</html>
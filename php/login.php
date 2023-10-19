<?php

session_start();

require_once("connect.php");

$unm = $pw = "";
$unmError = $pwError = "";
$errorMsg = "";

if (isset($_POST['login'])) {
  $unm = $_POST['unm'];
  $pw = $_POST['pw'];

  if (empty($unm)) {
    $unmError = "Required*";
  }
  if (empty($pw)) {
    $pwError = "Required*";
  }

  if ($unmError == "" && $pwError == "") {
    $qry = "select * from register where unm='$unm' and pw='$pw'";
    $result = mysqli_query($cn, $qry);

    if (mysqli_fetch_row($result)) {
      $_SESSION['unm']=$unm;
      alert('You are logged in successfully!','profile.php');
    } else {
      $errorMsg = "Invalid Username or Password";
    }

    if ($unm === "admin" and $pw === "admin") {
      alert('You are logged in successfully!','admin.php');
    }
  }
}
?>

<?php
require_once("header.php");
?>

<!-- PAGE NAME -->
<div class="bgMain mb-5">
  <div class="container">
    <div class="title">
      <h1>LOGIN</h1>
      <h5 class="text-dark">
        <a href="../php/home.php" class="name text-decoration-none">Home </a>/ Login
      </h5>
    </div>
  </div>
</div>
<br /><br />
<div class="box mx-auto">
  <h3 class="mb-4">LOGIN</h3>
  <div class="text-danger mb-4"><?php echo $errorMsg ?></div>

  <form action="" method="post" class="loginForm">

    <input class="form-control form-control-lg" type="text" name="unm" placeholder="Username" value="<?php echo $unm; ?>" />
    <div class="text-danger mb-4"><?php echo $unmError ?></div>

    <input class="form-control form-control-lg" type="password" name="pw" placeholder="Password" value="<?php echo $pw; ?>" />
    <div class="text-danger mb-4"><?php echo $pwError ?></div>


    New Customer? <a href="../php/register.php">Register</a>
    <a class="leftLink" href="../php/forgotpw.php">Forgot Password?</a><br />
    <button class="myBtn px-4 py-2 mt-3" name="login">LOGIN</button>
  </form>
</div>
<br /><br /><br /><br />

<?php
require_once("footer.php");
?>
<?php

  require_once("connect.php");

  $unm=$email=$pw=$cpw=$pno="";
  $unmError=$emailError=$pwError=$cpwError=$pnoError="";
  if(isset($_POST['register'])){
    $unm=$_POST['unm'];
    $email=$_POST['email'];
    $pno=$_POST['pno'];
    $pw=$_POST['pw'];
    $cpw=$_POST['cpw'];

    if(empty($unm)){
      $unmError="Required*";
    }
    elseif(!preg_match('/^[A-Za-z]+$/',$unm)){
      $unmError="Username only contains Alphabets*";
    }

    if(empty($email)){
      $emailError="Required*";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $emailError="Please enter valid Email*";
    }

    if(empty($pno)){
      $pnoError="Required*";
    }
    elseif(strlen($pno)!==10){
      $pnoError="Please enter valid Phone Number*";
    }

    if(empty($pw)){
      $pwError="Required*";
    }
    elseif(strlen($pw)<'8'){
      $pwError="Password must contain at least 8 characters*";
    }

    if(empty($cpw)){
      $cpwError="Required*";
    }
    elseif((strcmp($pw,$cpw)!==0)){
      $cpwError="Passwords does not match*";
    }

    if(($unmError==="")&&($emailError==="")&&($pnoError==="")&&($pwError==="")&&($cpwError==="")){
      $qry="insert into register(unm,email,pno,pw) values('$unm','$email','$pno','$pw')";
      if(mysqli_query($cn,$qry)){
        alert('You are registered successfully!','login.php');
      }
      else{
        echo "Error";
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
      <h1>REGISTER</h1>
      <h5 class="text-dark">
        <a href="../php/home.php" class="name text-decoration-none">Home </a>/ Register
      </h5>
    </div>
  </div>
</div>
<br /><br />
<div class="box mx-auto">
  <h3 class="mb-4">REGISTER</h3>
  <form action="" method="post" class="loginForm">

    <input class="form-control form-control-lg" type="text" name="unm" placeholder="Username" value="<?php echo $unm; ?>" />
    <div class="text-danger mb-4"><?php echo $unmError ?></div>

    <input class="form-control form-control-lg" type="text" name="email" placeholder="Email" value="<?php echo $email; ?>" />
    <div class="text-danger mb-4"><?php echo $emailError ?></div>

    <input class="form-control form-control-lg" type="number" name="pno" placeholder="Phone Number" value="<?php echo $pno; ?>" />
    <div class="text-danger mb-4"><?php echo $pnoError ?></div>

    <input class="form-control form-control-lg" type="password" name="pw" placeholder="Password" value="<?php echo $pw; ?>" />
    <div class="text-danger mb-4"><?php echo $pwError ?></div>

    <input class="form-control form-control-lg" type="password" name="cpw" placeholder="Confirm Password"  value="<?php echo $cpw; ?>" />
    <div class="text-danger mb-4"><?php echo $cpwError ?></div>

    Already a Customer? <a href="../php/login.php">Login</a>
    <br />

    <button class="myBtn px-4 py-2 mt-3" name="register">REGISTER</button>
  </form>
</div>
<br /><br /><br /><br />

<?php
require_once("footer.php");
?>
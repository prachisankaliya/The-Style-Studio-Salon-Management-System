<?php

  require_once("connect.php");

  $unm=$pw="";
  $unmError=$pwError="";

  if(isset($_POST['reset'])){
    $unm=$_POST['unm'];
    $pw=$_POST['pw'];

    if(empty($unm)){
      $unmError="Required*";
    }
    else{
      $id="select id from register where unm='$unm'";
      $result=mysqli_query($cn,$id);
      $row=mysqli_fetch_row($result);

      if(!$row){
        $unmError="Username '$unm' does not exist*";
      }
    }

    if(empty($pw)){
      $pwError="Required*";
    }
    elseif(strlen($pw)<'8'){
      $pwError="Password must contain at least 8 characters*";
    }

    if($unmError==""&&$pwError==""){
      $qry="update register set pw='$pw' where unm='$unm'";

      if(mysqli_query($cn,$qry)){
        alert('Your password is updated successfully!','login.php');
      }
      else{
        $errorMsg="Error";
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
      <h1>FORGOT PASSWORD</h1>
      <h5 class="text-dark">
        <a href="../php/home.php" class="name text-decoration-none">Home </a>/ Forgot Password
      </h5>
    </div>
  </div>
</div>
<br /><br />
<div class="box mx-auto">
  <h3 class="mb-4">RESET PASSWORD</h3>

  <form action="" method="post" class="loginForm">

    <input class="form-control form-control-lg" type="text" name="unm" placeholder="Username" value="<?php echo $unm; ?>" />
    <div class="text-danger mb-4"><?php echo $unmError ?></div>

    <input class="form-control form-control-lg" type="password" name="pw" placeholder="Password" value="<?php echo $pw; ?>" />
    <div class="text-danger mb-4"><?php echo $pwError ?></div>

    <button class="myBtn px-4 py-2 mt-3" name="reset">RESET</button>
  </form>
</div>
<br /><br /><br /><br />

<?php
require_once("footer.php");
?>
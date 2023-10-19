<?php

  require_once("connect.php");

  $unm=$msg="";
  $unmError=$msgError="";

  if(isset($_POST['reset'])){
    $unm=$_POST['unm'];
    $msg=$_POST['msg'];

    if(empty($unm)){
      $unmError="Required*";
    }
    
    if(empty($msg)){
      $msgError="Required*";
    }
    

    if($unmError==""&&$msgError==""){
      $qry="insert into feedback(name,msg) values('$unm','$msg')";

      if(mysqli_query($cn,$qry)){
        header("location:home.php");
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
      <h1>FEEDBACK</h1>
      <h5 class="text-dark">
        <a href="../php/home.php" class="name text-decoration-none">Home </a>/ Feedback
      </h5>
    </div>
  </div>
</div>
<br /><br />
<div class="box mx-auto">
  <h3 class="mb-4">FEEDBACK</h3>

  <form action="" method="post" class="loginForm">

    <input class="form-control form-control-lg" type="text" name="unm" placeholder="Username" value="<?php echo $unm; ?>" />
    <div class="text-danger mb-4"><?php echo $unmError ?></div>

    <input class="form-control form-control-lg" type="text" name="msg" placeholder="Your Message" value="<?php echo $msg; ?>" />
    <div class="text-danger mb-4"><?php echo $msgError ?></div>

    <button class="myBtn px-4 py-2 mt-3" name="reset">SUBMIT</button>
  </form>
</div>
<br /><br /><br /><br />

<?php
require_once("footer.php");
?>
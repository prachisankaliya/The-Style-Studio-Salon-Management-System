<?php

require_once("connect.php");

$nm = $email = $pno = $person = $service = $date = "";
$nmError = $emailError = $pnoError = $personError = $serviceError = $dateError = "";
if (isset($_POST['book'])) {
  $nm = $_POST['nm'];
  $email = $_POST['email'];
  $pno = $_POST['pno'];
  $person = $_POST['person'];
  $service = $_POST['service'];
  $date = $_POST['date'];

  if (empty($nm)) {
    $nmError = "Required*";
  } elseif (!preg_match('/^[A-Za-z]+$/', $nm)) {
    $nmError = "Username only contains Alphabets*";
  }

  if (empty($email)) {
    $emailError = "Required*";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailError = "Please enter valid Email*";
  }

  if (empty($pno)) {
    $pnoError = "Required*";
  } elseif (strlen($pno) !== 10) {
    $pnoError = "Please enter valid Phone Number*";
  }

  if ($service == 'Select Service') {
    $serviceError = "Required*";
  }

  if (empty($person)) {
    $personError = "Required*";
  }

  if (empty($date)) {
    $dateError = "Required*";
  }

  if ($nmError === "" && $emailError === "" && $pnoError === "" && $personError === "" && $serviceError === "" && $dateError === "") {
    
    $qry = "insert into appointment(nm,email,pno,person,service,date) values('$nm','$email','$pno','$person','$service','$date')";
    if (mysqli_query($cn, $qry)) {
      alert('Your appointment is booked successfully!', 'services.php');
    } else {
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
      <h1>APPOINTMENT</h1>
      <h5 class="text-dark">
        <a href="../php/home.html" class="name text-decoration-none">Home </a>/ Appointment
      </h5>
    </div>
  </div>
</div>
<br /><br />
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img src="../images/appointment.jpeg" alt="The Style Studio" width="100%" />
    </div>
    <div class="col-sm-6">
      <div class="maroon maroonTitle mt-2">For Your Service</div>
      <div class="titleSize mb-4">Make An Appointment</div>
      <form action="" class="appForm" method="post">
        <div class="row mb-3">

          <div class="col-sm-6">
            <input class="form-control" type="text" name="nm" placeholder="Name" value="<?php echo $nm; ?>" />
            <div class="text-danger mb-3"><?php echo $nmError ?></div>
          </div>

          <div class="col-sm-6">
            <input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" />
            <div class="text-danger mb-3"><?php echo $emailError ?></div>
          </div>

        </div>
        <div class="row mb-4">

          <div class="col-sm-6">
            <input class="form-control" type="number" name="pno" placeholder="Phone Number" value="<?php echo $pno; ?>" />
            <div class="text-danger mb-3"><?php echo $pnoError ?></div>
          </div>

          <div class="col-sm-6">
            <input class="form-control" type="number" name="person" placeholder="Person" value="<?php echo $person; ?>" />
            <div class="text-danger mb-3"><?php echo $personError ?></div>
          </div>

        </div>
        <div class="row mb-4">

          <div class="col-sm-6">
            <select name="service" class="form-control" value="<?php echo $service; ?>">
              <option>Select Service</option>
              <option>Hair Cut</option>
              <option>Hair Style</option>
              <option>Hair Treatment</option>
              <option>Makeup</option>
              <option>Nail Extension</option>
              <option>Face Cleanup</option>
              <option>Other</option>
            </select>
            <div class="text-danger mb-3"><?php echo $serviceError ?></div>
          </div>

          <div class="col-sm-6">
            <input class="form-control" type="date" name="date" placeholder="Date" value="<?php echo $date; ?>" />
            <div class="text-danger mb-3"><?php echo $dateError ?></div>
          </div>

        </div>
        <div class="row mb-4">

          <div class="col-sm-12">
            <textarea class="form-control" name="msg" rows="2" placeholder="Your Message"></textarea>
          </div>

        </div>
        <center>
          <button class="myBtn px-4 py-2" name="book">BOOK NOW</button>
        </center>
      </form>
    </div>
  </div>
</div>
<br /><br /><br /><br />

<?php
require_once("footer.php");
?>
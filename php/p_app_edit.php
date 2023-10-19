<?php
require_once("header.php");
?>

<?php
require_once("connect.php");

$nm = $email = $pno = $person = $service = $date = "";
$nmError = $emailError = $pnoError = $personError = $serviceError = $dateError = "";
if (isset($_POST['update'])) {
    $id = $_POST['id'];
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
        $qry = "update appointment set nm='$nm',email='$email',pno='$pno',person='$person',service='$service',date='$date' where id='$id'";
        if (mysqli_query($cn, $qry)) {
            header("location:profile.php");
        } else {
            echo "Error";
        }
    }
}

if (isset($_REQUEST['id'])) {


    $qry = "select * from appointment where id=".$_REQUEST['id'];
    $result = mysqli_query($cn, $qry);
    $row = mysqli_fetch_row($result);

    if ($row) {
?>

        <br><br><br>
        <div class="box mx-auto">
            <h3 class="mb-4">Edit your Appointment</h3>
            <form action="" class="appForm" method="post">
                <div class="row mb-4">

                    <input type="hidden" name="id" value="<?php echo $row[0]; ?>" />

                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="nm" placeholder="Name" value="<?php echo $row[1]; ?>" />
                        <div class="text-danger mb-4"><?php echo $nmError ?></div>
                    </div>

                    <div class="col-sm-6">
                        <input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $row[2]; ?>" />
                        <div class="text-danger mb-4"><?php echo $emailError ?></div>
                    </div>

                </div>
                <div class="row mb-4">

                    <div class="col-sm-6">
                        <input class="form-control" type="number" name="pno" placeholder="Phone Number" value="<?php echo $row[3]; ?>" />
                        <div class="text-danger mb-4"><?php echo $pnoError ?></div>
                    </div>

                    <div class="col-sm-6">
                        <input class="form-control" type="number" name="person" placeholder="Person" value="<?php echo $row[4]; ?>" />
                        <div class="text-danger mb-4"><?php echo $personError ?></div>
                    </div>

                </div>
                <div class="row mb-4">

                    <div class="col-sm-6">
                        <select name="service" class="form-control" value="<?php echo $row[5]; ?>">
                            <option>Select Service</option>
                            <option>Hair Cut</option>
                            <option>Hair Style</option>
                            <option>Hair Treatment</option>
                            <option>Makeup</option>
                            <option>Nail Extension</option>
                            <option>Face Cleanup</option>
                            <option>Other</option>
                        </select>
                        <div class="text-danger mb-4"><?php echo $serviceError ?></div>
                    </div>

                    <div class="col-sm-6">
                        <input class="form-control" type="date" name="date" placeholder="Date" value="<?php echo $row[6]; ?>" />
                        <div class="text-danger mb-4"><?php echo $dateError ?></div>
                    </div>

                </div>
                
                <center>
                    <button class="myBtn px-4 py-2" name="update">UPDATE</button>
                </center>
            </form>
        </div>
        <br><br><br>

<?php
    }
}
?>

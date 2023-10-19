<?php
require_once("header.php");
?>

<?php
require_once("connect.php");

$unm = $email = $pw = $pno = "";
$unmError = $emailError = $pwError = $pnoError = "";
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $unm = $_POST['unm'];
    $email = $_POST['email'];
    $pno = $_POST['pno'];
    $pw = $_POST['pw'];

    if (empty($unm)) {
        $unmError = "Required*";
    } elseif (!preg_match('/^[A-Za-z]+$/', $unm)) {
        $unmError = "Username only contains Alphabets*";
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

    if (empty($pw)) {
        $pwError = "Required*";
    } elseif (strlen($pw) < '8') {
        $pwError = "Password must contain at least 8 characters*";
    }

    if (($unmError === "") && ($emailError === "") && ($pnoError === "") && ($pwError === "")) {
        $qry = "update register set unm='$unm',email='$email',pno='$pno',pw='$pw' where id='$id'";
        if (mysqli_query($cn, $qry)) {
            header("location:profile.php");
        } else {
            echo "Error";
        }
    }
}

if (isset($_REQUEST['id'])) {


    $qry = "select * from register where id=" . $_REQUEST['id'];
    $result = mysqli_query($cn, $qry);
    $row = mysqli_fetch_row($result);

    if ($row) {
?>

        <br><br><br>
        <div class="box mx-auto">
            <h3 class="mb-4">Edit Your Details</h3>
            <form action="" method="post" class="loginForm">

                <input class="form-control form-control-lg" type="hidden" name="id" value="<?php echo $row[0]; ?>" />

                <input class="form-control form-control-lg" type="text" name="unm" placeholder="Username" value="<?php echo $row[1]; ?>" />
                <div class="text-danger mb-4"><?php echo $unmError ?></div>

                <input class="form-control form-control-lg" type="text" name="email" placeholder="Email" value="<?php echo $row[2]; ?>" />
                <div class="text-danger mb-4"><?php echo $emailError ?></div>

                <input class="form-control form-control-lg" type="number" name="pno" placeholder="Phone Number" value="<?php echo $row[3]; ?>" />
                <div class="text-danger mb-4"><?php echo $pnoError ?></div>

                <input class="form-control form-control-lg" type="password" name="pw" placeholder="Password" value="<?php echo $row[4]; ?>" />

                <button class="myBtn px-4 py-2 mt-3" name="update">UPDATE</button>
            </form>
        </div>
        <br><br><br>

<?php
    }
}
?>


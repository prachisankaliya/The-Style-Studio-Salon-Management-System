<?php

session_start();
require_once("connect.php");

?>

<?php
require_once("header.php");
?>

<?php

if (isset($_SESSION['unm'])) {
    $unm = $_SESSION['unm'];

    $qry = "select * from register where unm='$unm'";
    $result = mysqli_query($cn, $qry);
    $row = mysqli_fetch_row($result);

    if ($row) {

?>

        <br><br><br><br>
        <center>
            <h1 class="text-center" style="border-bottom:3px solid #911439;padding-bottom: 10px;width: fit-content;">Your Details</h1>
            <br><br>
            <div class="container">
                <table border class="table">
                    <tr>
                        <th style="color:#911439;">Username</th>
                        <th style="color:#911439;">Email</th>
                        <th style="color:#911439;">Phone No</th>
                        <th style="color:#911439;">Password</th>
                        <th style="color:#911439;">Actions</th>
                    </tr>
                    <tr>
                        <th><?php echo $row[1] ?></th>
                        <th><?php echo $row[2] ?></th>
                        <th><?php echo $row[3] ?></th>
                        <th><?php echo $row[4] ?></th>
                        <th><a href="p_user_edit.php?id=<?php echo $row[0]; ?>"><i class="fa-solid fa-pen-to-square text-dark"></i></a></th>
                    </tr>
                </table>
            </div>
        </center>
        <br><br><br><br>

<?php
    }
}
?>

<br><br><br><br>
<center>
    <h1 class="text-center" style="border-bottom:3px solid #911439;padding-bottom: 10px;width: fit-content;">Your Appointments</h1>
    <br><br>
    <div class="container">
        <table border class="table">
            <tr>
                <th style="color:#911439;">Name</th>
                <th style="color:#911439;">Email</th>
                <th style="color:#911439;">Phone No</th>
                <th style="color:#911439;">Person</th>
                <th style="color:#911439;">Service</th>
                <th style="color:#911439;">Date</th>
                <th style="color:#911439;" colspan=2>Actions</th>
            </tr>

            <?php

            if (isset($_REQUEST['id'])) {
                $qry2 = "delete from appointment where id=" . $_REQUEST['id'];
                if (mysqli_query($cn, $qry2)) {
                    
                } else {
                    echo "Something Went Wrong!";
                }
            }

            if (isset($_SESSION['unm'])) {
                $unm = $_SESSION['unm'];

                $qry = "select * from appointment where nm='$unm'";
                $result = mysqli_query($cn, $qry);
                

                if ($result) {
                    while($row = mysqli_fetch_row($result)){

            ?>

                    <tr>
                        <th><?php echo $row[1] ?></th>
                        <th><?php echo $row[2] ?></th>
                        <th><?php echo $row[3] ?></th>
                        <th><?php echo $row[4] ?></th>
                        <th><?php echo $row[5] ?></th>
                        <th><?php echo $row[6] ?></th>
                        <th><a href="p_app_edit.php?id=<?php echo $row[0]; ?>"><i class="fa-solid fa-pen-to-square text-dark"></i></a>
                        <td><a href="../php/profile.php?id=<?php echo $row[0]; ?>"><i class="fa-solid fa-trash" style="color:black"></i></a></td>
                        </th>
                    </tr>

                <?php
                    }
                } else {
                ?>
                    <h1>No Appointments Found!</h1>
            <?php
                }
            }
            ?>
        </table>
    </div>
</center>
<br><br><br><br>
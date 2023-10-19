<?php

    $cn=mysqli_connect('localhost','root','','tss');

    if(!$cn){
        die("Something Went Wrong".mysqli_connect_error());
    }

    function alert($message,$location) {
        echo "<script>
            alert('$message');
            window.location.href='$location';
        </script>";
   }

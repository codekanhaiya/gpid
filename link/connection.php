<?php

$username = "root";
$password = "";
$server = "localhost";
$database = "gpid";

$con = mysqli_connect($server,$username,$password,$database);

if($con){
    ?>

    <script>
        alert('Database Connection Successful');
    </script>

    <?php
}else{
    die("Database disconnected".mysqli_connect_error());
    exit;
}

?>
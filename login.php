<?php

$username = $_POST['username'];
// $password = $_POST['password'];
$database = $_POST['databasename'];


$server = "localhost";
$password = NULL;

$con = mysqli_connect($server,$username,$password,$database);

if($con){
        ?>
        <!DOCTYPE html>
            <html>
                <head>
                    <meta charset="UTF-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                    <title>Admin Login</title>
                    <link href="css/adminLogin.css" rel="stylesheet"/>
                    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
                    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
                </head>
                <body>
                    <div class="main_div">
                        <div class="box">
                            <h1 style="text-align:left">Admin:</h1>
                            <a href="admindatabase.php" style="position:relative">
                            <input type="submit"  value="OK"/></a>
                        </div>
                    </div>
                </body>
            </html>
        <?php
    }
    else
    {
        ?>
            <script>
                alert('Please enter correct details!');
            </script>
        <?php
       
        // die("Database disconnected".mysqli_connect_error());
    }

?>
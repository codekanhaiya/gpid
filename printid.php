<?php

include 'link/connection.php';

$ids = $_GET['id'];

$sql = "SELECT * FROM students WHERE sno='$ids'";

try {
    $result = mysqli_query($con, $sql);
    if ($result) {

        $row = mysqli_fetch_assoc($result);
        if (!$row) {
            echo "Error !";
        }

?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>Identy Card</title>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="css/upIDstyle.css" rel="stylesheet" />
            <link rel="stylesheet" href="css/loading.css" />
        </head>

        <body>
            <div class="container-fluid d-flex justify-content-center">
                <h1><i class="fa fa-print" aria-hidden="true" onclick="myFun()"></i></h1>
            </div>

            <div class="container-fluid d-flex justify-content-center">

                <div class="row">
                    <div class="card">
                        <div class="header">
                            <div class="logo"> <img src="img/collegeLogo.png" /></div>
                            <div class="college-name">
                                GOVERNMENT POLYTECHNIC AADAMPUR</br>TARABGANJ GONDA - 271401</br>INSTITUTE CODE - 2230
                            </div>
                        </div>

                        <div class="details">

                            <div class="imagepart" style="padding-top:1px;">
                                <label class="enroll"><?php echo $row['id'] ?></label>
                                <div class="img">
                                    <?php
                                    echo "<img src='" . $row['imageFile'] . "' width='100%' height='100%' />";
                                    ?>
                                </div>
                                <label class="validation">Session: <?php echo $row['session'] ?></label>
                                
                                <div>
                                    <img style="width:80px; margin-top:1px;" src="img/sign.png" alt="Signature" />
                                </div>

                                <div>
                                    <label style="font-size:10px; margin-left:20px;">PRINCIPAL</label>
                                </div>
                            </div>
                            <div class="stdDet">
                                <table>

                                    <tr>
                                        <td><label class="value1">Name</label></td>
                                        <td><label class="colon">:</label></td>
                                        <td><label class="value2"><?php echo $row['name'] ?></label></td>
                                    </tr>

                                    <tr>
                                        <td><label class="value1">D.O.B.</label></td>
                                        <td><label class="colon">:</label></td>
                                        <td><label class="value2"><?php echo $row['dob'] ?></label></td>
                                    </tr>

                                    <tr>
                                        <td><label class="value1">Mob.No.</label></td>
                                        <td><label class="colon">:</label></td>
                                        <td><label class="value2"><?php echo $row['contact'] ?></label></td>
                                    </tr>

                                    <tr>
                                        <td><label class="value1">Branch</label></li>
                                        </td>
                                        <td><label class="colon">:</label></td>
                                        <td><label class="value2"><?php echo $row['branch'] ?></label></td>
                                    </tr>

                                    <tr>
                                        <td><label class="value1">Father Name</label></td>
                                        <td><label class="colon">:</label></td>
                                        <td><label class="value2"><?php echo "Mr. ".$row['Fname'] ?></label></td>
                                    </tr>

                                    <tr>
                                        <td><label class="value1">Address</label></td>
                                        <td><label class="colon">:</label></td>
                                        <td><label class="value2"><?php echo $row['address'] ?></label></td>
                                    </tr>

                                </table>



                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <script>
                function myFun() {
                    window.print();
                }
            </script>
        </body>

        </html>

    <?php

    }
} catch (Exception $e) {
    ?>

    <script>
        alert('Plese try again!');
    </script>

<?php
}

?>
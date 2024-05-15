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
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="css/IDstyle.css" rel="stylesheet" />
            <link rel="stylesheet" href="css/loading.css" />
        </head>

        <body>
            <div class=main_div>
                <h1><i class="fa fa-print" aria-hidden="true" onclick="myFun()"></i></h1>
                <div class="main">

                    <div class="front">

                        <div class="college">GOVT. POLYTECHNIC AADAMPUR</br>TARABGANJ GONDA - 271401</br>INST. CODE-2230</div>

                        <img class="college1" src="img/collegeLogo.png" />

                        <div class="frame">
                            <?php
                            echo "<img src='" . $row['imageFile'] . "' width='100%' height='100%' />";
                            ?>
                        </div>

                        <div class="info1">

                            <p> <?php echo $row['name'] ?> </p>

                            <table>

                                <tr>
                                    <td><label class="value1">Enrollment</label></td>
                                    <td><span class="colon">:</span></td>
                                    <td><label class="value2"><?php echo $row['id'] ?></label></td>
                                </tr>

                                <tr>
                                    <td><label class="value1">Branch</label></li>
                                    </td>
                                    <td><span class="colon">:</span></td>
                                    <td><label class="value2"><?php echo $row['branch'] ?></label></td>
                                </tr>

                                <tr>
                                    <td><label class="value1">Session</label></td>
                                    <td><span class="colon">:</span></td>
                                    <td><label class="value2"><?php echo $row['session'] ?></label></td>
                                </tr>

                                <tr>
                                    <td><label class="value1">Father-Name</label></td>
                                    <td><span class="colon">:</span></td>
                                    <td><label class="value2"><?php echo "Mr. " . $row['Fname'] ?></label></td>
                                </tr>

                            </table>

                        </div>

                        <p class="sign">(PRINCIPAL)</p>
                        <img src="img/sign.png" alt="Signature" id="sign" />

                    </div>

                    <div class="back">

                        <div class="info2">

                            <table>
                                
                                <tr>
                                    <td><label class="value1">D.O.B.</label></td>
                                    <td><span class="colon">:</span></td>
                                    <td><label class="value2"><?php echo $row['dob'] ?></label></td>
                                </tr>

                                <tr>
                                    <td><label class="value1">Mob.No.</label></td>
                                    <td><span class="colon">:</span></td>
                                    <td><label class="value2"><?php echo $row['contact'] ?></label></td>
                                </tr>

                                <tr>
                                    <td><label class="value1">Email</label></td>
                                    <td><span class="colon">:</span></td>
                                    <td><label class="value2"><?php echo $row['email'] ?></label></td>
                                </tr>

                                <tr>
                                    <td><label class="value1">Address</label></td>
                                    <td><span class="colon">:</span></td>
                                    <td><label class="value2"><?php echo $row['address'] ?></label></td>
                                </tr>

                            </table>
                        </div>
                        <div class="infoImp">
                            In Case this card is lost/found, kindly inform/return to:<br>
                            Govt. Polytechnic Aadampur, Tarabganj, Gonda - 271401
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
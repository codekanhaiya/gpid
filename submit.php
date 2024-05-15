<html>

<head>
    <title>Registration Form</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Oswald|Montserrat">
    <link rel="stylesheet" href="css/RegisterationStyles.css" />
    <link rel="stylesheet" href="css/submitStyles.css" />
</head>

<body>
    <?php

    session_start();

    $db_hostname = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "gpid";

    try {

        $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
        if (!$conn) {
            echo "Connection Failed: " . mysqli_connect_error();
            exit;
        }

        $enroll = strtoupper($_POST['enroll']);
        $name = strtoupper($_POST['name']);

        $dd = $_POST['dd'];
        $mm = $_POST['mm'];
        $yyyy = $_POST['yyyy'];

        $dob = $dd . " " . strtoupper(substr($mm, 0, 3)) . " " . $yyyy;

        $email = $_POST['email'];
        $special = explode("@", $email);
        $ct = count($special);
        $p1 = $special[$ct - 2];
        $p2 = $special[$ct - 1];

        $modifyEmail = $p1 . " @" . $p2;

        $fname = ucwords(strtolower(trim($_POST['fname'])));
        $mob = $_POST['contact'];
        $add = ucwords(strtolower(trim($_POST['address'])));
        // $sess = "2022-25";
        $sess = $_POST['session'];
        $year = $_POST['class'];
        $branch = $_POST['branch'];

        $file = $_FILES['imageFile']['name'];
        $ext = explode(".", $file);
        $count = count($ext);

        $ref = $_POST['referrer'];


        $checkQuery = "SELECT * FROM enrolltable WHERE enroll='$enroll'";

        $resultant = mysqli_query($conn, $checkQuery);

        $rowValue = mysqli_fetch_assoc($resultant);

        // $rowValue is used for checking valid student
        if ($rowValue) {

            if ($ext[$count - 1] == 'jpg' || $ext[$count - 1] == 'jpeg' || $ext[$count - 1] == 'png' || $ext[$count - 1] == 'JPEG' || $ext[$count - 1] == 'JPG' || $ext[$count - 1] == 'PNG') {

                $tmp = $_FILES['imageFile']['tmp_name'];
                $folder = "dp/".date("d").time().$file;

                $sql = "INSERT into students(id,name,dob,email,Fname,contact,address,session,class,branch,imageFile,referrer)
                VALUES('$enroll','$name','$dob','$modifyEmail','$fname','$mob','$add','$sess','$year','$branch','$folder','$ref')";

                $_SESSION['user_id'] = $enroll;
                $_SESSION['name'] = $name;

                try {   //it is used for PRIMARY KEY restriction.
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "<br/>Congratulation " . $name . " Registration Successful !";
    ?>
                        <a id="btn" href="userviewid.php">View Your ID Card</a>
                    <?php
                    }else{
                        ?>
                        <script>
                            alert("You are already registered !"); 
                      </script> 
                      <?php
                      exit;
                    }
                } catch (Exception $e) {
                    ?>
                    <script>
                        alert('Registration Unsuccessful, please try again!');
                    </script>
            <?php
                    exit;
                }

                move_uploaded_file($tmp, $folder); //file will come in "dp" folder when Data is not redundent.  
                mysqli_close($conn);
            } else {
                echo "Sorry!<br/>This file type is not allowed.<br/>Plese upload only 'jpeg', 'jpg', 'png' file format.";
                exit;
            }
        } else {
            ?>
            <script>
                alert("You can't register due to privacy!");
            </script>
        <?php
            exit;
            header("location:RegistrationForm.php");
        }
    } catch (Exception $e) {
        ?>
        <script>
            alert("Database is not connected!")
        </script>
    <?php
    }
    ?>
</body>

</html>
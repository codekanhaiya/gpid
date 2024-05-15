<?php


include 'link/connection.php';



$enroll = $_POST['enrollment'];
$class = $_POST['class'];



$insertQuery = "INSERT into enrolltable (enroll, class) VALUES('$enroll', '$class')";



try{ 

    $result = mysqli_query($con,$insertQuery);

    if($result){

        ?>



        <script>

            alert('Data inserted successfully!');

        </script>

    

        <?php



}

}catch(Exception $e){



    ?>



    <script>

        alert('Unfortunately data not inserted!');

    </script>



    <?php

    

    header('location:adminSetting.php');

}



?><?php



include 'link/connection.php';



$enroll = $_POST['enrollment'];



$insertQuery = "INSERT into enrolltable (enroll) VALUES('$enroll')";



try{ 

    $result = mysqli_query($con,$insertQuery);

    if($result){

        ?>



        <script>

            alert('Data inserted successfully!');

        </script>

    

        <?php



}

}catch(Exception $e){



    ?>



    <script>

        alert('Unfortunately data not inserted!');

    </script>



    <?php

    

    header('location:adminSetting.php');

}



?><?php



include 'link/connection.php';



$enroll = $_POST['enrollment'];



$insertQuery = "INSERT into enrolltable (enroll) VALUES('$enroll')";



try{ 

    $result = mysqli_query($con,$insertQuery);

    if($result){

        ?>



        <script>

            alert('Data inserted successfully!');

        </script>

    

        <?php



}

}catch(Exception $e){



    ?>



    <script>

        alert('Unfortunately data not inserted!');

    </script>



    <?php

    

    header('location:adminSetting.php');

}



?>
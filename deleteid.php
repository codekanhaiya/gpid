<?php

include 'link/connection.php';

$ids = $_GET['id'];

$deleteQuery = "DELETE FROM students WHERE sno='$ids'";

try {
    $result = mysqli_query($con, $deleteQuery);
    if ($result) {
?>

        <script>
            alert('Data deleted successfully!');
        </script>

    <?php

    }
} catch (Exception $e) {

    ?>

    <script>
        alert('Unfortunately data not deleted!');
    </script>

<?php

}
header('location:database.php');

?>
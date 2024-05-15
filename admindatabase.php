<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login</title>
  <link href="css/database.css" rel="stylesheet" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="main_div">
    <div class="box">
      <h1>Database:</h1>

      <table>
        <thead>
          <tr>
            <th>Serial No.</th>
            <th>Enrollment</th>
            <th>Name</th>
            <th>Class</th>
            <th colspan="2">Operation</th>
          </tr>
        </thead>

        <tbody>

          <?php

          include 'link/connection.php';

          $selectQuery = "SELECT * FROM students";

          $query = mysqli_query($con, $selectQuery);

            $i=0;
          while ($res = mysqli_fetch_array($query)) {
          ?>

            <tr>
              <td><?php echo ++$i  ?></td>
              <td><?php echo $res['id']  ?></td>
              <td><?php echo $res['name']  ?></td>
              <td><?php echo $res['class']  ?></td>
              <td><a href="deleteid.php?id=<?php echo $res['sno']  ?>"><i class="fa fa-trash" aria-hidden="true" style="color: #f43b03;"></i></a></td>
              <td><a href="printid.php?id=<?php echo $res['sno']  ?>"><i class="fa fa-print" aria-hidden="true" style="color: #0497db;"></i></a></td>
            </tr>

          <?php
          }

          ?>

        </tbody>
      </table>

    </div>
  </div>
</body>
</html>
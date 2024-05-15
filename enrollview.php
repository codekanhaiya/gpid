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
      <h1>Enrollment Table:</h1>
    
      <table>
        <thead>
          <tr>
            <th>Serial No.</th>
            <th>Enrollment</th>
             <th>Class</th> 
          </tr>
        </thead>

        <tbody>

          <?php

          include 'link/connection.php';
        

          $selectQuery = "SELECT * FROM enrolltable";

          $query = mysqli_query($con, $selectQuery);

            $i=0;
          while ($res = mysqli_fetch_array($query)) {
          ?>

            <tr>
              <td><?php echo ++$i  ?></td>
              <td><?php echo $res['enroll']  ?></td>
              <td><?php echo $res['class'] ?></td>
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
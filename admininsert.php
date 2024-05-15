<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin Login</title>
        <link href="css/adminLogin.css" rel="stylesheet"/>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="main_div">
            <div class="box">
                <h1>Admin:</h1>
                    <form method="post" action="insert.php">
                        
                        <div class="inputBox">
                            <input type="text" name="enrollment" autocomplete="off" maxlength="15" required/>
                            <label>Enrollment Number</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="class" autocomplete="off" required/>
                            <label>Class</label>
                        </div>

                        <input type="submit" name="login" value="insert"/>
                        
                        <a href="enrollview.php"><i class="fa fa-cog fa-spin" style="color: #fff;"></i></a>
                    </form>
            </div>
        </div>
    </body>
</html>
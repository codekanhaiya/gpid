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

                    <form method="post" action="login.php">

                        

                        <div class="inputBox">

                            <input type="text" name="username" autocomplete="off" required/>

                            <label>username</label>

                        </div>



                        <div class="inputBox">

                            <input type="text" name="databasename" autocomplete="off" required/>

                            <label>Database</label>

                        </div>



                        <div class="inputBox">

                            <input type="password" name="password" autocomplete="off" required/>

                            <label>password</label>

                        </div>



                        <input type="submit" name="login" value="login"/>



                        <a href="admininsert.php"><i class="fa fa-cog fa-spin" style="color: #fff;"></i></a>



                    </form>

            </div>

        </div>

    </body>

</html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <h1>Login</h1>

                        <div class="field input-field">   
                            Username : <input class="textcolumn" type="text" name="username" id="username"/> </br>
                        </div>

                        <div class="field input-field">
                        Password : <input class="textcolumn" type="password" name="password" id="password"/> </br>
                        </div>
                        
                        <div class="field button-field">
                        <input style="width:270px;" class="textcolumn" type="submit" value="Log in"/>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
<?php

?>
<html>
    <style>
    .textcolumn {
        border-radius:10px;
        height : 35px;
        width : 200px;
        margin : 5px;
    }
    .form-holder {
        
    }
    </style>
    <center>
    <div class="">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <h1>Login</h1>    
            Username : <input class="textcolumn" type="text" name="username" id="username"/> </br>
            Password : <input class="textcolumn" type="password" name="password" id="password"/> </br>
            <input style="width:270px;" class="textcolumn" type="submit" value="Log in"/>
        </form>
    </div>
    </center>
</html>

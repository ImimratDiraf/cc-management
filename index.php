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
    </style>
    <center>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <h1>Login</h1>    
        <input class="textcolumn" type="text" name="username" id="username"/> </br>
        <input class="textcolumn" type="password" name="password" id="password"/>
        </form>
    </center>
</html>

<?php
include('./config/conf.php');

//declare and initiate
$user = "";
$pass = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!empty($_POST['username']) || $_POST['username'] != "" || !empty($_POST['password']) || $_POST['password'] != "")
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        checkAuthent($user, $pass, $conn);
    } else {
        echo "<script>alert('Please fill in the details!');</script>";
    }
}

function checkAuthent($u, $p, $conn)
{
    //echo $u . "" . $p; //testing purpose
    if (!$conn) {
        //echo "naisu"; //test purpose
        echo "<script>alert('Something went wrong! please reload!');</script>";
        echo "<meta http-equiv=\"refresh\" content=\"3; url='../index.php'\" />";
    } else {
        //here if connection alive
        $result = mysqli_query($conn, "SELECT id FROM user WHERE username = '".$u."' AND password = '" .$p. "'");
        if(mysqli_num_rows($result) == 0) {
            // row not found, do stuff...
            //echo "NOT FOUND ANY MATCHED!";
            echo "
            <script>
                alert('Incorrect log in details.. please try again!');
            </script>
            ";
        } else {
            //echo "FOUND!";
            
        }
    }
}

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

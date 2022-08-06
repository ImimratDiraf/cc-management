<?php
include('./config/conf.php');
session_start();

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
        echo "<meta http-equiv=\"refresh\" content=\"2; url='./index.php'\" />";
    }
}

function checkAuthent($u, $p, $conn)
{
    //echo $u . "" . $p; //testing purpose
    if (!$conn) {
        //echo "naisu"; //test purpose
        echo "<script>alert('Something went wrong! please reload!');</script>";
        echo "<meta http-equiv=\"refresh\" content=\"2; url='./index.php'\" />";
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
            //create auth sess
            $_SESSION["username"] = $u;
            $_SESSION["password"] = $p;
            echo "<script>alert('Welcome, user ".$u."!');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"2; url='./home/'\" />";
        }
    }
}

?>

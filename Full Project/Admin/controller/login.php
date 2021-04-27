




<?php



// Start PHP session at the beginning 
session_start();

// Create database connection using config file
include_once("dbconnection.php");

// If form submitted, collect email and password from form
if (isset($_POST['login'])) {
    $uname    = $_POST['uname'];
    $password = $_POST['password'];

    // Check if a user exists with given username & password
    $result = mysqli_query($mysqli, "select 'uname', 'password' from users
        where uname='$uname' and password='$password'");

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if ($user_matched > 0) {

        $_SESSION["uname"] = $uname;
        header("location: Dashboard.php");
    } else {
        echo "User name or password is not matched <br/><br/>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <!-- <?php include('Header.php');?> -->
    <form action="login.php" method="post" name="form1">
        <table width="25%">
            <tr>
                <td>User name</td>
                <td><input type="text" name="uname"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>

    <a href="ForgetPassword.php  ">Forget Password</a>
<?php include('Footer.php');?>
</body>

</html>
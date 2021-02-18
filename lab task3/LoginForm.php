<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  




<fieldset>
<legend>LOGIN</legend>
<form action="<?php echo MY_URL;?>" id="login-form" class="smart-form client-form">
    <header></header>
    <fieldset>
        <section>
            <label class="label">User Name</label>
            <label class="input"> <i class="icon-append fa fa-user"></i>
            <input type="username" pattern= " [a-zA-Z0-9]"name="username">
            <b class="tooltip tooltip-top-right"><i class="txt-color"></i> Please enter username</b></label>
        </section>

        <section>
            <label class="label">Password</label>
            <label class="input"><i class="icon-append lock"></i>
            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password">
            <b class="tooltip tooltip-top-right"><i class="txt-color"></i> Enter your password</b> </label>
            <div class="note">
                <a href="<?php echo MY_URL; ?>/forgotpassword.php">Forgot password?</a>
            </div>
        </section>

        <section>
            <label class="checkbox">
                <input type="checkbox"name="remember" checked="">
                <i></i>Stay signed in</label>
        </section>
    </fieldset>
    <footer>
      <br><br>
        <button type="submit" class="btn btn-primary">Sign in</button>

    </footer>







</form>

</fieldset>
<br>
<br>


<?php
session_start();
include("dbconnection.php");
if(isset($_POST['Submit']))
{
 $oldpass=md5($_POST['opwd']);
 $useremail=$_SESSION['login'];
 $newpassword=md5($_POST['npwd']);
$sql=mysqli_query($con,"SELECT password FROM userinfo where password='$oldpass' && email='$useremail'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update userinfo set password=' $newpassword' where email='$useremail'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>





<fieldset>
  <legend>CHANGE PASSWORD</legend>

<p ><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
<form name="chngpwd" action="" method="post" onSubmit="return valid();">

<tr height="50" >
<td>Old Password :</td>
<td><input type="password" name="opwd" id="opwd"></td>
</tr>
<br>
<tr height="50">
<td>New Passowrd :</td>
<td><input type="password" name="npwd" id="npwd"></td>
</tr>
<br>
<tr height="50" >
<td>Retype New Password :</td>
<td><input type="password" name="cpwd" id="cpwd"></td>
</tr>
<br>
<tr>

<td><input type="submit" name="Submit" value="Change Passowrd" /></td>
</tr>
<br>
</form>

</fieldset>


<?php


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 400000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}


if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";

} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>


<fieldset>
<legend>PROFILE PICTURE</legend>
<form action="/action_page.php">
  <input type="file" id="fileToUpload" name="filename">
  <input type="submit">
</form>
</fieldset>



<?php
$nameErr = $emailErr = $genderErr = $UsernameErr = $passwordErr= $DOBErr = $ConfirmpasswordErr = "";
$name = $email = $gender = $comment = $Username = $password= $dateofbirth = $Confirmpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>





<fieldset>

  <legend>REGISTRATION</legend>

<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <hr>
  <br><br>
  Email: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <hr>

  <br><br>
  User Name: <input type="text" name="Username">
  <span class="error"><?php echo $UsernameErr;?></span>
  <hr>

  <br><br>
  Password:<input type="password" name="password">
  <span class="error"><?php echo $passwordErr;?></span>
  <hr>

  <br><br>

  Confirm Password:<input type="password" name="Confirmpassword">
  <span class="error"><?php echo $ConfirmpasswordErr;?></span>
  <hr>
  <fieldset>
  <legend>Gender</legend>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  </fieldset>
  <br><br>

  <fieldset>
    <legend>DATE OF BIRTH</legend>
  
  <input type="date" id="birthday" name="<?php echo $dateofbirth;?>"><br>
   <span class="error">* <?php echo $DOBErr;?></span>
  </fieldset>
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>
</fieldset>







</body>
</html>
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $DOBErr= $BLOODgrpErr= $DEGREErr="" ;
$name = $email = $gender = $dateofbirth= $degree = $bloodgrp= $selected= $countDegree="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

if(!empty($_POST["degree"])){
    $countDegree = count($_POST["degree"]);
    if($countDegree<2){
      $degreeErr = "At least two of them must be selected";
    }
  }else{
     $degreeErr = "At least two of them must be selected";
  }



    
  
if (empty($_POST["dateofbirth"])) {
    $dateofbirth = " can not be empty ";
  } else {
    $dateofbirth = test_input($_POST["dateofbirth"]);

}
  

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }



if (empty($_POST["bloodgrp"])) {
    $bloodgrp = "must select one";
  } else {
    $bloodgrp = test_input($_POST["bloodgrp"]);
  }



if(isset($_POST['submit'])){
if(!empty($_POST['checkbox'])){

foreach($_POST['checkbox'] as $selected){
echo $selected."</br>";
}
}
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
<p><span class="error">* required field</span></p>
<fieldset>
  <legend>NAME</legend>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
   <input type="text" name="name" value="<?php echo $name; ?>" >
  <span class="error">* <?php echo $nameErr;?></span>
   </fieldset>
  <br><br>
  


  <fieldset>
    <legend>EMAIL</legend>
   <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  </fieldset>
  <br><br>

<fieldset>
    <legend>DATE OF BIRTH</legend>
  
  <input type="date" id="birthday" name="<?php echo $dateofbirth;?>"><br>
   <span class="error">* <?php echo $DOBErr;?></span>
  </fieldset>
  
  


<br>
<br>


  
  


  <fieldset>
  <legend>GENDER</legend>

  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?>  value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>

</fieldset>

  <br>
  <br>


<fieldset>
  <legend>DEGREE</legend>
  <input type="checkbox" name="degree" value="SSC">SSC
  <input type="checkbox" name="degree" value="HSC">HSC
  <input type="checkbox" name="degree" value="BSc">BSc
  <input type="checkbox" name="degree" value="MSc">MSc
  <span class="error">* <?php echo $DEGREErr;?></span>

</fieldset>


<br>
<br>



<fieldset>
  <legend>BLOOD GROUP</legend>
  <select>
    <option >select</option>
  <option  value="A+">A+</option>
  <option   value="A-">A-</option>
  <option   value="B+">B+</option>
  <option  value="O+">O+</option>
  <option  value="O-">O-</option>
  <option  value="AB+">AB+</option>
  <option  value="AB-">AB-</option>
  <span class="error">* <?php echo $BLOODgrpErr;?></span>
</select>
</fieldset>

  <br><br>






    
</form>

</fieldset>
<br>
<br>
<input type="submit" name="submit" value="Submit">
<br>
<br>
<br>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dateofbirth;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $bloodgrp;

?>

</body>
</html>

<?php
error_reporting(0);
include("dbconnection.php");
$dt = date("Y-m-d");
$tim = date("H:i:s");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="M_Adnan" />

<title>Online Hospital Management System</title>


<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />


<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">


<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">


<script src="js/vendors/modernizr.js"></script>

<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>


<div id="loader">
  <div class="position-center-center">
    <div class="cssload-thecube">
      <div class="cssload-cube cssload-c1"></div>
      <div class="cssload-cube cssload-c2"></div>
      <div class="cssload-cube cssload-c4"></div>
      <div class="cssload-cube cssload-c3"></div>
    </div>
  </div>
</div>


<div id="wrap">
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>Welcome To Online Hospital Management System</p>
        </div>
        <div class="col-sm-6">
          <div class="social-icons"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-dribbble"></i></a> <a href="#."><i class="fa fa-instagram"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <header class="header-style-2">
    <div class="container">
      <div class="logo"> <a href="index.html"><!-- <img src="images/logo.png" alt="" style="height: 52px;"></a> --> </div>
      <div class="head-info">
        <ul>
          <li> <i class="fa fa-phone"></i>
            <p>+8801706646935
              </p>
          </li>
          <li> <i class="fa fa-envelope-o"></i>
            <p>hello@abc.com<br>
              info@abc.com</p>
          </li>
          <li> <i class="fa fa-map-marker"></i>
            <p>Bashundara,
             Dhaka</p>
          </li>
        </ul>
      </div>
    </div>
    
  
    <nav class="navbar ownmenu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        
        
        <div class="collapse navbar-collapse" id="nav-open-btn">
          <ul class="nav">
            <li> <a href="index.php">Home </a></li>
            <li><a href="about.php">About</a></li>            
            <li><a href="patientappointment.php">Appointment </a></li>
            <li><a href="contact.php">Contact </a></li>
            <li><a href="register.php">Sign up </a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In </a>
              <ul class="dropdown-menu multi-level" style="display: none;">
                <li><a href="adminlogin.php">Admin</a></li>
                <li><a href="doctorlogin.php">Doctor</a></li>
                <li><a href="patientlogin.php">Patient </a></li>
                <li><a href="nurselogin.php">Nurselogin </a></li>
                
              </ul>
            </li>           
          </ul>
        </div>
      </div>
    </nav>
  </header>
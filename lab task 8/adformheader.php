<?php
session_start();
error_reporting(0);
include("dbconnection.php");
$dt = date("Y-m-d");
$tim = date("H:i:s");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Online Hospital Management System ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<!-- JQuery DataTable Css -->
<!-- <link href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
 <link href="assets/css/main.css" rel="stylesheet">


<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="assets/css/themes/all-themes.css" rel="stylesheet" />
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body class="theme-cyan">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-cyan">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
   
    
    <div class="overlay"></div>
   
    <nav class="navbar clearHeader">
        <div class="col-12">
            <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand"
                    href="#">Online Hospital Management system</a> </div>
            <ul class="nav navbar-nav navbar-right">
                
                <li>
                    <a data-placement="bottom" title="Logout" href="logout.php"><i
                            class="zmdi zmdi-sign-in"></i></a>
                </li>               

            </ul>
        </div>
    </nav>
    
    <section>
    
        <aside id="leftsidebar" class="sidebar">
            <?php
                if(isset($_SESSION[adminid]))
                {
            ?>
            
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active open"><a href="adminaccount.php"><i
                                class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>


                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-calendar-check"></i><span>Profile</span> </a>
                        <ul class="ml-menu">
                            <li><a href="adminprofile.php">Admin Profile</a></li>
                            <li><a href="adminchangepassword.php">Change Password</a></li>
                            <li><a href="admin.php">Add Admin</a></li>
                            <li><a href="viewadmin.php">View Admin</a></li>
                        </ul>
                    </li>

                  
            <?php }?>


           
            <?php
            if(isset($_SESSION[doctorid]))
            {
            ?>
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active open"><a href="doctoraccount.php"><i
                                class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>


                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-calendar-check"></i><span>Profile</span> </a>
                        <ul class="ml-menu">
                            <li><a href="doctorprofile.php">Profile</a></li>
                            <li><a href="doctorchangepassword.php">Change Password</a></li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a>
                        <ul class="ml-menu">
                            <li><a href="viewappointmentpending.php" style="width:250px;">View Pending Appointments</a>
                            </li>
                            <li><a href="viewappointmentapproved.php" style="width:250px;">View Approved
                                    Appointments</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-account-add"></i><span>Doctors</span> </a>
                        <ul class="ml-menu">
                           
                            <li><a href="doctortimings.php">Add Visiting Hour</a></li>
                            <li><a href="viewdoctortimings.php">View Visiting Hour</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-account-o"></i><span>Patients</span> </a>
                        <ul class="ml-menu">
                            <li><a href="viewpatient.php">View Patient</a>
                            </li>
                        </ul>
                    </li>

                    <li> <a href="viewdoctorconsultancycharge.php"><i class="zmdi zmdi-copy"></i><span>Income
                                Report</span> </a></li>


                    <li> <a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-settings-square"></i><span>Service</span> </a>
                        <ul class="ml-menu">
                            <li><a href="viewtreatmentrecord.php">View Treatment Records</a></li>
                            <li><a href="viewtreatment.php">View Treatment</a></li>
                        </ul>
                    </li>

                </ul>
            </div>

            <?php }; ?>
          




         
            <?php
            // if(isset($_SESSION[patientid]))
            {
            ?>
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active open"><a href="patientaccount.php"><i
                                class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>


                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-calendar-check"></i><span>Profile</span> </a>
                        <ul class="ml-menu">
                            <li><a href="patientprofile.php">View Profile</a></li>
                            <li><a href="patientchangepassword.php">Change Password</a></li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a>
                        <ul class="ml-menu">
                            <li><a href="patientappointment.php" >Add Appointment</a></li>
                            <li><a href="viewappointment.php" >View Appointments</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-account-add"></i><span>Prescription</span> </a>
                        <ul class="ml-menu">
                            <li><a  href="patviewprescription.php">View Prescription Records</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-account-o"></i><span>Treatment</span> </a>
                        <ul class="ml-menu">
                            <li><a href="viewtreatmentrecord.php">View Treatment Records</a></li>
                    </li>
                </ul>
                </li>


                </ul>
            </div>

            <?php }; ?>
            
        </aside>
        
     
    </section>
     <section class="content home">

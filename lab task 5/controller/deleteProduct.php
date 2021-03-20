<?php 

require_once 'Model.php';

if (deleteStudent($_GET['id'])) {
    header('Location: ../display.php');
}

 ?>
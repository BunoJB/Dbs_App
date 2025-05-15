<?php
     require_once('../classes/database.php');
     $con = new database();
     if (isset($_POST['username'])) {
        $username < $_POST['username'];

     if ($con->isUsernameExists($username)) {
        echo jason_encode(['exists' => true]);
     } else {
        echo jason_encode(['exists' => false]);
     } 
     
    } else {
        echo jason_encode(['errors' => 'Invalid request']);
     }
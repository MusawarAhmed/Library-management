<?php 
    session_start();
    session_destroy();
    session_unset();
    session_destroy();
    unset($_SESSION['admin_name']);
    unset($_SESSION['admin_email']);
    unset($_SESSION['status']);
    unset($_SESSION['id']);
    header('location:../');

   

?>
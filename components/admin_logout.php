<?php

   include 'connect.php';

   setcookie('tutor_id', '', time() - 1, '/');
// updated here
   header('location:../admin/login.php');
   // header('location:home.php');
   // header('location:teachers.php');

?>
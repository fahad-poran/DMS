<?php
    session_start();
    session_unset();
    header("Location:../doctor-login.php");
?>
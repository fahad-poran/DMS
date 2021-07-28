<?php 
$bookid= $_REQUEST['bookid'];
echo "<script>alert('You must Log-in First');</script>";
echo "<script>window.location.href = 'login.php?bookid=$bookid';</script>";

?>
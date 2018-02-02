<?php
session_start();
unset($_SESSION['kennstravel']);
echo "<script>window.location='../login.php';</script>";
session_destroy();
?>
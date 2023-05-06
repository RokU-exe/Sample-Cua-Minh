<?php
session_start();
session_destroy();
header("location:./www/index.php");
?>
<?php
session_start();
session_destroy();
header('Location: Magazin.php');
?>
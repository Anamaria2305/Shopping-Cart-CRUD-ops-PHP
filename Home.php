<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
header('Location: Index.php');
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pagina proiect parolata</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="loggedin">
<nav class="navtop">
<div>
<h1>Welcome to Ana's shop</h1>
<a href="Magazin.php"><i class="fas fa-user-circle"></i>Shop</a>
<a href="Logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
</div>
</nav>
<div class="content">
<h2>Pagina cu parola</h2>
<p style="color:magenta;">Welcome back, <?=$_SESSION['name']?> !</p>
</div>
</body>
</html>
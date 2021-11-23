<?php
session_start();
$id_user=$_SESSION['id'];
$name=$_SESSION['name'];
echo($id_user);
echo($name);
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
<a href="Vizualizare2.php"><i class="fas fa-user-circle"></i>Vizualizare tabele users</a>
<a href="Vizualizare.php"><i class="fas fa-user-circle"></i>Vizualizare tabele product</a>
<a href="Logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
</div>
</nav>
<div class="content">
<p style="color:magenta;">Welcome back, <?=$_SESSION['name']?> !</p>
</div>
</body>
</html>
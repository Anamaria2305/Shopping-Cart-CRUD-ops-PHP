<?php
include("Conectare.php");
$error='';
if (isset($_POST['submit']))
{
$name = htmlentities($_POST['nume'], ENT_QUOTES);
$code = htmlentities($_POST['code'], ENT_QUOTES);
$imagine = htmlentities($_POST['imagine'], ENT_QUOTES);
if ($name == '' || $code == ''||$imagine=='')
{
$error = 'ERROR: Campuri goale!';
} else {
if ($stmt = $mysqli->prepare("INSERT into users2 (username, password) VALUES (?, ?)"))
{
$stmt->bind_param("ss", $name, $code);
$stmt->execute();
$stmt->close();
}
else
{
echo "ERROR: Nu se poate executa insert.";
}
}
}
$mysqli->close();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head> <title><?php echo "Inserare inregistrare"; ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head> <body>
<h1><?php echo "Inserare inregistrare"; ?></h1>
<?php if ($error != '') {
echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error."</div>";} ?>
<form action="" method="post">
<div>
<strong>Username: </strong> <input type="text" name="nume" value=""/><br/>
<strong>Password: </strong> <input type="text" name="code" value=""/><br/>
<strong>E-mail: </strong> <input type="text" name="imagine" value=""/><br/>
<br/>
<input type="submit" name="submit" value="Submit" />
<a href="Vizualizare2.php">Index</a>
</div></form></body></html>
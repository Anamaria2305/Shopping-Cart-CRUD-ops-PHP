<?php 
include("Conectare.php");
$error='';
if (!empty($_POST['id']))
{ if (isset($_POST['submit']))
{ 
if (is_numeric($_POST['id']))
{ 
$id = $_POST['id'];
$username = htmlentities($_POST['username'], ENT_QUOTES);
$password = htmlentities($_POST['password'], ENT_QUOTES);
$email = htmlentities($_POST['email'], ENT_QUOTES);
if ($username == '' || $password == ''||$email=='')
{
echo "<div> ERROR: Completati campurile obligatorii!</div>";
}else
{ 
if ($stmt = $mysqli->prepare("UPDATE users2 SET
username=?,password=?,email=? WHERE id='".$id."'"))
{
$stmt->bind_param("sss", $username,
$password,$email);
$stmt->execute();
 $stmt->close();
 }
else
{echo "ERROR: nu se poate executa update.";}
}
}
else
{echo "id incorect!";} }}?>
<html> <head><title> <?php if ($_GET['id'] != '') { echo "Modificare inregistrare"; }?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8"/></head>
<body>
<h1><?php if ($_GET['id'] != '') { echo "Modificare Inregistrare"; }?></h1>
<?php if ($error != '') {
echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error."</div>";} ?>
<form action="" method="post">
<div>
<?php if ($_GET['id'] != '') { ?>
<input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
<p>ID : <?php echo $_GET['id'];


if ($result = $mysqli->query("SELECT * FROM users2 where id='".$_GET['id']."'"))

{
if ($result->num_rows > 0)
{ $row = $result->fetch_object();?></p>
<strong>Uername: </strong> <input type="text" name="username" value="<?php echo$row->username;
?>"/><br/>
<strong>Password: </strong> <input type="text" name="password" value="<?php echo$row->password;
?>"/><br/>
<strong>E-mail: </strong> <input type="text" name="email" value="<?php echo$row->email;
}}


}?>"/><br/>

<input type="submit" name="submit" value="Submit" />
<a href="Vizualizare2.php">Index</a>
</div></form></body> </html>
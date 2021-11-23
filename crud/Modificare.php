<?php 
include("Conectare.php");
$error='';
if (!empty($_POST['id']))
{ if (isset($_POST['submit']))
{
if (is_numeric($_POST['id']))
{
$id = $_POST['id'];
$nume = htmlentities($_POST['nume'], ENT_QUOTES);
$code = htmlentities($_POST['code'], ENT_QUOTES);
$imagine = htmlentities($_POST['imagine'], ENT_QUOTES);
$price = htmlentities($_POST['price'], ENT_QUOTES);
if ($nume == '' || $code == ''||$imagine==''||$price=='')
{ 
echo "<div> ERROR: Completati campurile obligatorii!</div>";
}else
{ 
if ($stmt = $mysqli->prepare("UPDATE tbl_product SET
name=?,code=?,image=?,price=? WHERE id='".$id."'"))
{
$stmt->bind_param("sssd", $nume,
$code,$imagine,$price);
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
<p>ID: <?php echo $_GET['id'];
if ($result = $mysqli->query("SELECT * FROM tbl_product where id='".$_GET['id']."'"))
{
if ($result->num_rows > 0)
{ $row = $result->fetch_object();?></p>
<strong>Nume: </strong> <input type="text" name="nume" value="<?php echo$row->name;
?>"/><br/>
<strong>Code: </strong> <input type="text" name="code" value="<?php echo$row->code;
?>"/><br/>
<strong>Imagine: </strong> <input type="text" name="imagine" value="<?php echo$row->image;
?>"/><br/>
<strong>Pret: </strong> <input type="text" name="price" value="<?php echo$row->price; 
}}


}?>"/><br/>

<input type="submit" name="submit" value="Submit" />
<a href="Vizualizare.php">Index</a>
</div></form></body> </html>
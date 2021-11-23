<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Vizualizare Inregistrari</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<h1>Inregistrarile din tabela clienti</h1>
<p><b>Toate inregistrarile din clienti</b</p>
<?php
include("Conectare.php");
if ($result = $mysqli->query("SELECT * FROM users2 ORDER BY id"))
{
if ($result->num_rows > 0)
{
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Username</th><th>Password</th><th>E-mail</th><th>Modificare</th><th>Stergere</th></tr>";
while ($row = $result->fetch_object())
{
echo "<tr>";
echo "<td>" . $row->id . "</td>";
echo "<td>" . $row->username . "</td>";
echo "<td>" . $row->password . "</td>";
echo "<td>" . $row->email . "</td>";
echo "<td><a href='Modificare2.php?id=" . $row->id . "'>Modificare</a></td>";
echo "<td><a href='Stergere2.php?id=" .$row->id . "'>Stergere</a></td>";
echo "</tr>";
}
echo "</table>";
}
else
{
echo "Nu sunt inregistrari in tabela!";
}
}
else
{ echo "Error: " . $mysqli->error(); }
$mysqli->close();
?>
<a href="Inserare2.php">Adaugarea unei noi inregistrari</a>
</br>
<a href="Home.php">Go back home</a>
</body>
</html>
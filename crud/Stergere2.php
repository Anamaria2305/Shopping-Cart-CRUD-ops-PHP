<?php
include("Conectare.php");
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];
if ($stmt = $mysqli->prepare("DELETE FROM users2 WHERE id = ? LIMIT 1"))
{
$stmt->bind_param("i",$id);
$stmt->execute();
$stmt->close();
}
else
{
echo "ERROR: Nu se poate executa delete.";
}
$mysqli->close();
echo "<div>Inregistrarea a fost stearsa!!!!</div>";
}
echo "<p><a href=\"Vizualizare2.php\">Index</a></p>";
?>
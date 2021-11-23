<?php
require_once "ShoppingCart.php";
session_start();
if (!isset($_SESSION['loggedin'])) {
header('Location: Index.html');
exit;
}
$id_user=$_SESSION['id'];
$name=$_SESSION['name'];
echo($id_user);
echo($name);
$shoppingCart = new ShoppingCart();
if (! empty($_GET["action"])) {
 switch ($_GET["action"]) {
 case "add":

 if (! empty($_POST["quantity"])) {

 $productResult = $shoppingCart->getProductByCode($_GET["code"]);

 $cartResult = $shoppingCart->getCartItemByProduct($productResult[0]["id"], $id_user);

 if (! empty($cartResult)) {
 $newQuantity = $cartResult[0]["quantity"] + $_POST["quantity"];
 $shoppingCart->updateCartQuantity($newQuantity, $cartResult[0]["id"]);
 } else
{
 $shoppingCart->addToCart($productResult[0]["id"],$_POST["quantity"], $id_user);
 }
 }
 break;
 case "remove":
 $shoppingCart->deleteCartItem($_GET["id"]);
 break;
 case "empty":
 $shoppingCart->emptyCart($id_user);
 break;
 }
}
?>
<HTML>
<HEAD>
<TITLE>creare cos permament in PHP</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
 <div id="shopping-cart">
 <div class="txt-heading">
     <div class="txt-heading-label"><h1>Cos Cumparaturi </h1></div> <a id="btnEmpty" href="Cos.php?action=empty">Goliti cosul</a>  </div>
<?php
$cartItem = $shoppingCart->getMemberCartItem($id_user);
if (! empty($cartItem)) {
 $item_total = 0;
 ?>
<table cellpadding="10" cellspacing="1">
 <tbody>
 <tr>
 <th style="text-align: left;"><strong>Name</strong></th>
 <th style="text-align: left;"><strong>Code</strong></th>
 <th style="text-align: right;"><strong>Quantity</strong></th>
 <th style="text-align: right;"><strong>Price</strong></th>
 <th style="text-align: center;"><strong>Action</strong></th>
 </tr>
<?php
 foreach ($cartItem as $item) {
 ?>
<tr>
 <td
 style="text-align: left; border-bottom: #F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
 <td
 style="text-align: left; border-bottom: #F0F0F0 1px solid;"><?php echo $item["code"]; ?></td>
 <td
 style="text-align: right; border-bottom: #F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
 <td
 style="text-align: right; border-bottom: #F0F0F0 1px solid;"><?php echo "$".$item["price"]; ?></td>
 <td
 style="text-align: center; border-bottom: #F0F0F0 1px solid;"><a
 href="Cos.php?action=remove&id=<?php echo $item["cart_id"]; ?>"

 class="btnRemoveAction">Remove Item </a></td>
 </tr>
<?php
 $item_total += ($item["price"] * $item["quantity"]);
 }
 ?>
<tr>
 <td colspan="3" align=right><strong>Total:</strong></td>
 <td align=right><?php echo "$".$item_total; ?></td>
 <td></td>
 </tr>
 </tbody>
 </table>
 <?php
}
?>
</div>
 <br>
<div><a href="Magazin.php">Alegeti alt produs</a></div>
 <br>
<div><a href="Logout.php">Abandonati sesiunea de cumparare</a></div>


</BODY>
</HTML>

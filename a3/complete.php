<?php session_start(); ?>
<!DOCTYPE html>
<html>


 <head>

        <title>Silverado Cinemas</title>
    <link rel="stylesheet"    type="text/css" href="css/style.css">
    <link rel="stylesheet"  media="screen and (max-width: 950px)" type="text/css" href="css/styleMedium.css">
    <link rel="stylesheet"  media="screen and (max-width: 700px)" type="text/css" href="css/styleSmall.css">
    <link rel="stylesheet"  media="screen and (max-width: 450px)" type="text/css" href="css/stylePhone.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
</script>

</head>

<body>

<div class="header">
        <a href="index.php"> <img src='images/Silverado.png'></img></a>
</div>

<div class="navbar">
<?php require_once('navbar.php') ?>
</div>

<div class ="final">
<div class="Title2"></div>
<h3>Thankyou for purchasing</h3>
<div class="subtotal">
<table border="1">
<tr>
<td> <?php if($_SESSION['subAC'] != 0 || $_SESSION['subAC'] !=null || $_SESSION['subAC'] != '0'){
printf("Subtotal Mission impossible:\n");} else{printf("N/a          \n");} ?>    </td>
<td> <?php if($_SESSION['subAC'] != 0 || $_SESSION['subAC'] !=null || $_SESSION['subAC'] != '0'){
printf("$%s\n",($_SESSION['subAC']));} else{printf("N/a           \n");} ?>     </td>

</tr>
<tr>
<td> <?php if($_SESSION['subAF'] != 0 || $_SESSION['subAF'] !=null || $_SESSION['subAF'] != '0'){
printf("Subtotal GirlHood:\n");} else{printf("N/a           \n");} ?>     </td>
<td> <?php if($_SESSION['subAF'] != 0 || $_SESSION['subAF'] !=null || $_SESSION['subAF'] != '0'){
printf("$%s\n",($_SESSION['subAF']));} else{printf("N/a           \n");} ?>     </td>
</tr>
<tr>
<tr>
<td> <?php if($_SESSION['subCH'] != 0 || $_SESSION['subAC'] !=null || $_SESSION['subCH'] != '0'){
printf("Subtotal Inside Out:\n");} else{printf("N/a\n");} ?>     </td>
<td> <?php if($_SESSION['subCH'] != 0 || $_SESSION['subAC'] !=null || $_SESSION['subCH'] != '0'){
printf("$%s\n",($_SESSION['subCH']));} else{printf("N/a           \n");} ?>     </td>

</tr>
<tr>
<td> <?php if($_SESSION['subRC'] != 0 || $_SESSION['subRC'] !=null || $_SESSION['subRC'] != '0'){
printf("Subtotal Trainwreck:\n");} else{printf("N/a           \n");} ?>     </td>
<td> <?php if($_SESSION['subRC'] != 0 || $_SESSION['subAC'] !=null || $_SESSION['subRC'] != '0'){
printf("$%s\n",($_SESSION['subRC']));} else{printf("N/a           \n");} ?>     </td>
</tr>
<tr>
<td>Total Seats:</td>
<td><?php printf("%s\n",$_SESSION['totalSeats']); ?></td>
</tr>
<tr>
<td>Total Price:</td>
<td><?php printf("$%s\n",$_SESSION['grandTotal']); ?></td>
</tr>
<tr>
<td>Voucher discount applied:</td>
<td><?php if($_SESSION["correct"] == false){printf("false");}else{printf("True");} ?></td>
</tr>


</table>



</diV>

<div class="subtotal">
<table>
<tr>
<td>Name:</td><td><?php printf("%s\n", $_SESSION['cart']['Name']); ?></td>
</tr>
<tr>
<td>Surname:</td><td><?php printf("%s\n", $_SESSION['cart']['Surname']); ?></td>
</tr>
<tr>
<td>Email:</td><td><?php printf("%s\n", $_SESSION['cart']['Email']); ?></td>
</tr>
<tr>
<td>number:</td><td><?php printf("%s\n", $_SESSION['cart']['Number']); unset($_SESSION['cart']); unset($_POST);?></td>
</tr>
</table>
</diV>


</diV>

<div class="footer">
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php")?>
</div>
</body>
</html>

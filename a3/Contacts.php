<?php session_start(); ?>
<!DOCTYPE html>
<html>


 <head>

 	<title>Silverado Cinemas</title>
 	<link rel="stylesheet"    type="text/css" href="css/style.css">
     <link rel="stylesheet"  media="screen and (max-width: 950px)" type="text/css" href="css/styleMedium.css">
    <link rel="stylesheet"  media="screen and (max-width: 700px)" type="text/css" href="css/styleSmall.css">
    <link rel="stylesheet"  media="screen and (max-width: 450px)" type="text/css" href="css/stylePhone.css">



 <style>
  @media all and (max-width:450px){
        .header{display:none;}
    }


</style>

</head>


<body>
		
	<div class="header">
		<a href="index.php"> <img src='images/Silverado.png'></img></a>
		</div>	


<div class="navbar">
	     
<?php require_once("navbar.php");?>
</div>

<div class="title"><h1>Contact us</h1></div>

	
<div class="content">
	
		<div class="main">
	   <div class="topBorder"></div>

	   <div class="contacts">
	   	<h2>
	   		If you have any questions or suggestions regarding our services, please feel free to contact us. One of our team members will reply to you as soon as possible.
	   	</h2>
	  

	    <form method="post" action="http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php">

	    Email:<br>
	   	<input class="email"type="text" name="email" autofocus required></input><br><br>

	   	Subject:<br>
	   	<select name="subject" required>
  			<option value="general">General Enquiry</option>
  			<option value="group">Group & corporate bookings</option>
 			<option value="complaints">Suggestions & complaints</option>
		</select><br><br>

		Enter any comments below:<br>
	   	<textarea rows="12" cols="75" class="textArea" required></textarea><br><br>
	   	<button type="submit">Submit</button>

	   </form>
	    </div>

	   </div>
	</div>

<div>
 <?php require_once("footer.php"); ?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php")?>
</div>
	
</body>	

</html>


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
         .main{height:250px;}
    }


    @media all and (max-width: 700px) {
    .container {display:none;}
    .scrollingMenu{display :none;}
    .list {display:none;}
    }




/*_____________________________Image scroller_________________________________*/
        
       .container{
        background: -webkit-linear-gradient(top, white 0%,black 4%);
        -webkit-box-shadow:rgba(0,0,0,0.7) 0px 7px 20px, inset rgba(0,0,0,0.15) 0px -7px 20px;
        border-radius:5px; 
        border:1px solid silver;
        max-width:900px;
        min-width: 500px;
        margin:20px auto;
        max-height: 400px;
        min-height: 350px;
   

        }  

        .scrollingMenu{
        overflow:hidden;
        width:100%;
        max-width: 900px;
        min-width: 400px;
        max-height: 400px;
        min-height: 350px;
        } 

        .list{
        padding:0px 0px 0px 0px;
        position:relative;
        list-style:none;
        width:500%;
        height:100%;
        overflow:hidden;

        animation-name: scrollingMenu;
        animation-duration: 60s;
        animation-iteration-count: infinite;


        }

        .list > li{
        float:left;
        width:20%; 

        }

        .list img{
        display:block;
        width:100%;
        max-width:100%;
        width:auto;
    }


        @keyframes scrollingMenu {

    	0%    { left:0; }
    	11%   { left:0; }
    	12.5% { left:-100%; }
    	23.5% { left:-100%; }
    	25%   { left:-200%; }
    	36%   { left:-200%; }
    	37.5% { left:-300%; }
    	48.5% { left:-300%; }
    	50%   { left:-400%; }
    	61%   { left:-400%; }
    	62.5% { left:-300%; }
    	73.5% { left:-300%; }
    	75%   { left:-200%; }
    	86%   { left:-200%; }
    	87.5% { left:-100%; }
    	98.5% { left:-100%; }
    	100%  { left:0; }
    }

</style>


</head>
    

<body>
		
	<div class="header">
		<a href="index.php"><img src='images/Silverado.png'></img></a>
		</div>	


<div class="navbar">
	     
           <a href="index.php">Home page</a>
           <a href="bookings.php">Bookings</a>
           <a href="sessions.php">Now showing</a>
           <a href="Contacts.php">Contact us</a>

           <div class="searchBar">
           <input class="text" type="search" name="search" value="Search website"/>
            <input class="searchButton" type="button" value="Go">
         </div>
    </div>
</div>

<div class="title"><h1>Whats new?</h1></div>

	
	
	<div class="content">
	
		<div class="main" style="height:600px">
	   <div class="topBorder">
	   </div>
	 <div class="container">
	 <div class="scrollingMenu" media="screen and (min-width: 600px)">

	 	<ul class="list">
	 		<li><img src='images/image1.jpg'></img></li>
			<li><img src='images/image2.jpg'></img></li>
	 		<li><img src='images/image3.jpg'></img></li>
	 		<li><img src='images/image4.jpg'></img></li>
	 		<li><img src='images/image5.jpg'></img></li>
	 	</ul>
     </div>
    </div>

     <p class="news">We are currently undergoing renovation of our cinema. The project includes improving our seating plan to accomodate more customers, installing a new screen and Dolby sound system. We hope to re-open our movie theater within the next 2 weeks <p>
	</div>

   
</div>

<div class="News">
    <p></p>

</div>

<div>
 <?php require_once("footer.php"); ?>
</div>
	
	</body>
</html>
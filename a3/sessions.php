<?php 
session_start(); 

?>
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




$( document).ready(function() {
	
	var boolean = false;
	var boolean2 = false;
	var boolean3 = false;
	var boolean4 = false;

  $.ajax({

            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "/~e54061/wp/moviesJSON.php",
            data: "",
            dataType: "json",
            success: function (data) {

		$('#t1').html(data['AF'].title);
		$('#t2').html(data['CH'].title);
		$('#t3').html(data['RC'].title);
     	
		$('#p1').attr('src',data['AF'].poster);
		$('#p2').attr('src',data['CH'].poster);
		$('#p3').attr('src',data['RC'].poster);
		$('#p4').attr('src',data['AC'].poster);
		
		$('#r1').attr('src',data['AF'].rating);
		$('#r2').attr('src',data['CH'].rating);
		$('#r3').attr('src',data['RC'].rating);
		$('#r4').attr('src',data['AC'].rating);
		
		$('#v1').attr('src',data['AF'].trailer);
		$('#v2').attr('src',data['CH'].trailer);
		$('#v3').attr('src',data['RC'].trailer);
		$('#v4').attr('src',data['AC'].trailer);

		$('#d1').html(data['AF'].description);
		$('#d2').html(data['CH'].description);
		$('#d3').html(data['RC'].description);
		$('#d4').html(data['AC'].description);
	
		$('#de1').html(data['AF'].screenings);
		$('#de2').html(data['CH'].screenings);
		$('#de3').html(data['RC'].screenings);
		$('#de4').html(data['AC'].screenings);		
            },
            error: function (result) {
                alert("Data not found");
            }
        });		
	
	$(".expand").click(function () {
	
	var hey =$(this).parent().children('input').attr("value");
	if(hey == '0'){
	$(this).parent().parent().animate({"margin-right":"+=390"},500);
	$(this).parent().parent().animate({"margin-right":"-=40"},250);
	$(this).parent().parent().animate({"margin-right":"+=30"},150);
	$(this).parent().parent().animate({"margin-right":"-=20"},150);
	$(this).parent().parent().animate({"margin-right":"+=10"},110);
	$(this).parent().parent().children(".showMore").animate({width:"+=420"},500);
	$(this).parent().parent().children(".showMore").animate({width:"-=30"},200);
	$(this).parent().parent().children(".showMore").animate({width:"+=30"},200);
	$(this).parent().parent().children(".showMore").animate({width:"-=10"},150);
	$(this).parent().parent().children(".showMore").animate({width:"+=10"},100);
	$(this).parent().parent().children(".showMore").show();
	$(this).parent().parent().children(".showMore").css("border","1px solid silver");
	$(this).parent().parent().children(".showMore").children(".desc").fadeIn();
	$(this).parent().parent().children(".showMore").children(".watch").fadeIn();
	$(this).parent().children('input').val('1');
	
	$(this).html("close");
	}

	else{
	$(this).parent().parent().animate({"margin-right":"-=390"},500);
	$(this).parent().parent().animate({"margin-right":"+=40"},250);
	$(this).parent().parent().animate({"margin-right":"-=30"},150);
	$(this).parent().parent().animate({"margin-right":"+=20"},150);
	$(this).parent().parent().animate({"margin-right":"-=10"},110);
	
	$(this).parent().parent().children(".showMore").animate({width:"-=420"},500);
	$(this).parent().parent().children(".showMore").animate({width:"+=30"},200);
	$(this).parent().parent().children(".showMore").animate({width:"-=30"},200);
	$(this).parent().parent().children(".showMore").animate({width:"+=10"},150);
	$(this).parent().parent().children(".showMore").animate({width:"-=10"},100);
	$(this).parent().parent().children(".showMore").animate({width:"+=5"},100);
	$(this).parent().parent().children(".showMore").animate({width:"-=5"},100);
	$(this).parent().parent().children(".showMore").children(".desc").fadeOut();
	$(this).parent().parent().children(".showMore").children(".watch").fadeOut();
	$(this).parent().parent().children(".showMore").children(".video").fadeOut();
	$(this).parent().parent().children(".showMore").css("border","none");
	$(this).parent().children('input').val('0');
	$(this).html("Show more");
	}

 });

	
$(".watch").click(function () {
		
	$(this).fadeOut();
	$(this).parent().children(".desc").slideUp("slow");
	$(this).parent().children(".video").slideDown("slow");
	$(this).parent().children(".video").children(".collapse").fadeIn();
	
});



$(".collapse a").click(function () {

	$(this).parent().fadeOut();
	$(this).parent().parent().fadeOut();
	$(this).parent().parent().parent().parent().animate({"margin-right":"-=370"},500);
	$(this).parent().parent().parent().animate({width:"-=420"},500);
	$(this).parent().parent().parent().animate({width:"+=30"},200);
	$(this).parent().parent().parent().animate({width:"-=30"},200);
	$(this).parent().parent().parent().animate({width:"+=10"},150);
	$(this).parent().parent().parent().animate({width:"-=10"},100);
	$(this).parent().parent().parent().animate({width:"+=5"},100);
	$(this).parent().parent().parent().animate({width:"-=5"},100);
	$(this).parent().parent().parent().css("border","none");
	$(this).parent().parent().parent().parent().children(".links").children(".expand").html("Show more");
	$(this).parent().parent().parent().parent().children(".links").children("input").val('0');

				
 });

	
$(".poster").click(function () {
    		
	$(this).parent().animate({left:10},100);
	$(this).parent().animate({left:-10},100);
	$(this).parent().animate({left:5},100);
	$(this).parent().animate({left:-5},100);
	$(this).parent().animate({left:0},100);

 	 });

  });


</script>
		


	
	

<style>
	@media all and (max-width: 700px) {
	.image{display:none;}
    }

     @media all and (max-width:450px){
        .header{display:none;}
        .navbar{display:none;}
    }

</style>

</head>



<body>



		
<div class="header">
<a href="index.php"> <img src='images/Silverado.png'></img></a>
</div>

	     

<div class="navbar">
<?php require_once("navbar.php") ?>

</div>

	<div class="title"><h1>Now showing</h1></div>

	<div class="image" media="screen and (min-width: 600px)"><img src="images/image.jpg"></img></div>
	
	
		<div id="1" class='movies'>

			<div class='moviePanel' value="1">
				<div class='Title' id='t1'></div>
				<div class ='poster'><img id='p1' src=''></img></div>
				<div class='rating'><img id='r1' src=''></img></div>
				<div class ='links'>
				<input type='hidden' value='0'></input>
				<a class="expand">Show more</a>
				<a href='bookings.php'>Get tickets</a>
				</div>
				<div class="showMore"> 
				<div class="Title"></div>
				<div class='desc' id='d1'></div>
				<a class="watch">Watch the trailer</a>
				<div class='video'>
				<video id='v1' src='' controls></video>
				<div class="collapse"><a>Close</a></div>
				</div>
				</div>
				

	   		</div>

			<div class='moviePanel' value="1">
				<div class='Title' id='t2'></div>
				
				<div class ='poster'><img id='p2' src=''></img></div>
				
				<div class='rating'><img id='r2' src=''></img></div>
				<div class ='links'>
				<input type='hidden' value='0'></input>
				<a class="expand">Show more</a>
				<a href='bookings.php'>Get tickets</a>
				</div>
				<div class="showMore">
				<div class="Title"></div>
				<div class='desc' id='d2'></div>
				<a class="watch">Watch the trailer</a>
				<div class='video'><video id='v2' src=''controls></video>
				<div class="collapse"><a>Close</a></div>
				</div>
				</div>
	   		</div>


			<div class='moviePanel' value="1">
				<div class='Title' id='t3'></div>
				<div class ='poster'><img id='p3' src=''></img></div>
				<div class='rating'><img id='r3' src=''></img></div>
				<div class ='links'>
				<input type='hidden' value='0'></input>
				<a class="expand">Show more</a>
				<a href='bookings.php'>Get tickets</a>
				</div>
				<div class="showMore">
				<div class="Title"></div>
				<div class='desc' id='d3'></div>
				<a class="watch">Watch the trailer</a>
				<div class='video'>
				<video id='v3' src=''controls></video>
				<div class="collapse"><a>Close</a></div>
				</div>
				</div>
	   		</div>
			
			<div class='moviePanel' value="1">
				<div class='Title' id='t4'>Mission Impossible</div>
				<div class ='poster'><img id='p4' src=''></img></div>
				<div class='rating'><img id='r4' src=''></img></div>
				<div class ='links'>
				<input type='hidden' value='0'></input>
				<a class="expand">Show more</a>
				<a href='bookings.php'>Get tickets</a>
				</div>
				<div class="showMore">
				<div class="Title"></div>
				<div class='desc' id='d4'></div>
				<a class="watch">Watch the trailer</a>
				<div class='video'>
				<video id='v4' src=''controls></video>
				<div class="collapse"><a>Close</a></div>
				</div>
				</div>
				
	   		</div>
		</div>
	

<div>
 <?php require_once("footer.php"); ?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php")?>
</div>
	
</body>	

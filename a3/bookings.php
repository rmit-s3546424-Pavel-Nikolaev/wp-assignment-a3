<?php 
session_start();

$cart=$_POST;

function cleanArray($array, $continue = false) {
    foreach ($array as $key => $value) {
        
	if ($value == null || $value == "0") { unset($array[$key]); }
       
	 else if (is_array($value)) {
            if (empty($value)) { unset($array[$key]); }
            else $array[$key] = cleanArray($value);
        }
    }
    if (!$continue) {
        $array = cleanArray($array,true);
    }
    return $array;
}


$_SESSION['cart']=cleanArray($cart);


 $voucher=null;
 $totalSeats= 0;
 $grandTotal = 0;


 $std_Full_AC=0.00;
 $std_Conc_AC=0.00;
 $FCA_AC=0.00;
 $B_AC=0.00;
 
 $std_Full_CH=0.00;
 $std_Conc_CH=0.00;
 $std_Ch_CH=0.00;
 $FCA_CH=0.00;
 $B_CH=0.00;

 $std_Full_AF=0.00;
 $std_Conc_AF=0.00;
 $FCA_AF=0.00;
 $B_AF=0.00;

 $std_Full_RC=0.00;
 $std_Conc_RC=0.00;
 $FCA_RC=0.00;
 $B_RC=0.00;

$adAC = 0;
$adRC = 0;
$adAF = 0;
$adCH = 0;

$coAC = 0;
$coRC = 0;
$coAF = 0;
$coCH = 0;

$chCH = 0;

$dayAC = null;
$dayRC = null;
$dayAF = null;
$dayCH = null;


$timeAC = null;
$timeRC = null;
$timeCH = null;
$timeAF = null;

$p1 = null;
$p2 = null;
$p3 = null;
$p4 = null;
$p5 = null;
$p6 = null;
$p7 = null;
$p8 = null;
$p9 = null;
$p10 = null;
$c1 = null;
$c2 = null;
$l1 = null;
$l2 = null;

$totalAC =0.00;
$totalCH =0.00;
$totalAF =0.00;
$totalRC =0.00;

if($cart != null){

$adAC = intval($cart['adultTickets']['AC']);
$adRC = intval($cart['adultTickets']['RC']);
$adAF = intval($cart['adultTickets']['AF']);
$adCH = intval($cart['adultTickets']['CH']);

$coAC = intval($cart['concessionTickets']['AC']);
$coRC = intval($cart['concessionTickets']['RC']);
$coAF = intval($cart['concessionTickets']['AF']);
$coCH = intval($cart['concessionTickets']['CH']);

$chCH = intval($cart['childTickets']['CH']);

$voucher = $cart['voucher'];

$dayAC = $cart['dayAC'];
$dayRC = $cart['dayRC'];
$dayAF = $cart['dayAF'];
$dayCH = $cart['dayCH'];


$timeAC = $cart['timeAC'];
$timeRC = $cart['timeRC'];
$timeCH = $cart['timeCH'];
$timeAF = $cart['timeAF'];

if($timeAC != null || $timeAC !=0 || $timeAC != '0'){
	$nameAC="Mission Imposible";
}

if($timeCH != null || $timeCH !=0 || $timeCH != '0'){
	$nameCH="Inside Out";
}
if($timeRC != null || $timeRC !=0 || $timeRC != '0'){
	$nameRC="Train wreck";
}
if($timeAF != null || $timeAF !=0 || $timeAF != '0'){
	$nameAF="Girlhood";
}


}



if($dayAC !=0 || $dayAC !='0'){
	
   if($dayAC=='Monday' || $dayAC=='Tuesday'){
      $std_Full_AC=12.00;
      $std_Conc_AC=10.00;
    
    }
    else if(($dayAC=='Wednesday' && $timeAC =='1') || ($dayAC=='Thursday' && $timeAC =='1') || ($dayAC =='Friday' && $timeAC =='1')){
      $std_Full_AC=12.00;
      $std_Conc_AC=10.00;
  
    }
    else{
     $std_Full_AC=18.00;
     $std_Conc_AC=15.00; 
    }
    
  if(($dayAC !='Saturday' && $timeAC=='1') || ($dayAC !='Sunday' && $timeAC=='1')){
      $FCA_AC=25.00;
      $B_AC=20.00;
    }
    else{
      $FCA_AC=30.00;
      $B_AC=30.00;
    }

}


if($dayCH !=0 || $dayCH !='0'){
	
if($dayCH=='Monday' || $dayCH=='Tuesday'){
      $std_Full_CH=12.00;
      $std_Conc_CH=10.00;
     $std_Ch_CH=8.00;
    }
    else if(($dayCH=='Wednesday' && $timeCH =='1') || ($dayCH=='Thursday' && $timeCH =='1') || ($dayCH =='Friday' && $timeCH =='1')){
      $std_Full_CH=12.00;
      $std_Conc_CH=10.00;
      $std_Ch_CH=8.00;
    }
    else{
     $std_Full_CH=18.00;
     $std_Conc_CH=15.00; 
     $std_Ch_CH=12.00;
    }
    if(($dayCH !='Saturday' && $timeCH=='1') || ($dayCH !='Sunday' && $timeCH=='1')){
      $FCA_CH=25.00;
      $B_CH=20.00;
    }
    else{
    $FCA_CH=30.00;
    $B_CH=30.00;
    }

}



if($dayRC !=0 || $dayRC !='0'){
	
if($dayRC=='Monday' || $dayRC=='Tuesday'){
      $std_Full_RC=12.00;
      $std_Conc_RC=10.00;
    
    }
    else if(($dayRC=='Wednesday' && $timeRC =='1') || ($dayRC=='Thursday' && $timeRC =='1') || ($dayRC =='Friday' && $timeRC =='1')){
      $std_Full_RC=12.00;
      $std_Conc_RC=10.00;
  
    }
    else{
     $std_Full_RC=18.00;
     $std_Conc_RC=15.00; 
    }
    if(($dayRC !='Saturday' && $timeRC=='1') || ($dayRC !='Sunday' && $timeRC=='1')){
      $FCA_RC=25.00;
      $B_RC=20.00;
    }
    else{
      $FCA_RC=30.00;
      $B_RC=30.00;
    }

}

if($dayAF !=0 || $dayAF !='0'){

  if($dayAF=='Monday' || $dayAF=='Tuesday'){
      $std_Full_AF=12.00;
      $std_Conc_AF=10.00;
    
    }
    else if(($dayAF=='Wednesday' && $timeAF =='1') || ($dayAF=='Thursday' && $timeAF =='1') || ($dayAF =='Friday' && $timeAF =='1')){
      $std_Full_AF=12.00;
      $std_Conc_AF=10.00;
  
    }
    else{
     $std_Full_AF=18.00;
     $std_Conc_AF=15.00; 
    }
    if(($dayAF !='Saturday' && $timeAF=='1') || ($dayAF !='Sunday' && $timeAF=='1')){
      $FCA_AF=25.00;
      $B_AF=20.00;
    }
    else{
      $FCA_AF=30.00;
      $B_AF=30.00;
    }

}


$totalAC =($adAC * $std_Full_AC) + ($coAC * $std_Conc_AC);
$totalRC =($adRC * $std_Full_RC) + ($coRC * $std_Conc_RC);
$totalAF =($adAF * $std_Full_AF) + ($coAF * $std_Conc_AF);
$totalCH =($adCH * $std_Full_CH) + ($coCH * $std_Conc_CH)+($chCH * $std_Ch_CH);

$grandTotal = ($totalCH + $totalAF+ $totalRC + $totalAC);

$totalSeats =($adAC + $adRC + $adAF + $coAF + $coAC + $coCH + $coRC + $chCH);


if(strlen( $voucher ) == 14){
$strlen = strlen( $voucher );
for( $i = 0; $i <= $strlen; $i++ ) {
    $char = substr( $voucher, $i, 1 );
  	
	if($i ==0){
	$p1 = (int)$char;
	}
	else if($i ==1){
	$p2 = (int)$char;
	}
	else if($i ==2){
	$p3 = (int)$char;
	}
	else if($i ==3){
	$p4 = (int)$char;
	}
	else if($i ==4){
	$p5 = (int)$char;
	}
	else if($i ==6){
	$p6 = (int)$char;
	}
	else if($i ==7){
	$p7 = (int)$char;
	}
	else if($i ==8){
	$p8 = (int)$char;
	}
	else if($i == 9){
	$p9 = (int)$char;
	}
	else if($i ==10){
	$p10 = (int)$char;
	}
	else if($i ==12){
	$c1 = $char;
	}
	else if($i ==13){
	$c2 = $char;
	}
}
}
else{
	$correctForm=false;	
}

$chck1 = (($p1+$p2+$p3)*$p4 +$p5)%26;
$chck2 = (($p6+$p7+$p8)*$p9 +$p10)%26;
$correctForm = false;

if($chck1==0 || $chck2==0){
$l1 = 'A';
$l2 = 'A';

}
else if($chck1==1 || $chck2==1){
$l1 = 'B';
$l2 = 'B';
}
else if($chck1==2 || $chck2==2){
$l1 = 'C';
$l2 = 'C';

}
else if($chck1==3 || $chck2==3){
$l1 = 'D';
$l2 = 'D';

}
else if($chck1==4 || $chck2==4){
$l1 = 'E';
$l2 = 'E';

}
else if($chck1==5 || $chck2==5){
$l1 = 'F';
$l2 = 'F';

}
else if($chck1==6 || $chck2==6){
$l1 = 'G';
$l2 = 'G';
}
else if($chck1==7 || $chck2==7){
$l1 = 'H';
$l2 = 'H';
}
else if($chck1==8 || $chck2==8){
$l1 = 'I';
$l2 = 'I';
}
else if($chck1==9 || $chck2==9){
$l1 = 'J';
$l2 = 'J';
}
else if($chck1==10 || $chck2==10){
$l1 = 'K';
$l2 = 'K';
}
else if($chck1==11 || $chck2==11){
$l1 = 'L';
$l2 = 'L';
}
else if($chck1==12 || $chck2==12){
$l1 = 'M';
$l2 = 'M';
}
else if($chck1==13 || $chck2==13){
$l1 = 'N';
$l2 = 'N';
}
else if($chck1==14 || $chck2==14){
$l1 = 'O';
$l2 = 'O';
}
else if($chck1==15 || $chck2==15){
$l1 = 'P';
$l2 = 'P';
}
else if($chck1==16 || $chck2==16){
$l1 = 'Q';
$l2 = 'Q';
}
else if($chck1==17 || $chck2==17){
$l1 = 'R';
$l2 = 'R';
}
else if($chck1==18 || $chck2==18){
$l1 = 'S';
$l2 = 'S';
}
else if($chck1==19 || $chck2==19){
$l1 = 'T';
$l2 = 'T';
}
else if($chck1==20 || $chck2==20){
$l1 = 'U';
$l2 = 'U';
}
else if($chck1==21 || $chck2==21){
$l1 = 'V';
$l2 = 'V';
}
else if($chck1==22 || $chck2==22){
$l1 = 'W';
$l2 = 'W';
}
else if($chck1==23 || $chck2==23){
$l1 = 'X';
$l2 = 'X';
}
else if($chck1==24 || $chck2==24){
$l1 = 'Y';
$l2 = 'Y';
}
else if($chck1==25 || $chck2==25){
$l1 = 'Z';
$l2 = 'Z';
}

if($l1 != $c1 || $l2 !=$c2){

	$correctForm =false;
	$grandTotal = ($totalCH + $totalAF+ $totalRC + $totalAC);
	$totalSeats =($adAC + $adRC + $adAF + $coAF + $coAC + $coCH + $coRC + $chCH);
	$_SESSION['subRC']=$totalRC;;
        $_SESSION['subCH']=$totalCH;
        $_SESSION['subAF']=$totalAF;;
        $_SESSION['subAC']=$totalAC;
        $_SESSION['grandTotal']=$grandTotal;
        $_SESSION['totalSeats']=$totalSeats;
	$_SESSION['correct']= $correctForm;
	}
	else{
	$grandTotal = (0.8 * $grandTotal);
$totalSeats =($adAC + $adRC + $adAF + $coAF + $coAC + $coCH + $coRC + $chCH);
	$correctForm = true;
	$_SESSION['correct']=$correctForm;
	$_SESSION['subRC']=$totalRC;
        $_SESSION['subCH']=$totalCH;
	$_SESSION['subAF']=$totalAF;
	$_SESSION['subAC']=$totalAC;
	$_SESSION['grandTotal']=$grandTotal;
	$_SESSION['totalSeats']=$totalSeats;
	}



if ($_SESSION['cart'] != null){
	$file = fopen("cart.txt","w") or die("Unable to open file!");	
	file_put_contents('cart.txt', print_r($_SESSION['cart'], true), FILE_APPEND);
	fclose($file);
	
	header("location:complete.php");
}
unset($cart);
unset($_POST);
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




	$(".seatsSelector").hide();
	
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
           function(jqXHR, textStatus, errorThrown){
              console.log(" The following error occured: "+ textStatus, errorThrown );
            } 
        });

var emailReg = new RegExp('^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$');
var nameReg = new RegExp('^[A-Za-z]{1,30}');
var voucherReg= new RegExp('^[0-9]{5}\-[0-9]{5}\-[A-Z]{2}$');
var phoneNumReg = new RegExp('^[0-9]{10}$|^\61[0-9]{8}$|^\61\s[0-9]{4}\s[0-9]{4}$');


var adAF = parseInt($("#adAF").val(),10);

$("#adAF").change(function(){

adAF = parseInt($("#adAF").val(),10);
afTotal= adAF+coAF;
});

 var adAC = parseInt($("#adAC").val(),10);

$("#adAC").change(function(){

adAC = parseInt($("#adAC").val(),10);
acTotal = adAC + coAC;

});

 var adRC = parseInt($("#adRC").val(),10);

$("#adRC").change(function(){

adRC = parseInt($("#adRC").val(),10);
rcTotal = adRC + coRC;
});

 var adCH = parseInt($("#adCH").val(),10);

$("#adCH").change(function(){

adCH = parseInt($("#adCH").val(),10);
chTotal = chCH + adCH + coCH;
});

 var coAF = parseInt($("#coAF").val(),10);

$("#coAF").change(function(){

coAF = parseInt($("#coAF").val(),10);
afTotal = adAF + coAF;
});

 var coRC = parseInt($("#coRC").val(),10);

$("#coRC").change(function(){

coRC = parseInt($("#coRC").val(),10);
rcTotal = adRC + coRC;
});

 var coAC = parseInt($("#coAC").val(),10);

$("#coAC").change(function(){

coAC = parseInt($("#coAC").val(),10);
acTotal = adAC + coAC;
});

 var coCH = parseInt($("#coCH").val(),10);

$("#coCH").change(function(){

coCH = parseInt($("#coCH").val(),10);
chTotal = chCH + adCH + coCH;
});

 
var chCH = parseInt($("#chCH").val(),10);

$("#chCH").change(function(){
chCH = parseInt($("#chCH").val(),10);
chTotal = chCH + adCH + coCH;
});

var chTotal = chCH + adCH + coCH;
var afTotal = adAF + coAF;
var rcTotal = adRC + coRC;
var acTotal = adAC + coAC;



$(".toSeat").click(function(){		
	
 $(this).parent().children(".seatsSelector").slideToggle("slow");
		
});

var hello1 = true;
var hello2 = true;
var hello3 = true;
var hello4 = true;
var hello5 = true;

$("#email").keyup(function(){
	var str = $("#email").val();
	var result = emailReg.test(str);
	if(result==false){
	$("#email").parent().children('p').text("incorrect email format");
	hello1=false;
	}
	else{
	$("#email").parent().children('p').text("correct email");
	hello1=true;
	}

});


$("#voucher").keyup(function(){
	var str = $("#voucher").val();
	var result = voucherReg.test(str);
	if(result==false){
	$("#voucher").parent().children('p').text("Incorrect code format");
	hello2=false;
	}
	else{
	$("#voucher").parent().children('p').text("Correct");
	hello2=true;

	} 

});

$("#number").keyup(function(){
	var str = $("#number").val();
	var result = phoneNumReg.test(str);
	if(result==false){
	$("#number").parent().children('p').text("Incorrect number format");
	hello3=false;
	}
	else{
	$("#number").parent().children('p').text("Correct");
	hello3=true;

	}

});

$("#NAME1").keyup(function(){
	var str = $("#NAME1").val();
	var result = nameReg.test(str);
	if(result==false){
	$("#NAME1").parent().children('p').text("Incorrect  format");
	hello4=false;
	}
	else{
	$("#NAME1").parent().children('p').text("Correct");
	hello4=true;

	}

});

$("#NAME2").keyup(function(){
	var str = $("#NAME2").val();
	var result = nameReg.test(str);
	if(result==false){
	$("#NAME2").parent().children('p').text("Incorrect  format");
	hello5=false;
	}
	else{
	$("#NAME2").parent().children('p').text("Correct");
	hello5=true;

	}

});


	



var count1=0;
var count2=0;	
var count3=0;	
var count4=0;
		
$(".seats").click(function(){	

	var hey = $(this).children(".seat").attr("value");
	var wat = $(this).attr("value"); 

		if($(this).parent().attr('id')=="SS1" && count1 >= afTotal && hey ==0){
		return false;		
		}
		if($(this).parent().attr('id')=="SS2" && count2 >= chTotal && hey==0){
		return false;
		}
		if($(this).parent().attr('id')=="SS3" && count3 >= rcTotal && hey ==0){
		return false;
		}
		if($(this).parent().attr('id')=="SS4" && count4 >= acTotal && hey==0){
		return false;
		}





	if(hey == 0){
	$(this).children(".seat").attr("value",wat);
	$(this).css("background","green");
		if($(this).parent().attr('id')=="SS1"){
		count1 +=1;
		}	
		if($(this).parent().attr('id')=="SS2"){
		count2 +=1;
		}
		if($(this).parent().attr('id')=="SS3"){
		count3 +=1;
		}
		if($(this).parent().attr('id')=="SS4"){
		count4 +=1;
		}
	}

	else{
	$(this).children(".seat").attr("value",0);
	$(this).css("background","gray");
		if($(this).parent().attr('id')=="SS1"){
		count1 -=1;
		}	
		if($(this).parent().attr('id')=="SS2"){
		count2 -=1;
		}
		if($(this).parent().attr('id')=="SS3"){
		count3 -=1;
		}
		if($(this).parent().attr('id')=="SS4"){
		count4 -=1;
		}
	}

	
});





$(".done").click(function(){
		
		if($(this).parent().attr('id')=="SS1" && count1 > afTotal){
		$(this).parent().children(".seats").children(".seat").attr("value",0);
		$(this).parent().slideUp("slow");
		count1=0;
		return false;		
		}
		else if($(this).parent().attr('id')=="SS2" && count2 > chTotal){
		$(this).parent().children(".seats").children(".seat").attr("value",0);
		$(this).parent().slideUp("slow");
		count2=0;
		return false;		
		}
		else if($(this).parent().attr('id')=="SS3" && count3 > rcTotal){

		$(this).parent().children(".seats").children(".seat").attr("value",0);
		$(this).parent().slideUp("slow");
		count3=0;
		return false;
		}
		else if($(this).parent().attr('id')=="SS4" && count4 > acTotal){
		$(this).parent().children(".seats").children(".seat").attr("value",0);
		$(this).parent().slideUp("slow");
		count4=0;
		return false;
		}
		else{
		$(this).parent().slideUp("slow");
		}		
});





$(".submit").click(function(){
 if(chTotal ==0 && afTotal== 0 && acTotal == 0 && rcTotal ==0){
	alert("you have not selected any tickets or seats");
	return false;
}
 
else if (count1 != afTotal){
alert("you have not selected your seats");
return false;
}
else if (count2 != chTotal){
alert("you have not selected your seats");
return false;
}
else if (count3 != rcTotal ){
alert("you have not selected your seats");
return false;
}
else if (count4 != acTotal){
alert("you have not selected your seats");
return false;
}
else if($("#dayAF").val() != 0 && $("#timeAF").val() == 0 ){

alert("please select day and time");
}

else if($("#dayRC").val() != 0 && $("#timeRC").val() == 0 ){

alert("please select day and time");
}

else if($("#dayCH").val() != 0 && $("#timeCH").val() == 0 ){

alert("please select day and time");
}

else if($("#dayAC").val() != 0 && $("#timeAC").val() == 0 ){

alert("please select day and time");
}

else{	
$(".moviePanel2").fadeOut();
$(".complete").fadeIn();
}
	
});

$("#dayAF").change(function(){
	var day = $("#dayAF").val();
	
	if(day =="Monday" || day=="Tuesday"){
	$("#timeAF").html("<option value='6pm'>6pm</option>");
	}
	if(day =="Saturday" || day=="Sunday"){
	$("#timeAF").html("<option value='3pm'>3pm</option>");
	}
	if(day =="0"){
	$("#timeAF").html("<option value='0'>--------</option>");
	}

	
});

$("#dayCH").change(function(){
	var day = $("#dayCH").val();
	
	if(day =="Monday" || day=="Tuesday"){
	$("#timeCH").html("<option value='1pm'>1pm</option>");
	}
	if(day =="Wednesday" || day=="Thursday" || day=="Friday"){
	$("#timeCH").html("<option value='6pm'>6pm</option>");
	}
	if(day =="Saturday" || day=="Sunday"){
	$("#timeCH").html("<option value='12pm'>12pm</option>");
	}
	if(day =="0"){
	$("#timeCH").html("<option value='0'>--------</option>");
	}

	
});

$("#dayRC").change(function(){
	var day = $("#dayRC").val();
	
	if(day =="Monday" || day=="Tuesday"){
	$("#timeRC").html("<option value='9pm'>9pm</option>");
	}
	if(day =="Wednesday" || day=="Thursday" || day=="Friday"){
	$("#timeRC").html("<option value='1pm'>1pm</option>");
	}
	if(day =="Saturday" || day=="Sunday"){
	$("#timeRC").html("<option value='6pm'>6pm</option>");
	}
	if(day =="0"){
	$("#timeRC").html("<option value='0'>--------</option>");
	}
	
});


$("#dayAC").change(function(){
	var day = $("#dayAC").val();
	
	if(day =="0"){
	$("#timeAC").html("<option value='0'>--------</option>");
	}
	else{
	$("#timeAC").html("<option value='9pm'>9pm</option>");
	}

	
});


$('#SUB').click(function(e) {
    
if (hello1 ==false || hello2 == false || hello3 == false || hello4 ==false || hello5==false) {
        e.preventDefault();
        alert('You didnt fill in the fields correctly');
    }
	
	else{
	 var form = $('#myForm');
                 $.ajax({
                     type: form.attr('method'),
                     url: 'bookings.php',
                     data: form.serialize(),
                     success: function (data) {
                         $(".complete").fadeOut('fast');

               }, error: function(jqXHR, textStatus, errorThrown){
              console.log(" The following error occured: "+ textStatus, errorThrown );
            } });
	}



});

});

</script>

<style>
 @media all and (max-width:450px){
        .header{display:none;}
         
    }

	.moviePanel{
	background:none;
	border:none;
	height:390px;
	-webkit-box-shadow:none;
	margin-top:10px;
	margin-left:5px;
	margin-right:10px;
	float:left;
	display:block;
	}
	
</style>
 

</head>	



<body>
		
<div class="header">
	<a href="index.php"> <img src='images/Silverado.png'></img></a>
</div>	

<div class="navbar">
<?php require_once('navbar.php') ?>
</div>

<div><h1>Bookings</h1></div>

	<form class="myForm" id="myForm" action="bookings.php" method="post">		
	<?php require_once('bookForm.php') ?>
</form>
		

<div class="footer">
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php")?>
</div>
</body>	
</html>

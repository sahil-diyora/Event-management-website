<?php
include("header.php");
?>

<style>
.fild{
	width:25%;
	float:left;
	color:black;
	margin-left:90px;	
}
.input{
	margin-bottom:10px;
	
}
.in{

border-radius:5px;
border:1px solid Lavender ;
color:DarkGray;
}
.in:hover{
	background-color: Gainsboro;
	border:2px solid Silver;
}
.form{
	margin-left:22%;
	margin-right:22%;
	background-color:white;
	padding:25px;
	border:1.5px solid Gainsboro;
	border-radius:10px;
	box-shadow:2px 2px 15px Silver;
}
.btn{
	margin-top:10px;
	background-color:SteelBlue;
	color:white;
	text-decoration:none;
	text-align:center;
}
@media screen and (max-width:800px) {
  .fild {
     margin-left:5px;
  }
  .form{
	  
	  margin-left:15px;
	
  }
}
</style>
<section id="review" class="features-area pt-115 pb-130 gray-bg">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="section-title text-center pb-20">
<h2 class="title">Booking Event</h2>
</div> 
</div>
</div> 


<div class="form" >
<form method="POST">


<div class="fild" >Name</div>
<div class="input"><input type="text" name="name" class="in"></div>

<div class="fild" >Mobile No.</div>
<div class="input"><input type="text" name="mo" class="in"></div>

<div class="fild" >Remark</div>
<div class="input"><input type="text" name="remark" class="in"></div>

<div class="fild" >Date</div>
<div class="input"><input type="date" name="date" class="in"></div>

<div class="fild" >Time </div>
<div class="input"><input type="text" name="time" class="in"></div>

<div class="fild" >City</div>
<div class="input"><input type="text" name="city" class="in"></div>

<div class="fild" >Event Type</div>
<div class="input"><input type="text" name="eventtype" class="in"></div>

<div class="fild" >Address</div>
<div class="input"><input type="text" name="address" class="in"></div>

<div class="fild" >Guest Count</div>
<div class="input"><input type="text" name="guestcount" class="in"></div>

<div class="fild" >Budget</div>
<div class="input"><input type="text" name="budget" class="in"></div>

<div class="fild" >Theme</div>
<div class="input"><input type="text" name="theme" class="in"></div>

<div class="fild" >Decoration Preference</div>
<div class="input"><input type="text" name="deco" class="in"></div><br>

<div class="fild" >Special Request</div>
<div class="input"><input type="text" name="spec" class="in"></div>

<div class="fild" >Photo Video</div>
<div class="input"><input type="text" name="photo" class="in"></div>

<div class="fild" >Entertainment Request</div>
<div class="input"><input type="text" name="entertainmentreq" class="in"></div><br>

<div class="fild" >Security Request</div>
<div class="input"><input type="text" name="secu" class="in"></div>


<div class="input"><input type="hidden" name="status" class="in"></div>


<div class="input"><input type="hidden" name="pay" class="in"></div>


<div class="input"><input type="hidden" name="finalpayment" class="in"></div>

<center><input type="submit" name="sub" value="Submit" class="btn">
</center>
</form>
</div>
</div>


<?php

include("connection.php");
if(isset($_POST['sub']))
{
$name=$_POST['name'];
$mo=$_POST['mo'];
$remark=$_POST['remark'];
$date=$_POST['date'];
$time=$_POST['time'];
$city=$_POST['city'];
$eventtype=$_POST['eventtype'];
$address=$_POST['address'];
$guestcount=$_POST['guestcount'];
$budget=$_POST['budget'];
$theme=$_POST['theme'];
$deco=$_POST['deco'];
$spec=$_POST['spec'];
$photo=$_POST['photo'];
$entertainmentreq=$_POST['entertainmentreq'];
$secu=$_POST['secu'];
$status=$_POST['status'];
$pay=$_POST['pay'];
$finalpayment=$_POST['finalpayment'];

$query = "INSERT INTO `booking`(`name`, `mo`, `remark`, `date`, `time`, `city`, `eventtype`, `address`, `guestcount`, `budget`, `theme`, `decorationpref`, `specialreq`, `photovideo`, `entertainmentreq`, `securityreq`, `status`, `advpayment`, `finalpayment`) 
    VALUES ('$name','$mo','$remark','$date','$time','$city','$eventtype','$address','$guestcount','$budget','$theme','$deco','$spec','$photo','$entertainmentreq','$secu','$status','$pay','$finalpayment')";


$data=mysqli_query($con,$query);

} 
?>
</section>
<?php
include("footer.php");
?>
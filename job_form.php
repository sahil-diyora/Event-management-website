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
<h2 class="title">Work With Us</h2>
</div> 
</div>
</div> 


<div class="form">
<form method="POST">

<div class="fild" >ID</div>
<div class="input"><input type="text" name="id" class="in"></div>

<div class="fild" >Name</div>
<div class="input"><input type="text" name="name" class="in"></div>

<div class="fild" >Address</div>
<div class="input"><input type="text" name="add" class="in"></div>

<div class="fild" >Qualification</div>
<div class="input"><input type="text" name="quali" class="in"></div>

<div class="fild" >DOB </div>
<div class="input"><input type="date" name="dob" class="in"></div>

<div class="fild" >Mobile No.</div>
<div class="input"><input type="text" name="mo" class="in"></div>

<div class="fild" >Email-id</div>
<div class="input"><input type="text" name="email" class="in"></div>

<div class="fild" >Experience</div>
<div class="input"><input type="text" name="exp" class="in"></div>

<div class="fild" >Skill</div>
<div class="input"><input type="text" name="skill" class="in"></div>

<div class="fild" >Apply For</div>
<div class="input"><input type="text" name="apply" class="in"></div>

<div class="fild" >Time</div>
<div class="input"><input type="time" name="time" class="in"></div>


<div class="input"><input type="hidden" name="date" class="in"></div>


<div class="input"><input type="hidden" name="status" class="in"></div>


<div class="input"><input type="hidden" name="joingdt" class="in"></div>
<center><a href="" ><button class="btn" name="sub">Submit</button></a></center>
</form>
</div>
</div>


<?php

include("connection.php");
if(isset($_POST['sub']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$add=$_POST['add'];
$quali=$_POST['quali'];
$dob=$_POST['dob'];
$mo=$_POST['mo'];
$email=$_POST['email'];
$exp=$_POST['exp'];
$skill=$_POST['skill'];
$apply=$_POST['apply'];
$time=$_POST['time'];
$date=$_POST['date'];
$status=$_POST['status'];
$joingdt=$_POST['joingdt'];



$query="INSERT INTO careers(id,name,address,qualification,dob,mob,email,exp,skill,applyfor,time,date,status,joingdt) 
VALUES('$id','$name','$add','$quali','$dob','$mo','$email','$exp','$skill','$apply','$time','$date','$status','$joingdt')";

$data=mysqli_query($con,$query);


}
?>

</section>
<?php
include("footer.php");
?>
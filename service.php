<?php
include("header.php");
?>

<style>
.main{
	background-color:white;
	color:black;
	padding:10px;
	border-radius:10px;
	box-shadow:2px 2px 10px Gainsboro;
	margin-bottom:20px;
	
}
.main:hover{
	background-color:LightCyan;
}
.detail{
	margin-top:15px;
	color:black;
}
.btn{
	margin-left:50%;
	margin-top:20px;
	background-color:SteelBlue;
	color:white;
	
}
</style>





<section id="service" class="features-area pt-115 pb-130 gray-bg">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="section-title text-center pb-20">
<h2 class="title">Services</h2>
</div> 
</div>
</div> 



<div class="row">
		<div class="col-lg-6">
			<div class="main">
				<div class="row">
					<div class="col-lg-6" align="justify">
						<img src="assets/images/e8.jpg" alt="Image not found" height="100%" width="100%">
					</div>
					<div class="col-lg-6">
					<h3>wedding Event</h3>
							<div class="detail">
								For us, every wedding is a chance to create memories and make your dreams come true.
							</div>
								<a href="booking.php" ><button class="btn">booking</button></a>
							
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="col-lg-6">
			<div class="main">
				<div class="row">
					<div class="col-lg-6">
						<img src="assets/images/b4.jpg" alt="Image not found"  height="100%" width="100%">
					</div>
					<div class="col-lg-6">
					<h3>Birthday Event</h3>
							<div class="detail">
								 Birthdays is annual occasions that prove your resilience to the tests of time. Make your mark on the calendar and let the celebrations begin.
								</div>
								<a href="booking.php" ><button class="btn" style="margin-top:1px;">booking</button></a>
							
					</div>
				</div>
			</div>
		</div>

</div>

<div class="row">
		<div class="col-lg-6">
			<div class="main">
				<div class="row">
					<div class="col-lg-6">
						<img src="assets/images/ef.jpeg" alt="Image not found" height="100%" width="100%">
					</div>
					<div class="col-lg-6">
					<h3>Corporate Party</h3>
							<div class="detail">
								Discover new heights in your field and stop worrying about the sheer nightmare of organizing the perfect corporate event. 
							</div>
								<a href="booking.php" ><button class="btn">booking</button></a>
							
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="col-lg-6">
			<div class="main">
				<div class="row">
					<div class="col-lg-6">
						<img src="assets/images/e4.jpg" alt="Image not found"  height="100%" width="100%">
					</div>
					<div class="col-lg-6">
					<h3>Engagement Event</h3>
							<div class="detail">
								Engagement is like the mini wedding nowadays. Hence, it is essential to hire an expert engagement event planner in  to make it memorable.
								</div>
								<a href="booking.php" ><button class="btn" style="margin-top:1px;">booking</button></a>
							
					</div>
				</div>
			</div>
		</div>

</div>

</div> 

</section>
<?php
include("footer.php");
?>
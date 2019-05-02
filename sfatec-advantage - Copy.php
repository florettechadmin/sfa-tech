<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Sfatec</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<?php include('includes/csslinks.php');?>
</head>
<body>
<?php include('includes/header.php');?>
<div class="hmBanner">
	<div class="wrapper">
  	<div class="innerbanner">
   	  <img src="images/banner/why-banner.jpg" alt="why banner" />
	  	<div class="ban_desc">
	  		<h2>Sfatec Advantage</h2>
	  		<p>Professional Workwear Rental Services<br>from Start to Finish </p>
	  	</div>
  	</div>
	</div>
</div>
<div class="wrapper">
<div class="breadDiv">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="about-us.php">About Us</a></li>
      <li>Sfatec Advantage</li>
    </ul>
  </div>
</div>
</div>

<div class="wrapper cmnPad techBck tech">
	<div class="container">
  	<h2>TECHNOLOGY</h2>
  	<div class="techDiv cf">
	  	<div class="techlft">
	  		<img src="images/technology-lft.jpg" alt="technology-lft" />
	  	</div>
	  	<div class="techrgt techrgtBck">
	  		<p class="mb30">Our continual investment in equipment, processes and IT/Communication create greater efficiencies and quality of service for our customers.</p>
	  		<p>Sfatec have introduced the latest innovations and technology across all aspects of the business. These range from the high-tech Data matrix code to sophisticated vehicle tracking, telephony and IT-based solutions and services.</p>
	  	</div>
	  </div>
	</div>
</div>

<div class="wrapper cmnPad faciBck faci">
	<div class="container">
	  	<h2>FACILITIES</h2>
	  	<div class="faciDiv cf">
		  	<div class="facilft">
		  		<p class="mb30">Sfatec have invested in the latest equipment and infrastructure across all our facilities incorporating standardised practices and procedures.</p>
		  		<p>Our facilities support our ability to provide flexible, resilient and excellent service to our customers.</p>
		  	</div>
		  	<div class="facirgt">
				<ul id="owl-demo2" class="owl-carousel">
          <!-- <li>
              <div>
                <img src="images/facility/facility1.jpg" alt="facility1">
              </div>
          </li> -->
          <li>
              <div>
                <img src="images/facility/facility2.jpg" alt="facility1">
              </div>
          </li>
          <!-- <li>
              <div>
                <img src="images/facility/facility3.jpg" alt="facility1">
              </div>
          </li>
          <li>
              <div>
                <img src="images/facility/facility4.jpg" alt="facility1">
              </div>
          </li>
          <li>
              <div>
                <img src="images/facility/facility5.jpg" alt="facility1">
              </div>
          </li> -->
          <li>
              <div>
                <img src="images/facility/facility6.jpg" alt="facility1">
              </div>
          </li>
          <li>
              <div>
                <img src="images/facility/facility7.jpg" alt="facility1">
              </div>
          </li>
          <li>
              <div>
                <img src="images/facility/facility8.jpg" alt="facility1">
              </div>
          </li>
        </ul>
		  	</div>
		  </div>
	</div>
</div>

<div class="wrapper cmnPad why-below">
	<div class="container">
	<div class="whyDetail cf">
		<div class="wid30 whyDesc">
			<h2>INVESTMENT</h2>
			<img src="images/investment.jpg" alt="investment" class="mb30" />
			<ul>
				<li>Latest technology and<br> innovations</li>
				<li>High-quality pool stock</li>
				<li>IT infrastructure</li>
				<li>Highly skilled technical<br> personnel</li>
			</ul>
		</div>
		<div class="wid30 wid30q whyDesc">
			<h2>MULTI PLANS</h2>
			<img src="images/multiplans.jpg" alt="multiplans" class="mb30" />
			<ul>
				<li>Business Resilience</li>
				<li>Strategic Locations</li>
				<li>Common Practices<br> and Procedures</li>
			</ul>
		</div>
		<div class="wid30 wid30q1 whyDesc brdrgt">
			<h2>HIGH STANDARDS</h2>
			<img src="images/high-standards.jpg" alt="high-standards" class="mb30" />
			<ul>
				<li>Adopting 55 Standards</li>
				<li>RAL Certified Laundry </li>
			</ul>
		</div>
	</div>
	</div>
</div>

<div class="wrapper cmnPad faci ">
	<div class="container">
		<h2>RESILIENCE</h2>
		<ul id="owl-demo1" class="owl-carousel mb50">
		<li>
		    <div>
		      <img src="images/resilience/resilience1.jpg" alt="resilience">
		    </div>
		</li>
		<li> 
		    <div>
		      <img src="images/resilience/resilience2.jpg" alt="resilience">
		    </div>
		</li>
		<li>	  
		    <div>
		      <img src="images/resilience/resilience3.jpg" alt="resilience">
		    </div>
		</li>
		</ul>
		<p class="text-center mb30">Laundry service provision is often a critical issue for many companies. Sfatec have structures and processes in place to ensure that continuity of service is maintained at all times.</p>
		<p class="text-center">Business resilience is achieved through our strategic risk management and standard procedures that provide the ability to quickly address any disruptions while maintaining continuous business operations.</p>
	</div>
</div>
<?php include('includes/footer.php');?>
<?php include('includes/pageBottom.php');?>
<script type="text/javascript">
  $(document).ready(function(){
    $(".navbar-nav li a").each(function(){
      if($(this).attr("id")=="mnu05" || $(this).attr("id")==" "){
        $(this).parent().addClass("actv");
      }
    });
     sfa.backTop();
     sfa.header_shrink();
   });
</script>
</body>
</html>
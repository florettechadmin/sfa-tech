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
   	  <img src="images/banner/rent-workwear-banner.jpg" alt="rent banner" />
	  	<div class="ban_desc">
	  		<h2>WOMENS TUNIC</h2>
	  		<p>Lorem Ipsum Dolor Sit Amet Consecteur</p>
	  	</div>
  	</div>
	</div>
</div>
<div class="wrapper">
<div class="breadDiv">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="buy-workwear.php">Buy Workwear</a></li>
      <li><a href="buy-workwear.php#workwear">Workwear</a></li>
      <li>Womens Tunic</li>
    </ul>
  </div>
</div>
</div>

<div class="wrapper prodPad prod-bck">
	<div class="container">
		<div class="buy_hd">
	  	<h1>WOMENS TUNIC</h1> 
	  	<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h2>
	  </div>
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 brder padL padR wid100">
    	<img src="images/products/dummy1.jpg" alt="dummy1" />
    </div>
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 padd wid100">
    	<div class="top_det">
	    	<h2>SFATEC WOMENS TUNIC</h2>
	    	<ul>
	    		<li>Product Number : <span>21000 </span></li>
	    	</ul>
	    	<ul>
	    		<li>Sizes : <span>34, 36, 38, 40, 42</span></li>
	    	</ul>
	    </div>
	    <div class="mid_det">
	    	<h2>SPECIFICATIONS</h2>
	    	<ul>
	    		<li>Fabric Extra Durable Poly Cotton </li>
	    		<li>Color White</li>
          
	    	</ul>
	    </div>
	    <div class="bot_det">
	    	<h2>CERTIFICATIONS</h2>
	    	<p>Fabric tested & certified under ISO test methods </p>
	    </div>
    </div>
  </div>
</div>
<div class="wrapper prodPad1 prod-bck">
  <div class="container">
    <h2 class="prod_hp">Description</h2>
    <p>Designed especially for Food / Pharma Industry R&D Lab.<br>Women’s lab coat with 2 pleats at Front.<br>Front open with Snap.<br>Long wearing.<br>No Pockets for Extra safety. 
    </p>
  </div>
</div>
<div class="wrapper cmnPad">
  <div class="container">
    <div class="flm_cent cf">      
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 flame1 wid100">
        <a href="food-processing.php"><img src="images/your-industry/dummy.jpg" alt="dummy" class="mb20"/></a>
        <h2>Food Processing<br><br></h2>
      </div>
    </div>
  </div>
</div>
<?php include('includes/enquiry.php');?>
<?php include('includes/footer.php');?>
<?php include('includes/pageBottom.php');?>
<script type="text/javascript">
  $(document).ready(function(){
    $(".navbar-nav li a").each(function(){
      if($(this).attr("id")=="mnu03" || $(this).attr("id")==" "){
        $(this).parent().addClass("actv");
      }
    });
     sfa.backTop();
     sfa.header_shrink();
   });
</script>
</body>
</html>
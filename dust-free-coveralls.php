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
	  		<h2>DUST FREE COVERALLS</h2>
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
      <li><a href="buy-workwear.php#lint">Lint Free Products</a></li>
      <li>Dust Free Coveralls</li>
    </ul>
  </div>
</div>
</div>

<div class="wrapper prodPad prod-bck">
	<div class="container">
		<div class="buy_hd">
	  	<h1>LINT FREE TROUSER</h1> 
	  	<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h2>
	  </div>
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 brder padL padR wid100">
    	<img src="images/products/dust-free-coveralls.jpg" alt="dust-free-coveralls" />
    </div>
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 padd mb50 wid100">
    	<div class="top_det">
	    	<h2>LINT FREE TROUSER</h2>
	    	<ul>
	    		<li>Product Number : <span>40200 </span></li>
	    	</ul>
	    	<ul>
	    		<li>Sizes : <span>26, 28, 30, 32, 34, 36, 38, 40</span></li>
	    	</ul>
	    </div>
	    <div class="mid_det">
	    	<h2>SPECIFICATIONS</h2>
	    	<ul>
	    		<li>Fabric Polyester Fabric </li>
	    		<li>Color White (other special colors can be developed upon request)</li>
	    		
	    	</ul>
	    </div>
	    <div class="bot_det">
	    	<h2>CERTIFICATIONS</h2>
	    	<p>Fabric tested & certified under ISO test methods  </p>
	    </div>
    </div>
  </div>
</div>
<div class="wrapper prodPad1 prod-bck">
  <div class="container">
    <h2 class="prod_hp">Description</h2>
    <p>Suitable for environment where the workwear has to be lint free.<br>Designed for Both Men & Woman.<br>Full elastic Waist band.<br> No Pockets for Extra safety. 
    </p>
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
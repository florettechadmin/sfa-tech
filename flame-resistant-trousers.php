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
	  		<h2>WELDING TROUSERS</h2>
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
      <li><a href="buy-workwear.php#flame">Flame Resistant Wear</a></li>
      <li>Welding Trousers</li>
    </ul>
  </div>
</div>
</div>
<div class="wrapper prodPad prod-bck">
  <div class="container">
    <div class="buy_hd">
      <h1>WEILDER JACKETS</h1> 
      <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h2>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 brder padL padR wid100">
      <img src="images/products/welding-jacket-electric.jpg" alt="welding-jacket-electric" />
    </div>
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 padd wid100">
      <div class="top_det">
        <h2>WIELDER JACKET FOR ELECTRIC ARC PROTECTION</h2>
        <ul>
          <li>Product Number : <span>41000 </span></li>
        </ul>
        <ul>
          <li>Sizes : <span>34, 36, 38, 40, 42, 44</span></li>
        </ul>
      </div>
      <div class="mid_det">
        <h2>SPECIFICATIONS</h2>
        <ul>
          <li>Fabric Tecasafe Plus 700 A Blend of FR Modacrylic, Lyocell, Aramid</li>
          <li>Color Navy Blue</li>
          <li>Concealed snap Front </li>
          <li>Tencate Tecasafe Plus 700 A, 240 gsm </li>
        </ul>
      </div>
      <div class="bot_det">
        <h2>CERTIFICATIONS</h2>
        <p>Arc Thermal Performance Value (ATPV) 8.4 Cal/cm2 </p>
        <p class="parabd">NFPA 70 E, HRC 2 & NFPA 2112</p>
      </div>
    </div>
  </div>
</div>
<div class="wrapper prodPad1 prod-bck">
  <div class="container">
    <h2 class="prod_hp">Description</h2>
    <p>Designed specifically for Electric Arc flash fire protection.<br>2 Front Chest pockets with Flap closing.<br>Concealed Front Snap Buttons which provide extra safety to the process.
    </p>
  </div>
</div>


<div class="wrapper prodPad ">
	<div class="container">
		<div class="buy_hd">
	  	<h1>WELDING TROUSERS</h1> 
	  	<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h2>
	  </div>
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 brder1 padL padR wid100">
    	<img src="images/products/welding-trousers-electric.jpg" alt="welding-trousers-electric" />
    </div>
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 padd wid100">
    	<div class="top_det">
	    	<h2>WILDER TROUSER FOR ELECTRIC ARC PROTECTION</h2>
	    	<ul>
	    		<li>Product Number : <span>41100</span></li>
	    	</ul>
	    	<ul>
	    		<li>Sizes : <span>26, 28, 30, 31, 32, 33, 34, 36, 38, 40</span></li>
	    	</ul>
	    </div>
	    <div class="mid_det">
	    	<h2>SPECIFICATIONS</h2>
	    	<ul>
	    		<li>Fabric Tecasafe Plus 700 A Blend of FR Modacrylic, Lyocell, Aramid</li>
	    		<li>Color Navy Blue </li>
	    	</ul>
	    </div>
	    <div class="bot_det">
	    	<h2>CERTIFICATIONS</h2>
	    	<p>Arc Thermal Performance Value (ATPV) 8.4 Cal/cm2 </p>
        <p class="parabd">NFPA 70 E, HRC 2 & NFPA 2112</p>
	    </div>
    </div>
  </div>
</div>
<div class="wrapper prodPad1 prod-bck1">
  <div class="container">
    <h2 class="prod_hp">Description</h2>
    <p>Designed specifically for Welder’s protection.<br>2 side pockets, 2 cargo pockets & 2 back pockets.<br>2 cargo pockets with Flap closing. 
    </p>
  </div>
</div>
<div class="wrapper cmnPad help-bck">
  <div class="container">
    <div class="flm_cent cf">      
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 flame1 wid100">
        <a href="electronics.php"><img src="images/your-industry/dummy.jpg" alt="dummy" class="mb20"/></a>
        <h2>Electronics<br><br></h2>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 flame1 wid100">
        <a href="clean-room.php"><img src="images/your-industry/dummy.jpg" alt="dummy" class="mb20"/></a>
        <h2>Clean Room<br><br></h2>
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
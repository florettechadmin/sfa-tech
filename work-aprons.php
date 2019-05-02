<!DOCTYPE html>
<html>
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
      <img src="images/banner/work-aprons-banner.jpg" alt="Work Aprons" />
	  	<div class="ban_desc">
	  		<h1>WORK APRONS</h1>
	  		<p>Better image, safety & functionality delivered</p>
	  	</div>
  	</div>
	</div>
</div>
<div class="wrapper">
<div class="breadDiv">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="work-wear.php">Workwear</a></li>
      <li>Work Aprons</li>
    </ul>
  </div>
</div>
</div>

<div class="wrapper prodPad prod-bck">
	<div class="container">
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 brder padL padR wid100 mb80">
    	<img src="images/products/work-aprons.jpg" alt="work-aprons" />
    </div>
    <div id="aprons" class="col-xs-12 col-sm-7 col-md-7 col-lg-7 padd mb50 wid100">
    	<div class="top_det">
	    	<h2>SFATEC WORK APRONS</h2>
	    	<ul>
	    		<li>Product Number : <span>20900 </span></li>
	    	</ul>
	    	<ul>
	    		<li>Sizes : <span>34, 36, 38, 40</span></li>
	    	</ul>
	    </div>
	    <div class="mid_det">
        <h2>DESCRIPTION</h2>
        <ul>
          <li>Suitable for retail, food service& other manufacturing environments</li>
          <li>Unisex styling</li>
          <li>Covers up to knee</li>
          <li>Length upto Knee</li>
          <li>No Pockets for Extra safety</li>      
        </ul>
      </div>
      <div class="mid_det">
        <h2>SPECIFICATIONS</h2>
        <ul>
          <li>Extra Durable Blended cotton</li>
          <li>Color White </li> 
        </ul>
      </div>
    </div>
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 padL mb50 wid100 cb">      
      <div class="bot_det">
        <h2>FABRIC TESTED FOR</h2>
        <p>ISO test methods of ISO 6330, ISO 12945, ISO 12947, ISO 13934, ISO 13937, IS 105-C06 etc</p>
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
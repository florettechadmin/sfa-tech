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
   	  <img src="images/banner/hotels-banner.jpg" alt="hotels-banner" />
	  	<div class="ban_desc">
	  		<h1>Hotels</h1>
	  		<p>Your preparation for service excellence!</p>
	  	</div>
  	</div>
	</div>
</div>
<div class="wrapper">
<div class="breadDiv">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="your-industry.php">Your Industry</a></li>
      <li>Hotels</li>
    </ul>
  </div>
</div>
</div>

<div class="wrapper cmnPad help-bck">
	<div class="container">
		<div class="buy_hd yurind mb50">
			<div class="imgd">
	  		<img src="images/prod-hotel.jpg" alt="hotel" class="mb30"/>
	  	</div>
	  	<div class="pard">
		  	<h2>Lorem ipsum</h2>
		  	<p class="mb10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
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
      if($(this).attr("id")=="mnu04" || $(this).attr("id")==" "){
        $(this).parent().addClass("actv");
      }
    });
     sfa.backTop();
     sfa.header_shrink();
   });
</script>
</body>
</html>
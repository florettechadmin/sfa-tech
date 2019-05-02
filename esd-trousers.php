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
        <h2>WEILDER COATS</h2>
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
      <li>Weilder Coats</li>
    </ul>
  </div>
</div>
</div>

<div class="wrapper prodPad prod-bck">
  <div class="container">
    <div class="buy_hd">
      <h1>WEILDER COATS</h1> 
      <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h2>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 brder padL padR wid100">
      <img src="images/products/welding-coat.jpg" alt="welding-coat" />
    </div>
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 padd wid100">
      <div class="top_det">
        <h2>WIELDER ANTI-STATIC LONG COAT</h2>
        <ul>
          <li>Product Number : <span>40600 </span></li>
        </ul>
        <ul>
          <li>Sizes : <span>34, 36, 38, 40, 42 & 44</span></li>
        </ul>
      </div>
      <div class="mid_det">
        <h2>SPECIFICATIONS</h2>
        <ul>
          <li>Fabric Polyester Carbon Anti-Static Fabric </li>
          <li>Color White (other special colors can be developed upon request) </li>
          
        </ul>
      </div>
      <div class="bot_det">
        <h2>CERTIFICATIONS</h2>
        <p>Fabric tested & certified for clean room standard class 100-1000, Surface Resistivity (Ώ/SQ) 2.2 X 106</p>
      </div>
    </div>
  </div>
</div>
<div class="wrapper prodPad1 prod-bck">
  <div class="container">
    <h2 class="prod_hp">Description</h2>
    <p>Suitable for Electronic Industries & Clean room environments where ESD Protection is required.<br>Concealed Front Snap Buttons which provide extra safety to the process.<br>Sleeve cuff with full Elastic which gives extra closing.<br>No Pockets for Extra safety.<br>Length up to Knee.
    </p>
  </div>
</div>
<div class="wrapper cmnPad">
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
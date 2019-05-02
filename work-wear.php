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
<div class="hmBanner cf">
	<div class="wrapper">
    <div class="bannerslide">
      <div>
        <img src="images/banner/work-wear-1.jpg" alt="rent banner" />
        <div class="ban_desc">
          <h1>WORKWEAR</h1>
          <p>Extra Durable Work Wear collection</p>
        </div>
      </div>
      <div>
        <img src="images/banner/work-wear-2.jpg" alt="work wear" />
        <div class="ban_desc">
          <h2>WORKWEAR</h2>
          <p>Extra Durable Work Wear collection</p>
        </div>
      </div>
      <div>
        <img src="images/banner/work-wear-3.jpg" alt="work wear" />
        <div class="ban_desc">
          <h2>WORKWEAR</h2>
          <p>Extra Durable Work Wear collection</p>
        </div>
      </div>
      <div>
        <img src="images/banner/work-wear-4.jpg" alt="work wear" />
        <div class="ban_desc">
          <h2>WORKWEAR</h2>
          <p>Extra Durable Work Wear collection</p>
        </div>
      </div>
      <div>
        <img src="images/banner/work-wear-5.jpg" alt="work wear" />
        <div class="ban_desc">
          <h2>WORKWEAR</h2>
          <p>Extra Durable Work Wear collection</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wrapper mt_mnus">
<div class="breadDiv">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="products.php">Products</a></li>
      <li>Workwear</li>
    </ul>
  </div>
</div>
</div>
<div class="wrapper cmnPad buy">
  <div class="container">
    <div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 hm_rent_inn ">
        <a href="work-shirts.php"><img src="images/workwear/wear1.jpg" alt="wear1" /></a>
        <img src="images/shadow.png" alt="shadow" class="mb35"/>
        <h2>Work Shirts</h2>
        <a href="work-shirts.php" class="rdmore mbqry">Read More</a>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 hm_rent_inn">
        <a href="work-trousers.php"><img src="images/workwear/wear2.jpg" alt="flame-resistant-wear" /></a>
        <img src="images/shadow.png" alt="shadow" class="mb35"/>
        <h2>Work Trousers</h2>
        <a href="work-trousers.php" class="rdmore mbqry">Read More</a>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 hm_rent_inn">
        <a href="work-coats.php"><img src="images/workwear/wear3.jpg" alt="anti-static" /></a>
        <img src="images/shadow.png" alt="shadow" class="mb35"/>
        <h2>Work Coats</h2>
        <a href="work-coats.php" class="rdmore mbqry">Read More</a>
      </div>
      
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 hm_rent_inn">
        <a href="bib-trousers.php"><img src="images/workwear/wear5.jpg" alt="lint-free" /></a>
        <img src="images/shadow.png" alt="shadow" class="mb35"/>
        <h2>Bib Trousers</h2>
        <a href="bib-trousers.php" class="mb50 rdmore mbq">Read More</a>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 hm_rent_inn">
        <a href="coveralls.php"><img src="images/workwear/wear6.jpg" alt="lint-free" /></a>
        <img src="images/shadow.png" alt="shadow" class="mb35"/>
        <h2>Coverall</h2>
        <a href="coveralls.php" class="mb50 rdmore mbq">Read More</a>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 hm_rent_inn">
        <a href="work-aprons.php"><img src="images/workwear/wear7.jpg" alt="lint-free" /></a>
        <img src="images/shadow.png" alt="shadow" class="mb35"/>
        <h2>Work Aprons</h2>
        <a href="work-aprons.php" class="mb50 rdmore mbq">Read More</a>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 hm_rent_inn mb50 mb26">
        <a href="work-caps.php"><img src="images/workwear/wear8.jpg" alt="lint-free" /></a>
        <img src="images/shadow.png" alt="shadow" class="mb35"/>
        <h2>Work Caps</h2>
        <a href="work-caps.php" class="mb50 rdmore mbq">Read More</a>
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
     sfa.banner();
     sfa.header_shrink();
   });
</script>

</body>
</html>

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
        <img src="images/banner/flame-resistant-wear-1.jpg" alt="rent banner" />
        <div class="ban_desc">
          <h1>FLAME RESISTANT WEAR</h1>
          <p>Protection at its best – your peace of<br> mind guaranteed</p>
        </div>
      </div>
      <div>
        <img src="images/banner/flame-resistant-wear-2.jpg" alt="work wear" />
        <div class="ban_desc">
          <h2>FLAME RESISTANT WEAR</h2>
          <p>Protection at its best – your peace of<br> mind guaranteed</p>
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
      <li>Flame Resistant Wear</li>
    </ul>
  </div>
</div>
</div>
<div class="wrapper cmnPad buy">
  <div class="fm_container">
    <div class="flm_cent cf">
      <div class="flame hm_rent_inn ">
        <a href="welding-molten-metal.php"><img src="images/flame/flame-resistant1.jpg" alt="flame-resistant" /></a>
        <img src="images/shadow.png" alt="shadow" class="mb35"/>
        <h2>Welding & Molten Metal</h2>
        <a href="welding-molten-metal.php" class="rdmore mbqry">Read More</a>
      </div>
      <div class="flame hm_rent_inn">
        <a href="flash-fire-protection.php"><img src="images/flame/flame-resistant2.jpg" alt="flame-resistant-wear" /></a>
        <img src="images/shadow.png" alt="shadow" class="mb35"/>
        <h2>Flash Fire Protection</h2>
        <a href="flash-fire-protection.php" class="rdmore mbqry">Read More</a>
      </div>
      <div class="flame hm_rent_inn">
        <a href="heat-flame-protection.php"><img src="images/flame/flame-resistant3.jpg" alt="flame-resistant" /></a>
        <img src="images/shadow.png" alt="shadow" class="mb35"/>
        <h2>Heat & Flame Protection</h2>
        <a href="heat-flame-protection.php" class="rdmore mbqry">Read More</a>
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

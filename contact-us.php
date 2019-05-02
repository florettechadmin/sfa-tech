<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Contact us for workwear rental service</title>
<meta name="description" content="Get a free quote for workwear rental service from Sfatec" />
<meta name="keywords" content="Contact us, Reach us Sfatec for workwear rental service " />
<?php include('includes/csslinks.php');?>
</head>
<body>
<?php include('includes/header.php');?>
<div class="hmBanner">
	<div class="wrapper">
  	<div class="innerbanner">
   	  <img src="images/banner/contact-banner.jpg" alt="contact banner" />
	  	<div class="ban_desc">
	  		<h1>CONTACT US</h1>
	  		<!-- <p>Lorem Ipsum Dolor Sit Amet Consecteur</p> -->
	  	</div>
  	</div>
	</div>
</div>
<div class="wrapper">
<div class="breadDiv">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>Contact Us</li>
    </ul>
  </div>
</div>
</div>

<div class="wrapper cmnPad">
  <div class="container">
    <div class="cntct">
      <h2>Contact Details</h2>
      <h3>Sankar </h3>
      <h4>General Manager </h4>
      <p>+91 - 77080 04588 </p>
      <h3>Sfatec Bangalore</h3>
      <h4>Mr. Anthony Alfred,<br>(Manager Sales &amp; Operations )</h4>
        <p>+91 -9686850300</p>
      <p>Sfatec Private Limited<br>2a(1) & 3(1), North Shed,<br>Attebelle Industrial Area,<br>Attebelle, Bangalore – 562107</p>
    
      <!-- <h3>Sfatec Chennai</h3>
      <h4>Mr. Vinoth Kumar<br>(Territory Manager) </h4>
      <p>+91 - 98940 70103</p> -->
      <!-- <h3>Sfatec Pvt Ltd ( Workwear Manufacturing )</h3>
      <h4>Sfatec Private Limited,<br> Virudhunagar, Tamilnadu</h4>
      <p>+91 - 99524 24588</p> -->
    </div>
    <?php   
        $ip = $_SERVER['REMOTE_ADDR'];       
        $website = $_SERVER['HTTP_HOST'];
        $path_db_form="/var/www/enquiry/form.php"; //form with connect with database
        $path_no_db_form="/var/www/enquiry/no-db-form.php";// form without database connections
        $path_db_config="/var/www/enquiry/dbconn.php"; // config path for common to all
        include_once($path_db_config);
        if(mysqli_connect_errno()) {
        include($path_no_db_form);
        }
        else{   
        $fields = " company_code";
        $conditions =" website LIKE '%$website%'";                                        
        $company_codeqry = $objErpConnect->select("company_basic", $fields, $conditions);
        $company_data = mysqli_fetch_object($company_codeqry);
        $company_code = $company_data->company_code;
        include($path_db_form);
        }
      ?> 
    
  </div>
</div>

<?php include('includes/footer.php');?>
<?php include('includes/pageBottom.php');?>
<script type="text/javascript">
  $(document).ready(function(){
    $(".navbar-nav li a").each(function(){
      if($(this).attr("id")=="mnu06" || $(this).attr("id")==" "){
        $(this).parent().addClass("actv");
      }
    });
     sfa.backTop();
     sfa.header_shrink();
   });
</script>
</body>
</html>
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
   	  <img src="images/banner/contact-banner.jpg" alt="contact banner" />
	  	<div class="ban_desc">
	  		<h1>CAREER</h1>
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
      <li>Career</li>
    </ul>
  </div>
</div>
</div>

<div class="wrapper cmnPad">
  <div class="container">
    <div class="row career_div">
      <form method="post" action="" id="career_form" class="career_form" enctype="multipart/form-data">
        <div></div>
        <div class="wrapper mb15">
          <label class="car_label">Name</label>
          <input type="text" name="name" id="name" class="car_field" required  onkeypress="return isNumberKey()"/>        
        </div>
        <div class="wrapper mb15">
          <label class="car_label">Gender</label>       
          <div class="car_radio mt1"><input type="radio" name="gender" value="male" required> Male</div>
            <div class="car_radio"><input type="radio" name="gender" value="female" required> Female</div>     
        </div>
        <div class="wrapper mb15">
          <label class="car_label">Date of Birth:(dd/mm/yyyy)</label>
          <input type="text" name="date_of_birth" id="date_of_birth" class="car_field" required />        
        </div>
        <div class="wrapper mb15">
          <label class="car_label">Mobile Number</label>
          <input type="text" name="mobile" id="mobile" class="car_field" required onkeypress="return isNumberKeys()"/>        
        </div>
        <div class="wrapper mb15">
          <label class="car_label">Alternate Number</label>
          <input type="text" name="alternate_number" id="alternate_number" class="car_field" />       
        </div>
        <div class="wrapper mb15">
          <label class="car_label">Email Address</label>
          <input type="email" name="email" id="email" class="car_field" required />        
        </div>
        <div class="wrapper mb15">
          <label class="car_label">Address</label>
          <textarea id="address" name="address" class="car_txtarea" required></textarea>        
        </div>
        <div class="wrapper mb15">
          <label class="car_label">Interested in</label>
          <input type="text" name="interested_in" id="interested_in" class="car_field" />
        </div>
        <div class="wrapper mb15">
          <label class="car_label">Experience (Yrs)</label>
          <input type="text" name="experience" id="experience" class="car_field" required onkeypress="return isNumberKeys()"/>
        </div>
        <div class="wrapper mb15">
          <label class="car_label">Resume Upload</label>
           <input type="file" name="resume" id="resume" class="car_field" required>        
        </div>
        <div class="cf"></div>
           <button name="submit" class="car_submit" type="submit">SUBMIT</button>
      </form>   
    </div>
  </div>
</div>

<?php include('includes/footer.php');?>
<?php include('includes/pageBottom.php');?>
<script type="text/javascript">
  $(document).ready(function(){
    $(".navbar-nav li a").each(function(){
      if($(this).attr("id")=="mnu07" || $(this).attr("id")==" "){
        $(this).parent().addClass("actv");
      }
    });
     sfa.backTop();
     sfa.header_shrink();
   });
</script>
</body>
</html>
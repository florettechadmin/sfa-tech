<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Sfatec - Workwear Gallery</title>
<meta name="description" content="Check out workwear collections at Sfatec Gallery" />
<meta name="keywords" content="Workwear Gallery, Sfatec Gallery" />
<?php include('includes/csslinks.php');?>
</head>
<body>
<?php include('includes/header.php');?>
<div class="hmBanner">
	<div class="wrapper">
  	<div class="innerbanner">
   	  <img src="images/banner/rent-workwear-banner.jpg" alt="rent banner" />
        <div class="breadDiv">
          <div class="container">
            <ul class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li>Gallery</li>
            </ul>
          </div>
        </div>
  	  	<div class="ban_desc1">
  	  		<h1>GALLERY</h1>
  	  		<p>Engage yourself in a never seen before range of workwear</p>
  	  	</div>
  	</div>
	</div>
</div>

<div class="wrapper">
  <div class="container">
    <div id="gallery">
    <ul class="browUL">
      <li>
        <a href="images/gallery/gallery-img-01-big.jpg">
        <img src="images/gallery/gallery-img-01.jpg" alt="gallery-img-01"/>
        </a>
      </li>
      <li>
        <a href="images/gallery/gallery-img-02-big.jpg">
        <img src="images/gallery/gallery-img-02.jpg" alt="gallery-img-02"/>
        </a>
      </li>
      <li>
        <a href="images/gallery/gallery-img-03-big.jpg">
        <img src="images/gallery/gallery-img-03.jpg" alt="gallery-img-03"/>
        </a>
      </li>
      <li>
        <a href="images/gallery/gallery-img-04-big.jpg">
        <img src="images/gallery/gallery-img-04.jpg" alt="gallery-img-04"/>
        </a>
      </li>
      <li>
        <a href="images/gallery/gallery-img-06-big.jpg">
        <img src="images/gallery/gallery-img-06.jpg" alt="gallery-img-06"/>
        </a>
      </li>
      <li>
        <a href="images/gallery/gallery-img-05-big.jpg">
        <img src="images/gallery/gallery-img-05.jpg" alt="gallery-img-05"/>
        </a>
      </li>
      <li>
        <a href="images/gallery/gallery-img-08-big.jpg">
        <img src="images/gallery/gallery-img-08.jpg" alt="gallery-img-08"/>
        </a>
      </li>
      <li>
        <a href="images/gallery/gallery-img-07-big.jpg">
        <img src="images/gallery/gallery-img-07.jpg" alt="gallery-img-07"/>
        </a>
      </li>
      <li>
        <a href="images/gallery/gallery-img-09-big.jpg">
        <img src="images/gallery/gallery-img-09.jpg" alt="gallery-img-09"/>
        </a>
      </li> 
      <li>
        <a href="images/gallery/gallery-img-11-big.jpg">
        <img src="images/gallery/gallery-img-11.jpg" alt="gallery-img-11"/>
        </a>
      </li>
      <li>
        <a href="images/gallery/gallery-img-12-big.jpg">
        <img src="images/gallery/gallery-img-12.jpg" alt="gallery-img-12"/>
        </a>
      </li>
      <li>
        <a href="images/gallery/gallery-img-02-big.jpg">
        <img src="images/gallery/gallery-img-02.jpg" alt="gallery-img-02"/>
        </a>
      </li>
    </ul>    
  </div>
</div>
</div>
<?php include('includes/footer.php');?>
<?php include('includes/pageBottom.php');?>
<script type="text/javascript">
$(document).ready(function() {
  $('#gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
    enabled: true,
    navigateByImgClick: true,
    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    }
    
  });
  sfa.backTop();
  sfa.header_shrink();
});
</script>
</body>
</html>
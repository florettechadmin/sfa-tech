<div class="wrapper cmnPad enqbck">
  <div class="container">    
    <div class="form_width">
    <h2>Send Enquiry</h2>
    <?php 
      $ip = $_SERVER['REMOTE_ADDR'];        
      $path_mini_form="/var/www/enquiry/quick_enquiry.php"; //form with connect with database
      $website = $_SERVER['HTTP_HOST']; 
      include($path_mini_form);
    ?>
  </div>
  </div>
</div>
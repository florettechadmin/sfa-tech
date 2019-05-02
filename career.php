
<!DOCTYPE html>
<?php
error_reporting(0);
  require("includes/class.phpmailer.php");
  $host_name = "smtp.sendgrid.net";
  //$user_name = "gopimandev";
  //$password = "Welc@me2013";
   $user_name = "murugesh";
  $password = "!!Muru@123@FM!!!";
    
   if (isset($_REQUEST['Cr_btnsubmit']))  {
	   
	   $Name = $_POST['name'];
	   $gender = $_POST['gender'];	   
	   $mobile  =$_POST['mobile'];
       $alternate_number = $_POST['alternate_number'];
	   $email = $_POST['email'];
	   $address = $_POST['address'];
	   $interested_in = $_POST['interested_in'];
	   $exp = $_POST['exp'];
	   //$cityname = $_POST['city_name'];
	   //$exp = $_POST['exp'];
	  //$resume = $_POST['resume'];
	  $resume = $_FILES['resume']; 
	   //$resume = $_FILES['resume'];
	 $contact_name='Deepak';  
	 $company_name ="Essae";
	 //echo '<pre>';print_r($_POST);die;	
	    $To_name ="Deepak";
	    $to = "rajkumar.v@floretmedia.org";		
				$subject = "Job Application";			
				
				 $email_header ='<html style="color: rgb(34, 34, 34); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); max-width: 575px; line-height: 18px; font-size: 12px; font-family: Arial, Helvetica, sans-serif;">
            <head>
              <meta name="viewport" content="width=device-width" />
              <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            </head>
            <body bgcolor="#FFFFFF" text="#000000"  style="color: rgb(34, 34, 34); font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); max-width: 575px; line-height: 18px; font-size: 12px; font-family: Arial, Helvetica, sans-serif;">
            <table style="font-family:Helvetica,Arial,sans-serif;background:#EFEDED;" cellpadding="0" cellspacing="0" bgcolor="#EFEDED" border="0" width="100%">
              <tbody>
                <tr>
                  <td align="center">
                    <table width="96%" cellpadding="0" cellspacing="0"border="0">
                      <tbody>              
                        <tr>
                          <td style="border-top:5px solid #1e96d3; background:#fff;margin:0; padding:20px; border-spacing:0px;">';
                      $email_footer = '</td>
                        </tr>
                        <tr>
                          <td style="margin:0; padding:15px 0;">
                           <table style="font-family:Arial, Helvetica,sans-serif;font-size:11px;color:#999999;" cellpadding="0" cellspacing="0" border="0" width="100%">
                            <tbody> 
                             <tr>
                                <td style="font-family:Arial, Helvetica,sans-serif; margin:0; font-size:11px; padding:8px 0 0 0;">
                                  This email was intended for Sfatec P Ltd.340/3, Keela Thiruthangal,Virudhunagar Main road,
                                  Sivakasi- Tamil Nadu, India  
                                  626130. 
                                </td>
                              </tr>
                            <tr>
                                <td style="font-family:Arial, Helvetica,sans-serif; margin:0; font-size:11px; padding:8px 0 0 0;">
                               </td>
                              </tr>                
                              
                            </tbody>
                           </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>              
              </tbody>
            </table>
            </body>
          </html>';

      $body=$email_header.
              '<table width="100%" cellpadding="0" cellspacing="0">
                      <tr>
                        <td style="margin:0; padding:0px 0px 15px 0px; border-spacing:0px;">
                          <p style="font-size:14px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height: 1.5em; margin: 0px; padding: 0.4em; text-align: left;">
                             '.$subject.'
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td style="margin:0; padding:0px 0px 15px 0px; border-spacing:0px;">
                          <p style="color:#000; font-size:13px; margin:0; font-family:Arial, Helvetica,sans-serif;">
                            <strong>
                              Dear '.$contact_name.',
                            </strong>
                            <br>
                          </p>
                        </td>
                      </tr>                     
                      <tr>
                        <td style="margin:0; padding:0 0 5px 0;">
                          <p style="font-size:13px; background-color: rgb(234, 234, 234); color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height: 1.5em; margin: 0px; padding: 0.4em; text-align: left;">
                            Personal & Job Details:
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td style="margin:0; padding:0px 0px 15px 0px; border-spacing:0px;">
                          <table style="font-family:Helvetica,Arial,sans-serif; font-size:12px; font-weight:bold; margin-top:10px; width:100%">
                            <tbody>
                              <tr>
                                <td style="width:120px; padding:4px 0;">
                                   Name
                                </td>  
                                <td style="padding-right:10px;">
                                  :
                                </td>
                                <td style="font-weight:normal;">
                                  '.$Name.'
                                </td>
                              </tr>
                              <tr>
                                <td style="padding:4px 0;">
                                  Gender:
                                </td>
                                <td>
                                  :
                                </td>
                                <td style="font-weight:normal;">
                                  '.$gender.'
                                </td>
                              </tr>
                              <tr>
                                <td style="padding:4px 0;">
                                  Mobile:
                                </td>
                                <td>
                                  :
                                </td>
                                <td style="font-weight:normal;">
                                    '.$mobile.'
                                </td>
                              </tr>
                              <tr>
                                <td style="padding:4px 0;">
                                  Alternate Number:
                                </td>
                                <td>
                                  :
                                </td>
                                <td style="font-weight:normal;">
                                 '.$alternate_number.'
                                </td>
                              </tr>
                              <tr>
                                <td style="padding:4px 0;">
                                 Email Address
                                </td>
                                <td>
                                  :
                                </td>
                                <td style="font-weight:normal;">
                                  '.$email.'
                                </td>
                              </tr>
                              <tr>
                                <td style="padding:4px 0;">
                                  Address:
                                </td>
                                <td>
                                  :
                                </td>
                                <td style="font-weight:normal;">
                                  '.$address.'
                                </td>
                              </tr>
                              <tr>
                                <td style="padding:4px 0;">
                                 Interested in
                                </td>
                                <td>
                                  :
                                </td>
                                <td style="font-weight:normal;">
                                  '.$interested_in.'
                                </td>
                              </tr>
                              <tr>
                                <td style="padding:4px 0;">
                                 Experience (Yrs):
                                </td>
                                <td>
                                  :
                                </td>
                                <td style="font-weight:normal;">
                                  '.$exp.'
                                </td>
                              </tr>
                              
                              
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>'
                      .$email_footer;
                   // print_r($body);die;
					//echo '<pre>';print_r($body);die;	
					$mail = new PHPMailer();
					$mail->CharSet  = 'UTF-8';
					$mail->IsSMTP(); 
					$mail->SMTPDebug = 0;  
					$mail->SMTPAuth = true;  
					$mail->Host = $host_name;
					$mail->Port = 465; 
					$mail->Username = $user_name;  
					$mail->Password = $password; 
					
					$mail->SMTPSecure = 'ssl';										
					$mail->SetFrom($email); //Send From User Email and Names					
				   // $mail->AddAddress($to); 
					$mail->AddAddress($To_name.'<'.$to.'>'); 
					//$full_name.'<'.$email_from.'>';				   	
					$mail->Subject = $subject;
				    $mail->addAttachment($resume);
					$mail->MsgHTML($body);
					//print_r($body);die;
					
					$mail->AltBody = 'Jobs Through Sfatec Private Ltd...!';
					if(!$mail->Send()) {
						//echo "mail not sent sucssfully";
						?>
	              	<script type="text/javascript">
	   		          window.alert("mail not sent sucssfully!");
	        	    </script>
	               <?php
					}
           else{
			   //e//cho "sucssfully sent mail";
			   ?>
	           	<script type="text/javascript">
	   		       window.location.href="thanks.php";
	        	</script>
	           <?php

		   }
   }
   ?>

<html lang="en">
<head>
<meta charset="utf-8" />
<title>Sfatec - Career</title>
<meta name="description" content="Start your career by uploading your updated resume at Sfatec" />
<meta name="keywords" content="Start your Career at Saftec" />
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
          <div class="gender_but">
  					<input type="radio" name="gender"  value="Male" class="radioBtn" /> Male
  					<input type="radio" name="gender" value="Female" class="radioBtn" /> Female
          </div>
		  </div>   
        
       <!-- <div class="wrapper mb15">
          <label class="car_label">Date of Birth:(dd/mm/yyyy)</label>
          <input type="text" name="date_of_birth" id="date_of_birth" class="car_field" required />        
        </div-->
        <div class="wrapper mb15">
          <label class="car_label">Mobile Number</label>
          <input type="text" name="mobile" id="mobile" class="car_field" required onkeypress="return isNumberKey(event)" maxlength="10"/>        
        </div>
        <div class="wrapper mb15">
          <label class="car_label">Alternate Number</label>
          <input type="text" name="alternate_number" id="alternate_number" class="car_field" onkeypress="return isNumberKey(event)" maxlength="10" />       
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
          <select name="city_name" class="job_select">
						<option value="">Select...</option>
						<option value="Account">Account</option>
						<option value="Administration">Administration</option>
						<option value="Customer Relation">Customer Relation</option>
						<option value="Customer Support Center">Customer Support Center</option>
						<option value="Engineering">Engineering</option>
						<option value="HR/Payroll">HR/Payroll</option>
						<option value="Information Technology(IT)">Information Technology(IT)</option>
						<option value="Procurement/Purchase">Procurement/Purchase</option>
						<option value="Quality">Quality</option>
						<option value="Research and Development">Research and Development</option>
						<option value="Stores">Stores</option>
						<option value="Sales and Marketing">Sales and Marketing</option>
						<option value="Service">Service</option>					
		  </select>
        </div>
        <div class="wrapper mb15">
          <label class="car_label">Experience (Yrs)</label>
          <select name="exp" class="job_select">
						<option value="">Select...</option>
						<option value="0-1"> 0-1</option>
						<option value="1-3">1-3</option>
						<option value="3-5">3-5</option>
						<option value="5-10">5-10</option>
						<option value=">10">&gt;10</option>
					</select>
        </div>
        <div class="wrapper mb15">
          <label class="car_label">Upload Resume</label>
           <input type="file" name="resume" id="resume" class="car_field" required> 
		  
           		   
        </div>
        <div class="cf"></div>
           <button name="Cr_btnsubmit" class="car_submit" type="submit">SUBMIT</button>
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
<script type="text/javascript">
$('#email').focusout(function(){
  $('#email').filter(function(){
    var emil=$('#email').val();
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      if( !emailReg.test( emil ) ) {
      alert('Please enter valid email');
      $(this).val("");
      } else {
      //alert('Thank you for your valid email');
      }
    })
  });
</script>
<script type="text/javascript">

function isNumberKey(evt){
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
  {
  //alert("u must enter number only");
  return false;
  }
else
  {
  return true;
  }
} 

</script>
</body>
</html>
<?php

  if(isset($_POST['submit']))
  {
    //echo '<pre>';print_r($_POST);
    $user_name=$_POST['name'];
    $email=$_POST['email'];
    $company_name=$_POST['company'];
    $sms=$_POST['sms'];
    $title=$_POST['title'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    $message1 = '<html><head></head>    
 <body>    
 <p>You have a new shiksha enquiry request:</p>  
 <table cellpadding="3" cellspacing="3" width="350">    
  <tr>    <th colspan="2" align="left" style="font-size:15px;">General Information</th>    </tr>    
  <tr>    <td><strong>Name:</strong></td>    <td>'.$user_name.'</td>    </tr>    
  <tr>    <td><strong>Email:</strong></td>    <td>'.$email.'</td>    </tr>    
  <tr>    <td><strong>Company/Organisation:</strong></td>    <td>'.$company_name.'</td>    </tr>        
  
  <tr>    <td><strong>Previous School Management System:</strong></td>    <td>'.$sms.'</td>    </tr>    
  <tr>    <td><strong>Title</strong></td>    <td>'.$title.'</td>    </tr>        
    <tr>    <td><strong>Phone:</strong></td>    <td>'.$phone.'</td>    </tr>  
  <tr>    <td><strong>Message:</strong></td>    <td>'.$message.'</td>    </tr>    
  </table>   
     </body>    </html>';
   //$db = mysql_connect("localhost","root","");
    
     
 //$con=mysql_select_db("shiksha", $db);
 //$sql="INSERT INTO enquiry(student_name,father_name,email,mother_name,phone,course_id,address) VALUES ('$user_name','$email','$company_name','$sms','$title','$phone','message')";
 //$result=mysql_query($sql,$db);
  //if($result)
 function sendMail($to1,$message1,$email,$subject) {
       //$to = "shiksha-core@siriinnovations.com";
       $to = $to1;
       
             $mg_api = 'key-99rf4r8raie8m4ni3q2v3fgy-zna1830';
             $mg_version = 'api.mailgun.net/v2/';
             $mg_domain = "sandbox49337.mailgun.org";
             $mg_from_email = "info@samples.com";
             $mg_reply_to_email = "info@samples.org";

            $mg_message_url = "https://".$mg_version.$mg_domain."/messages";

         $ch = curl_init();
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

            curl_setopt ($ch, CURLOPT_MAXREDIRS, 3);
            curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, false);
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt ($ch, CURLOPT_VERBOSE, 0);
            curl_setopt ($ch, CURLOPT_HEADER, 1);
            curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);

            curl_setopt($ch, CURLOPT_USERPWD, 'api:' . $mg_api);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            curl_setopt($ch, CURLOPT_POST, true); 
            //curl_setopt($curl, CURLOPT_POSTFIELDS, $params); 
            curl_setopt($ch, CURLOPT_HEADER, false); 

            //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_URL, $mg_message_url);

            curl_setopt($ch, CURLOPT_POSTFIELDS,                
                    array(  'from'      => $email,
                            'to'        => $to,
                            'subject'   => $subject,
                            'html'      => $message1,
                        ));
            $result = curl_exec($ch);  
           // echo  $result;exit;        
            curl_close($ch);
            $res = json_decode($result,TRUE);
//print_r($res);exit;
       if(isset($result))
            {
                $success="Submitted Successfully";
            }
            else
            {
                $success="During The Error Process Will Not Complete";
            }
            return $success;

 }
 $to1='kiranjala583@gmail.com';
 $subject = "New Enquiry Request - Shiksha";
  $success=sendMail($to1,$message1,$email,$subject);  
 $message2='<html><body><table cellpadding="3" cellspacing="3" width="350"> <tr><td>Thank you for contacting us,Our team will reach you soon.</td></tr></table> </body></html>';
 $email2="kirankumar.j@siriinnovations.us";
 $email=$_POST['email'];
 $subject1 = "Thanks for contacting Shiksha";
 $success=sendMail($email,$message2,$email2,$subject1);  
//echo $success;exit;
}
  ?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Welcome to Shiksha</title>
<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" />
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" />
<link rel="stylesheet" href="css/shiksha.css" type="text/css" />
<!--[if gte IE 7]>
<script type="text/javascript" src="js/html5shiv.js"></script>
<link rel="stylesheet" href="css/fonts-ie7.css">
<link rel="stylesheet" href="css/ie.css">
<![endif]-->
<link rel="stylesheet" href="css/animate.min.css" type="text/css" />
<link rel="stylesheet" href="css/shiksharesponsive.css" type="text/css" />
<script src="js/jquery-1.9.1.js"></script>
</head>

<body>
<div class="wrapper">
  <header>
    <div class="pageWidth">
      <div class="headLeft wow fadeInLeft animated"><a href="index.html"><img src="images/logo.png" alt="logo" title="logo-home" /></a></div>
      <div class="headRight">
        <div class="sticky-navigation">
          <div class="menu">
            <div class="pageWidth">
              <div class="contact_info">Reach Us   (+91) 83410 44441</div>
              <nav>
                  <ul>
                  <li><a href="features.html">Features</a></li>
                  <li><a href="support.html">Support</a></li>
                </ul>
                <div class="clear"></div>
              </nav>
              <span class="logo-small"><a href="index.html"><img src="images/logo_small.png" alt="logo" title="Logo-Home" /></a></span> </div>
            <div class="clear"></div>
          </div>
          <!-- menu div end --> 
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </header>
  <div class="slider innerpage">
    <div class="pageWidth">
      <div class="header_content">
        <h2 class="wow fadeInDown animated">Everything your institution will ever need</h2>
        <span class="wow fadeInUp animated">From streamlining processes, automating tasks, and empowering teachers to boosting parental
        involvement and engaging students Shiksha technologies</span> </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="titleSection aboutTitle">
    <div class="titlePos">
      <div class="titleAlign">
        <div class="pageWidth">
          <h3 class="wow fadeInLeft animated">Contact Us</h3>
          <div class="bredCrumb wow fadeInRight animated">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li>/</li>
              <li><a class="page-selection">Contact Us</a></li>
            </ul>
 <div id="suces">
            <?php 
                          if(isset($success))
              {
            echo '<div align="center" id="sucess" style="color:green;font-size:14px;font-family:arial;padding:5px 0;">'.$success.'</div>' ;
              }
              if(isset($failure))
              {
                echo '<div align="center" style="color:red;font-size:14px;font-family:arial;padding:5px 0;">'.$failure.'</div>' ;  
              }
            ?>
        </div>
    </div>


          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- header -->
  <section>
    <div class="content_col col_bg">
      <div class="pageWidth">
        <div class="contactForm">
              <div class="leftPanel wow fadeInDown animated">
                <form id="contact_form" class="form" action="contactus.php" method="post">
                  <ul>
                    <li>
                      <label>Name<span>*</span></label>
                      <input type="text" id="name" name="name" >
                    </li>
                    <li>
                      <label>Email<span>*</span></label>
                      <input type="text" id="email" name="email" >
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <label>Company/Organisation<span>*</span></label>
                      <input type="text" id="company" name="company" >
                    </li>
                    <li>
                      <label>Which School Management System do you use? <span>*</span></label>
                      <input type="text" id="sms" name="sms" >
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <label>Title</label>
                      <input type="text" id="title" name="title" >
                    </li>
                    <li>
                      <label>Phone<span>*</span></label>
                      <input type="text" id="phone" name="phone" >
                    </li>
                  </ul>
                  <ul>
                    <li class="full">
                      <label>Message<span>*</span></label>
                      <textarea id="message" name="message"></textarea>
                    </li>
                  </ul>
                    <button name="submit" value="submit" class="btn btn-green">Submit</button>
                </form>




              </div>
              <div class="rightPanel  wow fadeInUp animated">
                <div class="contactList wow fadeInRight animated animated">
                  <ul>
                    <li> <i class="ti-location-pin"></i> </li>
                    <li>#311/A, MLA Colony,<br>
                      Road No.12, Banjara Hills<br />Hyderabad, India</li>
                  </ul>
                  <ul>
                    <li> <i class="ti-mobile"></i></li>
                    <li>(+91) 40 64640441</li>
                  </ul>
                   <ul>
                    <li> <i class="ti-mobile"></i></li>
                    <li>(+91) 40 40114560</li>
                  </ul>
                  <ul>
                    <li> <i class="ti-email "></i></li>
                    <li><a href="mailto:info@shiksha.com">info@shiksha.com</a></li>
                  </ul>
                  <ul>
                    <li> <i class="ti-world "></i></li>
                    <li><a href="https://www.shiksha.com">www.shiksha.com</a></li>
                  </ul>
                </div>
              </div>
              <div class="clear"></div>
            </div>
        
      </div>
      <div class="clear"></div>
    </div>
  </section>
  <div class="clear"></div>
  <!-- /section -->
  <footer>
    <div class="pageWidth">
      <div class="footer_right">
        <div class="footer_txt wow fadeInRight animated">
          <h3>About Shiksha</h3>
          <p>A Complete ERP System for your Schools and Colleges, to manage your Students and Employees Information system. ShikshaERP will help your school, manage student and staff data, streamline administrative tasks, maximize school-to-home communication and inspire student performance and success rate. <a href="aboutus.html">Read More</a>
</p>
        </div>
        <div class="footer_menu wow fadeInRight animated">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li>|</li>
            <li><a href="aboutus.html">About Us</a></li>
            <li>|</li>
            <li><a href="features.html">Features</a></li>
            <li>|</li>
            <li><a href="contactus.html">Contact</a></li>
            <li>|</li>
            <li><a href="javascript:void(0)">Terms of Use</a></li>
            <li>|</li>
            <li><a href="javascript:void(0)">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="footer_left">
        <div class="footer_logo wow fadeInLeft animated"><a href="index.html"><img src="images/footer_logo.png" alt="footer_logo"/></a></div>
        <div class="copyrights wow fadeInLeft animated">Copyrights&copy; 2015 Shiksha. All Rights Reserved</div>
        <div class="social_icons wow fadeInLeft animated"> 
        <a href="https://www.facebook.com/shiksha.erp/" target="_blank" class="fb"><i class="ti-facebook"></i></a> 
        <a href="https://plus.google.com/u/0/107163519351988140598/" target="_blank" class="google"><i class="ti-google"></i></a>
         <a href="https://twitter.com/shikshaERP" target="_blank" class="tw"><i class="ti-twitter"></i></a>
          <a href="https://www.linkedin.com/in/shikshaerp" target="_blank" class="lnkd"><i class="ti-linkedin"></i></a>
           </div>
           
        <div class="siri_logo wow fadeInLeft animated"><a href="http://siriinnovations.com/" target="_blank"><img src="images/siri_logo.png" alt="siri_logo"/></a></div>
      </div>
    </div>
    <div class="clear"></div>
  </footer>
  <!-- /footer --> 
</div>
<!-- /wrapper --> 
<script type="text/javascript" src="js/jquery.easing.min.js"></script> 
<script type="text/javascript" src="js/stickynavigation.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/menu.js"></script> 
<script type="text/javascript" src="js/wow.min.js"></script> 
<script type="text/javascript" src="js/validations.js"></script> 
<script type="text/javascript">
jQuery(document).ready(function () {
	//menu
    jQuery('header nav').meanmenu();
});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		
    $("#contact_form").validate({
	rules: {
			name: {
                required:true
            },
			email: {
                required: true,
                email: true
            },
			company: {
                required:true
            },
			sms: {
                required:true
            },
			phone: {
                required: true,
                number: true,
                minlength: 10,
                maxlength:12
            },
			message:{
				required:true
			}
			
	},		
	messages: {
            name: {
                required:"Please enter your name"
            },
			email: {
                required:"Please enter your email Id "
            },
			company: {
                required:"Please enter your Company/Organisation name"
            },
			sms: {
                required:"Please enter your School Management System"
            },
			phone: {
                 required:"Please enter your mobile number"
            },
			message: {
                 required:"Please enter your Message"
            },
			
			
			
        },
    });	
});
</script>
</script>
<script type="text/javascript">
  $( document ).ready(function() {
    $('#suces').fadeIn().delay(3000).fadeOut();
});        
</script>
</body>
</html>

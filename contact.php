<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Ben Dalton Development</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css" />
	<script type="text/javascript" src="js/jquery-1.5.2-min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/themes/orman/orman.css" type="text/css" media="screen" />
<script src="nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>

</head>

<body>
	<div id="wrapper">
		<section id="header">
        	<div class="center">
			<a href="index.htm"><img src="img/logo.png" alt="Logo"/></a>
			<h2 class="tagline">clean code. clean design. awesome websites.</h2>
			<div id="topnav">
				<ul>
					<li><a href="index.htm">Home</a></li>
					<li><a href="work.htm">Work</a></li>
					<li><a href="about.htm">About</a></li>
					<li><a href="contact.htm">Contact</a></li>
				</ul>
			</div>
            </div>
		</section>
		<section id="content">
			<div class="center">
            <div id="contact">
       			<h1> Contact me </h1>
        

	       <form class="contactform" action=" " method="post"  autocomplete="on">
			<p> <label for="username"> Name <span class="required">*</span></label> <input type="text" name="username" id="username"  required="required" placeholder="Hi friend, how may I call you ?"  /> </p>

			<p> <label for="usermail"> E-mail address <span class="required">*</span></label> <input type="email" name="usermail" id="usermail" placeholder="I solemly swear to send only personal messages." required="required"  /> </p>

			<p> <label for="phone"> Phone </label> <input type="text" name="phone" id="phone"  placeholder="eg: 704-555-8493" /> </p>

			<p> <label for="subject"> Subject </label> <input type="text" name="subject" id="subject"  placeholder="What would you like to talk about?" /> </p>

			<p> <label for="message"> Message  <span class="required">*</span></label> <textarea placeholder="Leave me a friendly message and I'll answer as soon as possible "  required="required" ></textarea> </p>
			<p class="indication"> All fields with a <span class="required">*</span> are required</p>
			
			<input type="submit" value=" ★  Send the mail!" />		

		</form>	
        </div>
        </div>
        </section>
        		<section id="footer">
			<div class="center">
            <div class="copywrite">
				<p>&copy; 2012 Ben Dalton Development</p><br />
				<a href="mailto:benadalton@gmail.com">email</a><p> | 828.551.1587</p>
         	</div>
				<ul>
					<li class="vcard"><a href="#"><img src="img/vcard_normal.png" alt="vCard" /></a></li>
                    <li class="linkedin"><img src="img/li_normal.png" alt="LinkedIn" /></li>
					<li class="facebook"><img src="img/fb_normal.png" alt="Facebook"/></li>
					<li class="google"><img src="img/google_normal.png" alt="Google+"/></li>
					<li class="skype"><img src="img/skype_normal.png" alt="Skype"/></li>
				</ul>
            </div>
		</section>
	</div>


</body>
</html>
        <?php
function spamcheck($field)
  { 
  //filter_var() sanitizes the e-mail address that is inserted
  // The FILTER_SANITIZE_EMAIL filter removes all forbidden e-mail characters from the inserted string  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
 
  //filter_var() validates the e-mail address that is inserted
  // The FILTER_VALIDATE_EMAIL filter validates the value of the text inserted as an e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

if (isset($_REQUEST['usermail']))
  {//this is a simple check that makes sure the email field not empty

  //this is the check that uses the validation function to ensure the email address is valid
  $mailcheck = spamcheck($_REQUEST['usermail']);
  if ($mailcheck==FALSE)
    {
    echo "You have inserted incorrect email address or have left some of the fields empty";
    }
  else
    {//send email
	$name = $_REQUEST['name'] ;
    $email = $_REQUEST['usermail'] ;
    $phone = $_REQUEST['phone'] ;
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['message'] ;
    mail("benadalton@gmail.com", "Subject: $subject",
    $message, "From: $email" );
    echo "Thank you for using our mail form! We will get in touch with you soon!";
    }
  }
else
 {//if the "email" field is not filled out the form itself will be displayed.
  echo "
  
  ";
  }
?>
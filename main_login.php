<?php
ini_set( "display_errors", 0);
session_start();
if(session_is_registered(myusername)){
header("location:login_success.php");
}
?>
<!DOCTYPE html>

<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no" />

  <title>Google IT- An Online Treasure Hunt</title>
      <link rel="icon" href="ieee_favicon.ico" type="image/x-icon"/>
  <link type="image/x-icon" rel="shortcut icon" href="favicon.ico">
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.css">
  <link rel="stylesheet" href="stylesheets/font-awesome.min.css">
  <link rel="stylesheet" href="stylesheets/animate.css">
  <link rel="stylesheet" href="stylesheets/liquid-slider.css">
  <link rel="stylesheet" href="stylesheets/style.css">
  <link rel="stylesheet" href="stylesheets/responsive.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
	
  <script src="javascripts/modernizr.foundation.js"></script>
</head>
<body>
<div id="main-container">
  <div class="show-for-small mobile-toggle"><i class="icon-reorder text-white"></i></div>
  <div id="nav-holder">
		
		<div id="logo-holder" class="animated bounceIn">
			<a href="index.php">
			<div id="logo" ><i class="menu-i icon-home"></i>
				
			</div>
			</a>
		</div>
		<ul>
			<li class="menu-item" data-menu-id="about"><a href="#"><i class="menu-i icon-info"></i></a><div class="menu-title text-white text-center"><div class="menu-arrow"><i class="icon-caret-left"></i></div>About</div></li>
			<li class="menu-item work-trigger" data-menu-id="projects"><a href="#"><i class="menu-i icon-eye-open"></i></a><div class="menu-title text-white text-center"><div class="menu-arrow"><i class="icon-caret-left"></i></div>Rules</div></li>
			<li class="menu-item" data-menu-id="services"><a href="#"><i class="menu-i icon-tasks"></i></a><div class="menu-title text-white text-center"><div class="menu-arrow"><i class="icon-caret-left"></i></div>Leader Board</div></li>
			<li class="contact-menu"><i class="menu-i icon-mobile-phone"></i><div class="menu-title text-white text-center"><div class="menu-arrow"><i class="icon-caret-left"></i></div>Contact</div></li>
		
		</ul>
		
	</div>
	
  <div id="social-holder" class="hide-for-small">
	
		<ul>
			<li><a href="https://twitter.com/jecgoogleit" target="_blank"><i class="menu-i icon-twitter"></i></a><div class="menu-title text-white text-center">Twitter</div></li>
			<li><a href="https://www.facebook.com/pages/Google-It-An-Online-Treasure-Hunt/553609334697689" target="_blank"><i class="menu-i icon-facebook"></i></a><div class="menu-title text-white text-center">Facebook</div></li>
			
			
		
		</ul>
		
	</div>

  <section id="home">
  
  	   <br>
       <br>
       <center><img src="bg.png" height="50%" width="50%"></center>
  	   <br>
       <br>
                         <center> <h1>Welcome !!</h1>
                    
              
<form name="form1" method="post" action="checklogin.php">
<h1> </h1>
Email ID:   &nbsp;    &nbsp;&nbsp;&nbsp;<br><br>
<input name="myusername" type="text" id="myusername" height=30 width=300><br />
Password:&nbsp;&nbsp;&nbsp;<br><br>
 <input name="mypassword" type="password" id="mypassword" height=30 width=300><br />

<center><input type="submit" name="Submit" value="Login"></center>
<br><br>
<a href="register.php" size="20" color="black">Click to Register</a></center>

</form>
  			</center>
  			
  		</div>
  	</div>
  	
  	

  </section><!-- end of Home Section-->
  
   
  <section id="about" class="page animated hide">
  	<div class="exit"><i class="icon-chevron-down"></i></div>
  	
  	<div class="row inner-section">
  		<div class="twelve columns page-spiel text-center">
  			<i class="icon-info"></i>
  			<h3>About Us<br /></h3>
  			<div class="green-hr"></div>
  			<h5 align=justify>
				

IEEE Computer Society of Jeppiaar Engineering College SB is glad to organize the ‘Google IT' an online event. This is an online treasure hunt that would ignite the fire in you to find each answer in an interesting way. There are many levels and each clue will make you think in a different perspective. Come on all! Test your hunting skill with this online treasure hunt. Let us see how good are you in cracking the code and how you proceed for the further clues. Only 'Out of Box' thinking can unravel the answer behind the clue. Trust your instinct out what you are capable of!!!! Show us what you have got!  Mind is the key to unlock the world around you. Get ready to hunt.

The hunt begins on 20th July 2013 and will be open until 27th July 2013. 

Treasure hunt on the link: http://www.jeppiaarieeecomputer.org


For queries,
Contact
josephpeter.j@computer.org      
wafawaheeda@computer.org

Open for all IEEE India council members!

We appreciate your active participation. Please convey this to all your fellow IEEE mates.
No prior registration is required.
</h5>
			<div class="grey-hr"></div>
  			
  		</div>
  	
  		
  	</div>
  	
		
		
		
		
		</section>
		
		
	</section><!-- end of About Section-->
  	
  <section id="projects" class="animated page hide">
  		<div class="exit"><i class="icon-chevron-down"></i></div>
  	
		<div class="row inner-section">
			<div class="twelve columns page-spiel text-center">
				<i class="icon-eye-open"></i>
				<h3>RULES<br /></h3>
				<div class="green-hr"></div>
					<h5 align=left>
					
1.We are the Gods here. We can conjure or eliminate any rule, any time.<br><br>

2.Remember, Google is your magic beacon. So make sure that you unleash all your searching skills. YEAH! KILL THAT SEARCH BUTTON!<br><br>

3.If you are brooding about hacking your way to the top,shed that idea. Because, being blacklisted is not certainly what you would love to see.<br><br>

4.Dont forget that the participants of this contest should be IEEE registered members.<br><br>

5.Answers can be typed as numbers and letters, which means, the answer can be '7crossstreet', not preferably 'sevencrossstreet'.<br><br>

6.While typing your answer, remember that, we spare you the pain of hitting space bar and capslock. NO SPACES AND CAPS!<br><br>

7. Making the right choices is not always that easy. So you are at your own right to beg and plead for clues on our facebook page. Bringing a smile on your face is all we want, but certainly not always!
<br><br>
9.Revealing the answer to others and posting obscene contents on our facebook page is certainly not a great idea. By doing that, you are eliminating yourself from the hunt! BLACKLISTED! 
<br><br>
10. The only way forward is unlocking your way up! So what are you waiting for?? Happy sherlocking!<br><br>

11.The winner of the contest will be the one who cracks the ultimate level at first.<br><br></h5>
				<div class="grey-hr"></div>
			</div>
		
			
		</div>
	
  		
  	</section><!-- End of Rules Section-->
  
  <section id="services" class="animated page hide">
  		<div class="exit"><i class="icon-chevron-down"></i></div>
  	
		<div class="row inner-section">
			<div class="twelve columns page-spiel text-center">
				<i class="icon-tasks"></i>
				<h3>Leader Board<br /></h3>
				<div class="green-hr"></div>
				<p class="text-center">
                    <?php 
					include 'database.php';
$query = "SELECT DISTINCT score FROM members ORDER BY score DESC";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
		$query2 = "SELECT * FROM members WHERE score = $row[score] ORDER BY score DESC";
		$result2 = mysql_query($query2);

echo "<table border='5'>";
	echo "<tr>";
	echo "<th align='center'>" . "Position" . "</th>";
	echo "<th align='center'>" . "Username" . "</th>";
	echo "<th align='center'>" . "Score" . "</th>";
	echo "</tr>";
	$position = 1;
$query = "SELECT * FROM members ORDER BY score DESC";
$result = mysql_query($query);

for ($i=1; $i<=100; $i++)
  {
	$row = mysql_fetch_assoc($result); 	
  
				
				if($position == 1)
				{
				echo "<tr>";
				echo "<td >" . $position . "</td><td>". $row['dname'] . "</td><td> " . $row['score'] . "</td>";
				echo "</tr>";
				$temp = $row['score'];
				$position++;
				continue;
				}
				if($temp != $row['score'])
				{
				echo "<tr>";
				echo "<td >" . $position . "</td><td>". $row['dname'] . "</td><td> " . $row['score'] . "</td>";
				echo "</tr>";
				$position++;
				}
				else
				{
				$position--;
				echo "<tr>";
				echo "<td >" . $position . "</td><td>". $row['dname'] . "</td><td> " . $row['score'] . "</td>";
				echo "</tr>";
				$position++;
				}
				
				$temp = $row['score'];
  }
  
echo "</table>";
echo "";

?></p>
				<div class="grey-hr"></div>
			</div>
		</div>
		
		
		
			
		
				
  </section><!-- end of Services Section-->
  
  <section id="contact" class="animated hide inner-section">
  	<div class="exit-contact"><i class="icon-chevron-left text-white"></i></div>
  	<div class="twelve columns">
  			<h2 class="section-title text-white">Contact</h2>
  			<div class="left-hr"></div>
  	</div>
  	
  	<div class="twelve columns">
  			
  			
  			<div class="contact-type text-highlight">
  					<a href="https://www.facebook.com/pages/Google-It-An-Online-Treasure-Hunt/553609334697689" target="_blank"><i class="icon-facebook">&nbsp;</i>Facebook Page</a>
  			</div>
  			
  			<div class="contact-type text-highlight">
  				<a href="https://twitter.com/jecgoogleit" target="_blank"><i class="icon-twitter">&nbsp;</i>Twitter</a>
  			</div>
  			<div class="left-hr"></div>
  	</div>
  
  	<section id="form">
  		<div class="twelve columns">
  				<div id="form-sent" class="hide">
  					<h5 class="text-white">Thankyou, your message has been sent!</h5>
  				</div>
  				<form id="contact-form">
						<div class="six columns">
							<label>Name *</label>	  
							<input id="form-name" type="text"/>
						</div>
						<div class="six columns">
							<label>Email *</label>
							<input id="form-email"  type="text" />
						</div>
						<div class="twelve columns">
							<label>Message *</label>
							<textarea id="form-msg"></textarea>
							<div id="details-error-wrap"  class="hide">	
							<div class="alert-box alert error-box">Error: Please ensure all fields are filled in correctly</div>
							</div>
							<label>Security Question *</label>
							<input id="form-security" type="text" placeholder="7 + 1 = ?" />
							<div id="security-error-wrap"  class="hide">	
								<div class="alert-box alert error-box">Error: Security question is incorrect</div>
							</div>	
							<input type="submit" value="Send" class="form-button right" />
						</div>
							  
					</form>
  		</div>
  	</section>
  
  </section><!-- end of Contact section -->
  
  
  
  
</div>
  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/scripts.js"></script>
  <script src="javascripts/slides.min.js"></script>
  <script src="javascripts/jquery.easing.1.3.js"></script>
  <script src="javascripts/jquery.liquid-slider.js"></script>
  <script src="javascripts/jquery.touchSwipe.min.js"></script>

</body>
</html>
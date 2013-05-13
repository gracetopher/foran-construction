<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title // add title tag here ?></title>
	<meta name="description" content="<?php echo $description // add description tag here ?>" />
	<meta name="keywords" content="<?php echo $keywords // add keywords tag here ?>" />
	<meta name="google-site-verification" content="9orDhNzTjTnf7_q1MMG9miV_BGgwfB0G7s6CoeRpCjY" />
<link href="img/titletag.jpg" type="image/png" rel="shortcut icon" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="css/nivo-slider-theme.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>

</head>

<body>
<!-- main -->
<div class="main">
  <div class="page">   
    <div class="content">
	
<!-- header -->	
      <div class="header">
	 	 <div class="logo"><a href="index.php"><img src="img/logo.jpg" alt="Foran Construction - Builders Richmond" width="183" height="93" /></a></div>
	  		<div class="contact-details"><a href="contact.php">info@foranconstruction.co.uk<br /><span>020 3362 6861</span></a></div>
			<div class="nav">
			  <ul class="nav-link"> <!-- Set active tab class inside each list tag -->
				<li<?php if (isset($home)){ echo $home; } else { echo NULL; } ?>><a href="index.php"><strong>Home</strong></a></li> 
				<li<?php if (isset($about)){ echo $about; } else { echo NULL; } ?>><a href="about.php"><strong>About us</strong></a></li>
				<li<?php if (isset($residential)){ echo $residential; } else { echo NULL; } ?>><a href="residential.php"><strong>Residential</strong></a></li>
				<li<?php if (isset($commercial)){ echo $commercial; } else { echo NULL; } ?>><a href="commercial.php"><strong>Commercial</strong></a></li>
				<li<?php if (isset($civil)){ echo $civil; } else { echo NULL; } ?>><a href="civilengineering.php"><strong>Civil Engineering</strong></a></li>
				<li<?php if (isset($contact)){ echo $contact; } else { echo NULL; } ?>><a href="contact.php" class="clear-border"><strong>Contact us</strong></a></li>
			  </ul>
		   </div>
	  </div>
<!-- END header -->

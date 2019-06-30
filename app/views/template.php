<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>build/assets/css/bootstrap.min.css?v=1.0" />
		<title><?php echo $title; ?></title>
		<meta name="msvalidate.01" content="F13063B8299624F18B7C4E98367AE3E1" />
		<meta name="description" content="<?php echo $description; ?>" />
        <meta name="keywords" content="<?php echo $keywords; ?>" />
        <link rel="canonical" href="<?php echo rtrim(current_url(), "/"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>build/assets/css/style.css?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] .'/build/assets/css/style.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>build/assets/css/animate.css?v=1.0" />
		<link rel="stylesheet" href="https://www.jqueryscript.net/demo/jQuery-Based-Off-canvas-Menu-For-Bootstrap-Bootstrap-Offcanvas/dist/css/bootstrap.offcanvas.min.css" />

		<!-- Open Graph -->

		<meta property="og:site_name" content="Nexglobalinc" />
		<meta property="og:url" content="" />
		<meta property="og:title" content="" />
		<meta property="og:image" content="<?php echo base_url(); ?>build/assets/images/logo.png"/>
		<meta property="og:type" content="website" />
		<meta name="twitter:site" content="@nexglobalinc" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:title" content=""/>
		<meta name="twitter:description" content="" />
		<meta name="twitter:card" content="summary">
    	<meta name="twitter:site" content="nexglobalinc.com" />
    	<meta name="twitter:domain" content="https://nexglobalinc.com" />
    	<meta name="twitter:creator" content="nexglobalinc.com" />
    	<meta name="twitter:image" content="<?php echo base_url(); ?>build/assets/images/logo.png" />

		<!-- close-->

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142101544-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-142101544-1');
		</script>

	</head>
	<body>
		<header class="header">
			<?php $this->load->view('include/inc_header.php'); ?>		
		</header>

		<div class="clearfix"></div>
		
		   <?php echo $contents; ?>	
		
		<footer>
			<?php $this->load->view('include/inc_footer.php'); ?>
		</footer>
			
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?php echo base_url(); ?>build/assets/js/jquery-3.3.1.slim.min.js?v=1.0"></script>
		<script src="<?php echo base_url(); ?>build/assets/js/popper.min.js?v=1.0"></script>
		<script src="<?php echo base_url(); ?>build/assets/js/bootstrap.min.js?v=1.0"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>build/assets/css/font-awesome.min.css?v=1.0">
		<script src="<?php echo base_url(); ?>build/assets/js/jquery-3.3.1.min.js?v=1.0"></script>
		<script src='<?php echo base_url(); ?>build/assets/js/jquery.cycleText.js?v=1.0'></script>
		<script src='https://www.jqueryscript.net/demo/jQuery-Based-Off-canvas-Menu-For-Bootstrap-Bootstrap-Offcanvas/dist/js/bootstrap.offcanvas.js'></script>
		<script>
			$('#home_features').cycleText();
		</script>

		<aside class="js-offcanvas" data-offcanvas-options='{ "modifiers": "left,overlay" }' id="off-canvas">
		</aside>	


	</body>
</html>

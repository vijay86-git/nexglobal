<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $description; ?>" />
        <meta name="keywords" content="<?php echo $keywords; ?>" />
        <link rel="canonical" href="<?php echo current_url(); ?>" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>build/assets/css/style.css?v=1.0" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>build/assets/css/animate.css?v=1.0" />
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
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js?v=1.0"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js?v=1.0"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js?v=1.0"></script>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?v=1.0">
		
		<script src="https://code.jquery.com/jquery-3.3.1.min.js?v=1.0"></script>
		
		<script src='<?php echo base_url(); ?>build/assets/js/jquery.cycleText.js?v=1.0'></script>
		
		<script>
		$('#demo-home').cycleText();
		</script>
		
	</body>
</html>
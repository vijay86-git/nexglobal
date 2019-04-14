<?php
	$segment1 = $this->uri->segment(1);
	switch($segment1)
	   {
	   		case '':
	   									$home_active = 'active';
	   									break;

	   		case 'web-development':
	   									$web_dev_active = 'active';
	   									break;

	   		case 'contact':
	   									$contact_active = 'active';
	   									break;

	   		case 'request-a-quote':
	   									$home_active = 'active';
	   									break;
	   }
?>			


			<div class="row">
				<div class="col-6 col-md-3 col-sm-8 col-lg-3 paddtp">
					<a href="<?php echo base_url(); ?>"><img class="img-fluid" src="<?php echo base_url(); ?>build/assets/images/logo.png" alt="" /></a>
				</div>
				<div class="col-6 col-md-6 col-sm-4 paddtp text-left col-lg-7">
									
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="#"></a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>
						  <div class="collapse navbar-collapse" id="navbarNavDropdown">
						    <ul class="navbar-nav">

						    <li class="nav-item">
								<a title="Home" class="nav-link <?php echo isset($home_active) ? 'active' : "" ?>" href="<?php echo base_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
							</li>

						    <li class="nav-item">
								<a title="Web Design" class="nav-link" href="#">Design</a>
							</li>
							<li class="nav-item">
								<a title="Web Development" class="nav-link <?php echo isset($web_dev_active) ? 'active' : "" ?>" href="<?php echo base_url(); ?>web-development">Developement</a>
							</li>
							<li class="nav-item">
								<a title="Services" class="nav-link" href="#">Services</a>
							</li>
							
							<li class="nav-item">
								<a title="Portfolio" class="nav-link" href="#">Portfolio</a>
							</li>
							
							<li class="nav-item">
								<a title="Contact" class="nav-link <?php echo isset($contact_active) ? 'active' : "" ?>" href="<?php echo base_url(); ?>contact">Contact</a>
							</li>
						  </ul>
						 </div>
					</nav>

				</div>
				<div class="col-12 col-md-3 col-sm-12 discuss-project col-lg-2">
					<a href="<?php echo base_url(); ?>request-a-quote" class="request-quote">Discuss your Project</a>
				</div>
			</div>	
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

	   		case 'portfolio':
	   									$portfolio_active = 'active';
	   									break;

	   		case 'request-a-quote':
	   									$home_active = 'active';
	   									break;

	   		case 'about':
	   									$about_active = 'active';
	   									break;		
	   }
?>			


			<div class="row">
				<div class="col-12 col-md-3 col-sm-8 col-lg-3 paddtp">
					<a href="<?php echo base_url(); ?>"><img class="img-fluid" src="<?php echo base_url(); ?>build/assets/images/logo.png" alt="" /></a>
				</div>
				<div class="col-12 col-md-6 col-sm-4 paddtp text-left col-lg-6">
									
					<!--<nav class="navbar navbar-expand-lg navbar-light">
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
								<a id="dLabel" role="button" data-toggle="dropdown" class="dropdown-toggle nav-link" href="#">Services</a>

                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">

                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            Design
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" tabindex="-1" href="<?php echo base_url(); ?>web-design" title="">Website Design</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>mobile-app-ui-ux-design" title="">Mobile App UI/UX Design</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>logo-design" title="">Logo Design</a></li>
                                        </ul>
                                    </li>


                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            Development
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" tabindex="-1" title="Web Development" href="<?php echo base_url(); ?>web-development">Web Development</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>ecommerce-development" title="Ecommerce Development">Ecommerce Development</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>wordpress-development" title="WordPress Development">WordPress Development</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>android-app-development" title="Android App Development">Android App Development</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>iphone-app-development" title="iPhone App Development">iPhone App Development</a></li>
                                        </ul>
                                    </li>



                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            Marketing
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" tabindex="-1" href="<?php echo base_url(); ?>search-engine-optimization" title="Search Engine Optimization">Search Engine Optimization</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>social-media-optimization" title="Social Media Marketing">Social Media Marketing</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>pay-per-click" title="Pay Per Click">Pay Per Click</a></li>
                                        </ul>
                                    </li>
                                </ul>

				</li>
							s
							
							<li class="nav-item">
								<a title="Portfolio" class="nav-link <?php echo isset($portfolio_active) ? 'active' : "" ?>" href="<?php echo base_url(); ?>portfolio">Portfolio</a>
							</li>
							
							<li class="nav-item">
								<a title="Contact" class="nav-link <?php echo isset($contact_active) ? 'active' : "" ?>" href="<?php echo base_url(); ?>contact">Contact</a>
							</li>
						  </ul>
						 </div>
					</nav>-->

					<button type="button" class="navbar-toggle offcanvas-toggle" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas" style="float:left;">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>


			        <nav class="navbar navbar-default navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-fade" role="navigation" id="js-bootstrap-offcanvas">

			        	<div class="navbar navbar-expand-lg navbar-light container-fluid" id="navbarNavDropdown">

			        		
						    <ul class="navbar-nav">

						    <li class="nav-item">
								<a title="Home" class="nav-link <?php echo isset($home_active) ? 'active' : "" ?>" href="<?php echo base_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
							</li>

							
							<li class="nav-item">
								<a id="dLabel" role="button" data-toggle="dropdown" class="dropdown-toggle nav-link" href="#">Services</a>

                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">

                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            Design
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" tabindex="-1" href="<?php echo base_url(); ?>web-design" title="">Website Design</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>mobile-app-ui-ux-design" title="">Mobile App UI/UX Design</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>logo-design" title="">Logo Design</a></li>
                                        </ul>
                                    </li>


                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            Development
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" tabindex="-1" title="Web Development" href="<?php echo base_url(); ?>web-development">Web Development</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>ecommerce-development" title="Ecommerce Development">Ecommerce Development</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>wordpress-development" title="WordPress Development">WordPress Development</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>android-app-development" title="Android App Development">Android App Development</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>iphone-app-development" title="iPhone App Development">iPhone App Development</a></li>
                                        </ul>
                                    </li>



                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            Marketing
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" tabindex="-1" href="<?php echo base_url(); ?>search-engine-optimization" title="Search Engine Optimization">Search Engine Optimization</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>social-media-optimization" title="Social Media Marketing">Social Media Marketing</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>pay-per-click" title="Pay Per Click">Pay Per Click</a></li>
                                        </ul>
                                    </li>
                                </ul>

							</li>
							
							<li class="nav-item">
								<a title="Portfolio" class="nav-link <?php echo isset($portfolio_active) ? 'active' : "" ?>" href="<?php echo base_url(); ?>portfolio">Portfolio</a>
							</li>
							
							<li class="nav-item">
								<a title="Contact" class="nav-link <?php echo isset($contact_active) ? 'active' : "" ?>" href="<?php echo base_url(); ?>contact">Contact</a>
							</li>

							<li class="nav-item">
								<a title="Contact" class="nav-link <?php echo isset($about_active) ? 'active' : "" ?>" href="<?php echo base_url(); ?>about">About</a>
							</li>

							<li class="nav-item">
								<a title="Contact" class="nav-link" href="<?php echo base_url(); ?>blog">Blog</a>
							</li>



						  </ul>
					</div>



			       
			        </nav>


				</div>
				<div class="col-12 col-md-3 col-sm-12 discuss-project col-lg-3">
					<a href="<?php echo base_url(); ?>request-a-quote" class="request-quote">Discuss your Project</a>
				</div>
			</div>	
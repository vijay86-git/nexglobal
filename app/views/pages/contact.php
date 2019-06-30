						<script src='https://www.google.com/recaptcha/api.js'></script>
						<section class="contact-panel paddtp90">
							<div class="container paddingtpbtm20">
								 <div class="row">
								 	<h2>Contact Us & Let’s Begin!</h2>
								 	<div class="col-md-7">

								 		   <p class="mrgntp35">We are the market leaders in IT development and marketing services. We help our clients to find the solutions to meet their business requirements. Tell us what your issues are, and we will show how to give answers as quickly as possible.</p>
								 		      <div class="contact-form">

										 		 <?php echo form_open('contact', ['id' => '', 'class' => '', 'method' => 'post']) ?>
													  <div class="form-group">
													    <label for="name">Name <sup>*</sup></label>
													    <input type="text" class="form-control" name="name" placeholder="" autocomplete="off" value="<?php echo set_value('name'); ?>" />
													    <?php echo form_error('name'); ?>

													  </div>

													  <div class="form-group">
													    <label for="email">Email <sup>*</sup></label>
													    <input type="email" class="form-control" name="email" placeholder="" autocomplete="off" value="<?php echo set_value('email'); ?>" />
													    <?php echo form_error('email'); ?>
													  </div>

													  <div class="form-group">
													    <label for="mobile">Mobile </label>
													    <input type="text" class="form-control" name="mobile" placeholder="" autocomplete="off" value="<?php echo set_value('mobile'); ?>" />
													    <?php echo form_error('mobile'); ?>
													  </div>

													  <div class="form-group">
													    <label for="message">Message <sup>*</sup></label>
													    <textarea name="message" class="form-control" name="message" placeholder=""><?php echo set_value('name'); ?></textarea>
													    <?php echo form_error('message'); ?>
													  </div>

													  <div class="form-group">
													    <label for="captcha">Captcha <sup>*</sup></label>
													    <div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('site_key') ?>"></div>
													    <?php echo form_error('g-recaptcha-response'); ?>
													  </div>

													  <div class="form-group">
													    <input type="submit" name="submit" value="Submit" class="btn btn-contact" />
													  </div>

												<?php echo form_close(); ?>
										    </div>

								 	</div>

								 	<div class="col-md-5">
								 		<div class="row contact">
								 			<div class="col-md-12">
										 		 <address>
										              <i class="fa fa-address-card" aria-hidden="true"></i>&nbsp;<strong>Address:</strong><br>
										              NexglobalInc Technologies, <br>
										              Sector - 31, Faridabad, Haryana 121001<br>
										              <p>10.00 a.m. to 6.00 p.m., Monday to Saturday</p>
										         </address>
										    </div>



										    <div class="col-md-12">
										    	<hr />
										 		 <p>
										              <strong>For Contact:</strong>
										         </p>
										         <p><a href="mailto:contact@nexglobalinc.com">contact@nexglobalinc.com</a></p>
										         <hr />

  									        </div>

										    <div class="row badges text-center">
									     	  	  <div class="col-md-4">
										    	     <img src="<?php echo base_url(); ?>build/assets/images/free_support.png" alt="100% Free Support" title="100% Free Support" />
										    	  </div>

										    	  <div class="col-md-4">
										    	     <img src="<?php echo base_url(); ?>build/assets/images/satisfaction.png" alt="100% Satisfaction" title="100% Free Satisfaction" />
										    	  </div>

										    	  <div class="col-md-4">
										    	     <img src="<?php echo base_url(); ?>build/assets/images/agreement.png" alt="Non Disclosure Agreement" title="Non Disclosure Agreement" />
										    	  </div>
							      			</div>


										    





										</div>
								 	</div>

								 </div>


							</div>
				             
					</section>
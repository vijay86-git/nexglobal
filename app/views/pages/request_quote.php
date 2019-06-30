		<script src='https://www.google.com/recaptcha/api.js'></script>
		<section class="contact-panel" style="padding:90px 0 0 0">
			<div class="container paddingtpbtm20">
				 <div class="row">
				 	<h2>Let's Build Something Great Together</h2>
				 	<div class="col-md-7">
				 		 <p class="mrgntp35">Send us your query and you will hear from one of our experts soon </p>
				 		 <div class="contact-form">
						 		 <?php echo form_open_multipart('request-a-quote', ['id' => '', 'class' => '', 'method' => 'post']) ?>
									  <div class="form-group">
									    <label for="name">Name <sup>*</sup></label>
									    <input type="text" class="form-control" id="name" name="name" placeholder="" autocomplete="off" value="<?php echo set_value('name'); ?>" />
									    <?php echo form_error('name'); ?>
									  </div>

									  <div class="form-group">
									    <label for="email">Email <sup>*</sup></label>
									    <input type="email" class="form-control" id="email" name="email" placeholder="" autocomplete="off" value="<?php echo set_value('email'); ?>" />
									    <?php echo form_error('email'); ?>
									  </div>

									  <div class="form-group">
									    <label for="mobile">Tell us about your project <sup>*</sup></label>
									    <textarea name="tell_us_project" class="form-control" rows="5"><?php echo set_value('tell_us_project'); ?></textarea>
									    <?php echo form_error('tell_us_project'); ?>
									  </div>

									  <div class="form-group">
									    <label for="mobile">Your Budget <sup>*</sup></label>
									    <select class="form-control" name="budget">
									    	<option value="">Select Your Budget*</option>                                         
									    	<option value="Above 50,000 USD">Above 50,000 USD</option>                                         
									    	<option value="Between 20,000 USD - 50,000 USD">Between 20,000 USD - 50,000 USD</option>                                         
									    	<option value="Between 10,000 USD - 20,000 USD">Between 10,000 USD - 20,000 USD</option>                                         
									    	<option value="Between 5,000 USD - 10,000 USD">Between 5,000 USD - 10,000 USD</option>                                         
									    	<option value="Between 2,500 USD - 5,000 USD">Between 2,500 USD - 5,000 USD</option>                                         
									    	<option value="Between 1,000 USD - 2,500 USD">Between 1,000 USD - 2,500 USD</option>                                         
									    	<option value="Below 1,000 USD">Below 1,000 USD</option>                               
									    </select>
									    <?php echo form_error('budget'); ?>

									  </div>

									  <div class="form-group">
									    <label for="mobile">Select Service <sup>*</sup></label>
									    <select class="form-control" name="service">
			                                 <option value="Mobile App Development">Mobile App Development</option>
			                                 <option value="Web development">Web development</option>
			                                 <option value="ECommerce Solutions">ECommerce Solutions</option>
			                                 <option value="Others">Others</option>
									    </select>
									    <?php echo form_error('service'); ?> 

									  </div>

									  <div class="form-group">
									    <label for="message">Add Files </label>
									    <input type="file" name="files" class="form-control" />
									  </div>

									  <div class="form-group">
									    <label for="captcha">Captcha <sup>*</sup></label>
									    <div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('site_key') ?>"></div>
									    <?php echo form_error('g-recaptcha-response'); ?>
									  </div>


									  <div class="form-group">
									    <input type="submit" name="submit" value="Send Your Message" class="btn btn-contact" />
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
		<section class="contact-panel" style="padding:90px 0 0 0">
			<div class="container paddingtpbtm20">
				 <div class="row">
				 	<h2>Let's Build Something Great Together</h2>
				 	<div class="col-md-6">
				 		 <p class="mrgntp35">Send us your query and you will hear from one of our experts soon </p>
				 		 <div class="contact-form">
						 		 <?php echo form_open('request-a-quote', ['id' => '', 'class' => '', 'method' => 'post']) ?>
									  <div class="form-group">
									    <label for="name">Name <sup>*</sup></label>
									    <input type="text" class="form-control" id="name" placeholder="" />
									  </div>

									  <div class="form-group">
									    <label for="email">Email <sup>*</sup></label>
									    <input type="email" class="form-control" id="email" placeholder="" />
									  </div>

									  <div class="form-group">
									    <label for="mobile">Tell us about your project <sup>*</sup></label>
									    <textarea name="" class="form-control"></textarea>
									  </div>

									  <div class="form-group">
									    <label for="mobile">Your Budget <sup>*</sup></label>
									    <select class="form-control">
									    	<option value="">Select Your Budget*</option>                                         
									    	<option value="Above 50,000 USD">Above 50,000 USD</option>                                         
									    	<option value="Between 20,000 USD - 50,000 USD">Between 20,000 USD - 50,000 USD</option>                                         
									    	<option value="Between 10,000 USD - 20,000 USD">Between 10,000 USD - 20,000 USD</option>                                         
									    	<option value="Between 5,000 USD - 10,000 USD">Between 5,000 USD - 10,000 USD</option>                                         
									    	<option value="Between 2,500 USD - 5,000 USD">Between 2,500 USD - 5,000 USD</option>                                         
									    	<option value="Between 1,000 USD - 2,500 USD">Between 1,000 USD - 2,500 USD</option>                                         
									    	<option value="Below 1,000 USD">Below 1,000 USD</option>                               
									    </select>

									  </div>

									  <div class="form-group">
									    <label for="mobile">Select Service <sup>*</sup></label>
									    <select class="form-control">
			                                 <option value="Mobile App Development">Mobile App Development</option>
			                                 <option value="Web development">Web development</option>
			                                 <option value="ECommerce Solutions">ECommerce Solutions</option>
			                                 <option value="Others">Others</option>                           
									    </select>

									  </div>

									  <div class="form-group">
									    <label for="message">Add Files </label>
									    <input type="file" name="files" class="form-control" />
									  </div>

									  <div class="form-group">
									    <input type="submit" name="submit" value="Send Your Message" class="btn btn-contact" />
									  </div>
								<?php echo form_close(); ?>
						</div>
				 	</div>

				 	<div class="col-md-6">
				 		 <address>
				              <i class="fa fa-address-card" aria-hidden="true"></i>&nbsp;<strong>Address:</strong><br>
				              NexglobalInc Technologies, <br>
				              Sector - 31<br>
				              Faridabad, Haryana 121001<br>
				              <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@nexglobalinc.com">info@nexglobalinc.com</a>
				              <p>10.00 a.m. to 6.00 p.m., Monday to Saturday</p>
				         </address>

				 		 <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
				 	</div>

				 </div>
			</div>
             
		</section>
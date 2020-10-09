<!-- Masthead-->
<style>
  .bg-primary{
    background-image: url(<?php echo base_url('assets/img/bck.gif')?>);
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column intro">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-2" src="<?=base_url('assets/img/jason.jpg')?>" alt="no image - slow internet" style="border-radius: 15rem; height: 230px; width: 230px;"/>
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Jason Cabalag Magsino</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Web Developer - Drummer</p>
        <p class="masthead-subheading font-weight-light mb-0"><i>" I can Do All Things, Through Christ Who Strengthens Me."</i></p>
        <p class="masthead-subheading font-weight-light mb-0 font-2">Philippians 4:13</p>
    </div>
</header>
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-6 mb-5">
               <a style="text-decoration: none;" href="https://sgmcs.000webhostapp.com/" class="portfolio-item mx-auto">
                 <img class="img-fluid" src="assets/img/nasugbu logo.png" alt="" width="900px" height="650px" />
                    <center>Smart Garbage Bin with GPS using Arduino for Nasugbu, Batangas</center>
               </a>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-6 mb-5">
              <a style="text-decoration: none;" href="https://alldayhomecare.000webhostapp.com/" class="portfolio-item mx-auto">
                 <img class="img-fluid" src="assets/img/allday.png" alt="" style="margin-top: 120px; margin-bottom: 128px;" width="900px" height="650px"/>
                    <center>All Day Home Website</center>
               </a>
            </div>
        </div>
    </div>
</section>
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
  <div class="container">
      <!-- About Section Heading-->
      <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
      <!-- Icon Divider-->
      <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
      </div>
      <!-- About Section Content-->
      <div class="row">
          <div class="col-lg-12 ml-auto">
          	<p class="lead text-uppercase mb-0" style="text-align: center;">
	          	<b>Hello</b> I'm Jason Cabalag Magsino, I'm from Nasugbu Batangas Philippines, I'm 21 years of age.<br>
	          	I'm a graduate of BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY at Batangas State University ARASOF Nasugbu Campus. To know more about me, just click the button below.
	          </p>
          </div>
      </div>
      <!-- About Section Button-->
      <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="<?=base_url('about-me')?>" style="font-size: 14px;">
              <i class="fas fa-user mr-2"></i>
              KNOW MORE ABOUT ME .
          </a>
      </div>
  </div>
</section>
<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row">
        	<div class="col-lg-12 mx-auto">
        		<p class="masthead-subheading font-weight-light mb-0" style="text-align: center;">
        			You can leave me a message using my phone numbers;<br> <u>+639556333709</u> for Globe and TM Subcribers<br>
        			<u>+639480486645</u> for Smart and TNT Subcribers
        		</p><br>
        	</div>
            <div class="col-lg-12 mx-auto">
                <!-- Contact Section Heading-->
			        <h6 class="page-section-heading text-center text-uppercase text-secondary mb-0">OR</h6>
			        <!-- Icon Divider-->
			        <div class="divider-custom">
			            <div class="divider-custom-line"></div>
			            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			            <div class="divider-custom-line"></div>
			        </div>
				        <p class="lead" style="text-align: center;">
		      			Fill up this form below for your questions.
		      		</p><br>
                <form id="contactForm" name="sentMessage" novalidate="novalidate" method="post">
                  <div id="err" class="alert alert-danger" style="display: none;">All Fields are REQUIRED !</div>
                  <div id="success" class="alert alert-success" style="display: none;">Sent</div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email Address</label>
                            <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Phone Number</label>
                            <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <div class="form-group">
                      <button class="btn btn-primary btn-lg" id="sendMessageButton" type="button" style="float: right;">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!DOCTYPE html>
<html>
<head>
	<!-- page title-->
	<title>
            Mbarara Heart Center | Contact Us.
    </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Health Care, health" />
	<meta 
        name="description" 
        content="General cardiology, in and out patient service care. 24 hours service by our dedicated and trained heart team. 
                In mbarara city center, easy access, excellent confirm for patient healing physically and mentally." 
    />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="indexstyle.css" type="text/css" />
</head>
<body>

    <?php include'nav.php'?>
    <div class="top-image-section">
        <img src="images/top.jpg" height="300px" width="100%" />
    </div>

    <!-- Contact us -->
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Contact Form</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters mb-5">

							<div class="col-md-6">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Contact Us</h3>
									<div id="form-message-warning" class="mb-4"></div> 
                                <div id="form-message-success d-none" class="mb-4 text-success">
                                    Your message was sent, thank you!
                                </div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>

							<div class="col-xs-12 col-md-6 d-flex align-items-stretch">
								<div id="map">
                                    <iframe 
                                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7979.186372712098!2d30.65412162412383!3d-0.6086724482237515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smbarara%20heart%20center!5e0!3m2!1sen!2sug!4v1628731480956!5m2!1sen!2sug" 
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                                    </iframe>
                                </div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-map-marker"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Address:</span><br /> Plot 4 Independance Road, Mbarara, Western Uganda</p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-phone"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Phone:</span><br /> <a href="tel: + 256 776009812">+ 256 776009812</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-paper-plane"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Email:</span> <a href="mailto:appointments@mbararaheartcenter.com">appointments@mbararaheartcenter.com</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-globe"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Website</span><br /> <a href="https://www.mbararaheartcenter.com">www.heartcenter.com</a></p>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



    <?php include'footer.php';?>
</body>

</html>
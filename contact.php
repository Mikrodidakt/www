	<!-- Contact -->
	<div id="contact">
		<div class="container anchor">
			<section>
				<div class="page-header">
					<h1>CONTACT US.<h1>
					<h2><small> And we will get back to you.</small></h2>
				</div><!-- End Page Header -->
				<div class="row">
					<div class="col-sm-2">
						<address>
							<strong>Mikrodidakt AB</strong></br>
							Skifferv&auml;gen 48</br>
							SE-224 78 LUND</br>
							Sweden</br></br>
							<a href="tel:004646325040"><i class="fa fa-phone fa-fw"></i> +46 46 325040</a></br>
							<a href="tel:004646325049"><i class="fa fa-fax fa-fw"></i> Fax.: +46 46 325049</a></br>
							<a href="https://www.mikrodidakt.se/webmail"><i class="fa fa-envelope-o fa-fw"></i> Webmail</a></br>
						</address>
					</div><!-- End column -->
					<div id="contact-form-container" class="col-sm-10">
						<form id="contact-form" class="form-horizontal" data-toggle="validator" role="form" action="js/bin/sendform.php">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="name" class="col-lg-2 control-label">Name</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
												<input name="name" type="text" class="form-control" id="name" placeholder="Enter your name" required>
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
											</div><!-- End input group -->
											<div class="help-block with-errors"></div>
										</div>
									</div><!-- End form group -->

									<div class="form-group">
										<label for="email" class="col-lg-2 control-label">Email</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-at fa-fw"></i></span>
												<input name="email" type="email" class="form-control" id="email" placeholder="Enter your e-mail address" required>
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
											</div><!-- End input group -->
											<div class="help-block with-errors"></div>
										</div>
									</div><!-- End form group -->

									<div class="form-group">
										<label for="phone" class="col-lg-2 control-label">Phone</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-mobile fa-fw"></i></span></span>
												<input name="phone" type="text" class="form-control" id="phone" placeholder="Enter your phone number">
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
											</div><!-- End input group -->
										</div>
									</div><!-- End form group -->

									<div class="form-group">
										<label for="phone" class="col-lg-2 control-label"></label>
										<div class="col-lg-10">
											<div class="input-group">
												<input name="captcha" type="hidden" id="captcha" value="Fail">
												<input name="url" type="hidden" id="url">
											</div><!-- End input group -->
										</div>
									</div><!-- End form group -->
								</div><!-- End column -->

								<div class="col-sm-6">
									<div class="form-group">
										<label for="message" class="col-lg-2 control-label">Message</label>
										<div class="col-lg-10">
											<textarea name="message" id="message" class="form-control" cols="20" rows="6" placeholder="Enter your message" required></textarea>
										</div>
									</div><!-- End form group -->

									<div class="form-group">
										<div class="col-lg-10 col-lg-offset-2">
											<button type="submit" class="btn btn-primary">SEND</button>
										</div>
									</div><!-- End form group -->
								</div><!-- End column -->
							</div><!-- End row -->

						</form>
						<div id="formResponse"></div>
					</div><!-- End column -->
				</div><!-- End row -->
			</section>
		</div><!-- End contact container -->
	</div><!-- End contact -->

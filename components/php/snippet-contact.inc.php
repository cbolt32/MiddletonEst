<div class="col-lg-12 col-md-12 col-sm-12 col-sm-12 col-xs-12 aboutMain" xmlns="http://www.w3.org/1999/html">

	<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/php/script-contactFormValidation.php' ?>


	<h2 class="">Get In Touch</h2>

	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 team">
		<div class="row">
			<h4>
				Whether you are a buyer, seller, landlord or tenant we would love to meet you in our town centre
				office:- </br></h4>
			<h5>72b High Street,</br>
			    Shoreham-by Sea,</br>
			    West Sussex,</br>
			    BN43 5DB,</br></h5>

			<h5 id="phone">Alternativley feel free to call Us On <a href="tel:01273454878"><img
						src="images/Icons/call%20up.png">01273 454878</a></h5>
		</div>

		<img class="img img-responsive" src="images/storeFront.jpg" alt="">
		</br>
		</br>
<!--		<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 team" style="padding-top: 20px;">-->
			<h5>
				We can also be found doing the rounds on social media, please feel free to get in touch with us, or keep
				up to date with the what's going on at Middleton Estates.
			</h5>
			</br>

<!--			<div class="row col-lg-4 col-md-4 col-sm-6 col-xs-6">-->
				<a href="https://www.facebook.com/middletonestatesshoreham/?fref=nf">
					<img id="fbIco" src="/images/social/facebook.png" alt="" style="height: 50px;">
				</a>
<!--			</div>-->
			<!--				<div class="row col-lg-4 col-md-4 col-sm-4 col-xs-4">-->
			<!--				<h6>Google+</h6>-->
			<!--				<img src="/images/social/google%20plus.png" alt="" style="height: 50px;">-->
			<!--</div>-->
<!--			<div class="row col-lg-4 col-md-4 col-sm-6 col-xs-6">-->

				<!--				<h6>LinkedIn</h6>-->
				<a href="https://www.linkedin.com/in/middleton-estates-ltd-7a2181112?authType=NAME_SEARCH&authToken=3L6L&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A472203050%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1454257084411%2Ctas%3Amiddleton%20e">
					<img src="/images/social/linkedin.png" alt="" style="height: 50px;">
				</a>
<!--			</div>-->
<!--		</div>-->

	</div>

	<div class="col-lg-5 col-md-5 col-md-offset-1 col-sm-12 col-xs-12 team" style="padding-right: 40px;">
		<legend>Shoreham Office Location</legend>
		<div class="col-lg-12 col-lg-12 col-sm-12  col-xs-12 mapCanvas ">
			<iframe id="mapCanvas" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="300"
			        height="300"
			        src="https://maps.google.com/maps?hl=en&q=72b high street shoreham by sea&ie=UTF8&t=roadmap&z=16&iwloc=B&output=embed">
			</iframe>
			</br>

		</div>
		<legend>Enquiry Form</legend>
		<div class="row" style="padding-left: 20px; padding-top: 20px;">
			<!--the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. This way, the user will get error messages on the same page as the form.-->
			<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" role="contact" method="post"
			      class="form-inline" action="snippet-contactFormValidation'php">

				<section class="row">
					<label class="col-lg-4 col-md-4 col-sm-4 col-xs-4" for="firstName">First Name</label>
					<!--				--><?php //echo $firstNameErr; ?>
					<input class="col-lg-7 col-md-7 col-sm-7 col-xs-7" type="text" name="firstName"
					       placeholder="First Name">
					<span class="error glyphicon glyphicon-asterisk" required="required"></span>
					</br>
				</section>
				</br>

				<section class="row">
					<label class="col-lg-4 col-md-4 col-sm-4 col-xs-4" for="surName">Surname</label>
					<!--				--><?php //echo $surNameErr; ?>
					<input class="col-lg-7 col-md-7 col-sm-7 col-xs-7" type="text" name="surName"
					       placeholder="Last Name">
					<span class="error glyphicon glyphicon-asterisk"></span>
					</br>
				</section>
				</br>

				<section class="row">
					<label class="col-lg-4 col-md-4 col-sm-4 col-xs-4" for="email">Email</label>
					<!--				--><?php //echo $emailErr; ?>
					<input class="col-lg-7 col-md-7 col-sm-7 col-xs-7" type="text" name="email" placeholder="email">
					<span class="error glyphicon glyphicon-asterisk"></span>
					</br>
				</section>
				</br>

				<section class="row">
					<label class="col-lg-4 col-md-4 col-sm-4 col-xs-4" for="phone">Phone Number</label>
					<!--				--><?php //echo $phoneErr; ?>
					<input class="col-lg-7 col-md-7 col-sm-7 col-xs-7" type="text" name="phone"
					       placeholder="Phone Number">
					<span class="error glyphicon glyphicon-asterisk"></span>
					</br>
				</section>
				</br>

				<section class="row">
					<label class="col-lg-4 col-md-4 col-sm-4 col-xs-4" for="enquiry">Enquiry</label>
					<!--				--><?php //echo $enquiryErr; ?>
					<select class=" enqTypeDD col-lg- col-md-7 col-sm-7 col-xs-7 selectpicker btn-group-xs"
					        data-actions-box="true" data-toggle="dropdown" data-wdith="auto" name="enquiry" id="Type"
					        style="padding-left: 0px !important;">
						<option value="Property Purchase">Buying</option>
						<option value="Property Sales">Selling</option>
						<option value="Free Valuation">Free Valuation</option>
						<option value="Landlord Services">Landlord Enquiries</option>
						<option value="Letting Properties">Letting</option>
						<option value="Feedback">Feedback</option>
						<option value="Other Business">Other</option>
					</select>
					<!--			<span class="error glyphicon glyphicon-asterisk"></span>-->
					</br>
				</section>
				</br>

				<section class="row">
					<label class="col-lg-11 col-md-11 col-sm-11 col-xs-11" for="detail">Please Provide Details</label>
					<!--				--><?php //echo $detailErr; ?>
					</br>
					<textarea class="col-lg-11 col-md-11 col-sm-11 col-xs-11" name="detail" rows="5" cols="40"
					          placehold="How Can We Assist"></textarea>
					<!--			<span class="error glyphicon glyphicon-asterisk" ></span>-->
					</br>
				</section>
				</br>


				<input class="pull-right" type="submit" name="submit" value="Submit">

			</form>

		</div>

	</div>



</div>
</div>
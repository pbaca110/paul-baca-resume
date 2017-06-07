<!DOCTYPE html>
<html>
	<head>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>


		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>


		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!--- latesty compiled and minified css-->
		<link>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<!-- Font awesome-->
		<title>paulabq</title>
	</head>
	<body class="parallax">
		<div class="container">
			<div class="row">
				<div class="col-xs-9"></div>
				<div class="col-xs-3">
					<a href="https://www.linkedin.com/in/paul-baca/" target="_blank"> <i class="fa fa-linkedin"
																												aria-hidden="true"></i></a>
					<a href="https://github.com/pbaca110" target="_blank"> <i class="fa fa-github" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img src="images/paul.jpg" alt="doge" class="img-circle" id="myPhoto">
				</div>
			</div>
			<h1>ABOUT ME</h1>
			<p>Hi I am Paul Baca and I am a web designer who enjoys working on back end development and likes to develop
				font
				end as well.
			<p>I took the Deep Dive Coding Bootcamp in April of 2017, below you will see some of the work I have done and
				am
				working on currently.
			<p>Please feel free to contact me with any questions you may have. </p>
			<h1>PORTFOLIO</h1>
			<h2> OUR VIBE</h2>
			<a href="https://github.com/btrabaudo/our-vibe/tree/master/epic" target="_blank"><img
					class="resize img-responsive"
					src="images/our.png"></a>
			<h1>CONTACT ME</h1>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 center-block">
					<form id="contact-form" method="POST" class="form-horizontal well" action="php/mailer.php">
						<div class="form-group">
							<label for="name">Name</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email address</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="subject">Subject</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-pencil" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
							</div>
						</div>
						<div class="form-group">
							<label for="message">Message</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-comment" aria-hidden="true"></i>
								</div>
								<textarea class="form-control" rows="5" id="message" name="message"
											 placeholder="Message"></textarea>
							</div>
						</div>
						<div class="g-recaptcha" data-sitekey="6Le7sCMUAAAAAOD2pHphRE38H9VvNt5pVFw7r91Z"></div>
						<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
					</form>

					<div id="output-area"></div>


				</div>
			</div>
		</div>
	</body>


</html>

<!DOCTYPE html>
<html>
	<head>
		<title>EVENT FORM | Feed India</title>
		<!-- favicon -->
		<link rel="icon" href="images/logobg.png">
		
		<!-- bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		
		<!-- self stylesheet -->
		<link  rel="stylesheet" href="so.css">
		
		<!-- fontawesome -->
		<script src="https://kit.fontawesome.com/ec93a2be41.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<!-- jquery and jquery-ui -->
		<script src="js/jquery.js"></script>
		<script src="js/jquery-ui.js"></script>
		<link rel="stylesheet" href="css/jquery-ui.css">
		<!-- jquery script -->
		<script>
			$(document).ready(function(){
				$('#events').accordion({
					collapsible:true
				});
				$('#donate').click(function(){
					alert("This button will take you to the donation page !!");
				});
			});
		</script>
		<style>
			.ui-accordion:active{
				background:green;
			}
		</style>
	</head>	 
	<body style="background:silver;">
	<!-- navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand"><img src="images/logo.png" alt="logo FEED INDIA"></a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="contacts.html">Contacts</a></li>
					<li class="nav-item"><a class="nav-link" href="event-form.php">Event</a></li>
					<li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
				</ul>
			</div>
		</nav>
		<main>
			<div class="container">
			<!-- form -->
				<div class="col-md-8">
					<form method="POST">
					<div class="row">
						<div class="col-md-10">
						<h1 style="font-family:Luminari, fantasy;color:gray;font-size:320%;">NEW EVENT REGISTRATION FORM</h1>
					</div>
					<div class="col-md-2">
						<i class="fa fa-file-text fa-4x" style="font-size:800%;"></i>
					</div>
					</div>
					
						
						<br>
						<p class="text-danger">Fields marked as * are required</p>
						<b><hr></b>
						<div class="row">
							
									<div class="form-group col-md-12">
										<label for="name" style="font-size:160%;">Naame*</label>
										<input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
									</div>
									<div class="form-group col-md-12">
										<label for="email" style="font-size:160%;">E-mail*</label>
										<input type="email" class="form-control" id="email" placeholder="Enter your e-mail" name="email" required>
									</div>
									<div class="form-group col-md-12">
										<label for="mobile" style="font-size:160%;">Mobile*</label>
										<input type="tel" class="form-control" id="mobile" placeholder="Enter your Mobile number with country code" name="mobile" required>
									</div>
									<div class="form-group col-md-12">
										<label for="dob" style="font-size:160%;">Date of Birth </label>
										<input type="date" class="form-control" id="dob" name="dob" required>
									</div>
									<div class="form-group col-md-12">
										<label style="font-size:160%;">Gender*</label>
										<br>
										<input type="radio" name="gender" value="male"> &nbsp;<span style="font-size:120%;">Male</span><br>
										<input type="radio"  name="gender" value="female" >&nbsp;<span style="font-size:120%;">Female</span><br>
										<input type="radio"  name="gender" value="other" >&nbsp;<span style="font-size:120%;">Other</span>
									</div>
									<div class="form-group col-md-12">
										<label style="font-size:160%;">Skills*</label>
										<br>
										<input type="checkbox" name="s1" id="s1" value="Video">
										<label  style="font-size:120%;font-weight:normal">Video Editing</label>
										<br>
										<input type="checkbox" name="s2" id="s2" value="photo">
										<label  style="font-size:120%;font-weight:normal">Photography</label>
										<br>
										<input type="checkbox" name="s3" id="s3" value="acting">
										<label  style="font-size:120%;font-weight:normal">Acting</label>
										<br>
										<input type="checkbox" name="s4" id="s4" value="web d">
										<label  style="font-size:120%;font-weight:normal">Web designing</label>
										<br>
										<input type="checkbox" name="s5" id="s5" value="content">
										<label  style="font-size:120%;font-weight:normal">Content Writing</label>
										<br>
										<input type="checkbox" name="s6" id="s6" value="choreo.">
										<label  style="font-size:120%;font-weight:normal">Choreography</label>
										<br>
										<label for="s7" style="font-size:130%;font-weight:normal" style="font-size:160%;"><b>Other Skills</b></label>
										<textarea name="s7" id="s7" rows="3" cols="50" class="form-control"></textarea>
									</div>
									
								
						</div>
						<div class="row">
							<button type="reset" class="btn btn-info col-md-5" style="margin-right:10px ; margin-left:10px ; margin-top:10px;font-size:150%"><b>RESET</b></button>
							<button type="submit" class="btn btn-success col-md-5" style="margin-right:10px ; margin-top:10px;font-size:150%" name="sub"><b>SUBMIT</b></button>
						</div>
					</form>

				</div>
				<!-- right section --> 
				<div class="col-md-4">
					<div class="bg-success text-info text-center" style="border-radius:20px;width:100%;height:5%;background:lightgreen;">
						<h2><b>PREVIOUS EVENTS</b></h2>
					</div>
					<hr>
					<div id="events">
						<h1 title="click to view or hide details">Event 1</h1>
						<p>
							Details and links for event 1.
						</p>
						<h1 title="click to view or hide details">Event 2</h1>
						<p>
							Details and links for event 2.
						</p>
						<h1 title="click to view or hide details">Event 3</h1>
						<p>
							Details and links for event 3.
						</p>
						<h1 title="click to view or hide details">Event 4</h1>
						<p>
							Details and links for event 4.
						</p>
						<h1 title="click to view or hide details">Event 5</h1>
						<p>
							Details and links for event 5.
						</p>
						<h1 title="click to view or hide details">Event 6</h1>
						<p>
							Details and links for event 6.
						</p>
						<h1 title="click to view or hide details">Event 7</h1>
						<p>
							Details and links for event 7.
						</p>
						<h1 title="click to view or hide details">Event 8</h1>
						<p>
							Details and links for event 8.
						</p>
					</div>
					<hr><hr>
					<div style="background:pink;border-radius:20px;width:100%;height:7%;color:brown;" class="text-center">
						<h1><b>Quick buttons</b></h1>
					</div>
					<br><br>
					<div id="tabs">
							<button class="btn btn-primary" id="donate">Donate</button>
							<br><br>
							<button class="btn btn-success" id="membership">Membership</button>
							<br><br>
							<button class="btn btn-info" id="vacancy">Vacancy</button>
							<br><br>
							<button class="btn btn-warning" id="notice">Notice</button>
							<br><br>
							<button class="btn btn-danger" id="community">Community</button>
							<br><br>
					</div>
				</div>
			</div>
		</main>
		<!-- footer -->
		<footer style="background:#555555;color:white; text-decoration:none;" class="fixed-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center">
						<ul class="">
							<li><a href="https://www.facebook.com" title="Facebook"><i class="fa fa-facebook-official" style="font-size:400%;"></i></a></li>
							<br>
							<li><a href="https://web.whatsapp.com" title="WhatsApp"><i class="fa fa-whatsapp" style="font-size:400%;"></i></a></li>
							<br>
							<li><a href="https://www.snapchat.com" title="Snapchat"><i class="fa fa-snapchat-ghost" style="font-size:400%;"></i></a></li>
							<br>
							<li><a href="https://www.instagram.com" title="Instagram"><i class="fa fa-instagram" style="font-size:400%;"></i></a></li>
							<br>
							<li><a href="https://www.twitter.com" title="Twitter"><i class="fa fa-twitter" style="font-size:400%;"></i></a></li>
							<br>
						</ul>
					</div>
					<div class="col-md-4 text-left">
						<ul style="font-size:150%;">
							<li>The resources</li>
							<li>About us</li>
							<li>Legal Actions</li>
							<li>Manager</li>
							<li>Office</li>
							<li>Contact Us</li>
							<li>Help</li>
						</ul>
					</div>
					<div class="col-md-4 text-left">
						<ul style="font-size:150%;">
							<li><a href="#">Working</a></li>
							<li><a href="#">Conveyance</a></li>
							<li><a href="#">Contacts</a></li>
							<li><a href="#">Opportunities</a></li>
							<li><a href="#">Email</a></li>
							<li><a href="#">Advertisement</a></li>
							<li><a href="#">FSSAI</a></li>
						</ul>
					</div>
				</div>
				<div class="text-center" style="font-size:110%;">
					<p>Copyright &copy; 1960-2023</p>
				</div>
			</div>
		</footer>
<?php 
	if(isset($_POST['sub'])){
		
		#$server = "localhost";
		#$user = "pranav";
		#$pass = "pg2000";
		#$db = "builder";
		
		$server = "remotemysql.com:3036";
		$user = "7OPHZxIQD3";
		$pass = "ajCgz2AyIH";
		$db = "7OPHZxIQD3";
		
		$conn = mysqli_connect($server ,$user ,$pass ,$db);
		
		$ins_name = mysqli_real_escape_string($conn ,strip_tags($_POST['name']));
		$ins_email = mysqli_real_escape_string($conn ,strip_tags($_POST['email']));
		$ins_mobile = mysqli_real_escape_string($conn ,strip_tags($_POST['mobile']));
		$ins_dob = mysqli_real_escape_string($conn ,strip_tags($_POST['dob']));
		$ins_gender = mysqli_real_escape_string($conn ,strip_tags($_POST['gender']));
		$s = "";
		if(isset($_POST['s1'])){
			$s = $s.$_POST['s1']." ,"; 
		}
		if(isset($_POST['s2'])){
			$s = $s.$_POST['s2']." ,"; 
		}
		if(isset($_POST['s3'])){
			$s = $s.$_POST['s3']." ,"; 
		}
		if(isset($_POST['s4'])){
			$s = $s.$_POST['s4']." ,"; 
		}
		if(isset($_POST['s5'])){
			$s = $s.$_POST['s5']." ,"; 
		}
		if(isset($_POST['s6'])){
			$s = $s.$_POST['s6']." ,"; 
		}
		$ins_skills = mysqli_real_escape_string($conn ,strip_tags($s));
		if(isset($_POST['s7'])){
			$ins_oth = mysqli_real_escape_string($conn ,strip_tags($_POST['s7']));
		}
		
		$ins_sql = "INSERT INTO event(nam ,email ,mobile ,dob ,gender ,skills ,other) VALUES('$ins_name','$ins_email','$ins_mobile','$ins_dob','$ins_gender','$ins_skills','$ins_oth')";
		if(mysqli_query($conn ,$ins_sql)){
			alert("success");
			?>
			<script>window.location="event-form.php";</script>
			<?php
		}
	}

?>		
	</body>
</html>

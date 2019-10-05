<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<title>WWD, Inc.</title>
</head>
<body>
	<!-- background image -->
	<nav class="navbar navbar-expand-lg fixed-top">
		<a href="index.html" class="navbar-brand font-weight-light">WWD Inc.</a>

		<!-- Toggler/collapsible Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Links -->
		<div class="collapse navbar-collapse" id="main-navigation">
			<ul class="navbar-nav font-weight-bold">
				<li class="nav-item">
					<a class="nav-link" href="#head">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About Us</a>
				</li>
				<li class="nav-item bg-primary">
					<a class="nav-link" href="login.html">Login</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid main">
		<div class="row header">
			<div class="col padded header" id="head">
				<h1> Welcome to Wisteria Web Development Inc.!</h1>
				<p class="margin-top">We offer great website solutions for great people, great companies, and great organizations. By registering to WWD Inc., you can gain access to our content.</p>
				<div class="form-inline margin-top">
					<input type="text" name="email" placeholder="Your Email" class="form-check" id="email">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal-section" onclick="changeemail()">Proceed</button>
					<?php
                        if(isset($_GET['reg']))
                            if($_GET['reg'] == "success")
                                echo "You've registered successfully!";
                            else echo "Registration error. Please contact your system administrator.";
                    ?>
					<!-- large modal -->
					<div class="modal fade modal-section slide-in-fwd-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="container-fluid text-center">
									<header>GET STARTED</header>
									<div class="form-group">
										<div class=col>
											<form method="POST" action="register.php">
												<div class="row">
													<input type="text" class="form-control"  placeholder="First Name" name="firstName" >
												</div>
												<div class="row">
													<input type="text" class="form-control"  placeholder="Middle Name" name="middleName" >
												</div>
												<div class="row">
													<input type="text" class="form-control"  placeholder="Last Name" name="lastName" >
												</div>

												<div class="row">
													<input type="text" class="form-control"  placeholder="Nickname" name="userName" >
												</div>
												<div class="row">
													<input type="email" class="form-control" placeholder="Email Address" name="userEmail" id="email-reg">
												</div>
												<div class="row">
													<input type="password" class="form-control" placeholder="Password" name="password" >
												</div>
												<div class="row">
													<input type="submit" class="btn btn-primary submit-reg" id = "btn" value="SUBMIT" name="register-user">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<img src="assets/pictures/kryptos.jpg" class="shadow-lg" height="350px">
			</div>
		</div>
	</div>

	<div class="container-fluid about parallax">
		<div class="text-center" id="about">
			<h2 class="jumbotron-fluid text-center">About Us</h2>
			<p class="fluid">Wisteria Web Development, Inc. is formed for the sole purpose of fulfilling the requirements for the subject, Computer Engineering Technology 3: Game Development.
				WWD, Inc. is temporarily owned by Prof. Bob Mathew Sunga, who is the sole provider of licenses.</p>
			<p>	The company's former name is "Cipher Optimum Inc." but due to external conflicts, the name itself is changed into "Wisteria Web Development Inc."

                The name "Wisteria" was suggested by J.A. Piñero to  symbolize the company's dominance, growth, elegance, and wisdom.
            </p>
		</div>
	</div>
	<div class="container-fluid org-structure">
		<h3 class="text-center">Organizational Structure</h3>
		<p>WWD, Inc. has 16 members in total, which is divided into two committees: Web Design and Web Functionality.</p>
	</div>

	<div class="container-fluid wdesign">
		<h4>Web Design</h4>
		<div class="fbmenu">
			<div class="row flex-row flex-nowrap">
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<div class="card card-block text-center">
						<img src="https://scontent.fmnl4-3.fna.fbcdn.net/v/t1.0-9/71086298_1304387063068985_4015067739063320576_o.jpg?_nc_cat=109&_nc_eui2=AeGNRaHAaJdE9_BCu0mSG6SBdfvb7Bb-4ngYbflq1Rs5x4iRITOnYrH32DUZW7R6c4ZSwEfzAWqF8fkJgX5PLw_E0ugwLmUqEXGnLR8gjt6Aiw&_nc_oc=AQlIptw9OgLCfTijdYSKvXfC7sftep_zVv0u3TKITmDWTjEQVZXUkcsLdbyAWtjY4yo&_nc_ht=scontent.fmnl4-3.fna&oh=d9be113f2dc94e4bbede361c2e62c03e&oe=5E3A6CE6" alt="ceo" class="fbimg">
						<p> Michael C. Bataller</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<div class="card card-block text-center">
						<img src="https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.0-9/48932526_1189199924561372_8115478935019454464_o.jpg?_nc_cat=104&_nc_eui2=AeG1yXWv-Cb1U-bdmrrugxvPWlEm96MoOK_hauqH0sJasLEYJmwTFX-BNCv_NckRyxQcRZy4OilKIaW1-Oi_V33fnX8ILlxs-4fSntV4duKuAw&_nc_oc=AQmwa8i2BXrWe6LH9vtvtaPYPWUll7eqWyDI2Z2aqH11UdFvDR1Vsl7_cV6zshWC8GI&_nc_ht=scontent.fmnl4-1.fna&oh=70b8e19b3445fca2d30756e378c053ed&oe=5DF190FB" alt="ceo" class="fbimg">
						<p> Kervin Zoren Bonaobra</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<div class="card card-block text-center">
						<img src="https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.0-9/57272238_2388429467876385_8422556521019211776_n.jpg?_nc_cat=103&_nc_eui2=AeFk76sNRnDyU_JB3GylseWesPHY8HZRjLG04zvB3dL8hwBLvi2DLQaPG-UlosbjILpcYPaBfCkBa2tLaa97XUDbVQMz5v4OaoEjmKnVPbfAIg&_nc_oc=AQluHj6iR0VYHjJvVaIpurmMtXJUMiqf7OUw0X4LbvR2UXqioXQi8rHJhyWUHcW9Bko&_nc_ht=scontent.fmnl4-1.fna&oh=b857881de8c574bca4ab58eb2ec026ca&oe=5E29E0A7" class="fbimg">
						<p> Justine Bruno</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script>
		function changeemail(){
			var email1 = document.getElementById("email");
			var email2 = document.getElementById("email-reg");
			email2.value = email1.value;
		}
	</script>

</body>
</html>
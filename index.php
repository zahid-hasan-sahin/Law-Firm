<?php include 'header.php' ?>
<!--Start Features Section	-->
<section class="features-section">
	<div class="container">
		<div class="row top-features">

			<div class="col-lg-4">
				<div class="features-box">
					<img src="images/icon.png" alt="">
					<h3>Winning Award</h3>
					<p>sum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore .</p>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="features-box">
					<img src="images/icon2.png" alt="">
					<h3>Private</h3>
					<p>sum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore .</p>
				</div>
			</div>



			<div class="col-lg-4">
				<div class="features-box">
					<img src="images/icon3.png" alt="">
					<h3>Legal Protection</h3>
					<p>sum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore .</p>
				</div>
			</div>
		</div>


		<div class="row align-items-center">
			<div class="col-lg-4">
				<div class="left-head">
					<h2>Best Law for everyone</h2>
				</div>
			</div>

			<div class="col-lg-8">
				<div class="right-text">
					<p>Lorem ipsum dolor sit amet con sectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					<p>Lorem ipsum dolor sit amet con sectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				</div>
			</div>
		</div>





	</div>
</section>
<!--Start Features Section	-->



<!--Start About Section	-->
<section class="about-section" id="about-section-id">
	<div class="container">
		<div class="row  align-items-center">
			<div class="col-lg-6">
				<div class="about-text text-center">
					<h2>About law </h2>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium.
					</p>
					<div class="signature">
						<img src="images/signature.png" alt="">
						<p>CEO & Founder Of Tak Desain</p>
					</div>

				</div>
			</div>


			<div class="col-lg-6">
				<div class="about-img">
					<img src="images/about.jpg" alt="">
				</div>
			</div>

		</div>
	</div>
</section>
<!--End About Section	-->



<!--Start Services	-->
<section class="services-section" id="services-section-id">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<div class="section-title-main">
					<h2 class="section-title">Legal Practices Area</h2>
				</div>
			</div>
			<?php

			$query = "select * from lawyercategories;";
			$result = $conn->query($query);
			if ($result->num_rows > 0) {

				while ($row = $result->fetch_assoc()) {

					$id = $row['id'];
					$category = $row['category'];
					$description = $row['description'];
					$image = $row['image'];

			?>
					<div class="col-lg-4">
						<div class="services-box">
							<div class="services-media">
								<img src="images/<?php echo $image ?>" alt="">
							</div>
							<div class="services-info">
								<h3><?php echo $category ?></h3>
								<p><?php echo $description ?></p>
							</div>
						</div>
					</div>

			<?php
				}
			}
			?>
		</div>
	</div>
</section>
<!--End Services	-->



<!--Start Team Section-->
<section class="team-section" id="team-section-id">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<div class="section-title-main">
					<h2 class="section-title">Meet Our Lawyers</h2>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="team-box">
					<div class="team-media">
						<img src="images/team1.jpg" alt="">
					</div>
					<div class="team-info">
						<h3>Rudhi Sasmito</h3>
						<p>- Lead Lawyer -</p>
						<ul class="top-social">
							<li><a href=""><i class="fa fa-facebook"></i></a> </li>
							<li><a href=""><i class="fa fa-instagram"></i></a> </li>
							<li><a href=""><i class="fa fa-twitter"></i></a> </li>
							<li><a href=""><i class="fa fa-pinterest"></i></a> </li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="team-box">
					<div class="team-media">
						<img src="images/team2.jpg" alt="">
					</div>
					<div class="team-info">
						<h3>Rudhi Sasmito</h3>
						<p>- Lead Lawyer -</p>
						<ul class="top-social">
							<li><a href=""><i class="fa fa-facebook"></i></a> </li>
							<li><a href=""><i class="fa fa-instagram"></i></a> </li>
							<li><a href=""><i class="fa fa-twitter"></i></a> </li>
							<li><a href=""><i class="fa fa-pinterest"></i></a> </li>
						</ul>
					</div>
				</div>
			</div>


			<div class="col-lg-3">
				<div class="team-box">
					<div class="team-media">
						<img src="images/team3.jpg" alt="">
					</div>
					<div class="team-info">
						<h3>Sarah Doel</h3>
						<p>- Lead Lawyer -</p>
						<ul class="top-social">
							<li><a href=""><i class="fa fa-facebook"></i></a> </li>
							<li><a href=""><i class="fa fa-instagram"></i></a> </li>
							<li><a href=""><i class="fa fa-twitter"></i></a> </li>
							<li><a href=""><i class="fa fa-pinterest"></i></a> </li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="team-box">
					<div class="team-media">
						<img src="images/team4.jpg" alt="">
					</div>
					<div class="team-info">
						<h3>Rome Doel</h3>
						<p>- Lead Lawyer -</p>
						<ul class="top-social">
							<li><a href=""><i class="fa fa-facebook"></i></a> </li>
							<li><a href=""><i class="fa fa-instagram"></i></a> </li>
							<li><a href=""><i class="fa fa-twitter"></i></a> </li>
							<li><a href=""><i class="fa fa-pinterest"></i></a> </li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="btn-team text-center">
					<a href="" class="btn btn-primary">All Lawyers</a>
				</div>
			</div>


		</div>
	</div>
</section>
<!--End Team Section-->



<!--	Start Testimonial Section-->
<section class="quote-section" style="background: url(images/review-bg.jpg)" id="quote-section-id">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title-main center">
					<h2 class="section-title text-center">OUR QUOTE</h2>
				</div>

				<div class="col-md-12">
					<div class="owl-carousel owl-theme testimonial-carousel">

						<?php
						$query = "select * from quotes;";
						$result = $conn->query($query);
						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
								$quote = $row['quote'];
								$writer = $row['writer'];
								$identity = $row['identity'];
						?>

								<div class="item">
									<div class="test-box">
										<p>“<?php echo $quote ?> ”</p>
										<div class="test-info">

											<div class="test-authot">
												<h4><?php echo $writer ?> </h4>
												<h5>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $identity ?></h5>
											</div>
										</div>

									</div>
								</div>

						<?php
							}
						}


						?>



					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!--	End Testimonial Section-->


<!--Start Logo Section-->
<section class="logo-section text-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-2">
				<div class="logo-box">
					<img src="images/logo1.jpg" alt="">
				</div>
			</div>

			<div class="col-lg-2">
				<div class="logo-box">
					<img src="images/logo2.jpg" alt="">
				</div>
			</div>

			<div class="col-lg-2">
				<div class="logo-box">
					<img src="images/logo3.jpg" alt="">
				</div>
			</div>

			<div class="col-lg-2">
				<div class="logo-box">
					<img src="images/logo4.jpg" alt="">
				</div>
			</div>

			<div class="col-lg-2">
				<div class="logo-box">
					<img src="images/logo5.jpg" alt="">
				</div>
			</div>

			<div class="col-lg-2">
				<div class="logo-box">
					<img src="images/logo6.jpg" alt="">
				</div>
			</div>


		</div>
	</div>
</section>
<!--End Logo Section-->






<!--All modeal start-->
<div class="modal fade" id="adminloginmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Admin login</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="adminlogincore.php" method="post">
				<div class="modal-body">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="password">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
			</form>
		</div>
	</div>
</div>



<div class="modal fade" id="lawyerloginmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Lawyer login</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="lawyerlogincore.php" method="post">
				<div class="modal-body">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="password">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
			</form>
		</div>
	</div>
</div>


<div class="modal fade" id="clientloginmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">client login</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="clientlogincore.php" method="post">
				<div class="modal-body">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="pasword">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
			</form>
		</div>
	</div>
</div>



<div class="modal fade" id="lawyerregistermodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Lawyer Registration</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="lawyerregister.php" method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
						<input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input required type="password" class="form-control" id="exampleInputPassword1">
					</div>

					<div class="mb-3">
						<label for="catagory" class="form-label">Select Catagory</label>
						<select required class="form-select" aria-label="Default select example" id="catagory">
							<?php
							$query = "select * from lawyercategories;";
							$result = $conn->query($query);

							if ($result->num_rows > 0) {

								while ($row = $result->fetch_assoc()) {

									$id = $row['id'];
									$category = $row['category'];

							?>
									<option value="<?php echo $id ?>"><?php echo $category ?></option>
							<?php
								}
							}
							?>
						</select>
					</div>

					<div class="mb-3">
						<label for="exampleInputRate" class="form-label">Rate</label>
						<input required type="number" class="form-control" id="exampleInputRate">
					</div>
					<div class="mb-3">
						<div class="form-group">
							<label for="exampleFormControlTextarea" class="form-label">Description</label>
							<textarea required class="form-control rounded-0" id="exampleFormControlTextarea" rows="3"></textarea>
						</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputLocation" class="form-label">Location</label>
						<input required type="text" class="form-control" id="exampleInputLocation">
					</div>

					<div class="mb-3">
						<label for="exampleInputPhoneNumber" class="form-label">Phone Number</label>
						<input type="text" class="form-control" id="exampleInputPhoneNumber" required>
					</div>

					<div class="mb-3">
						<label for="formFile" class="form-label">Picture</label>
						<input class="form-control" type="file" id="formFile" required>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>

		</div>
	</div>
</div>



<div class="modal fade" id="clientregistermodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!--All modeals End-->


<?php include 'footer.php' ?>
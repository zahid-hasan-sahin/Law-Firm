<?php include 'header.php' ?>
<!--Start Features Section	-->
<section class="features-section">
	<div class="container">
		<div class="row top-features">

			<div class="col-lg-4">
				<div class="features-box">
					<img src="../images/icon.png" alt="">
					<h3>Winning Award</h3>
					<p>sum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore .</p>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="features-box">
					<img src="../images/icon2.png" alt="">
					<h3>Private</h3>
					<p>sum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore .</p>
				</div>
			</div>



			<div class="col-lg-4">
				<div class="features-box">
					<img src="../images/icon3.png" alt="">
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
						<img src="../images/signature.png" alt="">
						<p>CEO & Founder Of Tak Desain</p>
					</div>

				</div>
			</div>


			<div class="col-lg-6">
				<div class="about-img">
					<img src="../images/about.jpg" alt="">
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
								<img src="../images/<?php echo $image ?>" alt="">
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




			<?php
			$query = "select * from lawyers limit 4;";
			$result = $conn->query($query);
			if ($result->num_rows > 0) {

				while ($row = $result->fetch_assoc()) {

					$email = $row['email'];
					$name = $row['name'];
					$categoryid = $row['categoryid'];
					$picture = $row['picture'];
					$query1 = "select * from lawyercategories where id=" . $categoryid . ";";
					$result1 = $conn->query($query1);
					$category = "";
					if ($result1->num_rows > 0) {

						while ($row1 = $result1->fetch_assoc()) {
							$category = $row1['category'];
						}
					}

			?>
					<div class="col-lg-3">
						<div class="team-box">
							<div class="team-media">
								<img src="images/<?php echo $picture ?>" alt="">
							</div>
							<div class="team-info">
								<h3><?php echo $name ?></h3>
								<p>- <?php echo $category ?> -</p>
								<ul class="top-social">
								<li><a href="#!" class="rounded-3"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!" class="rounded-3"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!" class="rounded-3"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!" class="rounded-3"><i class="fab fa-whatsapp"></i></a></li>
								</ul>
								<a type="button" class="btn btn-secondary  btn-block mt-3" href="lawyerreadmore.php?email=<?php echo $email ?>#details">Read More</a>

							</div>
						</div>
					</div>



			<?php

				}
			}
			?>



			<div class="col-md-12">
				<div class="btn-team text-center">
					<a href="lawyers.php" class="btn btn-primary">All Lawyers</a>
				</div>
			</div>


		</div>
	</div>
</section>
<!--End Team Section-->



<!--	Start Testimonial Section-->
<section class="quote-section" style="background: url(../images/review-bg.jpg)" id="quote-section-id">
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
					<img src="../images/logo1.jpg" alt="">
				</div>
			</div>

			<div class="col-lg-2">
				<div class="logo-box">
					<img src="../images/logo2.jpg" alt="">
				</div>
			</div>

			<div class="col-lg-2">
				<div class="logo-box">
					<img src="../images/logo3.jpg" alt="">
				</div>
			</div>

			<div class="col-lg-2">
				<div class="logo-box">
					<img src="../images/logo4.jpg" alt="">
				</div>
			</div>

			<div class="col-lg-2">
				<div class="logo-box">
					<img src="../images/logo5.jpg" alt="">
				</div>
			</div>

			<div class="col-lg-2">
				<div class="logo-box">
					<img src="../images/logo6.jpg" alt="">
				</div>
			</div>


		</div>
	</div>
</section>
<!--End Logo Section-->





<?php include 'footer.php' ?>
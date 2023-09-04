<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
	<div class="container">
		<a class="navbar-brand" href="index.html">
			<img src="<?php echo base_url('images/logo.png') ?>" alt="logo" class="img-fluid"/>
		</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
			data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="fas fa-bars"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('index.php/Welcome') ?> ">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link active dropdown-toggle" href="about.html" id="navbarDropdownAbout"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAbout">
						<a class="dropdown-item" href="<?php echo base_url('index.php/AboutUs') ?> ">About Us</a>
						<a class="dropdown-item" href="<?php echo base_url('index.php/History') ?> ">History</a>
						<a class="dropdown-item"
							href="<?php echo base_url('index.php/Biodivercity') ?> ">Biodiversity</a>
						<a class="dropdown-item"
							href="<?php echo base_url('index.php/Administration') ?> ">Administration</a>
						<a class="dropdown-item"
							href="<?php echo base_url('index.php/Achievements') ?> ">Achievements</a><!--a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a-->
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownResearch" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						Research
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownResearch">
						<a class="dropdown-item" href="" ng-repeat="x in tcCmsGetImages"
							ng-click="res(x.Id)">{{x.Title}}</a>
						<!-- <?php echo base_url('index.php/Research') ?> -->
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						Trainings
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
						<a class="dropdown-item" href="" ng-repeat="y in training" ng-click="tra(y.ID)">{{y.TITLE}}</a>
						<!-- <?php echo base_url('index.php/Training') ?> -->
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('index.php/Gallery') ?> ">Gallery</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('index.php/Contact') ?> ">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- full Title -->
<div class="full-title">
	<div class="container">
		<!-- Page Heading/Breadcrumbs -->

		<h1 class="mt-4 mb-3">Administration <small>Adminstration</small> </h1>
	</div>
</div>
<!-- Page Content -->
<div class="container">
	<div class="breadcrumb-main">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active">ZARS Administration</li>
		</ol>
	</div>
	<!-- About Content -->
	<div class="about-main">
		<div class="row">

			<div>
				<h2>Administrative Staff of Zonal Agricultural Research Station, Pune </h2>

				<!-- <div class="col-lg-6"> <img class="img-fluid rounded mb-4"
						src="<?php echo base_url('images/admin.jpg') ?>" alt="" />
				</div> -->

			</div>
			<div class="container table-responsive">
				<br>
				<center>
					<table class="table table-striped table-bordered" style="width:95%;">
						<thead class="table-dark">
							<tr>
								<th scope="col" style="width:3%;">
									<center>Sr.No.</center>
								</th>
								<th scope="col" style="width:30%;">
									<center>Name</center>
								</th>
								<th scope="col" style="width:22%;">
									<center>Designation</center>
								</th>
								<th scope="col" style="width:14%;">
									<center>Email</center>
								</th>
								<th scope="col" style="width:11%;">
									<center>Mobile</center>
								</th>
								<th scope="col" style="width:20%;">
									<center>Photo</center>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">
									<center>1</center>
								</th>
								<td>
									<center><b>Smt.Gayatri Somnath Kulkarni</b></center>
								</td>
								<td><b>Office Superintendent</b></td>
								<td>
									<b>kgayatris1306@gmail.com</b>
								</td>
								<td><b>8975210300</b></td>

								<td><img src="<?php echo base_url('images/Picture1.png') ?>" alt="logo"
										style="width:90%;" /></td>

							</tr>
							<tr>
								<th scope="row">
									<center>2</center>
								</th>
								<td>
									<center><b>Shri.Sachin Maruti Raut</b></center>
								</td>
								<td><b>Asstt Superintendent</b></td>
								<td>
									<b>smraut1978@gmail.com</b>
								</td>
								<td><b>8329335946</b></td>

								<td><img src="<?php echo base_url('images/Picture2.png') ?>" alt="logo"
										style="width:90%;" /></td>

							</tr>
							<tr>
								<th scope="row">
									<center>3</center>
								</th>
								<td>
									<center><b>Shri.Sanjay Keshav Awachite</b></center>
								</td>
								<td><b>Senior Clerk</b></td>
								<td>
									<b>awachiteask@rediffmail.com</b>
								</td>
								<td><b>8805095888/<br>8888878711</b></td>

								<td><img src="<?php echo base_url('images/Picture3.png') ?>" alt="logo" style="width:90%;" />
								</td>

							</tr>
							<tr>
								<th scope="row">
									<center>4</center>
								</th>
								<td>
									<center><b>Smt.Priya Pankaj Bhandari</b></center>
								</td>
								<td><b>Agril. Asstt.</b></td>
								<td>
									<b>priyapankajbhandari@gmail.com</b>
								</td>
								<td><b>8275472879</b></td>

								<td><img src="<?php echo base_url('images/Picture4.png') ?>" alt="logo"
										style="width:90%;" /></td>

							</tr>
							<tr>
								<th scope="row">
									<center>5</center>
								</th>
								<td>
									<center><b>Shri.Santosh Rama Kolekar</b></center>
								</td>
								<td><b>Peon</b></td>
								<td>
									<b>skolekar930@gmail.com</b>
								</td>
								<td><b>8668691220</b></td>

								<td><img src="<?php echo base_url('images/Picture5.png') ?>" alt="logo"
										style="width:90%;" /></td>

							</tr>
							<tr>
								<th scope="row">
									<center>6</center>
								</th>
								<td>
									<center><b>Shri.Ganpat Bhikaji Avhad</b></center>
								</td>
								<td><b>Peon</b></td>
								<td>
									<center><b>-----</b></center>
								</td>
								<td><b>9511646301</b></td>

								<td><img src="<?php echo base_url('images/Picture6.png') ?>" alt="logo"
										style="width:90%;" /></td>

							</tr>
							<tr>
								<th scope="row">
									<center>7</center>
								</th>
								<td>
									<center><b>-------------</b></center>
								</td>
								<td><b>-------------</b></td>
								<td>
									<center><b>------</b></center>
								</td>
								<td><b>---------</b></td>

								<td><img src="" alt="" style="width:90%;" /></td>

							</tr>


						</tbody>
					</table>
				</center>
			</div>
		</div>
		<!-- /.row -->
	</div>

</div>
<!-- /.container -->
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">

				<h4 class="modal-title" id="exampleModalLongTitle"><b>&nbsp;&nbsp;&nbsp;&nbsp;Research</b></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h5 class="modal-title" id="exampleModalLongTitle" ng-repeat="x in research2">
					&nbsp;&nbsp;&nbsp;&nbsp;{{x.Title}}</h5><br>
				<table class="table table-striped table-bordered table-responsive">
					<thead class="table-dark">
						<tr>
							<th scope="col">Sr.No.</th>
							<th scope="col">Particulars</th>
							<th scope="col">Details</th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="x in research2">
							<th scope="row">1</th>
							<td><b>Name Of The Scheme</b></td>
							<td><b>{{x.Name_Of_Scheme}}</b></td>
						</tr>
						<tr ng-repeat="x in research2">
							<th scope="row">2</th>
							<td><b>Year Of Inception</b></td>
							<td><b>{{x.Year_Of_Inception}}</b></td>
						</tr>
						<tr ng-repeat="x in research2">
							<th scope="row">3</th>
							<td><b>Mandates</b></td>
							<td><b>{{x.Mandates}}</b></td>
						</tr>
						<tr ng-repeat="x in research2">
							<th scope="row">4</th>
							<td><b>Name Of The Officer/In Charge</b></td>
							<td><center><img src="{{baseUrl}}{{x.Image}}" class="d-block" alt="..."
									style="height:150px; width:130px;"><br><b>{{x.Name_Of_Officer}}<br>
								{{x.Post_Of_Officer}}<br>
								Mobile:{{x.Mobile}}&nbsp;
								Email: {{x.Email}}</b></center></td>
						</tr>
						<tr ng-repeat="x in research2">
							<th scope="row">5</th>
							<td><b>Supporting Staff</b></td>
							<td><b>{{x.Supporting_Staff}}</b></td>
						</tr>
						<tr ng-repeat="x in research2">
							<th scope="row">6</th>
							<td><b>Ongoing Experiments</b></td>
							<td><b>{{x.Ongoing_Experiments}}</b></td>
						</tr>
						<tr ng-repeat="x in research2">
							<th scope="row">7</th>
							<td><b>Recommendations</b></td>
							<td><b>{{x.Recommendation}}</b></td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
	</div>
</div>
</div>

<div class="row mb-12 container-fluid">


	<!-- Modal -->
	<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
			<div class="modal-content">

				<div class="modal-header">

					<h4 class="modal-title" id="exampleModalLongTitle"><b>&nbsp;&nbsp;&nbsp;&nbsp;Training</b></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5 class="modal-title" id="exampleModalLongTitle" ng-repeat="x in training2">
						&nbsp;&nbsp;&nbsp;&nbsp;{{x.TITLE}}</h5><br>
					<table class="table table-striped table-bordered table-responsive">
						<thead class="table-dark">
							<tr>
								<th scope="col">Sr.No.</th>
								<th scope="col">Particulars</th>
								<th scope="col">Details</th>
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat="x in training2">
								<th scope="row">1</th>
								<td><b>Name Of The Scheme</b></td>
								<td><b>{{x.NAME_OF_SCHEME}}</b></td>
							</tr>
							<tr ng-repeat="x in training2">
								<th scope="row">2</th>
								<td><b>Year Of Inception</b></td>
								<td><b>{{x.YEAR_OF_INCEPTION}}</b></td>
							</tr>
							<tr ng-repeat="x in training2">
								<th scope="row">3</th>
								<td><b>Mandates</b></td>
								<td><b>{{x.MANDATES}}</b></td>
							</tr>
							<tr ng-repeat="x in training2">
								<th scope="row">4</th>
								<td>Name Of The Officer/In Charge</b></td>
								<td><center><img src="{{baseUrl}}{{x.IMAGE}}" class="d-block" alt="..."
										style="height:150px; width:130px;"><br><b>{{x.NAME_OF_OFFICER}}<br>
									{{x.POST_OF_OFFICER}}<br>
									Mobile:{{x.MOBILE}}&nbsp;
									Email: {{x.EMAIL}}</b></center></td>
							</tr>
							<tr ng-repeat="x in training2">
								<th scope="row">5</th>
								<td><b>Supporting Staff</b></td>
								<td><b>{{x.SUPPORTING_STAFF}}</b></td>
							</tr>
							<tr ng-repeat="x in training2">
								<th scope="row">6</th>
								<td><b>Students Trained</b></td>
								<td><b>{{x.STUDENTS_TRAINED}}</b></td>
							</tr>
							<tr ng-repeat="x in training2">
								<th scope="row">7</th>
								<td><b>Intake Capacity Of Student/Year</b> </td>
								<td><b>{{x.INTAKE_CAPACITY}}</b></td>
							</tr>
							<tr ng-repeat="x in training2">
								<th scope="row">8</th>
								<td><b>Syllabus Details</b></td>
								<td><b>{{x.SYLLABUS}}</b></td>
							</tr>
							<tr ng-repeat="x in training2">
								<th scope="row">9</th>
								<td><b>Publications</b></td>
								<td><b>{{x.PUBLICATION}}</b></td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</div>
<!--footer starts from here-->
<footer class="footer">
	<div class="container bottom_border">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6 col">
				<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
				<!--headin5_amrc-->
				<div class="footer-logo">
					<a href="#"><img src="<?php echo base_url('images/footer-logo.png') ?>" alt="" /></a>
				</div>
				<p class="mb10"> </p>
				<p><i class="fa fa-location-location"></i> Zonal Agricultural Research Station, Botanical Garden, Aundh
					Rd, Ganeshkhind, Pune - 411 067.
				</p>
				<p><i class="fa fa-phone"></i> 020-2569 3750</p>
				<p><i class="fa fa-phone"></i> 020-2569 8734</p>
				<p><i class="fa fa-phone"></i> 020-2569 7460</p>
				<p><i class="fa fa fa-envelope"></i> zars_gkpune@rediffmail.com </p>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col">
				<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
				<!--headin5_amrc ends here-->
				<ul class="footer_ul2_amrc">
					<li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
					<li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
					<li><a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
					<li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
					<li><a href="#"><i class="fab fa-youtube"></i> YouTube</a></li>
					<li><a href="#"><i class="fab fa-google"></i> Google</a></li>

				</ul>
				<!--footer_ul2_amrc ends here-->
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
				<!--headin5_amrc-->
				<ul class="footer_ul_amrc">
				<li><a href="<?php echo base_url('index.php/Welcome') ?> ">Home</a></li>
					<li><a href="<?php echo base_url('index.php/AboutUs') ?>">About Us</a></li>
					<li><a href="<?php echo base_url('index.php/Administration') ?>">Administration </a></li>

					<li><a href="<?php echo base_url('index.php/Achievements') ?>">Achievements</a></li>
					<li><a href="<?php echo base_url('index.php/Nursery') ?>">Nursery</a></li>
					<li><a href="<?php echo base_url('index.php/Gallery') ?>">Photo Gallery</a></li>
					<li><a href="<?php echo base_url('index.php/Contact') ?>">Contact us</a></li></ul>
				<!--footer_ul_amrc ends here-->
			</div>
		</div>
	</div>
	</div>
	<div class="container">
		<p class="copyright text-center">All Rights Reserved. &copy; 2023 <a href="#">ZARS Zonal Agricultural Research
				Station </a> Design By :
			<a href="https://www.dnyano.com/"> Dnyano Global IT Solutions</a>
		</p>
	</div>
</footer>
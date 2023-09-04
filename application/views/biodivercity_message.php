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

		<h1 class="mt-4 mb-3">Biodiversity Heritage <small>Biodiversity</small> </h1>
	</div>
</div>
<!-- Page Content -->
<div class="container">
	<div class="breadcrumb-main">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active">Biodiversity</li>
		</ol>
	</div>
	<!-- About Content -->
	<div class="about-main">
		<div class="row">

			<div class="col-lg-12">
				<center> <img src="<?php echo base_url('images/bio.jpg') ?>" alt="" style="width:100%;" /></center>
			</div>
			<br>

			<div class="container
	  "> <br><br>
				<h2>Biodiversity Heritage Site, Zonal Agricultural Research Station, Pune</h2>
				<p align="justify">The Ganeshkhind Garden at Zonal Agricultural Research
					Station Campus of the Mahatma Phule Krishi Vidyapeeth is located in
					western part of Pune city, adjacent to the Savitribai Phule University
					of Pune campus. The research station is spread over an area of 56.72
					hectares. The area of the station is divided into several blocks and
					inhabiting a mixture of both natural vegetation and a large germplasm
					collection of horticultural crops. The orchard plantations comprise
					of mango, guava, cashew, jackfruit, aonla, pomegranate, papaya, sweet
					orange, kagzi lime, etc. The botanical Garden at Ganeshkhind was started
					in 1873, and along with the Hivra Garden had since been under the superintendence
					of Dr. G.M. Woodrow. The principal object of this garden was to supply
					the Medical Department with drugs. However, it appears to have existed
					prior to the above-mentioned period, dating back as far as the pre-British
					period (1796-1818). Its antiquity can, to a certain extent, be learned
					from the old mango trees said to have been planted by Bajirao Peshwa,
					on the banks of Mula River. The one huge tree of this famous plantation
					still exists in the garden (Deokar 1994, Anon 1883: Gazatteer). The
					Campus at Ganeshkhind Garden is a green area i.e. lung of Pune city
					and in the year 2020 is declared as a Biodiversity Heritage Site, <strong>vide
						GR No. WLP.0518/ CR-223/F-1 dated 31.08.2020</strong> by Government
					of Maharashtra. <br>
					<br> The Biodiversity Heritage Site contains 165 wild plants, 48 medicinal plants with large amount
					of microflora and fauna etc.<br>
					<br>Since the establishment of this center till date, a total of 29 varieties including 9 varieties
					of fruit crops, 9 varieties of vegetable crops, 10 varieties of flower crops and 1 of agronomic
					crops have been developed. The seeds and planting material of these varieties have been distributed
					to the farmers and they have been adopted by Maharashtra and surrounding states. Cultivation of
					these developed varieties in large scale has contributed greatly to the development of horticulture
					and production. A total of 139 important recommendations have been developed at this center since
					its inception till date 40 for fruit crops, 15 for vegetable crops, 55 for flower crops and 9 for
					agronomy crops. Due to this, the economic and social status of the farmers increased to a great
					extent.
					Looking to this historical heritage and importance, the Government of Maharashtra has declared this
					Ganeshkhind Garden as Biodiversity Heritage Site, which needs to be conserved, protected and
					maintained.

				</p><br>
				<div class="col-lg-12">
					<center> <img src="<?php echo base_url('images/bio1.jpg') ?>" alt="" style="width:100%;" /> </center>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</div>

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
								<td><b>Name Of The Officer/In Charge</b></td>
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
								<td><b>Intake Capacity Of Student/Year </b></td>
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
		<p class="copyright text-center">All Rights Reserved. &copy; 2023 <a href="#">ZARS Zonal Agriculture Research
				Station </a> Design By :
			<a href="https://www.dnyano.com/"> Dnyano Global IT Solutions</a>
		</p>
	</div>
</footer>
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
               <a class="nav-link" href="<?php echo base_url('index.php/Welcome') ?>">Home</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link active dropdown-toggle" href="about.html" id="navbarDropdownAbout"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAbout">
                  <a class="dropdown-item" href="<?php echo base_url('index.php/AboutUs') ?>">About us</a>
                  <a class="dropdown-item" href="<?php echo base_url('index.php/History') ?>">History</a>
                  <a class="dropdown-item" href="<?php echo base_url('index.php/Biodivercity') ?>">Biodiversity</a>
                  <a class="dropdown-item" href="<?php echo base_url('index.php/Administration') ?>">Administration</a>
                  <a class="dropdown-item" href="<?php echo base_url('index.php/Achievements') ?>">Achievements</a>
                  <!--a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a-->
               </div>
            </li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownResearch" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Research
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownResearch">
                  <a class="dropdown-item" href="" ng-repeat="x in tcCmsGetImages" ng-click="res(x.Id)">{{x.Title}}</a>
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
               <a class="nav-link" href="<?php echo base_url('index.php/Gallery') ?>">Gallery</a>
            </li>

            <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('index.php/Contact') ?>">Contact</a>
            </li>
         </ul>
      </div>
   </div>
</nav>

<!-- full Title -->
<div class="full-title">
   <div class="container">
      <!-- Page Heading/Breadcrumbs -->

      <h1 class="mt-4 mb-3">About <small>About us</small> </h1>
   </div>
</div>
<!-- Page Content -->
<div class="container">
   <div class="breadcrumb-main">
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="index.html">Home</a>
         </li>
         <li class="breadcrumb-item active">About</li>
      </ol>
   </div>
   <!-- About Content -->
   <div class="about-main">
      <div class="row">

         <div class="col-lg-12">
            <center><img class="img-fluid rounded mb-4" src="<?php echo base_url('images/about-img.jpg') ?>" alt=""
                  style="width:70%;" /> </center>
         </div>

         <div>
            <h2>About Zonal Agricultural Research Station, Pune</h2>
            <p class="card-text" align="justify">
               <font face="Arial, Helvetica, sans-serif">The Western
                  Maharashtra Plain zone is a wider strip running parallel to the eastern
                  side of Sub-montane zone and extends towards east up to the line where
                  Scarcity Zone starts. The zone includes 42 tehsils of 8 districts (Dhule,
                  Nandurbar, Ahmednagar, Sangli, Nasik, Pune, Satara and Kolhapur), totally
                  or part thereof. Plain Zone constitutes 14.51 per cent of the total
                  geographical area of Mahatma Phule Krishi Vidyapeeth. The soils of the
                  zone are predominantly shallow to medium deep and mostly suitable for
                  kharif crops. The zone receives an annual rainfall of 700 to 1250 mm.
                  The area under irrigation is only 13 per cent, out of which 43 per cent
                  area is under canal and remaining under well irrigation.</font>
            </p>
            <p class="card-text" align="justify"><strong>Zonal Agricultural Research Station, Ganeshkhind,
                  Pune </strong></p>
            <p class="card-text" align="justify">Ganeshkhind Botanical Garden is one of the oldest premier
               Horticultural Institution of India. It's origin dates back to the Pre-British
               period between 1796-1818, when Bajirao Peshwa planted large number of
               mango trees on the bank of the Mula river. Ganeshkhind Botanical Garden
               was originally started by the "Royal Horticultural Society of India",
               Calcutta in the year 1853 and in 1863. This garden has an unique honour
               of contributing various finding in the field of economic botany. Simultaneously,
               important investigations were carried out on the use of various medicinal
               plants including extraction of the drug principles by the Medical Department.
               Later on, it was sold away to the Government of Bombay. Under the guidance
               of the well-known Botanist, Sir, G.M.Woodrow, the garden was established
               in the year 1873, as centre for taxonomic studies. Simultaneously, important
               investigations were carried out on the use of various medicinal plants
               including extraction of the drug principles by the Medical Department.
               Later on activities lead to the establishment of a nursery for the production
               of various types of plants. It was in recognition of the work par excellence,
               the garden was recognised in 1878-79 as the Chief Botanical Garden of
               the then Bombay Presidency. Since then attention was primarily concentrated
               on the collection of various botanical species and their scientific
               investigations. The garden was under the Agro-Horticultural Society
               of Western India for some time. In 1901, the Department of Agriculture,
               Bombay State took possession of the garden and initiated research on
               the botanical aspects of several economically important plants. In 1903,
               the Economic Botanist to the Govt. of Bombay Presidency took over the
               charge of the Botanical Garden. From 1909 to 1920, regular and systematic
               investigations on various fruit crops were also undertaken by the Economic
               Botanist, College of Agriculture, Pune. With the inception of the Horticulture
               Section, Department of Agriculture in 1921, this institution was attached
               to it and since then it has assumed Horticultural importance. In 1982,
               with addition of staff, it attained a status of Regional Fruit Research
               Station (RFRS), of the Maharashtra State. Under the National Agricultural
               Research Project initially financed by the World Bank through the ICAR,
               a Zonal Agricultural Research Station was established at this station
               in 1986 to carry out the research on various aspects on agro-climatic
               basis of the Plain Zone. </p>

            <br>

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
            <p><i class="fa fa-location-location"></i> Zonal Agricultural Research Station, Botanical Garden, Aundh Rd,
               Ganeshkhind, Pune - 411 067.
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
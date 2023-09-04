<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="<?php echo base_url('images/logo.png') ?>" alt="logo" class="img-fluid" />
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
      data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="fas fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url('index.php/Welcome') ?> ">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="about.html" id="navbarDropdownAbout" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">About</a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAbout">
            <a class="dropdown-item" href="<?php echo base_url('index.php/AboutUs') ?> ">About Us</a>
            <a class="dropdown-item" href="<?php echo base_url('index.php/History') ?> ">History</a>
            <a class="dropdown-item" href="<?php echo base_url('index.php/Biodivercity') ?> ">Biodiversity</a>
            <a class="dropdown-item" href="<?php echo base_url('index.php/Administration') ?> ">Administration</a>
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
          <a class="nav-link" href="<?php echo base_url('index.php/Gallery') ?> ">Gallery</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url('index.php/Contact') ?> ">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- full Title -->
<div class="full-title">
  <div class="container">
    <!-- Page Heading/Breadcrumbs -->

    <h1 class="mt-4 mb-3">Contact <small>Contact us</small> </h1>
  </div>
</div>

<!-- Page Content -->
<div class="container">
  <div class="breadcrumb-main">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Contact</li>
    </ol>
  </div>

  <!-- Content Row -->
  <div class="row">
    <!-- Map Column -->
    <div class="col-lg-8 mb-4">
      <!-- Embedded Google Map -->
      <div class="embed-responsive embed-responsive-16by9">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.259951814098!2d73.82266037400414!3d18.562315582539323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf4f5b3b1075%3A0xe3d388cfd3976ac8!2sZonal%20Agricultural%20Research%20Centre!5e0!3m2!1sen!2sin!4v1687147320654!5m2!1sen!2sin"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <!-- Contact Details Column -->
    <div class="col-lg-4 mb-4 contact-right">
      <h3>Contact Details</h3>
      <p>
      <h4>Zonal Agricultural Research Station, Pune</h4>
      Aundh Khadki road, Near IUCAA gate,
      <br>Botanical Garden, Ganeshkhind, Pune, Maharashtra 411067
      <br>
      </p>
      <p>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" fill="currentColor" class="bi bi-telephone-fill"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
        </svg>: 020-2569 3750<br>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" fill="currentColor" class="bi bi-telephone-fill"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
        </svg>: 020-2569 8734<br>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" fill="currentColor" class="bi bi-telephone-fill"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
        </svg>: 020-2569 7460<br>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" fill="currentColor" class="bi bi-telephone-fill"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
        </svg>: 020-2999 9067
      </p>
      <p>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at"
          viewBox="0 0 16 16">
          <path
            d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
          <path
            d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
        </svg>:
        <a href="mailto:zars_gkpune@rediffmail.com"> zars_gkpune@rediffmail.com
        </a>
      </p>
      <p>

    </div>
  </div>
  <!-- /.row -->

  <!-- Contact Form -->
  <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <div class="row">
    <div class="col-lg-8 mb-4 contact-left">
      <h3>Send us a Message</h3>

      <form name="sentMessage" id="contactForm" novalidate>
        <div class="control-group form-group">
          <div class="controls">
            <label>Full Name:</label>
            <input type="text" class="form-control" id="name" ng-model="cname" required
              data-validation-required-message="Please enter your name." placeholder="Enter Full Name..">
            <p class="help-block"></p>
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Mobile Number:</label>
            <input type="tel" class="form-control" id="phone" ng-model="cphone" required
              data-validation-required-message="Please enter your phone number." placeholder="Enter Mobile Number..">
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Email Address:</label>
            <input type="email" class="form-control" id="email" ng-model="cemail" required
              data-validation-required-message="Please enter your email address." placeholder="Enter Email Address..">
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Message:</label>
            <textarea rows="5" cols="100" class="form-control" id="message" ng-model="cmessage" required
              data-validation-required-message="Please enter your message" maxlength="999"
              style="resize:none" placeholder="Enter Message.."></textarea>
          </div>
        </div>
        <div id="success"></div>
        <!-- For success/fail messages -->
        <button type="submit" class="btn btn-primary" id="sendMessageButton" ng-click="contactus()">Send
          Message</button>
      </form>
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
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
              <td>
                <center><img src="{{baseUrl}}{{x.Image}}" class="d-block" alt="..."
                    style="height:150px; width:130px;"><br><b>{{x.Name_Of_Officer}}<br>
                    {{x.Post_Of_Officer}}<br>
                    Mobile:{{x.Mobile}}&nbsp;
                    Email: {{x.Email}}</b></center>
              </td>
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
                <td>
                  <center><img src="{{baseUrl}}{{x.IMAGE}}" class="d-block" alt="..."
                      style="height:150px; width:130px;"><br><b>{{x.NAME_OF_OFFICER}}<br>
                      {{x.POST_OF_OFFICER}}<br>
                      Mobile:{{x.MOBILE}}&nbsp;
                      Email: {{x.EMAIL}}</b></center>
                </td>
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
					<li><a href="<?php echo base_url('index.php/Contact') ?>">Contact us</a></li> </ul>
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
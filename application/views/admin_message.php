<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
    <div class="container">

        <h2 style="font-family: Times New Roman, Times, serif;"><b>ADMIN PANEL</b></h2>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo base_url('index.php/Welcome') ?>">Home</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('index.php/Admin') ?>">Research</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/AdminTraining') ?>">training</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/AdminContact') ?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/AdminNursery') ?>">Nursery</a>
                </li>
            </ul>
        </div>
    </div>
</nav><br><br><br>
<div class="container">
    <!-- <form>
        <div class="container">
            <h3>ENTER RESEARCH CONTENT</h3><br>
        </div>
        <div style="width:50%;float:center; margin-right:500px;">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>
        <div >
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form> -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->

                <!--/.col (left) -->
                <!-- right column -->
                <!--TABLE START -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header" style="background-color:rgb(87, 82, 149);">
                                    <div style="width:50%;float:left;">
                                        <h2 class="card-title" style="color:white;"><b>Research Table</b></h2>
                                    </div>
                                    <button type="button" ng-click="add()" class="btn" style="float:right;">Add
                                        New</button>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Name_Of_Scheme</th>
                                                <th>Year_Of_Inception</th>
                                                <th>Mandates</th>
                                                <th>Name_Of_Officer</th>
                                                <th>Image</th>
                                                <th>Post_Of_Officer</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Supporting_Staff</th>
                                                <th>Ongoing_Experiments</th>
                                                <th>Recommendation</th>
                                                <th>Edit</th>
                                                <th>Delete</th>


                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <tr ng-repeat="x in tcCmsGetImages">
                                                <td>{{x.Id}}</td>
                                                <td>{{x.Title}}</td>
                                                <td>{{x.Name_Of_Scheme}}</td>
                                                <td>{{x.Year_Of_Inception}}</td>
                                                <td>{{x.Mandates}}</td>
                                                <td>{{x.Name_Of_Officer}}</td>
                                                <td><img src="{{baseUrl}}{{x.Image}}" class="d-block" alt="..."
                                                        style="height:130px; width:200px;">
                                                </td>
                                                <td>{{x.Post_Of_Officer}}</td>
                                                <td>{{x.Mobile}}</td>
                                                <td>{{x.Email}}</td>
                                                <td>{{x.Supporting_Staff}}</td>
                                                <td>{{x.Ongoing_Experiments}}</td>
                                                <td>{{x.Recommendation}}</td>
                                                <td><button type="button" class="btn btn-outline-info"
                                                        ng-click="update(x)">Edit</button></td>
                                                <td><button type="button" class="btn btn-outline-danger"
                                                        ng-click='confirmDelete(x.Id)'>Delete</button></td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>

                <!--TABLE END -->
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>



<div class="row mb-12 container-fluid">


    <!-- Modal -->
    <div class="modal fade" id="research" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title" id="exampleModalLongTitle"><b>&nbsp;&nbsp;&nbsp;&nbsp;Update Research</b>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form id="quickForm">
                        <div class="card-body col-md-12">
                            <div class="col-md-6" style="float:left;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                        ng-model="utitle" placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name of the Scheme</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                        ng-model="uname_of_scheme" placeholder="Enter Name of the Scheme">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Year of Inception</label>
                                    <input type="text" name="password" class="form-control"
                                        ng-model="uyear_of_inception" id="exampleInputPassword1"
                                        placeholder="Enter Year of Inception">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mandates</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" ng-model="umandates"
                                        rows="3" placeholder="Enter Mandates"></textarea>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Name of the Officer</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputPassword1"
                                        ng-model="uname_of_officer" placeholder="Enter Name of the Officer">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Photo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" ng-file='uuploadfiles'
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                file</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Previous Image</label>
                                    <center>
                                        <img src="{{baseUrl}}{{tcCmsImg}}" class="d-block" alt="..."
                                            style="height:130px; width:150px;">
                                    </center>
                                </div>


                            </div>
                            <div class="col-md-6" style="float:right;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Post of the Officer</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                        ng-model="upost_of_officer" placeholder="Enter Post of the Officer ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mobile No.</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputPassword1"
                                        ng-model="umobile" placeholder="Enter Mobile Number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email ID</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                        ng-model="uemail" placeholder="Enter Email Address">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Supporting Staff</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        ng-model="usupporting_staff" rows="4"
                                        placeholder="Enter Supporting Staff Details"></textarea>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ongoing Experiments</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        ng-model="uongoing_experiments" rows="4"
                                        placeholder="Enter Ongoing Experiments"></textarea>


                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Recommendations</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputPassword1"
                                        ng-model="urecommendation" placeholder="Enter No of Recommendations">
                                </div>

                            </div>

                        </div>
                        <!-- /.card-body -->

                    </form>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" ng-click="confirmUpdate()" class="btn btn-primary">Update</button>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row mb-12 container-fluid">


    <!-- Modal -->
    <div class="modal fade" id="addresearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title" id="exampleModalLongTitle"><b>&nbsp;&nbsp;&nbsp;&nbsp;Add Research</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">



                    <form id="quickForm">
                        <div class="card-body col-md-12">
                            <div class="col-md-6" style="float:left;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                        ng-model="title" placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name of the Scheme</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                        ng-model="name_of_scheme" placeholder="Enter Name of the Scheme">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Year of Inception</label>
                                    <input type="text" name="password" class="form-control" ng-model="year_of_inception"
                                        id="exampleInputPassword1" placeholder="Enter Year of Inception">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mandates</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" ng-model="mandates"
                                        rows="3" placeholder="Enter Mandates"></textarea>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Name of the Officer</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputPassword1"
                                        ng-model="name_of_officer" placeholder="Enter Name of the Officer">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Photo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" ng-file='uploadfiles'
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                file</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Post of the Officer</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                        ng-model="post_of_officer" placeholder="Enter Post of the Officer ">
                                </div>

                            </div>
                            <div class="col-md-6" style="float:right;">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mobile No.</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputPassword1"
                                        ng-model="mobile" placeholder="Enter Mobile Number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email ID</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                        ng-model="email" placeholder="Enter Email Address">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Supporting Staff</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        ng-model="supporting_staff" rows="4"
                                        placeholder="Enter Supporting Staff Details"></textarea>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ongoing Experiments</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        ng-model="ongoing_experiments" rows="4"
                                        placeholder="Enter Ongoing Experiments"></textarea>


                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Recommendations</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputPassword1"
                                        ng-model="recommendation" placeholder="Enter No of Recommendations">
                                </div>

                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" ng-click='upload()'
                                style="float:right;">Submit</button>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>
</div>

<div id="researchdelete" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <!-- <div class="icon-box">
                    <i class="material-icons">&#xE5CD;</i>
                </div> -->
                <h4 class="modal-title w-100" style="color:black;">Are you sure?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p style="color:black;">Do you really want to delete these records? This process cannot be
                    undone.</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-outline-success" data-dismiss="modal">Cancel</button>
                <button type="button" ng-click="confirmDelete()" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
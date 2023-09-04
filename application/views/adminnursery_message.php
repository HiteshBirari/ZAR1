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
                    <a class="nav-link " href="<?php echo base_url('index.php/Welcome')?>">Home</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="<?php echo base_url('index.php/Admin')?>">Research</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="<?php echo base_url('index.php/AdminTraining')?>">training</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/AdminContact')?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('index.php/AdminNursery')?>">Nursery</a>
                </li>
            </ul>
        </div>
    </div>
</nav><br>
<div class="container">
                <!--TABLE START --><br><br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header" style="background-color:rgb(87, 82, 149);">
                                    <div style="width:50%;float:left;">
                                        <h2 class="card-title" style="color:white;"><b>Nursery Booking Table</b></h2>
                                    </div>
                                    

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Address</th>
                                                <th>Category</th>
                                                <th>Quantity</th>
                                                

                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <tr ng-repeat="x in ndata">
                                                <td>{{x.Id}}</td>
                                                <td>{{x.Name}}</td>
                                                <td>{{x.Mobile}}</td>
                                                <td>{{x.Address}}</td>
                                                <td>{{x.Category}}</td>
                                                <td>{{x.Quantity}}</td>
                                                
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
<!-- DELETE MODAL START-->



<!-- DELETE MODAL END-->
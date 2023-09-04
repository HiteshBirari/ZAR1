<center><div class="col-md-6">
<h2 style="font-family: Times New Roman, Times, serif;"><b>ADMIN LOGIN</b></h2><br>
</div>
<center><div class="col-md-6">
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="float:left;">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" ng-model="lemail" placeholder="Enter Email Address...">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" style="float:left;">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" ng-model="lpass" placeholder="Enter Password...">
  </div>
  <br>
  
  <button type="submit" class="btn btn-primary" ng-click="login()">Login</button>
</form>
</div></center>
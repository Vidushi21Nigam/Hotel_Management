<?php
require('admin/db_config.php');
require('admin/essentials.php'); 
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Taj Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
      </ul>
      <div class="d-flex">
    <button type="button" class="btn btn-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
  Log In
</button>
<button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
  Register
</button>
</div>
    </div>
</div>
</nav>
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form>
      <div class="modal-header d-flex align-items-center">
        <h5 class="modal-title" id="staticBackdropLabel"><i class="bi bi-person fs-3 me-2"></i>User Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" >

  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" >
  </div>
  <div class="d-flex align-items-center justify-content-between">
  <button type="submit" class="btn btn-dark shadow-none">Login</button>
  <a href="javascript:void(0)">Forgot Password?</a>
      </div>
</div>  
</form>
    </div>
  </div>
</div>
<div class="modal fade " id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
        <form>
      <div class="modal-header d-flex align-items-center">
        <h5 class="modal-title" id="staticBackdropLabel"><i class="bi bi-person fs-3 me-2"></i>Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 ps-0">
                    <!-- left side space ps=0 -->
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" >

                </div>
            
            <!-- <div class="row"> -->
                <div class="col-md-6 p-0">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" >

                </div>
                <div class="col-md-6 ps-0 mb-3">
                    <!-- left side space ps=0 -->
                    <label class="form-label">Phone Number</label>
                    <input type="number" class="form-control" >

                </div>
            
            <!-- <div class="row"> -->
                <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Picture</label>
                    <input type="file" class="form-control" >

                </div>
                <div class="col-md-12 p-0 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <textarea class="form-control"  rows="1"></textarea>

                </div>
                <div class="col-md-6 ps-0 mb-3">
                    <!-- left side space ps=0 -->
                    <label class="form-label">Pincode</label>
                    <input type="number" class="form-control" >

                </div>
            
            <!-- <div class="row"> -->
                <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" >
                </div>
                <div class="col-md-6 ps-0 mb-3">
                    <!-- left side space ps=0 -->
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" >

                </div>
            
            <!-- <div class="row"> -->
                <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" >

                </div>
            </div>
        </div>
        <div class="text-center">
    <button type="button" class="btn btn-dark shadow-none" >  Register
</button>
        </div>
  <!-- <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" >

  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" >
  </div>
  <div class="d-flex align-items-center justify-content-between">
  <button type="submit" class="btn btn-dark shadow-none">Login</button>
      </div> -->
</div>   
</form>
    </div>
  </div>
</div>
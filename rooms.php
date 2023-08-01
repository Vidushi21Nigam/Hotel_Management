<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,intial-scale=1.0">
        <title>Taj Hotel_Rooms</title>
        <?php require("links.php")?> 
        <style>
     
        </style>
      </head> 
    
        <body class="bg-light">
          <?php require("header.php")?> 
     <div class="my-5 px-4">
<h2 class="fw-bold text-center" >ROOMS</h2>

<div class="h-line bg-dark"></div>
 
</div>    
<div class="container">
     <div class="row">
      <div class="col-lg-3">
     <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4>FILTERS</h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
     <div class="border bg-light p-3 rounded mb-3">
<h5 class="mb-3" style="font-size: 18px;">CHECK AVAILIBILITY</h5>
<label class="form-label"style="font-weight: 500; ">Check-in</label>
<input type="date" class="form-control mb-3" >
<label class="form-label"style="font-weight: 500; ">Check-out</label>
<input type="date" class="form-control" >  

</div>
<div class="border bg-light p-3 rounded  mb-3">
<h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
<div class="mb-2">
<input type="checkbox" id="f1" class="form-check-input mb-3 me-1" >
<label class="form-check-label" for="f1">Facility 1</label>

</div>  
<div class="mb-2">
<input type="checkbox" id="f2" class="form-check-input mb-3 me-1" >
<label class="form-check-label" for="f2">Facility 2</label>

</div>  
<div class="mb-2">
<input type="checkbox" id="f3" class="form-check-input mb-3 me-1" >
<label class="form-check-label" for="f3">Facility 3</label>

</div> 
</div> 
<div class="border bg-light p-3 rounded  mb-3">
<h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
<div class="d-flex">
<div class="me-3">
<label class="form-label">Adults</label>
<input type="number" class="form-control mb-3" >
</div>
<div>
<label class="form-label">Children</label>
<input type="number" class="form-control mb-3" >
</div>
</div>
</div>
    </div>
</nav>      
     </div>
     <div class="col-lg-9 col-md-12 px-4">
     <div class="card mb-3 border-0 shadow" >
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
      <img src="images/rooms/2.png" class="img-fluid rounded me-4  w-100" >
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 ">
    <h5 class="mb-2">Simple Room Name</h5>
    <div class="features mb-3">
 <h6  class="mb-1">Features</h6>
<span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">2 Bathroom</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
</div>  
<div class="facilities mb-3">
  <h6  class="mb-1">Facilities</h6>
  <span class="badge rounded-pill bg-light text-dark text-wrap">WiFi</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
</div>
<div class="guests">
  <h6  class="mb-1">Guests</h6>
  <span class="badge rounded-pill bg-light text-dark text-wrap">3 Adults</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">2 Children</span>

</div>
  </div>
    <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
     <h6 class="mb-4">₹200 per night</h6>
     <a href="#" class="btn btn-sm w-100 text-white custom-bg mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark ">More details</a>  
    </div>
    
  </div>
</div>
<div class="card mb-3 border-0 shadow" >
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
      <img src="images/rooms/1.jpg" class="img-fluid rounded me-4  w-100" >
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 ">
    <h5 class="mb-2">Simple Room Name</h5>
    <div class="features mb-3">
 <h6  class="mb-1">Features</h6>
<span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">2 Bathroom</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
</div>  
<div class="facilities mb-3">
  <h6  class="mb-1">Facilities</h6>
  <span class="badge rounded-pill bg-light text-dark text-wrap">WiFi</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
</div>
<div class="guests">
  <h6  class="mb-1">Guests</h6>
  <span class="badge rounded-pill bg-light text-dark text-wrap">3 Adults</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">2 Children</span>

</div>
  </div>
    <div class="col-md-2 text-center">
     <h6 class="mb-4">₹200 per night</h6>
     <a href="#" class="btn btn-sm w-100 text-white custom-bg mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark ">More details</a>  
    </div>
    
  </div>
</div>
<div class="card mb-3 border-0 shadow" >
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
      <img src="images/rooms/3.png" class="img-fluid rounded me-4  w-100" >
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 ">
    <h5 class="mb-2">Simple Room Name</h5>
    <div class="features mb-3">
 <h6  class="mb-1">Features</h6>
<span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">2 Bathroom</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
</div>  
<div class="facilities mb-3">
  <h6  class="mb-1">Facilities</h6>
  <span class="badge rounded-pill bg-light text-dark text-wrap">WiFi</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
</div>
<div class="guests">
  <h6  class="mb-1">Guests</h6>
  <span class="badge rounded-pill bg-light text-dark text-wrap">3 Adults</span>
<span class="badge rounded-pill bg-light text-dark text-wrap">2 Children</span>

</div>
  </div>
    <div class="col-md-2 text-center">
     <h6 class="mb-4">₹200 per night</h6>
     <a href="#" class="btn btn-sm w-100 text-white custom-bg mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark ">More details</a>  
    </div>
    
  </div>
</div>



     </div>
     
</div>
</div>
<!-- FOOTER -->
<?php require("footer.php")?> 

</body>
</html>
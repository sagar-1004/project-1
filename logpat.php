<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Health Care Doc</title>
   
    <style>
      div.logpattop{
        background-color: darkgray;
      }
    </style>
  </head>
  <body>
    <script>
      document.getElementsByTagName("h1")[0].style.border="5px solid white";
    </script>
    <h1 class="bg-info text-white">HealthCare Managment</h1>


<header>
    <!--NAVIGATION BAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                  <img src="logo0.png" alt="" width="60" height="48" class="d-inline-block align-text-top">
                  Health Care Doc
                </a>
              </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link " aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link " href="about.html">About</a>
              </li>
             
              <li class="nav-item active">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="hospital.html">Hospitals</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="patienthistory.html">Patient History</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="insurance.html">Insurances</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="ambulancenearme.html">Ambulance Near Me</a></li>
                </ul>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>
    </header>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <br>
    <!--logpat top-->
 <div class="logpattop">
   <div class="breadcrumps-section">
     <div class="container my-4row">
       <div class="col-md-12">
         <h2>Log-in/Sign-up for Patient</h2>
         <ol class="breadcrumb">
           <li class="breadcrumb-items"><a href="index.html" class="text-dark">Home</a></li>
           <li class="breadcrumb-items active"> >Log in as patient</li>
         </ol>
       </div>
     </div>
   </div>
 </div>
 <!--loghostop top finish-->
      <!--logmid-->
      <form action="send_msg.php" method="post">
      <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row"> <img src="pat.png" class="logo"> </div>
                        
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row mb-4 px-3">
                       
                       
                            <div class="mb-0 text-sm "><h5>Enter Mobile number</h5> </div>
                          </label> <input class="mb-4" type="text" name="mobile" placeholder="Enter mobile Number"> </div>
                    
                    
                        <div class="row mb-3 px-3"> 
                          <button type="submit" class="btn btn-dark p-md-1" name=send_msg value="otp" ><h5 class="text-white">Procced</h5></button> </div>

                

                        <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger " href="signpat.php">Sign-up here</a></small> </div>
                    </div>
                </div>
            </div>
            <div class="bg-blue py-4">
  
            </div>
        </div>
    </div>
  </form>

    <!-- Footer -->
<footer class="page-footer font-small bg-info pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center p-md-3">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3">

        <!-- Content -->
        <a class="nav-link text-white" href="index.html">
          <img src="logo0.png" alt="" width="60" height="48">
          Health Care Doc
        </a>
        <p>It is often said that nothing happens unless there is a dream first. At the genesis of the HealthCare Managment System story, there was a dream. A dream so powerful, that it helped transform the medical landscape in India.We Are Providing You Data of Your Medical History.<br>Join Us And Grow More.<a href="#">Read More</a></p>
        <a href="#"></a><i class="fab fa-facebook-square"></i></a>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3">
         <div class="text-right">
        <!-- Links -->
        <h5 class="text-white">Important Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="privacypolicy.html" class="text-dark" >Privacy Policy</a>
          </li>
          <li>
            <a href="reviews.html" class="text-dark">Reviews</a>
          </li>
          <li>
            <a href="contact.html" class="text-dark">Contacts</a>
          </li>
          <li>
            <a href="socialmedia.html" class="text-dark">Social Media</a>
          </li>
        </ul>
      </div>
      </div>
      <div class="col-md-3">
        <h5 class="text-white">Our Services</h5>
        <ul class="list-unstyled">
          <li>
            <a href="hospital.html" class="text-dark" >Hospitals</a>
          </li>
          <li>
            <a href="patienthistory.html" class="text-dark">Patient History</a>
          </li>
          <li>
            <a href="insurance.html" class="text-dark">Insurance</a>
          </li>
          <li>
            <a href="ambulancenearme.html" class="text-dark">Ambulance Near you</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="text-white">Reach Us</h5>
        <ul class="list-unstyled">
          <li>
            <a class="p1 text-dark" href="tel:+919322348443" ><i class="fas fa-mobile-alt"></i>+91-9322348443</a>
          </li>
          <li>
            <a href="#!" class="p1 text-dark">HealthCare@gmail.com</a>
          </li>
         
        </ul>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
     
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  



  </div>    
  
    <!-- Copyright -->
    <div class="container-fluid bg-dark text-white text-center py-3">?? 2021 Copyright:
      <a href="https://mdbootstrap.com/"> HealthCare Managment</a>
    </div>
    <!-- Copyright -->
  
  </footer>
</div>
  <!-- Footer -->
  </body>
</html>

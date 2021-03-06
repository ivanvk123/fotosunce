<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Foto sunce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="footer.css" > 
  <link rel="stylesheet" href="style.css" >
  <link rel="stylesheet" href="style.css"  type="text/css">
</head>


<body>

    
    <div id="preloder">
        <div class="loader"></div>
    </div>
        
    <div id="myCarousel" class="carousel slide">
  
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li class="item1 active"></li>
          <li class="item2"></li>
          <li class="item3"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="slike/foto_sunce1.jpg" >
          </div>
          <div class="carousel-item">
            <img src="slike/foto_sunce2.jpg" >
          </div>
          <div class="carousel-item">
            <img src="slike/foto_sunce3.jpg" >
          </div>
        </div>
        
        <div class="carousel-caption d-none d-md-block">
            <h3>FOTO SUNCE</h3>
            <p><em>We love capturing people's emotions!</em></p>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
      </div>

    <?php
    include("navbar.php");
    ?>

  <br></br>
 
      <div class="container-fluid text-center">
        <div class="row">
          <div class="col-sm-12">
            <h2>Foto Sunce</h2>
            <h4>Kreireamo uspomene</h4>
            <p>S vama još od 1994. god.</p>
           <!--Ovdje dodati instagram i fejs-->
          </div>
        </div>
      </div>

 <br></br>
 <br></br>




 <section class="services-section spad">
  <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="services-item">
                  <img src="services/service-2.jpg" alt="">
                  <h3>Shooting</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                      magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="services-item">
                  <img src="services/service-1.jpg" alt="">
                  <h3>Videos</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                      magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="services-item">
                  <img src="services/service-3.jpg" alt="">
                  <h3>Editing</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                      magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
              </div>
          </div>
      </div>
  </div>
</section>


 <div class="container">
  <div class="center">
    <div class="button">Galerija</div>
  </div>
</div>
 
 
 <br></br>


 <div class="caption d-none d-md-block">
  <p><h3><em>Ljubav prema fotografiji prenosi se s koljena na koljeno.</em></h3></p>
</div>

<br></br><br></br>

<!--DODATI BUTTON ZA PITANJA-->


<footer class="container-fluid bg-grey py-5">
  <div class="container">
     <div class="row">
        <div class="col-md-6">
           <div class="row">
              <div class="col-md-6 ">
                 <div class="logo-part">
                    <h3>Foto Sunce</h3>
                    <br></br>
                    <p>J.J. Strossmayera 102, vl. Ivanka Popic</p>
                    <br></br>
                    <p>RADNO VRIJEME:</p>
                    <p>pon-pet: 8:00-16:00</p>
                    <p>sub: 8:00-13:00</p>
                 </div>
              </div>
              <div class="col-md-6 px-4">
                 <h6> O nama</h6>
                 <p>Na usluzi vama od 1994. god., trenutno u Vukovaru.</p>
                 <a href="#" class="btn-footer"> More Info </a><br>
                 <a href="#" class="btn-footer"> Contact Us</a>
              </div>
           </div>
        </div>
        <div class="col-md-6">
           <div class="row">
              <div class="col-md-6 px-4">
                 <h6> Pomoc </h6>
                 <div class="row ">
                    <div class="col-md-6">
                       <ul>
                          <li> <a href="#"> Home</a> </li>
                          <li> <a href="#"> About</a> </li>
                       </ul>
                    </div>
                    <div class="col-md-6 px-4">
                       <ul>
                          <li> <a href="#"> Galerija</a> </li>
                          <li> <a href="#"> FAQ</a> </li>
                       </ul>
                    </div>
                 </div>
                 
              </div>
              <div class="col-md-6 ">
                 <h6> Social</h6>
                 <div class="social">
                    <a href="https://hr-hr.facebook.com/fotosunce"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/fotosunce/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                 </div>
                 <br></br>
                 <p>Uvijek nam se mozete javiti i putem mreza..</p>
                 <br></br>
                 <p> <em>Kontakt telefon: 0981386398</em></p>
              </div>
           </div>
        </div>
     </div>
  </div>
  <div class="Timestamp">
    &copy;
    <span id="copyright">
        <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
    </span>
    Foto Sunce. All rights reserved
</div>
</footer>
 




  <script>


    $(document).ready(function(){
      // Activate Carousel
      $("#myCarousel").carousel({interval: 5000});
        
      // Enable Carousel Indicators
      $(".item1").click(function(){
        $("#myCarousel").carousel(0);
      });
      $(".item2").click(function(){
        $("#myCarousel").carousel(1);
      });
      $(".item3").click(function(){
        $("#myCarousel").carousel(2);
      });
        
      // Enable Carousel Controls
      $(".carousel-control-prev").click(function(){
        $("#myCarousel").carousel("prev");
      });
      $(".carousel-control-next").click(function(){
        $("#myCarousel").carousel("next");
      });
    });
    </script>




</body>
</html>

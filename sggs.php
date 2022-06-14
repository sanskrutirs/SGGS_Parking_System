<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sggs.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://kit.fontawesome.com/f262bb2a7c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>SGGS Parking</title>
    <link rel="icon" href="img/sggs.png">
    <style>
      .theme_btn a .wave:before{
        content: '';
        position: absolute;
        top: -22px;
        left: 0;
        width: 100%;
        height: 22px;
        background: url('img/wave.jpg');
        animation: animate .5s linear infinite;
      }
    </style>
</head>
<body style="background-color: #026dfe;">
     <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top ftco-navbar-light">
          <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="parked.php">Parked Vehicle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vehicle.php">Vehicle Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
              </ul>
            </div>
            <div class="theme_btn">
                <a class="navbar-brand" href="form.php">
                    <span>Enter Now</span>
                    <div class="wave"></div>
                </a>
            </div>
          </div>
        </nav>
        <!-- Full Page Intro -->
        <div class="view" style="background-image: url('img/sggs_img.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;height: 90vh;">
          <!-- Mask & flexbox options-->
          <div class="mask rgba-gradient align-items-center">
            <!-- Content -->
            <div class="container">
              <!--Grid row-->
              <div class="wpb-wrapper">
                  <div class="heading align-center">
                      <img src="img/logooo.png" alt="" width="156" height="122">
                    <h4>Welcome to SGGS Parking</h4>
                  </div>
              </div>

              <div class="large-image-center" data-aos="zoom-in-right" data-aos-delay="400"
              data-aos-duration="1500"> 
                  <img src="img/car-big1.png" class="full-width" alt="animation"> 
                </div>
              <!--Grid row-->
            </div>
            <!-- Content -->
          </div>
          <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
      </header>
      
    <section class="page_footer" id="contact">
        <div class="wpb_wrapper"><hr class="lg"></div>
        <div class="container">
            <div id="contact">
                <div class="paddind">
                    <div class="row text-center padding">
                        <div class="col-12">
                            <h1 style="margin-top: 30px;color: #fff;">CONTACT</h1>
                        </div>
                        <div class="col-12 social padding">
                            <a class="bttn" href="https://www.linkedin.com/in/rajatkotangale"><i class="fa fa-linkedin"></i></a>
                            <a class="bttn" href="mailto:rajatkotangale.13@gmail.com"><i class="fa fa-google"></i></a>
                            <a class="bttn" href="https://www.facebook.com/profile.php?id=100010364774076"><i
                                    class="fa fa-facebook"></i></a>
                            <a class="bttn" href="https://instagram.com/_r_kotangale_?igshid=1fjl8lcgw14td"><i
                                    class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="ds color">
            <div class="container">
                <h4>Developed By</h5>
            <h5>Rajat Kotangale, Sanskruti Sawalkar & Snehal Deshpande</h5>
            <p>@2021-2022</p>
            </div>
        </footer>
    </section>
    

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  


    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span>To Top</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exit Vehicle</title>
    <link rel="icon" href="img/sggs.png">
    <link rel="stylesheet" href="sggs.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f262bb2a7c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top ftco-navbar-light" style="background-color: #000915 !important;">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a class="nav-link" href="sggs.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="parked.php">Parked Vehicle</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="vehicle.php">Vehicle Info</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="sggs.php#contact">Contact</a>
              </li>
            </ul>
          </div>
          <div class="theme_btn">
              <a class="navbar-brand" href="#">
                  <span>Enter Now</span>
                  <div class="wave"></div>
              </a>
          </div>
        </div>
      </nav>
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="img/promo.png" alt="">
                </div>
                <div class="col-6">
                <form align="center" action="" method="POST" data-aos="zoom-in">
                    <?php
                        include("config.php");
                        
                        $ids = $_GET['id'];

                        $showquery = "SELECT * FROM parked WHERE id={$ids}";

                        $showdata = mysqli_query($conn,$showquery);

                        $arrdata = mysqli_fetch_array($showdata);


                        if(isset($_POST['enter'])){
                            $idupdate = $_GET['id'];

                            $name = $_POST['name'];    
                            $vtype = $_POST['vtype'];
                            $vnumber = $_POST['vnumber'];
                            // $entry_date = $_POST['entry_date'];
                            $exit_date = $_POST['exit_date'];

                            // $sql = mysqli_query($conn,"INSERT INTO parked (name,vtype,vnumber) VALUES ('$name','$vtype','$vnumber')") ;

                            $query = mysqli_query($conn, "UPDATE parked SET id=$idupdate, name='$name', vtype='$vtype', vnumber='$vnumber', exit_date='$exit_date' WHERE id=$idupdate ");

                            if ($query) {
                                header('location: parked.php');
                            ?>
                            <script>
                                alert("data updated");
                                header('location: parked.php');
                            </script>
                            <?php
                            } else {
                                ?>
                                <script>
                                    alert("not inserted");
                                </script>
                                <?php
                            }
                        }

                        
                    ?>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control text-black" placeholder="Enter Name.."
                        value="<?php echo $arrdata['name']; ?>" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="vtype" class="form-control text-black" placeholder="Vehicle Type.."
                        value="<?php echo $arrdata['vtype']; ?>" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="vnumber" class="form-control text-black" placeholder="Vehicle Number.."
                        value="<?php echo $arrdata['vnumber']; ?>" required="">
                    </div>
                    
                    <!-- <div class="col-md-6 form-group">
                        <input onfocus="(this.type='datetime-local')" name="entry_date" class="form-control" placeholder="Entry Date" required="">
                    </div> -->
                    <div class="form-group">
                        <input onfocus="(this.type='datetime-local')" name="exit_date" class="form-control" placeholder="Exit Date" required="">
                    </div>
                    
                    <input class="submit_btn" type="submit" name="enter" value="Exit">
                </form>

                </div>
            </div>
            
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            offset: 150,
        });
    </script>
</body>

</html>

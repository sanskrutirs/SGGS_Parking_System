<?php
include("config.php");
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `parked` WHERE CONCAT(`id`, `name`, `vtype`, `vnumber`,`entry_date`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `parked`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost:3307", "root", "", "sggs");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Parked Vehicles</title>
        <link rel="icon" href="img/sggs.png">
        <link rel="stylesheet" href="sggs.css">
        <link rel="stylesheet" href="parked.css">
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
              <li class="nav-item active">
                  <a class="nav-link" href="parked.php">Parked Vehicle </a>
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
              <a class="navbar-brand" href="form.php">
                  <span>Enter Now</span>
                  <div class="wave"></div>
              </a>
          </div>
        </div>
      </nav>
        <div class="container">
            <form action="parked.php" method="post">
                <div class="basic-search">
                    <div class="input-field">
                        <input type="text" name="valueToSearch" placeholder="Search..">
                        <div class="icon-wrap">
                            <input type="submit" class="btn btn-primary" name="search" value="Search">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrap">
                            <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>vtype</th>
                                    <th>vnumber</th>
                                    <th>entry</th>
                                    <th>exit</th>
                                </tr>
                            </thead>

                    <!-- populate table from mysql database -->
                               
                                <?php while($row = mysqli_fetch_array($search_result)):?>
                                <tr>
                                <td><?php echo $row['id']; ?></td>    
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['vtype']; ?></td>
                                <td><?php echo $row['vnumber']; ?></td>
                                <td><?php echo $row['entry_date']; ?></td>
                                <td class="icons">
                                    <a href="exit.php?id=<?php echo $row['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Exit">
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>  
                                    </a> 
                                </td>
                                </tr>
                                <?php endwhile;?>
                            </table>
            </form>
            
    </body>
</html>



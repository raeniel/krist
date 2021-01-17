<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
include_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="tours.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lacquer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Simonetta&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container-fluid" id="navContainer">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand col-md-6" href="travel.html"><img id="logo"src="logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" id="space" href="https://neighborless-accord.000webhostapp.com/travel.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://neighborless-accord.000webhostapp.com/aboutus.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://neighborless-accord.000webhostapp.com/tours.php">Tours</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://neighborless-accord.000webhostapp.com/booknow.php">Book Now</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

    <div class="page-header">
        <div class="container-fluid">
        <div class="row">
          <div class="col-md-6" id="contact">
            <p><i class="fa fa-phone" aria-hidden="true"></i> Globe:09672732501 | 416-0115 | Viber: 09672732501 | Smart 0919336245</p>
          </div>
          <div class="col-md-2" id="time"><p><i class="fa fa-clock-o" aria-hidden="true"></i> 9am to 6pm</p>
          </div>
          <div class="col-md-4" id="media">
           <a href="https://www.facebook.com/Krist-Destination-Travel-Tours-116722553046517/" style="color: white;"><span id="fb" style="color:white;"><i class="fa fa-facebook" aria-hidden="true"></i></span> LIKE US</a>
          </div>
        </div>
      </div>
      </div>


                  <div class="container">
      <?php
      
      echo '<form method="get">
         <input class="form-control col-md-1 col-lg-1 col-sm-1" type="submit" style="float:right"> 
        <input class="form-control col-md-3 col-lg-3 col-sm-3" type="search" placeholder="Search" aria-label="Search" name="textbox" style="float:right">
   
        </form>';
     
      if(!empty($_GET)){
      $textbox = $_GET['textbox'];
      
      
      $mysqli = NEW MySQLi('localhost', 'id12761732_root', 'password', 'id12761732_krist');
      $textboxquery= $mysqli->query("SELECT country,pictures FROM tbl_tourselection WHERE place_specific = '$textbox' OR place_city='$textbox' ");
      }
     
    
    ?>
    </div>

    <div class="container" id="">   
            <h2>Tours</h2>

    </div><br>
    
    <div class="container">
    <div class="row">
      
    <?php
    if(!empty($_GET['textbox'])){
      while (($row = $textboxquery->fetch_assoc())) {
      echo '<div class="card col-md-3" style="width: 18rem;" id="places">
      <img class="card-img-top" src="'.$row['pictures'].'" alt="Card image cap" style="width: 100%; height: 10em; object-fit: cover;">
          <div class="card-body">
          <p class="card-text" id="para">'. $row['country'] .'<hr><a href="" class="btn btn-primary">Button</a>
          </p>
      </div></div>';
    }
  }

    else{
       for($a=$start; $a<count($countries); $a++){
         $count++;
         echo '<div id="divCard'. $a .'" class="card col-md-3" style="width: 18rem;" id="places">
         <img class="card-img-top" src="'.$pics[$a].'" alt="Card image cap" style="width: 100%; height: 10em; object-fit: cover;">
             <div class="card-body">
             <p class="card-text" id="para">'. $countries[$a] .'<hr><a href="'.$hrefs[$a].'" class="btn btn-primary">Button</a>
             </p>
         </div></div>';
         if ($limit == $count) break;
       }
      }
       ?>
       
        </div>
  </div>
<div id="pagination"> 
    <nav id="nav" aria-label="...">
      <ul class="pagination pagination-lg justify-content-center">
        <?php 
        $x=1;
        $act = "active";
        for($b=0; $b<$total_pages; $b++){
          if($page==$x){
            $act = "active";
          }
          else{
            $act="";
          }
          echo '<li class="page-item '.$act.'"><a class="page-link" href="tours.php?page='.$x.'">'.$x.'</a></li>';
          $x++;
      }
        ?>
      </ul>
    </nav>
      </div>
  </div>











      <div class="footer">
        <div class="container">
        <div class="fotter-content">
            <div class="row">
            <div class="footer-section about col-md-4"><img src="logo.png" alt="" style="max-width: 20em; margin-top: 1.5em;"><br><br>
            <p>Krist Destination Travel and Tours offer different services; Domestic and International Tours, Visa Processing, Passport Processing, Hotel Reservations, Travel Consultations, Travel Insurance, Special Tours like Educational Tours and Pilgrimage Tours.</p>
            </div>
            <div class="footer-section links col-md-4" style="margin-top: 1.5em;"><p>CONTACT US</p>
            <p><i class="fa fa-globe" aria-hidden="true"></i> Palo-Alto, Calamba City Laguna</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i> 09060086026</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> kristdestinationtnt@gmail.com</p>
            </div>
            <div class="footer-section contact-form col-md-4" style="margin-top:1.5em">OUR LOCATION</div>
        </div>
        </div>
      </div>
        <div class="footer-bottom">
            &copy; Powered by CPTech
        </div>
      </div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</body>
</html>
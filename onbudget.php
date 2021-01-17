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
    <link rel="stylesheet" href="onbudget.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lacquer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<div class="header fixed-top" style="top: 0px; padding: 20px 20px; border-bottom: 2px solid black;" id="head">
        <div class="container-fluid">
        <div class="row ">
            <div class="col-md-5 d-flex align-items-center">
                <a id="leftNav" href="https://neighborless-accord.000webhostapp.com/toursTab.php" style="padding-right: 80px;">Tours</a>
                <a id="leftNav" href="https://neighborless-accord.000webhostapp.com/booknow.php">Book Now</a>
            </div>
            <div class="col-md-2 col-sm-12 d-flex align-items-center justify-content-center">
                <a href="https://neighborless-accord.000webhostapp.com/travel.html">
                    <img src="whitetry.png" alt="" id="changeLogo">
                </a>
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-end">
                <a id="rightNav" href="https://neighborless-accord.000webhostapp.com/terms.php">Terms and Condition</a>
                <a id="rightNav" href="https://neighborless-accord.000webhostapp.com/faq.html">FAQ</a>
                <a id="rightNav" href="https://neighborless-accord.000webhostapp.com/contactus.php">Contact Us</a>
            </div>
            <div class="dropdown">
                <button id="btnHide" type="button" data-toggle="dropdown"><img src="burgerblack.png" alt="" style="width:15px; height: 12px;"></button>
                  <ul class="dropdown-menu" id="dropdownItems">
                    <li><a style="color:black" href="https://neighborless-accord.000webhostapp.com/toursTab.php">Tours</a></li>
                    <li><a style="color:black" href="https://neighborless-accord.000webhostapp.com/booknow.php">Book Now</a></li>
                    <li><a style="color:black" href="https://neighborless-accord.000webhostapp.com/terms.php">Terms and Condition</a></li>
                    <li><a style="color:black" href="https://neighborless-accord.000webhostapp.com/faq.html">FAQ</a></li>
                    <li><a style="color:black" href="https://neighborless-accord.000webhostapp.com/contactus.php">Contact Us</a></li>
                  </ul>
                  </div>
        
        </div>
        </div>
        </div>
        
        
        <div class="jumbotron jumbotron-fluid d-flex align-items-center" id="subTabJumbo">
    <div class="container d-flex justify-content-around" id="jumbo">
    <a href="https://neighborless-accord.000webhostapp.com/onbudget.php?textbox=on+budget" id="sub">On Budget</a>
    <a href="https://neighborless-accord.000webhostapp.com/philippines.php?textbox=philippines" id="sub">Philippines</a>
    <a href="https://neighborless-accord.000webhostapp.com/asia.php?textbox=asia" id="sub">Asia</a>
    <a href="https://neighborless-accord.000webhostapp.com/europe.php?textbox=europe" id="sub">Europe</a>
    </div>
      </div>


      <div class="container">
      <?php
      
 
      if(!empty($_GET)){
      $textbox = $_GET['textbox'];
      
      
      $mysqli = NEW MySQLi('localhost', 'root', '', 'krist');
      $textboxquery= $mysqli->query("SELECT country,pictures FROM tbl_tourselection WHERE price < 20000.00 OR place_city='$textbox' ");
      }
     
    
    ?>
    </div>

    <div class="container" id="">   
            <h2 id="tours">Tours</h2>

    </div><br>
    
    <div class="container">
    <div class="row">
      
    <?php
    if(!empty($_GET['textbox'])){
      while (($row = $textboxquery->fetch_assoc())) {
      echo '<div class="col-md-4"><div class="card" style="width: 18rem" id="places"><a href="">
      <img class="card-img-top" src="'.$row['pictures'].'" alt="Card image cap" style="width: 100%; height: 10em; object-fit: cover;"></a>
          <div class="card-body">
          <p class="card-text" id="para">'. $row['country'] .'<hr><p>phew phew phew</p><a class="d-flex justify-content-end" href="" style="color: black; text-decoration:none;">View Itinerary<svg width="1em" height="1.7em" viewBox="0 0 16 16" class="bi bi-chevron-double-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
          <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
        </svg></a>
          </p>
      </div></div></div>';
    }
  }

    else{
       for($a=$start; $a<count($countries); $a++){
         $count++;
         echo '<div class="col-md-4"><div id="divCard'. $a .'" class="card" style="width: 18rem" id="places"><a href="">
         <img class="card-img-top" src="'.$pics[$a].'" alt="Card image cap" style=" width: 100%; height: 13em; object-fit: cover;"></a>
             <div class="card-body">
             <p class="card-text" id="para">'. $countries[$a] .'<hr><p>phew phew phew eimi fukuda</p><a class=" d-flex justify-content-end" href="'.$hrefs[$a].'" <a href="" style="color: black; text-decoration:none;">View Itinerary <svg width="1em" height="1.7em" viewBox="0 0 16 16" class="bi bi-chevron-double-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg></a>
             </p>
         </div></div></div>';
         if ($limit == $count) break;
       }
      }
       ?>
       
        </div>
  </div>

  <div class="footer" id="footer1" style="margin-top:150px;">
    <div class="container" id="footCon">
    <div class="row d-flex align-items-center" style="width: 100%;" id="rowFoot">
        <div class="col-md-4 d-flex  justify-content-around">
            <img src="Logo (Home).png" alt="" style="width:100%;">
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-center" style="width: 100%;" id="footerMid">
            <p id="line">CONTACT US<br>
            <i class="fa fa-phone" aria-hidden="true"></i> 09060086026<br>
            <i class="fa fa-envelope" aria-hidden="true"></i> kristdestinationtnt@gmail.com
        </div>
        <div class="col-md-4 d-flex justify-content-center" id="ourLoc" style="width: 100%;">
            <p id="line">Our Location<br>
            <i class="fa fa-globe" aria-hidden="true"></i> Palo-Alto, Calamba City Laguna<br>
            </p>
        </div>
    </div>
</div>
</div>

<div class="footer d-flex justify-content-center align-items-center" id="footer2" style=" width: 100%;">
    <p style="margin: 0 0;">© Powered by CPTech</p>
</div>



<script>
$(function () {
    $(document).scroll(function () {
      var $nav = $("#head");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });
</script>

<script>
    $(function () {
        $(document).scroll(function () {
          var $color = $(".header a");
          $color.toggleClass('scrolled', $(this).scrollTop() > $color.height());
        });
      });
      
</script>

<script>
$(document).ready(function(){
$(this).scrollTop(0);
});
</script>


<script>
$(window).scroll(function () {
    if ($(document).scrollTop() > 0) {
        $("#changeLogo").attr("src", "logotry.png");
    }
    if ($(document).scrollTop() == 0) {
        $("#changeLogo").attr("src", "whitetry.png");
    }
    
}); 
</script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</body>
</html>
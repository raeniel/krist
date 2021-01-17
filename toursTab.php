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
    <link rel="stylesheet" href="toursTab.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lacquer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Simonetta&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@300&display=swap" rel="stylesheet">
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
            <div class="dropdown" style="width:100%;">
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



      <div class="container" id="firstCon">
          <div class="row" style="height:100%;"> 
              <div class="col-sm-6">
              <a href=""><h1 id="text">On Budget</h1></a> 
              </div>          
              
              <div class="col-sm-6">
              <a href="https://neighborless-accord.000webhostapp.com/onbudget.php?textbox=on+budget"><img src="onbudget.jpg" alt="" id="image"></a>
              </div>
          </div>
      </div>

      <div class="container" id="secondCon">
          <div class="row">      
          <div class="col-sm-6">
              <a href="https://neighborless-accord.000webhostapp.com/philippines.php?textbox=philippines"><img src="philippines.jpg" alt="" id="image"></a>
              </div>

              <div class="col-sm-6">
              <a href=""><h1 id="text">Philippines</h1></a> 
          </div>      
          </div>
      </div>

      <div class="container" id="secondCon">
          <div class="row">
              <div class="col-sm-6">
              <a href=""><h1 id="text">Asia</h1></a>
              </div>          
              
              <div class="col-sm-6">
              <a href="https://neighborless-accord.000webhostapp.com/asia.php?textbox=asia"><img src="asia.jpg" alt="" id="image"></a>
              </div>
          </div>
      </div>

      <div class="container" id="secondCon" style="margin-bottom:150px;"> 
          <div class="row">      
          <div class="col-sm-6">
              <a href="https://neighborless-accord.000webhostapp.com/europe.php?textbox=europe"><img src="europe.jpg" alt="" id="image"></a>
              </div>

              <div class="col-sm-6">
              <a href=""><h1 id="text">Europe</h1></a>
          </div>      
          </div>
      </div>







      <div class="footer" id="footer1">
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
$(window).scroll(function () {
    if ($(document).scrollTop() > 0) {
        $("#changeLogo").attr("src", "logotry.png");
    }
    if ($(document).scrollTop() == 0) {
        $("#changeLogo").attr("src", "whitetry.png");
    }
    
}); 
</script>


<script>
$(document).ready(function(){
$(this).scrollTop(0);
});
</script>




<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</body>
</html>
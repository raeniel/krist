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
    <link rel="stylesheet" href="booknow.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lacquer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
	  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.8.2/dist/sweetalert2.all.min.js"></script>
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

      <div class="container">
          <h1 id="top">Book Now</h1>
      </div>

      <div class="container">
          <div class="row">
          <div class="col-md-12">
              <div class="jumbotron" id="jumbotron">
              <p style="margin-top:px;">Select Tour Package</p>

            </div>
            
            <form method="POST" id="form">
            <div class="form-row">
                <div class="col-md-9">
                <label for="">Travel Package*</label>
                <select name="travelpackage" id="travelPack" class="form-control" required>
                <option value="">Select Travel Package</option>
                <?php 
		                    		require 'data.php';
		                    		$travelPack = loadTravel();
		                    		foreach ($travelPack as $travelPacks) {
		                    			echo "<option id='".$travelPacks['travel_id']."' value='".$travelPacks['travel_id']."'>".$travelPacks['package']."</option>";
		                    		}
		                    	 ?>
                </select>
                      </div>
                      <div class="col-md-3">
                  <label for="">Number of Pax</label>
                  <input type="number" class="form-control" name="pax" id="pax" onclick="getValue()" min="0" onchange="getInputValue()">
                  </div>
                </div>
              <br>
              
              <div class="form-row">
                <div class="col-md-9">
                <label for="">Tour Selection*</label><br>
              <select name="tourselection" id="tourSelect" class="form-control" onchange="getCountryValueRaeniel()" required>
                    <option value="">Select Tour</option>
              </select>
                      </div>
                      <div class="col-md-3">
                  <label for="">Number of Days</label>
                  <input type="number" class="form-control" name="dayz">
                  </div>
                </div><br>

                <label for="">Travel Date</label><br>
                <input type="date" name="traveldate" class="form-control col-md-2" id="travelDate" aria-describedby="dateHelp" required><br>
                  <div name="person" id="person"></div>
                            
                
                  <br>
                <input id="btn" type="submit" value="Submit" name="submit">
            </form>

          </div>

      </div>
      </div>

      <div class="footer" id="footer1" style="margin-top: 150px">
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


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script type="text/javascript">

function getValue(){
  var value = document.getElementById("pax").value;
  var div = document.getElementById("person");
  div.innerHTML = '';
  for(i = 0; i<value; i++){
    div.innerHTML += `<label for=''>Email*</label><br><input type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter email' name='email[]' required><br><label for=''>Name*</label><div class='form-row'><div class='col'><input name='firstname[]' type='text' class='form-control' placeholder='First name' required></div><div class='col'><input name='middlename[]' type='text' class='form-control' placeholder='Middle name' required></div><div class='col'><input name='lastname[]' type='text' class='form-control' placeholder='Last name' required><br></div></div></div></div></select><label for=''>Contact Number*</label><br><input type='number' class='form-control' name='contactnumber[]' required><br></select><label for=''>Address*</label><div class='form-row'><div class='col'><input type='text' class='form-control' placeholder='Street' name='street[]' required></div><div class='col'><input type='text' class='form-control' placeholder='City' name='city[]' required></div><div class='col'><input type='text' class='form-control' placeholder='State/Province/Region' name='province[]' required><br></div></div><div class='form-row'><div class='col'><label for=''>ZIP/Postal Code</label><input type='number' class='form-control' name='postal[]' required></div><div class='col'><label for=''>Country</label><select name='country[]' id='' class='form-control' required><option i=''>Select Country</option><?php while($rows = $resultcountry->fetch_assoc()){$country = $rows['country'];echo "<option i='$country'>$country</option>";}?></select></div></div></div><hr style='background-color:#D3D3D3;'>`;
  }
  var body = document.getElementsByTagName('body')[0];
}
</script>

<script type="text/javascript">
$(document).ready(function(){
  $('#travelPack').change(function(){
    var aid = $("#travelPack").val();
    $.ajax({
      url: 'data.php',
      method: 'post',
      data: 'aid=' + aid
    }).done(function(tourSelect){
      console.log(tourSelect);
      tourSelect = JSON.parse(tourSelect);
      $('#tourSelect').empty();
      tourSelect.forEach(function(tourSelects){
        $('#tourSelect').append('<option>' + tourSelects.country + '</option>')
      })
    })
  })
})
</script>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

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
  function getInputValue(){
    var $inputVal = document.getElementById("pax").value;
    console.log($inputVal);
  }
</script>

<script>
  function getCountryValueRaeniel(){
    var $tourS = document.getElementById("tourSelect").value;
    var hehe = "<?php echo getV($mysqli) ?>"
    console.log(hehe);
  }
</script>

</body>
</html>
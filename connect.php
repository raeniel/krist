<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.8.2/dist/sweetalert2.all.min.js"></script>

</html>
<?php
function uniqidReal($lenght = 13) {
    if (function_exists("random_bytes")) {
        $bytes = random_bytes(ceil($lenght / 2));
    } elseif (function_exists("openssl_random_pseudo_bytes")) {
        $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
    } else {
        throw new Exception("no cryptographically secure random function available");
    }
    return substr(bin2hex($bytes), 0, $lenght);
}

if (isset($_POST['submit'])) {
    $booking_id = uniqidReal();
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $country = $_POST['country'];
    $contactnumber = $_POST['contactnumber'];
    $postal = $_POST['postal'];

    foreach ($email as $key => $e) {

        $travelpackage = filter_input(INPUT_POST, 'travelpackage');
        $tourselection = filter_input(INPUT_POST, 'tourselection');
        $dayz = filter_input(INPUT_POST, 'dayz');
        $pax = filter_input(INPUT_POST, 'pax');
        $traveldate = filter_input(INPUT_POST, 'traveldate');

        $host = 'localhost';
        $dbusername = 'root';
        $dbpassword = "";
        $dbname = "krist";


        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


        //Entry of data from textbox
        if (mysqli_connect_error()) {
            die('Connect Error(' . mysqli_connect_error() . ')'
                . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO booknow (booking_id,travelpackage, tourselection,dayz,email,firstname,middlename,lastname,contactnumber, street, city, province, postal ,country,traveldate,pax)
    values ('$booking_id','$travelpackage', '$tourselection','$dayz','$email[$key]', '$firstname[$key]', '$middlename[$key]', '$lastname[$key]','$contactnumber[$key]','$street[$key]', '$city[$key]', '$province[$key]', '$postal[$key]','$country[$key]', '$traveldate' , '$pax')";
            '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo "<script type='text/javascript'>Swal.fire({
                position: 'center',
                icon: 'success',
                html: 'You booked successfully <br> Your booking ID is $booking_id <br> Please take note of this booking ID and wait for our email response. ',
                showConfirmButton: true
                })
            </script>";
            if ($conn->query($sql)) {
                '';
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
    }
}
?>

<?php
$mysqli = new MySQLi('localhost', 'root', '', 'krist');

$resulttravelpackage = $mysqli->query("SELECT package FROM tbl_travelpackage");
$resulttourselect = $mysqli->query("SELECT tourselection FROM tbl_tourselection");
$resultcitizenship = $mysqli->query("SELECT citizenship FROM tbl_citizenship");
$resultcountry = $mysqli->query("SELECT country FROM tbl_country");
$resultdays = $mysqli->query("SELECT dayz FROM tbl_days");

function getV(mysqli $mysqli){
    $resultPriceCountry = $mysqli->query("SELECT price FROM tbl_tourselection WHERE country='Dumaguete'");
    while ($row = mysqli_fetch_array($resultPriceCountry)) {
        $just = $row['price'];
      }
    return $just;
}

$resulthref = $mysqli->query("SELECT href FROM tbl_tourselection");
while ($row = mysqli_fetch_array($resulthref)) {
    $hrefs[] = $row['href'];
}

$resultprice = $mysqli->query("SELECT price FROM tbl_tourselection");
while ($row = mysqli_fetch_array($resultprice)) {
    $prices[] = $row['price'];
}

$resultpictures = $mysqli->query("SELECT pictures FROM tbl_tourselection");
while ($row = mysqli_fetch_array($resultpictures)) {
    $pics[] = $row['pictures'];
}

$resulttourcountry = $mysqli->query("SELECT country FROM tbl_tourselection");
while ($row = mysqli_fetch_array($resulttourcountry)) {
    $countries[] = $row['country'];
    $array = $countries;
}
$count = 0;
$limit = 12;
$total_pages = ceil(count($countries) / $limit);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $limit;
?>
<?php 
	require 'DbConnect.php';
	if(isset($_POST['aid'])) {
		$db = new DbConnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM tbl_tourselection WHERE travel_id = " . $_POST['aid']);
		$stmt->execute();
		$tourSelect = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($tourSelect);
	}

	function loadTravel() {
		$db = new DbConnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM tbl_travelpackage");
		$stmt->execute();
		$travelPack = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $travelPack;
	}

 ?>

 
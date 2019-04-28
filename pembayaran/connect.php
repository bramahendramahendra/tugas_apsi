<?php
    $servername="localhost";
    $username="root";
    $password="";
    $password_1="";
    $password_2="";
    $db="pb_apsi_pembayaran";
		$errors = array();
		session_start();

    //connection with database
    $conn = mysqli_connect($servername,$username,$password,$db) or die("Koneksi database gagal");

    //function validate input
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
    }
	
		//when topup button submited
	if(isset($_POST['topup'])){
		$student_id = test_input($_POST['student']);
		$wallet = test_input($_POST['wallet']);
		$query=" UPDATE `student` SET `wallet`= `wallet` + $wallet WHERE student_id = $student_id ";
		$result= mysqli_query($conn, $query) or die("Errors: ".mysqli_error()." on query");
			header('location: pembayaran.php');
		}
	
		//when paket button submited
		if(isset($_POST['paket'])){
			$student_id = test_input($_POST['student']);
			$paket = test_input($_POST['tipe']);
			$tanggal = test_input($_POST['tanggal']);
			$query="SELECT * FROM `student` WHERE `student_id` = $student_id";
			$result= mysqli_query($conn,$query) or die("ERROR :".mysqli_error()." on query");
			$row=mysqli_fetch_array($result);
			if ($row['Wallet']-$paket >= 0){
			$query="INSERT INTO `pembayaran` (`student_id`,`tanggal`,`pembayaran`) VALUES ('$student_id','$tanggal','$paket')";
			$result= mysqli_query($conn, $query) or die("Errors: ".mysqli_error()." on query");
			$query=" UPDATE `student` SET `wallet`= `wallet` - $paket WHERE student_id = $student_id ";
			$result= mysqli_query($conn, $query) or die("Errors: ".mysqli_error()." on query");
				header('location: pembayaran.php');
			}
			else{
				array_push($errors,"Cash tidak mencukupi");
			}
			}	
	
?>	
	

	
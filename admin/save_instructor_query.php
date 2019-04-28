
	<?php
	require_once 'connect.php';
	if(ISSET($_POST['save'])){
		$instructor_no = $_POST['instructor_no'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$course = $_POST['course'];
		$schedule = $_POST['schedule'];
		$section = $_POST['section'];
		$q_checkadmin = $conn->query("SELECT * FROM `instructor` WHERE `instructor_no` = '$instructor_no'") or die(mysqli_error());
		$v_checkadmin = $q_checkadmin->num_rows;
		if($v_checkadmin == 1){
			echo '
				<script type = "text/javascript">
					alert("Barcode is already taken");
					window.location = "instructor.php";
				</script>
			';
		}else{
			$conn->query("INSERT INTO `instructor` VALUES('', '$instructor_no','$firstname', 
		'$middlename', '$lastname', '$course', '$schedule','$section', 'Hadir')") or die(mysqli_error());
						echo '
				<script type = "text/javascript">
					alert("Saved Record");
					window.location = "instructor.php";
				</script>
			';
	}		
	}
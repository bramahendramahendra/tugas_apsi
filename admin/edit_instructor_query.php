<?php
	require_once 'connect.php';
	$instructor_no = $_POST['instructor_no'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$course = $_POST['course'];
	$schedule = $_POST['schedule'];
	$section = $_POST['section'];
	$status = $_POST['status'];
	$conn->query("UPDATE `instructor` SET `instructor_no` = '$instructor_no', `firstname` = '$firstname', `middlename` = '$middlename', `lastname` = '$lastname', `course` = '$course', `schedule` = '$schedule', `section` = '$section', 
		`status` = '$status' WHERE `instructor_id` = '$_REQUEST[instructor_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "instructor.php";
			</script>
		';	
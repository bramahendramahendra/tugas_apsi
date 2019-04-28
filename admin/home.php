<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>ABSENSI BIMBINGAN BELAJAR | Home</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
				<p class = "navbar-text pull-right">ABSENSI BIMBINGAN BELAJAR</p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> <?php echo htmlentities($admin_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li class = "active"><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
	<li class = "dropdown"  >
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#" ><span class = "glyphicon glyphicon-book"></span> Records <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<li><a href = "absent.php">  <span class = "glyphicon glyphicon-user"></span>Absent</a></li>
					</ul>
			</ul>
			<br />
			<div class = "alert alert-info">Home</div>
			<div class = "well col-lg-12">
			<br />
			<h2><a style="text-decoration:none;" href = "admin.php"><span class = "glyphicon glyphicon-apple"></span> Admin</a></h2>
			<br />
			<br />	
			<h2><a style="text-decoration:none;" href = "instructor.php"><span class = "glyphicon glyphicon-book"></span> Instructor</a></h2>
			<br />
			<br />	
			<h2><a style="text-decoration:none;" href = "student.php"><span class = "glyphicon glyphicon-book"></span> Students</a></h2>
			<br />
			<br />	
			<h2><a style="text-decoration:none;" href = "calendar.php"><span class = "glyphicon glyphicon-calendar"></span> Class</a></h2>
			<br />
			<br />	
			<h2><a style="text-decoration:none;" href = "penggajian/index.php"><span class = "glyphicon glyphicon-calendar"></span> Penggajian</a></h2>
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid"style="margin-top:15px;">
				<label class = "pull-left">&copy; ABSENSI BIMBINGAN BELAJAR <?php echo date("Y");?></label>
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	
</html>
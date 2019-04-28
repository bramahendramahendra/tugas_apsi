<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>ABSENSI BIMBINGAN BELAJAR| Instructor Record</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		<link rel = "stylesheet" href = "css/jquery.dataTables.css" />
		
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<p class = "navbar-text pull-right">ABSENSI BIMBINGAN BELAJAR</p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> 
						<?php echo htmlentities($admin_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
			</ul>
			<br />
			<div class = "alert alert-info">Accounts / Instructor / <a href="admin.php"style="float:right;">Go To Admin's Page</a></div>
			<div class = "modal fade" id = "add_instructor" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-primary">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
							<span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Add New Insructor</h4>
						</div>
						<form method = "POST" action = "save_instructor_query.php" enctype = "multipart/form-data">
							<div class  = "modal-body">
								<div class = "form-group">
									<label>Instructor ID:</label>
									<input type = "text" style=" text-transform:capitalize;" name = "instructor_no" required = "required" maxlength="14" minlength="3" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Firstname:</label>
									<input type = "text" style=" text-transform:capitalize;" name = "firstname" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Middlename:</label>
									<input type = "text" style=" text-transform:capitalize;" name = "middlename" placeholder = "(Optional)" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Lastname:</label>
									<input type = "text" style=" text-transform:capitalize;" name = "lastname" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
								<label>Section:</label><br>
									<select style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" name="course" class = "form-group">
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="C101" required = "required" class = "form-control">C101</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="D201" required = "required" class = "form-control">D201</option>
								    </select>	
								</div>
								<div class = "form-group">
								<label>Schedule:</label><br>
									<select style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" name="schedule" class = "form-group">
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Friday AM" required = "required" class = "form-control">Friday Class AM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Friday PM" required = "required" class = "form-control">Friday Class PM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Saturday AM" required = "required" class = "form-control">Saturday Class AM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Saturday PM" required = "required" class = "form-control">Saturday Class PM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Sunday AM" required = "required" class = "form-control">Sunday Class AM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Sunday PM" required = "required" class = "form-control">Sunday Class PM</option>
								    </select>	
								</div>
								<div class = "form-group">
									<label>Batch Year:</label>
									<input type = "text" name = "section" required = "required" value="<?php echo date("Y");?>"class = "form-control" />
								</div>
							</div>
							<div class = "modal-footer">
								<button  class = "btn btn-primary" name = "save"><span class = "glyphicon glyphicon-save"></span> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content ">
						<div class = "modal-body">
							<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
							<br />
							<center><a class = "btn btn-danger remove_id" >
							<span class = "glyphicon glyphicon-trash"></span> Yes</a> 
							<button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No">
							<span class = "glyphicon glyphicon-remove"></span> No</button></center>
						</div>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "edit_instructor" 
			tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-warning">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" 
							aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Edit Instructor</h4>
						</div>
						<div id = "edit_query">
						
						</div>
					</div>
				</div>
			</div>
			<div class = "well col-lg-12">
				<button class = "btn btn-success" type = "button" href = "#" data-toggle = "modal" data-target = 
				"#add_instructor"><span class = "glyphicon glyphicon-plus"></span> Add New </button>
				<a href="javascript:print()">
					<button>Print</button></a>
				<br />
				<br />
	<div class="content" id="content" >	
				<table id = "table" class = "table table-bordered">
					
					<thead class = "alert-info">
						
					<tr>
							<th>Instructor ID</th>
							<th>Firstname</th>
							<th>Middlename</th>
							<th>Lastname</th>
							<th>Course</th>
							<th>Schedule</th>
							<th>Batch Year</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$q_instructor = $conn->query("SELECT * FROM `instructor`") or die(mysqli_error());
							while($f_instructor = $q_instructor->fetch_array()){
						?>
						<tr  style=" text-transform:capitalize;">
							<td><?php echo $f_instructor['instructor_no']?></td>							
							<td><?php echo $f_instructor['firstname']?></td>
							<td><?php echo $f_instructor['middlename']?></td>
							<td><?php echo $f_instructor['lastname']?></td>
							<td><?php echo $f_instructor['course']?></td>
							<td><?php echo $f_instructor['schedule']?></td>
							<td><?php echo $f_instructor['section']?></td>
							<td><?php echo $f_instructor['status']?></td>
							<td><a class = "btn btn-warning  einstructor_id" name = "<?php echo $f_instructor['instructor_id']?>" 
							href = "#" data-toggle = "modal" data-target = "#edit_instructor">
							<span class = "glyphicon glyphicon-edit"></span></a>
						
							<a class = "btn btn-danger rinstructor_id" onclick="return confirm('Are You Sure?')"
							href = "instructor.php?ids=<?php echo $f_instructor['instructor_id']?>">
							<span class = "glyphicon glyphicon-remove">
							</span></a> 
							<?php
							}
							if(isset($_GET['ids'])){
								$ids=$_GET['ids'];
								$result=$conn->query("DELETE FROM instructor WHERE instructor_id='$ids'");
								if($result){
									?>
									<script>
									alert('Successful Deleted');
									window.location.href='instructor.php';
									</script>
									<?php
								}else{
									?>
									<script>
									alert('Fail To Delete The Instructor');
									window.location.href='instructor.php';
									</script>
									<?php
								}
							}
							?>
						</td>
						
						</tr>
						<?php
							
						?>
					</tbody>
				</table>
				</div>
			</div>
			<br />
			<br />	
			<br />	
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid"style="margin-top:15px;">
				<label class = "pull-left">&copy; ABSENSI BIMBINGAN BELAJAR <?php echo date("Y");?></label>
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('.rinstructor_id').click(function(){
				$instructor_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'delete_instructor.php?instructor_id=' + $instructor_id;
				});
			});
			$('.einstructor_id').click(function(){
				$instructor_id = $(this).attr('name');
				$('#edit_query').load('load_edit_instructor.php?instructor_id=' + $instructor_id);
			});
		});
	</script>
	<script language="javascript">

function print()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=700, left=500, top=10"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<title>Equip Ministry</title>');   
   docprint.document.write('<link href="css/style_content.css" rel="stylesheet" type="text/css" media="print"/>');    
   docprint.document.write('<body onLoad="self.print()" style="width: 800px; font-size: 5px; font-family: arial;">');      
   docprint.document.write(content_vlue); 
   docprint.document.write('</body">');      
   docprint.document.close(); 
   docprint.focus(); 
}
</script
</html>
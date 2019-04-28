<?php include("connect.php"); ?>
<!DOCTYPE HTML>
<html>
<style>
body{
    background-color: #F5F5F5;
}
.nav{
    font-size: 18px;
    background-color: #00547F;
    letter-spacing: 2px;
    color: white;
}
.nav a{
    text-decoration: none;
    color: white;
}
.sidebar{
    width: 20%;
    float: left;
    background-color: #F5F5F5;
}
.content{
    width: 75%;
    background-color: #F5F5F5;
    float: left;
    box-shadow: 10px 10px 10px #888888;
    padding: 10px;
    margin-left: 30px;
    height: auto;
}
.content1{
    border: 2px solid grey;
    border-radius: 5px;
    padding: 10px 10px 10px 20px;
    height: 350px;
}
.paket{
    width: 30%;
    margin-right: 25px;
    border: 2px solid grey;
    border-radius: 5px;
    height: auto;
    float: left;
    display: inline-block;
    padding: 0px 0px 20px 0px;
}
.paket:hover {
    width: 30%;
    margin-right: 25px;
    border: 2px solid grey;
    border-radius: 5px;
    height: auto;
    float: left;
    display: inline-block;
    padding: 0px 0px 20px 0px;
    box-shadow: 8px 10px 10px #888888;
}
.paket h2{
    border-bottom: 2px solid grey;
    padding: 10px 10px 20px 20px;
}
.paket h1{
    background-color: lightblue;
    padding: 5px;
}
.paket a{
    padding: 10px 20px 10px 20px;
    border: 1px solid #FFCB4F;
    margin-left: 20px;
    background-color: #FFCB4F;
    color: white;
    border-radius: 10px;
    text-decoration: none;
}
.paket a:hover{
    padding: 10px 20px 10px 20px;
    border: 1px solid orange;
    margin-left: 20px;
    background-color: orange;
    color: white;
    border-radius: 10px;
    text-decoration: none;
    cursor: pointer;
}
.form-header {
	width : 80%;
    text-align : center;
    margin: auto;
	color : white;
	background : lightblue;
	border : 1px solid #B0C4DE;
	border-radius : 10px 10px 0px 0px;
	border-bottom : none;
	padding : 5px;
}
.form-content {
	width : 80%;
	border : 1px solid grey;
	border-radius : 0px 0px 10px 10px;
	background-color : white;
	padding : 20px;
	margin : 0px auto 100px;
}
.form-content label{
    width: 100%;
    margin-bottom: 10px;
    margin-top: 10px;
}
.form-content input{
    width: 100%;
    margin-left: 0px;
    padding: 5px;
}
.form-content select{
    width: 100%;
    padding: 10px;
}
.form-content button{
    margin-top: 10px;
}
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <title>BIMBEL ONLINE</title>
</head>

<body>
    <nav class="nav">
        <div class="navbar-header">
            <ul class="nav navbar-nav navbar-brand">
                <li><p style="margin-left: 80px;"><b>Pembayaran<b></p></li>
            </ul>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li style="margin-right: 10px; margin-top: 15px;"> Welcome, <span class="glyphicon glyphicon-user"></span> <?php echo "Halo";?></li>
                <li style="margin-right: 10px; margin-top: 15px;">|</li>
                <li style="margin-right: 100px; margin-top: 0px; float:left;"><a href="topup.php"><span class="glyphicon glyphicon-credit-card"></span> Top Up</a></li>
            </ul>
        </div>
    </nav>
    <div class="sidebar">
        <p> </p>
    </div>
    <div class="content">
        <div class="form-header">
            <h3 style="margin-top: 10px; margin-bottom: 10px;"> Formulir Topup Bimbel Online</h3>
        </div>
        <form  class="form-content" method="post" action="topup.php">
		    <label>NAMA</label>
                <select name='student'>
                    <option value='' selected>-- Pilih NAMA --</option>
                    <?php
                    $result = "SELECT * FROM student ORDER BY student_id ASC ";
                    $query = mysqli_query($conn,$result) or die(mysqli_error($conn));
                    while($row=mysqli_fetch_array($query)){
                        echo "<option value='$row[student_id]'>$row[firstname]</option>";
                    }
                    ?> 
                </select>
            <label>JUMLAH TOPUP</label>
                <select name='wallet'>
                    <option value='' selected>-- Pilih Nilai --</option>
                        <option value="100000">Rp. 100.000</option>
                        <option value="500000">Rp. 500.000</option>
                        <option value="1000000">Rp. 1000.000</option>
                </select>
            <button class="btn btn-primary" type="submit" name="topup">Tambah</button>
        </form>
    </div>
</body>
</html>
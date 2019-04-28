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
        <div class="content1">
            <br>
            <h4><b>DAFTAR PAKET BIMBEL<b></h4>
                <div class="paket">
                    <h2>Basic</h2>
                    <center><span class="glyphicon glyphicon-tasks"></span>  Paket 1 Tahun Ajaran
                    <h1>Rp. 500.000</h1></center>
                    <br>
                    <a href="paket.php">Beli</a>
                </div>
                <div class="paket">
                    <h2>Premium</h2>
                    <center><span class="glyphicon glyphicon-tasks"></span>  Paket 1 Tahun Ajaran 
                    <h1>Rp. 700.000</h1></center>
                    <br>
                    <a href="paket.php">Beli</a>
                </div>
                <div class="paket">
                    <h2>Platinum</h2>
                    <center><span class="glyphicon glyphicon-tasks"></span>  Paket 1 Tahun Ajaran
                    <h1>Rp. 1.500.000</h1></center>
                    <br>
                    <a href="paket.php">Beli</a>
                </div>
        </div>
        </div>
    </div>
</body>
</html>
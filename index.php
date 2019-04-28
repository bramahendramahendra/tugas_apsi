
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coming Soon 8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<!-- Link Favicon -->
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
<!-- Link Bootstrap -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<!-- Link Fonts -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<!-- Link Icon fonts -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<!-- Link animate -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->
<!-- Link Select -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
<!-- Link main and util css -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->

<style>

</style>

</head>
<body>
	
    <div class="bg-img1 overlay1 size1 flex-w flex-c-m p-t-55 p-b-50 p-l-15 p-r-15" style="background-image: url('assets/images/landing/background.jpg');">
        <div class="wsize1">

            <h3 class="l1-txt1 txt-center p-b-22 ">
                Tugas APSI
            </h3>

            <p class="txt-center m2-txt1 p-b-67">
                Selamat datang di website kami.
            </p>

            <div class="flex-w flex-sa-m cd100 p-t-42 p-b-22 p-l-50 p-r-50 respon1">
                
                <div class="flex-col-c-m wsize2 m-b-20">
                    <span class="l1-txt2 p-b-4 hours" id="hours-timer"></span>
                    <span class="m2-txt2">Hours</span>
                </div>

                <span class="l1-txt2 p-b-22 respon2">:</span>

                <div class="flex-col-c-m wsize2 m-b-20">
                    <span class="l1-txt2 p-b-4 minutes" id="minutes-timer"></span>
                    <span class="m2-txt2">Minutes</span>
                </div>

                <span class="l1-txt2 p-b-22">:</span>

                <div class="flex-col-c-m wsize2 m-b-20">
                    <span class="l1-txt2 p-b-4 seconds" id="seconds-timer"></span>
                    <span class="m2-txt2">Seconds</span>
                </div>
            </div>

            <form action="landing_menu.php" method="post" class="flex-w flex-c-m contact100-form validate-form p-t-50">
                <button type="submit" style="width:auto;" name="admin" class="flex-c-m s1-txt1 size2 how-btn trans-04 where1">
                    Admin
                </button>
                <button type="submit" style="width:auto;" name="instruktur" class="flex-c-m s1-txt1 size2 how-btn trans-04 where1">
                    Instruktur
                </button>
                <button type="submit" style="width:auto;" name="siswa" class="flex-c-m s1-txt1 size2 how-btn trans-04 where1">
                    Siswa
                </button>
                <button type="submit" style="width:auto;" name="pemilik" class="flex-c-m s1-txt1 size2 how-btn trans-04 where1">
                    Pemilik
                </button>
            </form>			
        </div>
    </div>



<!--===============================================================================================-->
<!-- Script jquery -->
<!--===============================================================================================-->
<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--===============================================================================================-->
<!-- Bootstrap Javascript -->
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<!-- Select Javascript -->
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>	
<!--===============================================================================================-->
<!-- Main Javascript -->
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById('admin');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script>
        // Get the modal
        var modal = document.getElementById('instruktur');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script>
        // Get the modal
        var modal = document.getElementById('siswa');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script>
        // Get the modal
        var modal = document.getElementById('pemilik');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
	
</body>
</html>
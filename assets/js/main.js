window.setTimeout("waktu()", 1000);

function waktu() {
    var waktu = new Date();
    setTimeout("waktu()", 1000);
    document.getElementById("hours-timer").innerHTML = waktu.getHours();
    document.getElementById("minutes-timer").innerHTML = waktu.getMinutes();
    document.getElementById("seconds-timer").innerHTML = waktu.getSeconds();
}

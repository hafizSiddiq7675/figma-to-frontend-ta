var countDownDate = new Date("Aug 14, 2022 12:00:00").getTime();

var myfunc = setInterval(function() {

var now = new Date().getTime();
var timeleft = countDownDate - now;
    
var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
    
document.getElementById("days").innerHTML = days 
document.getElementById("hours").innerHTML = hours 
document.getElementById("minutes").innerHTML = minutes 
document.getElementById("seconds").innerHTML = seconds 
    
if (timeleft < 0) {
    clearInterval(myfunc);
    document.getElementById("days").innerHTML = ""
    document.getElementById("hours").innerHTML = "" 
    document.getElementById("minutes").innerHTML = ""
    document.getElementById("seconds").innerHTML = ""
    document.getElementById("end").innerHTML = "UPLOADING!!";
}
}, 1000);
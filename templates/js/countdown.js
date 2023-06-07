var currentTime = new Date(document.getElementById("banhour").innerHTML);

var countdownTime = new Date(currentTime.getTime() + 2*60*60*1000); 

setInterval(function() {
    var now = new Date().getTime();

    var distance = countdownTime - now;

    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML = hours + "h "
    + minutes + "m " + seconds + "s ";

    if (distance <= 0) {
        location.href = '../index.php';
    }
}, 1000);

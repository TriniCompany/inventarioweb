
const countdownDate = new Date("May 4, 2025 00:00:00").getTime();

const interval = setInterval(function() {
const now = new Date().getTime();
const distance = countdownDate - now;
    
const days = Math.floor(distance / (1000 * 60 * 60 * 24));
const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    
document.getElementById("countdown").innerHTML = 
    days + "d " + 
    hours + "h " + 
    minutes + "m " + 
    "<span>" + seconds + "s</span>";

if (distance < 0) {
    clearInterval(interval);
    document.getElementById("countdown").innerHTML = "¡Espera nuestro lanzamiento!";
}
}, 1000);
// Establecer la fecha de finalización (1 de mayo de 2025)
const countdownDate = new Date("May 1, 2025 00:00:00").getTime();

// Actualizar el contador cada segundo
const interval = setInterval(function() {

    // Obtener la fecha y hora actual
    const now = new Date().getTime();

    // Calcular la diferencia entre la fecha de finalización y la fecha actual
    const distance = countdownDate - now;

    // Calcular los días, horas, minutos y segundos restantes
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Mostrar los resultados en los elementos HTML
    document.getElementById("days").getElementsByClassName("time-number")[0].innerText = days;
    document.getElementById("hours").getElementsByClassName("time-number")[0].innerText = hours;
    document.getElementById("minutes").getElementsByClassName("time-number")[0].innerText = minutes;
    document.getElementById("seconds").getElementsByClassName("time-number")[0].innerText = seconds;

    // Si el contador llega a cero, mostrar un mensaje
    if (distance < 0) {
        clearInterval(interval);
        document.querySelector('.counter-container').innerHTML = "<h2>¡El evento ha llegado!</h2>";
    }
}, 1000);

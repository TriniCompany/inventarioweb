function updateCountdown() {
    const launchDate = new Date('February 11, 2025 00:00:00').getTime();
    const now = new Date().getTime();
    const difference = launchDate - now;

    const days = Math.floor(difference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((difference % (1000 * 60)) / 1000);

    const timerElement = document.getElementById('timer');
    const newTime = `${days}d ${hours}h ${minutes}m ${seconds}s`;
    
    if (timerElement.innerHTML !== newTime) {
        timerElement.classList.add('changed');
        setTimeout(() => timerElement.classList.remove('changed'), 300);
    }
    
    timerElement.innerHTML = newTime;

    if (difference < 0) {
        timerElement.innerHTML = "¡Ya está disponible!";
    }
}

setInterval(updateCountdown, 1000);
updateCountdown();

window.onload = function() {
    setTimeout(() => {
        document.getElementById('loading-screen').style.opacity = '0';
        setTimeout(() => {
            document.getElementById('loading-screen').style.display = 'none';
        }, 1000);
    }, 4000);
};

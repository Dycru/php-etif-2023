const date = localStorage.userDate;

if (date) {
  const restartButton = document.querySelector("#restart");

  restartButton.addEventListener('click', event => {
    window.location.replace('/index4.html');
  });

  // Resto del código...
} else {
  // Manejar el caso cuando la fecha no está definida en el localStorage
  console.log('Fecha no definida en localStorage');
}

function start() {
    let days = document.querySelector('.days h1');
    let hours = document.querySelector('.hours h1');
    let minutes = document.querySelector('.minutes h1');
    let seconds = document.querySelector('.seconds h1');

    const date = new Date('2023-06-09T00:00:00').getTime();

    let now = new Date().getTime();
    let timeLeft = date - now;
    
    let daysLeft = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    let hoursLeft = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60) + 3);
    let minutesLeft = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    let secondsLeft = Math.floor((timeLeft % (1000 * 60)) / 1000)

    days.innerHTML = daysLeft;
    hours.innerHTML = hoursLeft;
    minutes.innerHTML = minutesLeft;
    seconds.innerHTML = secondsLeft;
    
    document.querySelector("#d-word").innerHTML = daysLeft === 1 ? "Dia" : "Dias";
    document.querySelector("#h-word").innerHTML = hoursLeft === 1 ? "Hora" : "Horas";
    document.querySelector("#m-word").innerHTML = minutesLeft === 1 ? "Minuto" : "Minutos";
    document.querySelector("#s-word").innerHTML = secondsLeft === 1 ? "Segundo" : "Segundos";

    document.querySelector("#day").innerHTML = daysLeft <= 0 ? "0" : daysLeft;
    document.querySelector("#hour").innerHTML = hoursLeft <= 0 ? "0" : hoursLeft;
    document.querySelector("#minute").innerHTML = minutesLeft <= 0 ? "0" : minutesLeft;
    document.querySelector("#second").innerHTML = secondsLeft <= 0 ? "0" : secondsLeft;
}

setInterval(start, 1000);

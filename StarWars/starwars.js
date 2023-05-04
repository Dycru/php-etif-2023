// Efecto para el t�tulo de la p�gina
const title = document.querySelector('h1');

title.addEventListener('mouseover', () => {
  title.style.color = '#ffd700';
});

title.addEventListener('mouseout', () => {
  title.style.color = '#fff';
});

// Efecto para los enlaces de la barra de navegaci�n
const navLinks = document.querySelectorAll('nav a');

navLinks.forEach(link => {
  link.addEventListener('mouseover', () => {
    link.style.color = '#ffd700';
  });
  
  link.addEventListener('mouseout', () => {
    link.style.color = '#fff';
  });
});

// Efecto para los enlaces del contenido principal
const mainLinks = document.querySelectorAll('main a');

mainLinks.forEach(link => {
  link.addEventListener('mouseover', () => {
    link.style.color = '#ffd700';
  });
  
  link.addEventListener('mouseout', () => {
    link.style.color = '#ffd700';
  });
});

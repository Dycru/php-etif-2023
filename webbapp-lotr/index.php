<!DOCTYPE html>
<html>

<head>
    <title>El Señor de los Anillos</title>
    <link rel="stylesheet" href="index.css">
    <style>
        .cookie-popup {
            display: flex;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background-color: #f1f1f1;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .cookie-popup-content {
            margin-right: 20px;
        }

        .cookie-popup-buttons {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <header>
        <h1>El Señor de los Anillos</h1>
    </header>

    <nav>
        <ul class="nav-bar">
            <li><a href="index.php" class="active">Inicio</a></li>
            <li><a href="about.php">Acerca de nosotros</a></li>
            <li><a href="login.php">Log in</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="index3.php">sign in</a></li>
            <li><a href="cookies.php">Politica de cookies</a></li>
            <li><a href="index4.html">Contador</a></li>
           
        </ul>
    </nav>

    <section>
        <h2>Bienvenido al mundo de El Señor de los Anillos</h2>
        <p>
            El Señor de los Anillos es una épica saga de fantasía escrita por J.R.R. Tolkien.
            Ambientada en la Tierra Media, la historia sigue las aventuras de un grupo de personajes
            mientras luchan contra el malvado Señor Oscuro Sauron y buscan destruir el poderoso Anillo Único.
        </p>

        <h3>Películas</h3>
        <div class="movie-images">
            <div class="movie">
                <img src="elseñor1.jpg" alt="The Fellowship of the Ring">
                <h4>The Fellowship of the Ring</h4>
                <p>
                    En la primera película, un joven hobbit llamado Frodo Bolsón se embarca en una peligrosa misión para
                    destruir el Anillo Único y evitar que caiga en manos del malvado Sauron. Frodo es acompañado por un
                    grupo de valientes compañeros mientras enfrentan peligros y desafíos en su viaje hacia el Monte del
                    Destino.
                </p>
            </div>
            <div class="movie">
                <img src="twotowers.jpg" alt="The Two Towers">
                <h4>The Two Towers</h4>
                <p>
                    En la segunda película, la Comunidad del Anillo se ha separado y enfrenta amenazas desde diferentes
                    frentes. Frodo y Sam continúan su peligroso viaje hacia Mordor, mientras que otros personajes se
                    unen a la lucha contra Sauron. En esta película, se presentan nuevas criaturas, batallas épicas y
                    giros inesperados.
                </p>
            </div>
            <div class="movie">
                <img src="returnoftheking.jpg" alt="The Return of the King">
                <h4>The Return of the King</h4>
                <p>
                    En la tercera y última película de la trilogía, la guerra entre las fuerzas del bien y del mal alcanza su clímax. Mientras Frodo y Sam continúan su peligroso viaje hacia el Monte del Destino, los aliados se preparan para la batalla final contra Sauron y su ejército. La lucha épica por el destino de la Tierra Media se desarrolla, con giros inesperados
  </section>
  <div class="cookie-popup" id="cookiePopup">
    <div class="cookie-popup-content">
      <p>Esta página utiliza cookies para mejorar su experiencia. Por favor, seleccione si acepta o deniega el uso de cookies.</p>
      <div class="cookie-popup-buttons">
        <button onclick="acceptCookies()">Aceptar</button>
        <button onclick="denyCookies()">Denegar</button>
      </div>
    </div>
  </div>
  <footer>
    <p>&copy; 2023 El Señor de los Anillos. Todos los derechos reservados.</p>
  </footer>
  <script>
    window.addEventListener('load', function() {
      var cookiesAccepted = getCookie('cookies_accepted');
      if (cookiesAccepted !== '') {
        hidePopup();
      } else {
        var cookiePopup = document.getElementById('cookiePopup');
        cookiePopup.style.display = 'flex';
      }
    });

    function acceptCookies() {
      setCookie('cookies_accepted', 'true', 30);
      hidePopup(yes);
    }

    function denyCookies() {
      setCookie('cookies_accepted', 'false', 30);
      window.location.href = "#"; // Cambia la URL por la página a la que quieres redirigir en caso de denegar las cookies
    }

    function setCookie(name, value, days) {
      var expires = "";
      if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
      var nameEQ = name + "=";
      var cookies = document.cookie.split(';');
      for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        while (cookie.charAt(0) == ' ') {
          cookie = cookie.substring(1, cookie.length);
        }
        if (cookie.indexOf(nameEQ) === 0) {
          return cookie.substring(nameEQ.length, cookie.length);
        }
      }
      return '';
    }

    function hidePopup() {
      var cookiePopup = document.getElementById('cookiePopup');
      cookiePopup.style.display = 'yes';
    }
  </script>
</body>
</html>
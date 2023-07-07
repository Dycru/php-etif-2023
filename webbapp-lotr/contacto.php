<!DOCTYPE html>
<html>

<head>
    <title>Contacto - El Señor de los Anillos</title>
    <link rel="stylesheet" href="contacto.css">
    <style>
        @keyframes blink {
            0% {
                background-color: red;
            }
            50% {
                background-color: orange;
            }
            100% {
                background-color: red;
            }
        }

        .alert.error {
            animation: blink 1s infinite;
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
            <li><a href="index4.html">Contador</a></li>
          
        </ul>
    </nav>

    <?php if (isset($_GET['enviado']) && $_GET['enviado'] == 'true') : ?>
        <div class="alert success">¡El formulario ha sido enviado con éxito!</div>
    <?php endif; ?>

    <form action="enviar.php" method="POST" class="lotr-form">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu email" required>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Ingresa tu teléfono" required>
        </div>

        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje" required></textarea>
        </div>

        <div class="form-group">
            <label for="motivo">Motivo de contacto:</label>
            <select id="motivo" name="motivo" required>
                <option value="">Selecciona un motivo</option>
                <option value="Consulta">Consulta</option>
                <option value="Sugerencia">Sugerencia</option>
                <option value="Problema">Problema</option>
                <option value="Otro">Otro</option>
            </select>
            <img src="https://i.gifer.com/origin/8c/8cd4b220e1aa2a32a8920695b0490f15.gif" alt="Ojo de Sauron" class="sauron-eye" style="display: block; margin: 0 auto;">
        </div>
        <div class="alert error">¡Sauron te está observando!</div>

        <button type="submit">
            <a href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=new">Enviar</a>
        </button>
    </form>
</body>

</html>

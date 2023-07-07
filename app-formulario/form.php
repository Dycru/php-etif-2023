<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Contacto - El Hobbit</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <h2>Formulario de Contacto - El Hobbit</h2>
    <form action="#" method="POST">
        <label for="name">Nombre:</label>
        <input type="text" name="name" required>
        <?php if(isset($errors['name'])): ?>
            <p class="error-message"><?php echo $errors['name']; ?></p>
        <?php endif; ?>

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" required>
        <?php if(isset($errors['email'])): ?>
            <p class="error-message"><?php echo $errors['email']; ?></p>
        <?php endif; ?>

        <label for="phone">Teléfono:</label>
        <input type="text" name="phone" required>
        <?php if(isset($errors['phone'])): ?>
            <p class="error-message"><?php echo $errors['phone']; ?></p>
        <?php endif; ?>

        <div class="form-group">
            <label for="motivo">Motivo:</label>
            <select id="motivo" name="motivo" required>
                <option value="">Selecciona un motivo</option>
                <option value="Consulta">Consulta</option>
                <option value="Sugerencia">Sugerencia</option>
                <option value="Problema">Problema</option>
                <option value="Otro">Otro</option>
            </select>
        </div>

        <label for="message">Mensaje:</label>
        <textarea name="message" required></textarea>
        <?php if(isset($errors['message'])): ?>
            <p class="error-message"><?php echo $errors['message']; ?></p>
        <?php endif; ?>

        <div class="checkbox-group">
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">Acepto los Términos y Condiciones</label>
        </div>

        <div class="button-group">
            <input type="submit" value="Enviar">
            <input type="submit" value="Registrarse">
            <input type="submit" value="Iniciar sesión">
        </div>
    </form>

    <script src="form.js"></script>
</body>
</html>

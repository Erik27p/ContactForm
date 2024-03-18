<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación</title>
    <link rel="stylesheet" href="fom.css">
</head>
<body>
    <div class="container">
        <h2>Datos recibidos:</h2>
        <p><strong>Nombre:</strong> <span id="nombre"></span></p>
        <p><strong>Email:</strong> <span id="email"></span></p>
        <p><strong>Mensaje:</strong> <span id="mensaje"></span></p>

        <script>
            const urlParams = new URLSearchParams(window.location.search);
            const nombre = urlParams.get('nombre');
            const email = urlParams.get('email');
            const mensaje = urlParams.get('mensaje');

            document.getElementById('nombre').innerText = nombre;
            document.getElementById('email').innerText = email;
            document.getElementById('mensaje').innerText = mensaje;
        </script>
    </div>
</body>
</html>

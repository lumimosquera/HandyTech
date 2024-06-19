<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo TITLE . ' - Página no encontrada'; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #343a40;
            color: white;
            text-align: center;
        }
        .cover-container {
            max-width: 600px;
            padding: 2rem;
        }
        .cover-container img, .cover-container .lottie {
            max-width: 100%;
            height: auto;
        }
        .btn-custom {
            background-color: #ffffff;
            color: #343a40;
            border-color: #ffffff;
            transition: all 0.3s;
        }
        .btn-custom:hover {
            background-color: #970C10;
            color: #ffffff;
        }
    </style>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body>
    <div class="cover-container">
        <lottie-player src="https://lottie.host/3a37ac93-548b-4d99-a2cf-0df8d06c169f/g0uw0IOfvk.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
        <h1>Página no encontrada.</h1>
        <p class="lead">La página que buscas no existe o ha sido movida.</p>
        <p class="lead">
            <a href="<?php echo BASE_URL; ?>" class="btn btn-lg btn-custom fw-bold"><?php echo TITLE; ?></a>
        </p>
        <p class="lead">O puedes visitar nuestras <a href="<?php echo BASE_URL; ?>popular">secciones populares</a>.</p>
    </div>
</body>
</html>

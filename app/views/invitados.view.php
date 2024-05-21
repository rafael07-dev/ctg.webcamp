<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTGWEBCAMP</title>
    <link rel="stylesheet" href="public/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <?php include 'templates/header.php';?>
    <?php include 'templates/barra.php';?>

    <main class="section contenedor">
        <h2>Invitados</h2>

        <div class="contenedor">
                <div class="contenedor-invitados">
                    <ul>
                        <?php foreach($invitados as $invitado): ?>
                            <li class="invitado">
                                <img src="public/img/<?php echo $invitado['url_imagen'] ?>" alt="<?php echo $invitado['nombre_invitado'] ?>">
                                <p class="texto-invitado"><?php echo $invitado['nombre_invitado'] . " " . $invitado['apellido_invitado'] ?></p>
                            </li>
                        <?php endforeach?>
                    </ul>
                </div>
        </div>
    </main>

    <?php include 'templates/footer.php'?>
</body>

</html>
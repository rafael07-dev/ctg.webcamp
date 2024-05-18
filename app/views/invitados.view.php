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
    <?php include './app/views/templates/header.php';?>
    <?php include './app/views/templates/barra.php';?>

    <main class="section contenedor">
        <h2>Invitados</h2>

        <div class="contenedor">
                <div class="contenedor-invitados">

                    <?php
                        require_once("./app/models/InvitadoModel.php");
                        $inv = new InvitadoModel();

                        $result = $inv->get_invitados();
                        var_dump($result);
                    ?>
                    <ul>
                        <?php foreach($result as $invitado): ?>
                            <li class="invitado">
                                <img src="public/img/<?php echo $invitado['url_imagen'] ?>" alt="<?php echo $invitado['nombre_invitado'] ?>">
                                <p class="texto-invitado"><?php echo $invitado['nombre_invitado'] . " " . $invitado['apellido_invitado'] ?></p>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
        </div>
    </main>

    <?php include './app/views/templates/footer.php'?>
</body>

</html>
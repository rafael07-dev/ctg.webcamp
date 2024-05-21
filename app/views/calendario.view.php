<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTGWEBCAMP</title>
    <link rel="stylesheet" href="public/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/calendario.css">
</head>

<body>
    <?php include './app/views/templates/header.php';?>
    <?php include './app/views/templates/barra.php';?>

    <main class="section contenedor">
        <h2>CALENDARIO EVENTOS</h2>

        <div class="calendar contenedor">
                <?php 
                    foreach ($calendario as $dia => $list_eventos) { ?>
                        <h3><i class="fa fa-calendar icon-color"><?php setlocale(LC_TIME, 'spanish'); echo strftime("%A, %d de  %B del %Y", strtotime($dia))  ?></i></h3>
                        <div class="wapper-eventos">
                        <?php 
                            foreach ($list_eventos as $evento) { ?>
                                <div class="dia">
                                    <p class="titulo"><i class="<?php echo $evento['icono'] ?> icon-color"></i> <?php echo $evento['titulo'] ?> </p>
                                    <p class="fecha"> <i class="fa-regular fa-clock icon-color"></i> <?php echo $evento['fecha'] . " " . $evento['hora'] ?> </p>
                                    <p class="categoria"> <i class="<?php echo $evento['icono'] ?> icon-color"></i> <?php echo $evento['categoria'] ?> </p>
                                    <p class="invitado-bd"><i class="fa fa-user icon-color"></i> <?php echo $evento['invitado'] ?> </p>
                                </div>
                        <?php } ?>
                        </div>
                <?php } ?>
        </div>
    </main>

    <?php include './app/views/templates/footer.php'?>
</body>

</html>
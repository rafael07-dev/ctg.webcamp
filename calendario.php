<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTGWEBCAMP</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/calendario.css">
</head>

<body>
    <?php include 'includes/templates/header.php';?>
    <?php include 'includes/templates/barra.php';?>

    <main class="section contenedor">
        <h2>CALENDARIO EVENTOS</h2>

        <?php 
            try {
                //code...
                require_once('includes/funciones/db_conexion.php');

                $query = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado FROM eventos INNER JOIN categoria_evento ON eventos.id_cat_evento = categoria_evento.id_categoria INNER JOIN invitados ON eventos.id_invitado = invitados.invitado_id ORDER BY evento_id";

                $result = $conn->query($query);

            } catch (\Exception $e) {
                //throw $th;
                echo $e->getMessage();
            }
        ?>

        <div class="calendar contenedor">
                <?php
                    $calendario = array();

                    while ($eventos = $result->fetch_assoc()) {
                        # code...
                        $evento = array(
                            'titulo' => $eventos['nombre_evento'],
                            'fecha' => $eventos['fecha_evento'],
                            'hora' => $eventos['hora_evento'],
                            'categoria' => $eventos['cat_evento'],
                            'icono' => $eventos['icono'],
                            'invitado' => $eventos['nombre_invitado'] . ' ' . $eventos['apellido_invitado']
                        );

                        //ordenar por fechas los eventos
                        $calendario[$eventos['fecha_evento']][] = $evento;

                    }

                    //var_dump($calendario);
                ?>

                <?php 
                    foreach ($calendario as $dia => $list_eventos) { ?>
                        <h3><i class="fa fa-calendar"><?php setlocale(LC_TIME, 'spanish'); echo strftime("%A, %d de  %B del %Y", strtotime($dia))  ?></i></h3>
                        <div class="wapper-eventos">
                        <?php 
                            foreach ($list_eventos as $evento) { ?>
                                <div class="dia">
                                    <p class="titulo"><i class="<?php echo $evento['icono'] ?> icon-color"></i> <?php echo $evento['titulo'] ?> </p>
                                    <p class="fecha"> <i class="fa-regular fa-clock"></i> <?php echo $evento['fecha'] . " " . $evento['hora'] ?> </p>
                                    <p class="categoria"> <i class="<?php echo $evento['icono'] ?>"></i> <?php echo $evento['categoria'] ?> </p>
                                    <p class="invitado-bd"><i class="fa fa-user"></i> <?php echo $evento['invitado'] ?> </p>
                                </div>
                        <?php } ?>
                        </div>
                <?php } ?>
            
            <?php $conn->close()?>
        </div>
    </main>

    <?php include 'includes/templates/footer.php'?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTGWEBCAMP</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'includes/templates/header.php';?>
    <?php include 'includes/templates/barra.php';?>

    <main class="section contenedor">
        <h2>Invitados</h2>

        <?php 
            try {
                //code...
                require_once('includes/funciones/db_conexion.php');

                $query = "SELECT invitado_id, nombre_invitado, apellido_invitado, descripcion, url_imagen FROM invitados ORDER BY nombre_invitado";

                $result = $conn->query($query);

            } catch (\Exception $e) {
                //throw $th;
                echo $e->getMessage();
            }
        ?>

        <div class="contenedor">
                <?php
                    $invitados_db = array();

                    while ($invitados = $result->fetch_assoc()) {
                        # code...
                        $invitado = array(
                            'id' => $invitados['invitado_id'],
                            'nombre' => $invitados['nombre_invitado'],
                            'apellido' => $invitados['apellido_invitado'],
                            'descripcion' => $invitados['descripcion'],
                            'imagen' => $invitados['url_imagen']
                        );

                        //ordenar por fechas los eventos
                        $invitados_db[] = $invitado;

                    }
                ?>
                <div class="contenedor-invitados">
                    <ul>
                        <?php foreach ($invitados_db as $key => $invitado) { ?>
                            <li class="invitado">
                                <img src="img/<?php echo $invitado['imagen'] ?>" alt="<?php echo $invitado['nombre'] ?>">
                                <p class="texto-invitado"><?php echo $invitado['nombre'] . " " . $invitado['apellido'] ?></p>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                
                <?php 
                    
                ?>
            
            <?php $conn->close()?>
        </div>
    </main>

    <?php include 'includes/templates/footer.php'?>
</body>

</html>
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

    <main class="section contenedor">
        <h2>Calendario de eventos</h2>

        <?php 
            try {
                //code...
                require_once('includes/funciones/db_conexion.php');

                $query = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado FROM eventos INNER JOIN categoria_evento ON eventos.id_cat_evento = categoria_evento.id_categoria INNER JOIN invitados ON eventos.id_invitado = invitados.invitado_id ORDER BY evento_id";

                $result = $conn->query($query);

            } catch (\Exception $e) {
                //throw $th;
                echo $e->getMessage();
            }
        ?>

        <div class="calendarios">
            <?php 
                $evento = array();
            ?>
            <pre>
                <?php
                    while ($eventos = $result->fetch_assoc()) {
                        # code...
                        
                        var_dump($eventos);
                    }
                ?>
            </pre>
            <?php $conn->close()?>
        </div>
    </main>

    <?php include 'includes/templates/footer.php'?>

    <script src="js/script.js"></script>
    <script src="js/registro.js"></script>
</body>

</html>
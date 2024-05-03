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

    <section class="contenido-principal contenedor">
        <h1>la mejor conferencia de diseño web en español</h1>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime error, nostrum aut impedit harum voluptas
            eligendi eius quidem corporis suscipit neque adipisci soluta, velit ipsum, accusamus nesciunt minus
            voluptatem sapiente!</p>
    </section>

    <section class="contenido-talleres">

        <?php
            try {
                //code...
                require_once('includes/funciones/db_conexion.php');

                $query = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, 
                        cat_evento, icono, nombre_invitado, apellido_invitado 
                    FROM eventos 
                    INNER JOIN categoria_evento 
                    ON eventos.id_cat_evento = categoria_evento.id_categoria 
                    INNER JOIN invitados ON eventos.id_invitado = invitados.invitado_id 
                    AND eventos.id_cat_evento = 3 
                    LIMIT 3";

                $result = $conn->query($query);

            } catch (\Exception $e) {
                //throw $th;
                echo $e->getMessage();
            }
        ?>

        <?php
            $calendario = array();

            while ($eventos = $result->fetch_assoc()) {
                        
                $evento = array(
                    'titulo' => $eventos['nombre_evento'],
                    'fecha' => $eventos['fecha_evento'],
                    'hora' => $eventos['hora_evento'],
                    'categoria' => $eventos['cat_evento'],
                    'icono' => $eventos['icono'],
                    'invitado' => $eventos['nombre_invitado'] . ' ' . $eventos['apellido_invitado']
                );

                $calendario[] = $evento;
            }
        ?>
        <div class="contenedor-video">
            <video autoplay loop muted>
                <source src="<?php echo 'video/video.mp4'; ?>" type="video/mp4">
            </video>
        </div>
        <div class="calendario contenedor">
            <h1>programa del evento</h1>

            <div class="opciones-calendario">
                <p><i class="fa-solid fa-code"></i>Talleres</p>
                <p><i class="fa-regular fa-comment"></i>Conferencias</p>
                <p><i class="fa-solid fa-building-columns"></i>Seminarios</p>
            </div>
            <hr>
            <?php foreach ($calendario as $evento) { ?>
                    <div class="evento">
                        <h2><i class="<?php echo $evento['icono']?>"></i><?php echo$evento['titulo']?></h2>
                        <p><i class="fa-regular fa-clock"></i><?php echo $evento['hora'] ?></p>
                        <p><i class="fa-solid fa-calendar-days"></i><?php echo $evento['fecha'] ?></p>
                        <p><i class="fa-solid fa-user"></i><?php echo $evento['invitado'] ?></p>
                    </div>
            <?php } ?>
            <!--<div class="evento">
                <h2>HTML, CSS, JavaScript</h2>
                <p><i class="fa-regular fa-clock"></i>14:00hr</p>
                <p><i class="fa-solid fa-calendar-days"></i>10 de Dic</p>
                <p><i class="fa-solid fa-user"></i>Deiner Rafael</p>
            </div>
            <hr>

            <div class="evento">
                <h2>Responsive Web Desing</h2>
                <p><i class="fa-regular fa-clock"></i>14:00hr</p>
                <p><i class="fa-solid fa-calendar-days"></i>10 de Dic</p>
                <p><i class="fa-solid fa-user"></i>Deiner Rafael</p>
            </div>-->
            <div class="calendario-btn">
                <a class="btn" href="calendario.php">Ver todos</a>
            </div>
        </div>
    </section>

    <section class="invitados contenedor">
        <h1>Nuestros invitados</h1>

        <?php 
            try {
                //code...
                require_once('includes/funciones/db_conexion.php');

                $query = "SELECT invitado_id, nombre_invitado, apellido_invitado, url_imagen FROM invitados ORDER BY nombre_invitado";

                $result = $conn->query($query);

            } catch (\Exception $e) {
                //throw $th;
                echo $e->getMessage();
            }
        ?>
        <?php
            $invitados_db = array();

            while ($invitados = $result->fetch_assoc()) {
                # code...
                $invitado = array(
                    'nombre' => $invitados['nombre_invitado'],
                    'apellido' => $invitados['apellido_invitado'],
                    'imagen' => $invitados['url_imagen']
                );

                $invitados_db[] = $invitado;
            }
        ?>

        <div class="contenedor-invitados">
            <ul>
            <?php 
                foreach ($invitados_db as $key => $invitado) { ?>
                    <li class="invitado">
                        <img src="img/<?php echo $invitado['imagen'] ?>" alt="<?php echo $invitado['nombre'] ?>">
                        <p class="texto-invitado"><?php echo $invitado['nombre'] . " " . $invitado['apellido'] ?></p>
                    </li>
            <?php } ?>
            </ul>
        </div>
    </section>

    <div class="contador">
        <div class="resumen-evento">
            <ul>
                <li>
                    <p class="numero">5</p>invitados
                </li>
                <li>
                    <p class="numero">15</p>Talleres
                </li>
                <li>
                    <p class="numero">3</p>Dias
                </li>
                <li>
                    <p class="numero">9</p>Conferencias
                </li>
            </ul>
        </div>
    </div>

    <section class="precios">
        <h2>Precios</h2>
        
        <div class="contenedor-precios contenedor">

            <div class="card-precios">
                <h3>pase por dia</h3>
                <span>$30</span>
                <p><i class="fa-solid fa-check"></i>bocadillos gratis</p>
                <p><i class="fa-solid fa-check"></i>todas las Conferencias</p>
                <p><i class="fa-solid fa-check"></i>todos los Talleres</p>
                <div class="boton">
                    <a class="btn" href="#">comprar</a>
                </div>
            </div>

            <div class="card-precios">
                <h3>todos los dias</h3>
                <span>$50</span>
                <p><i class="fa-solid fa-check"></i>bocadillos gratis</p>
                <p><i class="fa-solid fa-check"></i>todas las Conferencias</p>
                <p><i class="fa-solid fa-check"></i>todos los Talleres</p>
                <div class="boton">
                    <a class="btn" href="#">comprar</a>
                </div>
            </div>

            <div class="card-precios">
                <h3>pase por dos dias</h3>
                <span>$45</span>
                <p><i class="fa-solid fa-check"></i>bocadillos gratis</p>
                <p><i class="fa-solid fa-check"></i>todas las Conferencias</p>
                <p><i class="fa-solid fa-check"></i>todos los Talleres</p>
                <div class="boton">
                    <a class="btn" href="#">comprar</a>
                </div>
            </div>
        </div>
    </section>

    <section class="testimoniales contenedor">
        <h2>testimoniales</h2>
        
        <div class="contenedor-testimoniales">
            <div class="card-testimonial">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates obcaecati nostrum neque, ad
                    commodi debitis quam sed dolores ullam corporis modi adipisci eum unde sint placeat ut tenetur et?
                    Quas!</p>

                <div class="wrapper-card">
                    <div class="content-avatar">
                        <img src="img/invitado1.jpg" alt="">
                    </div>
                    <div class="content-testimonial">
                        <p>deiner rafael</p>
                        <span>diseñador en @prisma</span>
                    </div>
                </div>
            </div>

            <div class="card-testimonial">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates obcaecati nostrum neque, ad
                    commodi debitis quam sed dolores ullam corporis modi adipisci eum unde sint placeat ut tenetur et?
                    Quas!</p>

                <div class="wrapper-card">
                    <div class="content-avatar">
                        <img src="img/invitado1.jpg" alt="">
                    </div>
                    <div class="content-testimonial">
                        <p>deiner rafael</p>
                        <span>diseñador en @prisma</span>
                    </div>
                </div>
            </div>

            <div class="card-testimonial">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates obcaecati nostrum neque, ad
                    commodi debitis quam sed dolores ullam corporis modi adipisci eum unde sint placeat ut tenetur et?
                    Quas!</p>

                <div class="wrapper-card">
                    <div class="content-avatar">
                        <img src="img/invitado1.jpg" alt="">
                    </div>
                    <div class="content-testimonial">
                        <p>deiner rafael</p>
                        <span>diseñador en @prisma</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="registro">
        <div class="wrapper-registro">
            <p>Registrate al newsletter</p>
            <h1>ctg.web<span>camp</span></h1>
            <a href="#">Registro</a>
        </div>
    </div>

    <div class="dias-faltantes">

        <h2>faltan</h2>
        <div class="wrapper-dias">
            <ul>
                <li>
                    <p class="numero">5</p>dias
                </li>
                <li>
                    <p class="numero">15</p>horas
                </li>
                <li>
                    <p class="numero">3</p>minutos
                </li>
                <li>
                    <p class="numero">9</p>segundos
                </li>
            </ul>
        </div>
    </div>

    <?php include 'includes/templates/footer.php'; ?>
</body>

</html>
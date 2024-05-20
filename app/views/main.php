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

    <?php include 'templates/header.php'; ?>
    <?php include 'templates/barra.php'; ?>

    <section class="contenido-principal contenedor">
        <h1>la mejor conferencia de diseño web en español</h1>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime error, nostrum aut impedit harum voluptas
            eligendi eius quidem corporis suscipit neque adipisci soluta, velit ipsum, accusamus nesciunt minus
            voluptatem sapiente!</p>
    </section>

    <section class="contenido-talleres">
        <div class="contenedor-video">
            <video autoplay loop muted>
                <source src="<?php echo 'public/video/video.mp4'; ?>" type="video/mp4">
            </video>
        </div>
        <div class="calendario contenedor">
            <h1>programa del evento</h1>


            <div class="opciones-calendario">
                
                    <a href="#" class="enlace-categoria"><i class=""></i></a>
           
            </div>
            <hr>

            <div class="evento">
                <h2><i class=""></i></h2>
                <p><i class="fa-regular fa-clock"></i></p>
                <p><i class="fa-solid fa-calendar-days"></i></p>
                <p><i class="fa-solid fa-user"></i></p>
            </div>
            <hr>


            <a class="btn" href="calendario.php">Ver todos</a>
        </div>

        </div>
    </section>

    <?php 
        require_once("./app/models/CategoryModel.php");

        $categorys = new CategoryModel();

        $categorys->get_categorys();

    ?>

    <pre>
        <?php var_dump($categorys);?>
    </pre>

    <section class="invitados contenedor">
        <h1>Nuestros invitados</h1>

        <div class="contenedor-invitados">
            <ul>
                
                    <li class="invitado">
                        <img src="img/" alt="">
                        <p class="texto-invitado"></p>
                    </li>
                
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

    <?php include 'templates/footer.php'; ?>
</body>

</html>
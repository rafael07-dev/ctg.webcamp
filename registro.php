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
    <?php include 'includes/header.php';?>

    <main class="section contenedor">
        <form class="form" action="#">
            <div class="form-registro">
                <div class="encabezado">
                    <h1>Registro</h1>
                </div>
    
                <div class="campo">
                    <label for="inputName">Nombre:</label>
                    <input id="inputName" type="text" placeholder="Escribe aquí">
                </div>
    
                <div class="campo">
                    <label for="inputApellido">Apellido:</label>
                    <input id="inputApellido" type="text" placeholder="Escribe aquí">
                </div>
    
                <div class="campo">
                    <label for="inputEmail">Correo:</label>
                    <input id="inputEmail" type="email" placeholder="Escribe aquí">
                </div>
    
            </div>
        
            <h2>Elige el numero de voletos</h2>

            <div class="paquetes">

                <div class="card-precios">
                    <h3>pase por dia</h3>
                    <span>$30</span>
                    <p><i class="fa-solid fa-check"></i>bocadillos gratis</p>
                    <p><i class="fa-solid fa-check"></i>todas las Conferencias</p>
                    <p><i class="fa-solid fa-check"></i>todos los Talleres</p>
                    <div class="boton">
                        <input class="dia" for="number" id="paseDia" type="number">
                    </div>
                </div>

                <div class="card-precios">
                    <h3>todos los dias</h3>
                    <span>$50</span>
                    <p><i class="fa-solid fa-check"></i>bocadillos gratis</p>
                    <p><i class="fa-solid fa-check"></i>todas las Conferencias</p>
                    <p><i class="fa-solid fa-check"></i>todos los Talleres</p>
                    <div class="boton">
                        <input class="todosDias" for="number" id="paseTodos" type="number">
                    </div>
                </div>

                <div class="card-precios">
                    <h3>pase por dos dias</h3>
                    <span>$45</span>
                    <p><i class="fa-solid fa-check"></i>bocadillos gratis</p>
                    <p><i class="fa-solid fa-check"></i>todas las Conferencias</p>
                    <p><i class="fa-solid fa-check"></i>todos los Talleres</p>
                    <div class="boton">
                        <input class="dosDias" for="number" id="paseDosDias" type="number">
                    </div>
                </div>
            </div>

            <h2>Elige tus talleres</h2>

            <div class="caja">

                <div class="viernes">
                    <h2>Viernes</h2>

                    <div id="viernes" class="wrapper">
                        <div class="talleres-op">
                            <p>Talleres</p>

                            <div class="campo-taller">
                                <label for="1">Responsive web desing <span>10:00</span></label>
                                <input id="1" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="2">Flexbox <span>10:00</span></label>
                                <input id="2" accesskey="viernes" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="3">HTML5 CSS3 <span>10:00</span></label>
                                <input id="3" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="4">Drupal <span>10:00</span></label>
                                <input id="4" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="5">Wordpres <span>10:00</span></label>
                                <input id="5" type="checkbox">
                            </div>
                        </div>

                        <div class="conferencias">
                            <p>Conferencias</p>
                            <div class="campo-taller">
                                <label for="6">Responsive web desing <span>10:00</span></label>
                                <input id="6" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="7">Flexbox <span>10:00</span></label>
                                <input id="7" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="8">HTML5 CSS3 <span>10:00</span></label>
                                <input id="8" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="9">Drupal <span>10:00</span></label>
                                <input id="9" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="10">Wordpres <span>10:00</span></label>
                                <input id="10" type="checkbox">
                            </div>

            
                        </div>

                        <div class="seminarios">
                            <p>Seminarios</p>
                            <div class="campo-taller">
                                <label for="11">Responsive web desing <span>10:00</span></label>
                                <input id="11" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="12">Flexbox <span>10:00</span></label>
                                <input id="12" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="13">HTML5 CSS3 <span>10:00</span></label>
                                <input id="13" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="14">Drupal <span>10:00</span></label>
                                <input id="14" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="15">Wordpres <span>10:00</span></label>
                                <input id="15" type="checkbox">
                            </div>


                        </div>
                    </div>
                </div>

                <div class="sabado">
                    <h2>Sabado</h2>

                    <div id="sabado" class="wrapper">
                        <div class="talleres-op">
                            <p>Talleres</p>

                            <div class="campo-taller">
                                <label for="16">Responsive web desing <span>10:00</span></label>
                                <input id="16" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="17">Flexbox <span>10:00</span></label>
                                <input id="17" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="18">HTML5 CSS3 <span>10:00</span></label>
                                <input id="18" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="19">Drupal <span>10:00</span></label>
                                <input id="19" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="20">Wordpres <span>10:00</span></label>
                                <input id="20" type="checkbox">
                            </div>
                        </div>

                        <div class="conferencias">
                            <p>Conferencias</p>
                            <div class="campo-taller">
                                <label for="21">Responsive web desing <span>10:00</span></label>
                                <input id="21" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label id="22" for="">Flexbox <span>10:00</span></label>
                                <input id="22" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="23">HTML5 CSS3 <span>10:00</span></label>
                                <input id="23" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="24">Drupal <span>10:00</span></label>
                                <input id="24" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="25">Wordpres <span>10:00</span></label>
                                <input id="25" type="checkbox">
                            </div>

            
                        </div>

                        <div class="seminarios">
                            <p>Seminarios</p>
                            <div class="campo-taller">
                                <label for="26">Responsive web desing <span>10:00</span></label>
                                <input id="26" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="27">Flexbox <span>10:00</span></label>
                                <input id="27" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="28">HTML5 CSS3 <span>10:00</span></label>
                                <input id="28" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="29">Drupal <span>10:00</span></label>
                                <input id="29" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="30">Wordpres <span>10:00</span></label>
                                <input id="30" type="checkbox">
                            </div>


                        </div>
                    </div>
                </div>

                <div class="domingo">
                    <h2>domingo</h2>

                    <div id="domingo" class="wrapper">
                        <div class="talleres-op">
                            <p>Talleres</p>

                            <div class="campo-taller">
                                <label for="31">Responsive web desing <span>10:00</span></label>
                                <input id="31" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="32">Flexbox <span>10:00</span></label>
                                <input id="32" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="33">HTML5 CSS3 <span>10:00</span></label>
                                <input id="33" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="34">Drupal <span>10:00</span></label>
                                <input id="34" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="35">Wordpres <span>10:00</span></label>
                                <input id="35" type="checkbox">
                            </div>
                        </div>

                        <div class="conferencias">
                            <p>Conferencias</p>
                            <div class="campo-taller">
                                <label for="36">Responsive web desing <span>10:00</span></label>
                                <input id="36" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="37">Flexbox <span>10:00</span></label>
                                <input id="37" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="38">HTML5 CSS3 <span>10:00</span></label>
                                <input id="38" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="39">Drupal <span>10:00</span></label>
                                <input id="39" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="40">Wordpres <span>10:00</span></label>
                                <input id="40" type="checkbox">
                            </div>

            
                        </div>

                        <div class="seminarios">
                            <p>Seminarios</p>
                            <div class="campo-taller">
                                <label for="41">Responsive web desing <span>10:00</span></label>
                                <input id="41" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="42">Flexbox <span>10:00</span></label>
                                <input id="42" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="43">HTML5 CSS3 <span>10:00</span></label>
                                <input id="43" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="44">Drupal <span>10:00</span></label>
                                <input id="44" type="checkbox">
                            </div>

                            <div class="campo-taller">
                                <label for="45">Wordpres <span>10:00</span></label>
                                <input id="45" type="checkbox">
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="caja resumen">

                <div class="info">
                    <h3>INFORMACION DE CONTACTO:</h3>
                    <p>Nombre: <span id="nombre"></span></p>
                    <p>Apellido: <span id="apellido"></span></p>
                    <p>Email: <span id="email"></span></p>
                </div>

                <div class="selecionados">
                    <h3>TALLERES SELECCIONADOS:</h3>
                    <div>
                        <ul class="t-seleccionados">

                        </ul>
                    </div>
                    
                </div>

                <div class="total">
                    <h3>TOTAL:</h3>
                    <P id="total">$0</P>
                </div>

                <button id="btnCalcular" type="button">Calcular</button>
            </div>
        </form>
    </main>

    <?php include 'includes/footer.php'?>

    <script src="js/script.js"></script>
    <script src="js/registro.js"></script>
</body>

</html>
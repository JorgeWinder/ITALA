<!DOCTYPE html>
<html>
<head>
    
    <?php include_once './View/Plantillas/cabecera.php'; ?>
    <?php include_once './View/metas/smashcake.met'; ?>

      <!-- Script / Estilos CSS / Recursos de la página actual -->

    <script src="View/Scripts/smashcake.js"></script> 
    <script src="Recursos/js/jquery.bxslider.min.js"></script> 
          
    <script></script>

    <style>

        /* ul:not(.nomclase)>li  */
        #precios ul>li {
         list-style-type: disc !important;
         color: #424242;
         margin-left: 25px;
        }       
    </style>

</head>
<body>
    <!-- Plant. código para cuerpo  -->
    <?php include_once './View/Plantillas/cuerpo.php'; ?>
    <!-- --> 

    <!-- preloader  -->
    <?php 
    include_once './View/Plantillas/preload.php';
    ?>
    <!-- --> 

    <?php 
    include_once './View/Plantillas/menu.php';
    ?>

    <!-- Botón flotante de mensajeria  -->
    <?php 
    include_once './View/Plantillas/mensajeria.php';
    ?>

    <!-- Inicio de contenido de página -->
       
    <section class="container" style="min-height: 350px;margin-top: 70px;margin-bottom: 15px;">

          <div class="row valign-wrapper">
                <div class="col m6 s12" style="">
                    <h2 style="color: #e59691;">Smashcake</h2>
                    <p>
                    Una torta no solo es un símbolo de un año más de nuestro pequeño. Le debe dar libertad para expresarse con felicidad, de una manera divertida: 
                    Comiéndola con las manos y experimentando su textura.
                    </p>
                    <p>
                        Es la prueba de lo felices que son cuando cumplen sus
                        primeros años.
                    </p>
                    <p><a href="#precios" class="waves-effect waves-light btn" style="background-color: #b56289;">Ver precios</a><p/>
                </div>          

                <div class="col m6 s12" style="">                    
                    <div class="video-container">
                        <iframe width="853" height="480" src="//www.youtube.com/embed/3BeGmFVlikM" frameborder="0" allowfullscreen></iframe>
                    </div>                    
                </div>

          </div>


          </div>

          
    </section>          


    <section class="container" style="">
                
                <div class="sliderx">
        
            <?php
            
                    //-----------------------------------------------
                            $conta = 0;
                            $ruta = "./Recursos/img/galeria/smashcake";                   
                            $directorio = opendir($ruta); //ruta actual 
                            
                            while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
                            {                        
        
                                if (is_dir($archivo))//verificamos si es o no un directorio
                                {
                                    //$resultado = "[". $archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
                                }
                                else
                                {   
                                    $conta = $conta + 1;  
                                    //echo $archivo; 
                                    echo "<div><a href='$ruta/$archivo' data-lightbox='example-image-link'><img class='example-1' src='". $ruta . "/" . "$archivo' width='1000' alt='image-1'></a></div>";                                         
                                    
                                }
                            }
                    //---------------------------------------------
            
            ?>    
        
                </div>
        
            </section> 
    

    <section id="precios" class="container" style="min-height: 450px;">

          <div class="row">
            
           <div class="col m6 s12" style="color: #e59691; padding: 20px 25px 0 0;margin-bottom: 10px;">
                    <h2>Smash Cake</h2>
                    <h5>PAQUETE SILVER - 450 soles</h5>
                    <ul>
                        <li>25 fotos digitales en alta calidad.</li>
                        <li>2 impresiones en tamaño 20x30cms.</li>
                        <li>10 impresiones en tamaño 10x15cms.</li>
                        <li>1 Big Cupcake (torta) finamente decorado.</li>
                        <li>1 vestuario especial (tutú, pantaloncito o short).</li>                    
                        <li>Entrega a domicilio.</li>
                    </ul>

                    <div class="row">
                        <div class="col m12 s12">
                            Hacer reserva vía :
                        </div>
                        <div class="col m6 s6">
                            <a href="https://api.whatsapp.com/send?phone=51956393300&text=http://www.italamigone.com/smashcake%0A%0APaquete%20Silver%20450%20Soles" class="waves-effect waves-light btn" style="width: 100%;margin-top: 8px;background-color: #b56289;">Whatsapp</a>
                        </div>
                        <div class="col m6 s6">
                            <a href="https://www.messenger.com/t/italamigonefotografia/" class="waves-effect waves-light btn" style="width: 100%;margin-top: 8px;background-color: #b56289;" onclick="var x = -2; var y = screen.height - 560;  window.open('https://www.messenger.com/t/italamigonefotografia/', 'newwindow', 'width=657, height=400, left=' + x.toString() + ', top=' + y.toString()); return false;" class="btn-floating blue darken-1" style="opacity: 0; transform: scale(0.4) translateY(0px) translateX(40px);width: 100%;margin-top: 8px;background-color: #b56289;" >Messenger</a>
                        </div>
                    </div>
                    
            </div>

            <div class="col m6 s12" style="color: #e59691; padding: 20px 20px 0 25px;margin-bottom: 10px;background-color: #efefef;">
                    <h2>Promoción</h2>
                    <h5><b>PAQUETE - 300 soles</b></h5>
                    <ul>
                        <li>20 fotos digitales en alta calidad.</li>
                        <li>1 Big Cupcake (torta) finamente decorado.</li>
                        <li>1 vestuario especial (tutú, pantaloncito o short).</li>
                    </ul>

                    <div class="row" style="margin-top: 80px;">
                        <div class="col m12 s12">
                            Hacer reserva vía :
                        </div>
                        <div class="col m6 s6">
                            <a href="https://api.whatsapp.com/send?phone=51956393300&text=http://www.italamigone.com/smashcake%0A%0APromo.%20bebes%20300%20Soles" class="waves-effect waves-light btn" style="width: 100%;margin-top: 8px;background-color: #b56289;">Whatsapp</a>
                        </div>
                        <div class="col m6 s6">
                            <a href="https://www.messenger.com/t/italamigonefotografia/" class="waves-effect waves-light btn" style="width: 100%;margin-top: 8px;background-color: #b56289;" onclick="var x = -2; var y = screen.height - 560;  window.open('https://www.messenger.com/t/italamigonefotografia/', 'newwindow', 'width=657, height=400, left=' + x.toString() + ', top=' + y.toString()); return false;" class="btn-floating blue darken-1" style="opacity: 0; transform: scale(0.4) translateY(0px) translateX(40px);width: 100%;margin-top: 8px;background-color: #b56289;" >Messenger</a>
                        </div>
                    </div>                    
            </div>



          </div> 


    </section>   



    <!-- Fin de contenido de página -->

    <?php 
    include_once './View/Plantillas/pie.php';
    ?>

</body>
</html>
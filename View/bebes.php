<!DOCTYPE html>
<html>
<head>
    
    <?php include_once './View/Plantillas/cabecera.php'; ?>

      <!-- Script / Estilos CSS / Recursos de la página actual -->

    <script src="View/Scripts/embarazo.js"></script> 
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
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="Recursos/js/materialize.min.js"></script>

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

          <div class="row">
                <div class="col m6 s12" style="">
                    <h2 style="color: #e59691;">Bebés</h2>
                    <p>
                    Las fotos de esta primera etapa serán las primeras fotos que colocaras en las primeras página de tu álbum familiar. 
                    </p>
                    <p>
                    Que mejor oportunidad para capturar este momento a partir de los 7 meses. Meses donde tu barriguita 
                    te hace expresar belleza y felicidad por la próxima llegada de una vida al mundo.
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
                    $ruta = "./Recursos/img/galeria/bebes";                   
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

<!--
    <section class="container" style="">
                
        <div class="sliderx">
                  
           <div><a href="Recursos/img/imgproduc1.jpg" data-lightbox="example-image-link"><img class="example-1" src="Recursos/img/imgproduc1.jpg" width="1000" alt="image-1"></a></div>
           <div><a href="Recursos/img/imgproduc1.jpg" data-lightbox="example-image-link"><img class="example-2" src="Recursos/img/imgproduc1.jpg" width="1000" alt="image-1"></a></div>
           <div><a href="Recursos/img/imgproduc1.jpg" data-lightbox="example-image-link"><img class="example-3" src="Recursos/img/imgproduc1.jpg" width="1000" alt="image-1"></a></div>
           <div><a href="Recursos/img/imgproduc1.jpg" data-lightbox="example-image-link"><img class="example-4" src="Recursos/img/imgproduc1.jpg" width="1000" alt="image-1"></a></div>
           <div><a href="Recursos/img/imgproduc1.jpg" data-lightbox="example-image-link"><img class="example-5" src="Recursos/img/imgproduc1.jpg" width="1000" alt="image-1"></a></div>         

        </div>

    </section>  
  -->  

    <section id="precios" class="container" style="min-height: 450px;">

          <div class="row">
            
          <div class="col m6 s12" style="color: #e59691; padding: 20px 25px 0 0;margin-bottom: 10px;">
                    <h2>Embarazo</h2>
                    <h5>PAQUETE SILVER - 400 soles</h5>
                    <ul>
                        <li>15 fotos digitales en alta calidad.</li>
                        <li>1 impresión en tamaño 20x30cms.</li>
                        <li>5 impresiones en tamaño 15x21cms.</li>
                        <li>1 vestuario especial (puede llevar un cambio de ropa adicional al que entregamos).</li>
                        <li>Entrega a domicilio.</li>                    
                    </ul>

                    <div class="row">
                        <div class="col m12 s12">
                            Hacer reserva via :
                        </div>
                        <div class="col m6 s6">
                            <a href="#precios" class="waves-effect waves-light btn" style="width: 100%;margin-top: 8px;background-color: #b56289;">Messenger</a>
                        </div>
                        <div class="col m6 s6">
                            <a href="#precios" class="waves-effect waves-light btn" style="width: 100%;margin-top: 8px;background-color: #b56289;">Whatsapp</a>
                        </div>
                    </div>
                    
            </div>

            <div class="col m6 s12" style="color: #e59691; padding: 20px 20px 0 25px;margin-bottom: 10px;background-color: #efefef;">
                    <h2>Promoción</h2>
                    <h5><b/>$ 150.00 (dólares)</b></h5>
                    <ul>
                        <li>10 Fotografías digitales en alta resolución.</li>
                        <li>04 Fotografías impresas de 10x15cm (las mismas de las 10 fotos seleccionadas).</li>
                        <li>Impresiones en fino papel de algodón.</li>
                        <li>Accesorios y props de la mejor calidad.</li>
                        <li>Fotografía únicamente del bebé.</li>                    
                    </ul>

                    <div class="row">
                        <div class="col m12 s12">
                            Hacer reserva via :
                        </div>
                        <div class="col m6 s6">
                            <a href="#precios" class="waves-effect waves-light btn" style="width: 100%;margin-top: 8px;background-color: #b56289;">Messenger</a>
                        </div>
                        <div class="col m6 s6">
                            <a href="#precios" class="waves-effect waves-light btn" style="width: 100%;margin-top: 8px;background-color: #b56289;">Whatsapp</a>
                        </div>
                    </div>
                    
            </div>


            <div class="col m6 s12" style="color: #e59691; padding: 20px 20px 0 0;margin-bottom: 10px;">
                    <h2></h2>
                    <h5>PAQUETE GOLD - 550 soles</h5>
                    <ul>
                        <li>20 fotos digitales en alta calidad.</li>
                        <li>1 impresión en tamaño 20x30cms.</li>
                        <li>5 impresiones en tamaño 15x21cms.</li>
                        <li>2 vestuarios especiales (puede llevar un cambio de ropa adicional a los que entregamos).</li>
                        <li>Entrega a domicilio.</li>                    
                    </ul>

                    <div class="row">
                        <div class="col m12 s12">
                            Hacer reserva via :
                        </div>
                        <div class="col m6 s6">
                            <a href="#precios" class="waves-effect waves-light btn" style="width: 100%;margin-top: 8px;background-color: #b56289;">Messenger</a>
                        </div>
                        <div class="col m6 s6">
                            <a href="#precios" class="waves-effect waves-light btn" style="width: 100%;margin-top: 8px;background-color: #b56289;">Whatsapp</a>
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
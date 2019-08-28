<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviosguia - Guias electronicas</title>
    
    <!-- Boostrap styles core -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'nav.php';?>

    <section class="container-fluid" id="promociones">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/example-slide-1.jpg" alt="First slide" height="200px">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>..</h3>
                                <p>...</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                                <img class="d-block w-100" src="img/example-slide-2.jpg" alt="First slide" height="200px">
                        </div>
                        <div class="carousel-item">
                                <img class="d-block w-100" src="img/example-slide-3.jpg" alt="First slide" height="200px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid" id="marcas">
        <div class="row">
            <div class="col text-center">
                <a href="dhl.php"><img class="img-fluid" src="img/DHL-Logos.png" alt="guías electrónicas dhl"></a>
            </div>
            <div class="col text-center">
                <a href=""><img class="img-fluid" src="img/FedEx-Logo.png" alt=""></a>
            </div>
        </div>
    </section>

    <section class="container-fluid" id="comoComprar">
        <div class="row">
            <div class="col-md-12">
                <h1>Como Comprar</h1>  
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2 col-6">
                <div class="card bg-darkblue text-center text-white my-2" style="height: 16rem;">
                    
                    <div class="card-body">
                        <i class="fa fa-calculator fa-5x" aria-hidden="true"></i>
                        <h6 class="card-tittle">Cotiza</h6>
                        <p>Cotiza el costo de tu envío con nuestra <a href="#">calculadora</a> es muy fácil de usar</p>
                        <br>
                    </div>
                </div>
                
                
            </div>
            <div class="col-md-2 col-6 text-center my-2">

                <div class="card bg-red text-center text-white" style="height: 16rem;">
                    <div class="card-body">
                        <i class="fa fa-credit-card fa-5x" aria-hidden="true"></i>
                        <h4 class="card-tittle">Paga</h4>
                        <p>Para tu comodida contamos con diversas formas de pago</p>
                    </div>
                </div>
                
               
            </div>
            <div class="col-md-2 col-6 text-center my-2">
                <div class="card bg-darkblue text-center text-white" style="height: 16rem;">
                    <div class="card-body">
                        <i class="fa fa-envelope fa-5x" aria-hidden="true"></i>
                        <h3>Recibe por email</h3>
                        <p>Recibe en tu correo electrónico, tu guía</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-6 text-center my-2">
                <div class="card bg-red text-center text-white" style="height: 16rem;">
                    <div class="card-body">
                        <i class="fa fa-print fa-5x" aria-hidden="true"></i>
                        <h3 class="card-title">Imprime</h3>
                        <p>Imprime tu guía electrónica y pegala en tu paquete</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-6 text-center my-2">
                <div class="card bg-darkblue text-center text-white" style="height: 16rem;">
                    <div class="card-body">
                        <i class="fa fa-plane fa-5x" aria-hidden"true"></i>
                        <h3 class="card-title">Envia</h3>
                        <p>Realiza tu envío de forma segura y si salir de tu casa</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-2">
        <div class="col text-center">
            <div class="empty-space"></div>
            <div class="empty-space"></div>
            <h2>Suscribete a nuestro boletín de correo y recibe las mejores promociones</h2>
            <div class="text-center">
                <form action="" class="form-inline td-flex justify-content-center">
                    <input type="text" class="form-control mr-3" placeholder="Nombre">
                    <input type="text" class="form-control mr-3" placeholder="Correo Electrónico">
                    <input type="submit" class="btn bg-red text-white" value="Envíar">
                </form>
                <div class="empty-space"></div>
                <div class="empty-space"></div>
                <div class="empty-space"></div>
            </div>
            
        </div>
    </section>

    <section class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-center text-white bg-darkblue">
                <h3>Calculadora</h3>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
                    <div class="row">
                        <div class="col">

                            <select  class="form-control my-1" name="paqueteria">
                                <option value="1">DHL Express</option>
                                <option value="2">DHL Terrestre</option>
                                <option value="3">FedEX Express</option>
                                <option value="4">FedEx Terrestre</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="C.P. Origen" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="C.P. Destino" required>
                        </div>
                    </div>
                    <div class="form-group my-3">
                        <input type="text" class="form-control" name="peso" placeholder="peso" required>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="largo" placeholder="largo" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="alto" required>
                        </div>
                        <div class="col">
                                <input type="text" class="form-control" placeholder="ancho" required>
                        </div>
                    </div>

                    <div class="form-group my-3">
                        <input type="submit" class="btn btn-lg bg-red text-white" name="cotizar" value="Envíar">        
                    </div>

                    <?php  echo "hola"; ?>

                    <?php 
                        if(isset($_POST['submit'])){
                            echo "hola mundo";
                            /*
                            $peso = $_POST["peso"];
                            $largo = $_POST["largo"];
                            $alto = $_POST["alto"];
                            $ancho = $_POST["ancho"];
                            $opcion = $_POST["paqueteria"];

                            $peso_volumetrico = ($alto * $ancho * $largo) / 5000;

                            if($peso_volumetrico > $peso){
                                $peso = $peso_volumetrico;
                            }

                            echo "hola";

                            switch($opcion){
                                case '1':
                                    if(peso >= 1 && $peso <= 1.9){
                                        echo "<p>$160</p>";
                                    }
                                    break;

                            }*/

                            /*
                            switch($opcion){
                                case "1":   
                                    if($peso >= 1 && $peso <= 1.9){
                                        echo "<p>$160</p>";
                                    }elseif($peso >= 2 && $peso <= 4.9){
                                        echo "<p>$185 </p>";
                                    }elseif($peso >= 5 && $peso <= 9.9){
                                        echo "<p>$205</p>";
                                    }elseif($peso >= 10 && $peso <= 14.9){
                                        echo "<p>$290</p>";
                                    }elseif($peso >= 15 && $peso <= 19.9){
                                        echo "<p>$410</p>";
                                    }elseif($peso >= 20 && $peso <= 29.9){
                                        echo "<p>$460</p>";
                                    }else($peso >= 30){
                                        echo "<p>$600</p>";
                                    }
                                    break;

                                case "2":
                                    if($peso <= 9.9){
                                        echo "<p>$170</p>";
                                    }elseif($peso >= 10 && $peso <= 14.9){
                                        echo "<p>$200</p>";
                                    }elseif($peso >= 15 && $peso <= 19.9){
                                        echo "<p>$295</p>";
                                    }elseif($peso >= 20 && $peso <= 24.9){
                                        echo "<p>$325</p>";
                                    }else($peso >= 25){
                                        echo "<p>$350</p>";
                                    }
                                    break;

                                case "3":
                                    if($peso >= 1 && $peso <= 4.9){
                                        echo "<p>$170 en sobres</p>";
                                        echo "<p>$210</p>";
                                    }elseif($peso >= 5 && $peso <= 9.9){
                                        echo "<p>$268</p>";
                                    }elseif($peso >= 10 && $peso <= 14.9){
                                        echo "<p>$430</p>";
                                    }else($peso >= 15){
                                        echo "<p>$595</p>";
                                    }
                                    break;

                                case "4":
                                    if($peso <= 14.9){
                                        echo "<p>$180</p>";
                                    }elseif($peso >= 15 && $peso <= 29.9){
                                        echo "<p>$235</p>";
                                    }elseif($peso >= 30 && $peso <= 34.9){
                                        echo "<p>$410</p>";
                                    }elseif($peso >= 35 && $peso <= 39.9){
                                        echo "<p>$460</p>";
                                    }elseif($peso >= 40 && $peso <= 44.9){
                                        echo "<p>$500</p>";
                                    }elseif($peso >= 45 && $peso <= 49.9){
                                        echo "<p>$550</p>";
                                    }
                                    break;

                            }
                            */


                        }
                    
                    
                    ?>

                    
                </form>
                
            </div>
            <div class="col-md-6 text-center  text-white bg-3">
                <div class="empty-space"></div>
                <div class="empty-space"></div>
                <h1>Enviosguia guías electrónicas</h1>
                <p>Si tienes alguna duda visita nuestra sección de <a href="#">preguntas frecuentes</a>, si eso no resuelve tu duda ponte en contacto con nosotros a través de nuestro correo electrónico nuestro whatsapp</p>
            </div>
        </div>
    </section>

    <?php include 'footer.php';?>

    <!-- JS Bootstrap core -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/fc04497753.js"></script>
</body>
</html>
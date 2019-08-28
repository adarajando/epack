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

    <section class="container" id="info">
        <div class="row">
            <div class="col">
                <h1 class="titulo">DHL Terrestre</h1>
                <p>Envíos terrestres, tiempo de entrega de dos a tres días.</p>
            </div>
        </div>
    </section>

    <section class="container" id="guias">
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="card text-center">
                    <div class="card-body">
                        <img class="text-center" src="img/box.svg" alt="" width="120px" height="120px">
                        <br>
                        <br>
                        <h4 class="card-title">5kg $175</h4>
                        <a href="" class="btn bg-red text-white" data-toggle="modal" data-target="#5kg">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="card text-center">
                    <div class="card-body">
                        <img class="text-center" src="img/box.svg" alt="" width="120px" height="120px">
                        <br>
                        <br>
                        <h4 class="card-title">10kg $200</h4>
                        <a href="#" class="btn bg-red text-white" data-toggle="modal" data-target="#10kg">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="card text-center">
                    <div class="card-body">
                        <img class="text-center" src="img/box.svg" alt="" width="120px" height="120px">
                        <br>
                        <br>
                        <h4 class="card-title">15kg $295</h4>
                        <a href="#" class="btn bg-red text-white" data-toggle="modal" data-target="#15kg">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="card text-center">
                    <div class="card-body">
                        <img class="text-center" src="img/box.svg" alt="" width="120px" height="120px">
                        <br>
                        <br>
                        <h4 class="card-title">20kg $325</h4>
                        <a href="#" class="btn bg-red text-white" data-toggle="modal" data-target="#20kg">Comprar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="empty-space"></div>

        <div class="row">
                <div class="col-md-3 text-center">
                    <div class="card text-center">
                        <div class="card-body">
                            <img class="text-center" src="img/box.svg" alt="" width="120px" height="120px">
                            <br>
                            <br>
                            <h4 class="card-title">25kg $350</h4>
                            <a href="#" class="btn bg-red text-white" data-toggle="modal" data-target="#15kg">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <div class="modal" id="25kg" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Guía Electrónica 25Kg $350</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="generar.php">
                        <h6>Remitente</h6>
                        <input type="text" class="form-control my-1" placeholder="Nombre del Remitente" required>
                      
                      <div class="row">
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Calle" required>
                          </div>
                          <div class="col-md-4">
                                <input type="text" class="form-control my-1" placeholder="Colonia" required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="No." required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="C.P." required>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="Estado" required>
                          </div>
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="Municipio" required>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="No. de Tel o Cel">  
                          </div>
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="Correo Electrónico">
                          </div>
                      </div>
                      <h6>Destinatario</h6>
                      <input type="text" class="form-control my-1" placeholder="Nombre del Destinatario" required>
                      
                      <div class="row">
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Calle" required>
                          </div>
                          <div class="col-md-4">
                                <input type="text" class="form-control my-1" placeholder="Colonia" required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="No." required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="C.P." required>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Estado" required>
                          </div>
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Municipio" required>
                          </div>
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="No. de Tel o Cel">
                          </div>
                      </div>
                      
                      <div class="row">
                          <div class="col-md-3">
                              <input type="text" class="form-control my-1" placeholder="peso">
                          </div>
                          <div class="col-md-3">
                              <input type="text" class="form-control my-1" placeholder="Largo">
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control my-1" placeholder="Alto">
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control my-1" placeholder="Ancho">
                          </div>
                      </div>
                      <label for="">Contenido del paquete</label>
                      <textarea class="form-control my-1" name="" id="" cols="30" rows="5"></textarea>
                      <div class="row">
                          <div class="col-md-4">
                              <input type="submit" class="btn bg-red text-white" value="Generar Guía">
                          </div>
                          <div class="col-md-4">
                                <a mp-mode="dftl" href="https://www.mercadopago.com/mlm/checkout/start?pref_id=26243358-19eff40a-918f-49b9-b3a8-358741a12419" name="MP-payButton" class=' btn bg-darkblue text-white'>
                                    Mercadopago
                                </a>
                                <script type="text/javascript">
                                    (function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
                                </script>
                          </div>

                          <div class="col-md-4">
                              <a href="#" class="btn bg-red text-white">Pago en Efectivo</a>
                          </div>
                      </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="20kg" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Guía Electrónica 20Kg $325</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="generar.php">
                        <h6>Remitente</h6>
                        <input type="text" class="form-control my-1" placeholder="Nombre del Remitente" required>
                      
                      <div class="row">
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Calle" required>
                          </div>
                          <div class="col-md-4">
                                <input type="text" class="form-control my-1" placeholder="Colonia" required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="No." required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="C.P." required>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="Estado" required>
                          </div>
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="Municipio" required>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="No. de Tel o Cel">  
                          </div>
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="Correo Electrónico">
                          </div>
                      </div>
                      <h6>Destinatario</h6>
                      <input type="text" class="form-control my-1" placeholder="Nombre del Destinatario" required>
                      
                      <div class="row">
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Calle" required>
                          </div>
                          <div class="col-md-4">
                                <input type="text" class="form-control my-1" placeholder="Colonia" required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="No." required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="C.P." required>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Estado" required>
                          </div>
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Municipio" required>
                          </div>
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="No. de Tel o Cel">
                          </div>
                      </div>
                      
                      <div class="row">
                          <div class="col-md-3">
                              <input type="text" class="form-control my-1" placeholder="peso">
                          </div>
                          <div class="col-md-3">
                              <input type="text" class="form-control my-1" placeholder="Largo">
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control my-1" placeholder="Alto">
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control my-1" placeholder="Ancho">
                          </div>
                      </div>
                      <label for="">Contenido del paquete</label>
                      <textarea class="form-control my-1" name="" id="" cols="30" rows="5"></textarea>
                      <div class="row">
                          <div class="col-md-4">
                              <input type="submit" class="btn bg-red text-white" value="Generar Guía">
                          </div>
                          <div class="col-md-4">
                                <a mp-mode="dftl" href="https://www.mercadopago.com/mlm/checkout/start?pref_id=26243358-19eff40a-918f-49b9-b3a8-358741a12419" name="MP-payButton" class=' btn bg-darkblue text-white'>
                                    Mercadopago
                                </a>
                                <script type="text/javascript">
                                    (function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
                                </script>
                          </div>

                          <div class="col-md-4">
                              <a href="#" class="btn bg-red text-white">Pago en Efectivo</a>
                          </div>
                      </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="15kg" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Guía Electrónica 15Kg $295</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="generar.php">
                        <h6>Remitente</h6>
                        <input type="text" class="form-control my-1" placeholder="Nombre del Remitente" required>
                      
                      <div class="row">
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Calle" required>
                          </div>
                          <div class="col-md-4">
                                <input type="text" class="form-control my-1" placeholder="Colonia" required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="No." required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="C.P." required>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="Estado" required>
                          </div>
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="Municipio" required>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="No. de Tel o Cel">  
                          </div>
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="Correo Electrónico">
                          </div>
                      </div>
                      <h6>Destinatario</h6>
                      <input type="text" class="form-control my-1" placeholder="Nombre del Destinatario" required>
                      
                      <div class="row">
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Calle" required>
                          </div>
                          <div class="col-md-4">
                                <input type="text" class="form-control my-1" placeholder="Colonia" required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="No." required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="C.P." required>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Estado" required>
                          </div>
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Municipio" required>
                          </div>
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="No. de Tel o Cel">
                          </div>
                      </div>
                      
                      <div class="row">
                          <div class="col-md-3">
                              <input type="text" class="form-control my-1" placeholder="peso">
                          </div>
                          <div class="col-md-3">
                              <input type="text" class="form-control my-1" placeholder="Largo">
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control my-1" placeholder="Alto">
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control my-1" placeholder="Ancho">
                          </div>
                      </div>
                      <label for="">Contenido del paquete</label>
                      <textarea class="form-control my-1" name="" id="" cols="30" rows="5"></textarea>
                      <div class="row">
                          <div class="col-md-4">
                              <input type="submit" class="btn bg-red text-white" value="Generar Guía">
                          </div>
                          <div class="col-md-4">
                                <a mp-mode="dftl" href="https://www.mercadopago.com/mlm/checkout/start?pref_id=26243358-19eff40a-918f-49b9-b3a8-358741a12419" name="MP-payButton" class=' btn bg-darkblue text-white'>
                                    Mercadopago
                                </a>
                                <script type="text/javascript">
                                    (function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
                                </script>
                          </div>

                          <div class="col-md-4">
                              <a href="#" class="btn bg-red text-white">Pago en Efectivo</a>
                          </div>
                      </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="10kg" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Guía Electrónica 10Kg $200</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="generar.php">
                        <h6>Remitente</h6>
                        <input type="text" class="form-control my-1" placeholder="Nombre del Remitente" required>
                      
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control my-1" placeholder="Calle" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control my-1" placeholder="Colonia" required>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control my-1" placeholder="No." required>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control my-1" placeholder="C.P." required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control my-1" placeholder="Estado" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control my-1" placeholder="Municipio" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control my-1" placeholder="No. de Tel o Cel">  
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control my-1" placeholder="Correo Electrónico">
                            </div>
                        </div>
                        <h6>Destinatario</h6>
                        <input type="text" class="form-control my-1" placeholder="Nombre del Destinatario" required>
                      
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control my-1" placeholder="Calle" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control my-1" placeholder="Colonia" required>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control my-1" placeholder="No." required>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control my-1" placeholder="C.P." required>
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-md-4">
                                <input type="text" class="form-control my-1" placeholder="Estado" required>
                          </div>
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Municipio" required>
                          </div>
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="No. de Tel o Cel">
                          </div>
                        </div>
                      
                      <div class="row">
                          <div class="col-md-3">
                              <input type="text" class="form-control my-1" placeholder="peso">
                          </div>
                          <div class="col-md-3">
                              <input type="text" class="form-control my-1" placeholder="Largo">
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control my-1" placeholder="Alto">
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control my-1" placeholder="Ancho">
                          </div>
                      </div>
                      <label for="">Contenido del paquete</label>
                      <textarea class="form-control my-1" name="" id="" cols="30" rows="5"></textarea>
                      <div class="row">
                          <div class="col-md-4">
                              <input type="submit" class="btn bg-red text-white" value="Generar Guía">
                          </div>
                          <div class="col-md-4">
                                <a mp-mode="dftl" href="https://www.mercadopago.com/mlm/checkout/start?pref_id=26243358-19eff40a-918f-49b9-b3a8-358741a12419" name="MP-payButton" class=' btn bg-darkblue text-white'>
                                    Mercadopago
                                </a>
                                <script type="text/javascript">
                                    (function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
                                </script>
                          </div>

                          <div class="col-md-4">
                              <a href="#" class="btn bg-red text-white">Pago en Efectivo</a>
                          </div>
                      </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal" id="5kg" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Guía Electrónica 5Kg $175</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="generar.php">
                        <h6>Remitente</h6>
                        <input type="text" class="form-control my-1" placeholder="Nombre del Remitente" required>
                      
                      <div class="row">
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Calle" required>
                          </div>
                          <div class="col-md-4">
                                <input type="text" class="form-control my-1" placeholder="Colonia" required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="No." required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="C.P." required>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="Estado" required>
                          </div>
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="Municipio" required>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="No. de Tel o Cel">  
                          </div>
                          <div class="col-md-6">
                              <input type="text" class="form-control my-1" placeholder="Correo Electrónico">
                          </div>
                      </div>
                      <h6>Destinatario</h6>
                      <input type="text" class="form-control my-1" placeholder="Nombre del Destinatario" required>
                      
                      <div class="row">
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Calle" required>
                          </div>
                          <div class="col-md-4">
                                <input type="text" class="form-control my-1" placeholder="Colonia" required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="No." required>
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control my-1" placeholder="C.P." required>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Estado" required>
                          </div>
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="Municipio" required>
                          </div>
                          <div class="col-md-4">
                              <input type="text" class="form-control my-1" placeholder="No. de Tel o Cel">
                          </div>
                      </div>
                      
                      <div class="row">
                          <div class="col-md-3">
                              <input type="text" class="form-control my-1" placeholder="peso">
                          </div>
                          <div class="col-md-3">
                              <input type="text" class="form-control my-1" placeholder="Largo">
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control my-1" placeholder="Alto">
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control my-1" placeholder="Ancho">
                          </div>
                      </div>
                      <label for="">Contenido del paquete</label>
                      <textarea class="form-control my-1" name="" id="" cols="30" rows="5"></textarea>
                      <div class="row">
                          <div class="col-md-4">
                              <input type="submit" class="btn bg-red text-white" value="Generar Guía">
                          </div>
                          <div class="col-md-4">
                                <a mp-mode="dftl" href="https://www.mercadopago.com/mlm/checkout/start?pref_id=26243358-19eff40a-918f-49b9-b3a8-358741a12419" name="MP-payButton" class=' btn bg-darkblue text-white'>
                                    Mercadopago
                                </a>
                                <script type="text/javascript">
                                    (function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
                                </script>
                          </div>

                          <div class="col-md-4">
                              <a href="" class="btn bg-red text-white">Pago en Efectivo</a>
                          </div>
                      </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="empty-space"></div>

    <?php include 'footer.php';?>

    <!-- JS Bootstrap core -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/fc04497753.js"></script>
</body>
</html>
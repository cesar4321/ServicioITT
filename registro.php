<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Departamento de ingles.|Inicio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>



   



    </head>
    <body>
       <?php
            session_start();
            ob_start();
                if(isset($_SESSION['sesion_exito']))
                {
                    //if($_SESSION['sesion_exito']==0) Como dije en el video, esto no es estrictamente necesario
                    // {echo "inicie sesion por favor";} Ya que si lo dejamos, siempre que accedemos a index arroja error.
                    if($_SESSION['sesion_exito']==2)
                        {echo "<script type=\"text/javascript\">alert('Todos los campos son necesarios.');</script>";}
                    if($_SESSION['sesion_exito']==3)
                        {echo "<script type=\"text/javascript\">alert('Usuario o Contraseña incorrectos.');</script>";}
                }
                else
                {
                    $_SESSION['sesion_exito']=0;
                }
                ?>
         <div class="header">
       <?php include 'menu.php'; ?>
      </div><br/><br/>




<br>
  <div class="container" >
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login" style="border-color: green; ">
    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
<form class="login-form " action="insercion.php" style="display: block;" role="form" name="form" method="POST" id="Registro">
                <div class="form-group">
                <label for="nombre">Nombre(s):</label>
                 
                 <div class="input-group">
                           <div class="input-group-addon"><span class="glyphicon glyphicon-user" id="Correos"></span></div>
                                        <input type="text" name="Nombre" id="nombre" tabindex="1" class="form-control" placeholder="Nombre" value="">
                                        </div>
                             <span class="help-block" id="error"></span>                     
                             </div>
                             <div class="form-group">
                                        <label for="Apellido">Apellidos:</label>
                                       
                                        <input type="text" name="Apellido" id="Apellido" tabindex="2" class="form-control" placeholder="Apellido">
</div>
                                   
                                    <div class="form-group">  
                                        <label for="NCtrl">Número  de control:</label> 
                                        <div class="input-group">
                      <div class="input-group-addon"><span class="icon-credit-card icon"></span></div>
                                        <input type="text" name="NCtrl" id="NCtrl" tabindex="3" class="form-control" placeholder="Número  de control."> </div>
                                           <span class="help-block" id="error"></span>   
                                         </div>

 <div class="form-group">
                                        <label for="Carrera">Carrera:</label>
                                        <div class="input-group">
                      <div class="input-group-addon"><span class="icon-book icon"></span></div>
                                          <select class="form-control" id="Carrera" tabindex="4" name="Carrera">
                                              <option value="Arquitectura">Arquitectura</option>
                                              <option value="contador publico">Contador publico</option>
                                              <option value="IAB">Ing. Ambiental</option>
                                              <option value="IBM">Ing. Biomedica</option>
                                              <option value="IBQ">Ing. Bioquimica</option>
                                              <option value="IC">Ing. Civil</option>
                                              <option value="IEM">Ing. Electromecanica</option>
                                              <option value="IET">Ing. Electronica</option>
                                              <option value="IAT">Ing. Aeronautica</option>
                                              <option value="IDI">Ing. en Diseño industrial</option>
                                              <option value="IGE">Ing. Gestion Empresarial</option>
                                              <option value="IIF">Ing. Informatica</option>
                                              <option value="IEL">Ing. en Logistica</option>
                                              <option value="IEN">Ing. en Nanotecnologia</option>
                                              <option value="ISC">Ing. en Sistemas Computacionales</option>
                                              <option value="TIC">Ing. en Tecnologias de la Informacion y Comunicaciones</option>
                                              <option value="IDT">Ing. Industrial</option>
                                              <option value="IQ">Ing. Quimica</option>
                                              <option value="IM">Ing. Mecanica</option>
                                              <option value="LEA">Lic. en Administracion</option>
                                        </select>
                                                    </div>
                             <span class="help-block" id="error"></span> 
</div>

                     <div class="form-group">
                                        <label for="Semestre">Semestre:</label>
                                         <div class="input-group">
                                   <div class="input-group-addon"><span class="icon-list-numbered icon"></span></div>
                                         <select class="form-control" id="Semestre" tabindex="5" name="Semestre">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                          <option value="11">11</option>
                                          <option value="12">12</option>
                                        </select>
                                                                 </div>
                             <span class="help-block" id="error"></span>     
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Correo electrónico :</label>
                                          <div class="form-group">
                                               <div class="input-group">
                                               <div class="input-group-addon"><span class="glyphicon glyphicon-envelope" id="Correos"></span></div>
                                        <input type="email" name="correo" id="email" class="form-control" placeholder="Correo electrónico" tabindex="6">
                                          </div> 
                                               <span class="help-block" id="error"></span>       
                                    </div>

                                          </div>
                                    <div class="form-group">
                                       


                                    <label for="password"> Contraseña:</label>
                                    <div class="input-group">
                                               <div class="input-group-addon"><span class="glyphicon glyphicon-lock" id="Correos"></span></div>
                                        <input type="password" name="password"  id="popover" data-toggle="popover" data-content=" 1 letra mayuscula 1caracter especial alfanumerica longitud de 8 a 15 caracteres" data-placement="right" tabindex="7" class="form-control" placeholder="Contraseña" title="La contraseña debe contener:" >
                                               </div> 
                                               <span class="help-block" id="error"></span>    
                                            </div>

                                        <div class="form-group">
                                        <label for="passconfirm">Confirme contraseña:</label>
                                         <div class="input-group">
                                               <div class="input-group-addon"><span class="glyphicon glyphicon-lock" id="Correos"></span></div>
                                        <input type="password" name="passconfirm" id="passconfirm" tabindex="8" placeholder="Confirmar" class="form-control" >
                                          </div> 
                                                 
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="button" name="login" id="login" tabindex="9" class="form-control btn btn-success" value="Registrar" onclick="pregunta();" >
                                            </div>
                                        </div>
                                    </div>
        </form>         
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

 <!--ventana modal para login -->
 <div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Iniciar sesion.</h4>
        </div>
        <div class="modal-body">
      

      <div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-0">
        <div class="panel panel-login" style="border-color: green;">
        <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
        <form class="login-form " style="display: block;" role="form" action="sesion.php" method="POST">
        <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Correo electronico" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Recordarme</label><br/>
                    <a href="registro.php">Registrarse.</a>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login" id="login" tabindex="4" class="form-control btn btn-success" value="Iniciar sesión">
                      </div>
                    </div>
                  </div>
          </form>     
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>

        </div>
    
      </div>
      
    </div>
  </div>




    <footer class="app-footer">
            <div class="app-texto">
                <h4>Instituto nacional de Mexico</h4>
                <h5>Instituto Tecnologico de Tijuana</h5>
                <p>Calzada Del Tecnológico S/N, Fraccionamiento Tomas Aquino. Tijuana, Baja California.<br/> 
                     C.P. 22414 Teléfono: +52 (664) 607 8400<br/></p>
                     <img src="img/galgo.gif">
            </div>
          
        </footer>

<script>

    function pregunta(){
        if(confirm('Se guardaran los datos. ¿Desea continuar?.')){
                document.form.submit() 
        }else{

        }


}


</script>
      
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
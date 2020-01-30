<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
    <!--<h2 class="text-center">Contac Form</h2>-->
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">




<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Animated Login Screen - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Nunito');
@import url('https://fonts.googleapis.com/css?family=Poiret+One');

body, html {
    height: 100%;
    background-repeat: no-repeat;    /*background-image: linear-gradient(rgb(12, 97, 33),rgb(104, 145, 162));*/
    background:black;
    position: relative;
}
#login-box {
    position: absolute;
    top: 0px;
    left: 50%;
    transform: translateX(-50%);
    width: 350px;
    margin: 0 auto;
    border: 1px solid black;
    background: rgba(48, 46, 45, 1);
    min-height: 250px;
    padding: 20px;
    z-index: 9999;
}
#login-box .logo .logo-caption {
    font-family: 'Poiret One', cursive;
    color: white;
    text-align: center;
    margin-bottom: 0px;
}
#login-box .logo .tweak {
    color: #ff5252;
}
#login-box .controls {
    padding-top: 330px;
}
#login-box .controls input {
    border-radius: 0px;
    background: rgb(98, 96, 96);
    border: 0px;
    color: white;
    font-family: 'Nunito', sans-serif;
}
#login-box .controls input:focus {
    box-shadow: none;
}
#login-box .controls input:first-child {
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
}
#login-box .controls input:last-child {
    border-bottom-left-radius: 2px;
    border-bottom-right-radius: 2px;
}
#login-box button.btn-custom {
    border-radius: 2px;
    margin-top: 8px;
    background:#ff5252;
    border-color: rgba(48, 46, 45, 1);
    color: white;
    font-family: 'Nunito', sans-serif;
}
#login-box button.btn-custom:hover{
    -webkit-transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
    background: rgba(48, 46, 45, 1);
    border-color: #ff5252;
}
#particles-js{
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: 50% 50%;
    position: fixed;
    top: 0px;
    z-index:1;
}    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
  <form action="saveusuarios.php" method="POST">
    <div class="container">
    <div id="login-box">
        <div class="logo">
           
            <!--<h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>-->
        </div><!-- /.logo -->
       <form action="saveusuarios.php" method="POST">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <!--<h3><i class="fa fa-shopping-cart"></i> registrate</h3>
                                    <p class="m-0">estas a punto de ser uno de nosotros</p>--><img src="imagenes/logo.png"  height="150" width="310" />
                                    
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control"  name="nombre" placeholder="Nombre " required>
                                    </div>
                                </div>
                               

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                       <input type="text" class="form-control"  name="apellidos" placeholder="apellido">
                                    </div>
                                    <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <select class="form-control" style="width: 85%" required name="sexo">
                                          <option value="">Elija sexo</option>
                                          <option value="masculino">Masculino</option>
                                           <option value="femenino">Femenino</option> 
                                           <option value="Otro">Timothy</option>                                         
                                         </select>
                                    </div>
                                </div>
                                </div>
                                 <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <select class="form-control" name="tipo" required="true">
                                            <option value="">Tipo De Documento</option>
                            <?php

                   $mysqli = new mysqli("localhost", "root", "", "proyecto");
                    if ($mysqli->connect_errno) {
                        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                        //echo "Opppss, el servidor esta en mantenimiento";
                        exit();
                    }

                   
                    
                         
                    $mysqli->real_query("SELECT * FROM tipoidentificacion");
                    $resultado = $mysqli->use_result();

                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<option value='".$fila['idtide']."'>".$fila['destide']."</option>";
                    }

                 ?>

                </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="number" class="form-control"   name="numero_doc" placeholder="Numero De Documento" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-home text-info"></i></div>
                                        </div>
                                       <select class="form-control" name="ciudad_nac" required>
                                            <option value="">Ciudad de nacimiento</option>
                            <?php

                   $mysqli = new mysqli("localhost", "root", "", "proyecto");
                    if ($mysqli->connect_errno) {
                        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                        //echo "Opppss, el servidor esta en mantenimiento";
                        exit();
                    }

                     
                    
                         
                    $mysqli->real_query("SELECT * FROM ciudad");
                    $resultado = $mysqli->use_result();

                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<option value='".$fila['idciu']."'>".$fila['nomciu']."</option>";
                    }

                 ?>

                </select>
                                    </div>
                                    </div>
                                     <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-calendar text-info"></i></div>
                                        </div>
                                        <input type="date" class="form-control"   name="fecha_nac" placeholder="fecha"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                        </div>
                                        <input type="number" class="form-control" min="1000000000" max="9999999999" name="telefono" placeholder="telefono" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-home text-info"></i></div>
                                        </div>
                                        <select class="form-control" name="ciudad_de_res" required>
                                            <option value="">Ciudad de residencia</option>
                            <?php

                   $mysqli = new mysqli("localhost", "root", "", "proyecto");
                    if ($mysqli->connect_errno) {
                        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                        //echo "Opppss, el servidor esta en mantenimiento";
                        exit();
                    }

                     
                    
                         
                    $mysqli->real_query("SELECT * FROM ciudad");
                    $resultado = $mysqli->use_result();

                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<option value='".$fila['idciu']."'>".$fila['nomciu']."</option>";
                    }

                 ?>

                </select>
                                    </div>
                                     <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-home text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control"   name="direccion" placeholder="direccion" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control"   name="correo" placeholder="ejemplo@gmail.com" required>
                                    </div>
                                </div>
<div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-key text-info"></i></div>
                                        </div>
                                        <input type="password" class="form-control"   name="clave" placeholder="contraseña" required>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Enviar" class="btn btn-info btn-block rounded-0 py-2">

                                </div>
                                
                            </div>

                        </div>
        </div><!-- /.controls -->
    </div><!-- /#login-box -->

</div><!-- /.container -->
</div><div id="particles-js"><canvas class="particles-js-canvas-el" width="794" height="496" style="width: 100%; height: 100%;"></canvas></div>
</form>
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>-->    <script type="text/javascript">
    $.getScript("https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js", function(){
    particlesJS('particles-js',
      {
        "particles": {
          "number": {
            "value": 80,
            "density": {
              "enable": true,
              "value_area": 800
            }
          },
          "color": {
            "value": "#ffffff"
          },
          "shape": {
            "type": "circle",
            "stroke": {
              "width": 0,
              "color": "#000000"
            },
            "polygon": {
              "nb_sides": 5
            },
            "image": {
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 5,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 40,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
          },
          "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": true,
              "mode": "repulse"
            },
            "onclick": {
              "enable": true,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 400,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 400,
              "size": 40,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "repulse": {
              "distance": 200
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true,
        "config_demo": {
          "hide_card": false,
          "background_color": "#b61924",
          "background_image": "",
          "background_position": "50% 50%",
          "background_repeat": "no-repeat",
          "background_size": "cover"
        }
      }
    );

});





    </script>


</body></html>
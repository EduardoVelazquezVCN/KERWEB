<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilosWeb.css">
    <title>LOGIN KERKLY</title>
</head>

<body>


    <div class="container">
        <div class="row justify-content-center pt-1 mt-4 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                <form action="" id="signin-form">
                    <div class="icono">
                        <img src="img/Frame 102.png" width="90" height="130">
                    </div>
                    <div class="form-group text-center pt-1">
                        <h1 class="text-Light">INICIAR SESIÓN</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-1">
                        <input type="text" class="form-control" id="singin-email" placeholder="Ingrese su correo"
                            required>
                    </div>
                    <div class="form-group mx-sm-4 pb-1">
                        <input type="password" class="form-control" id="signin-contraseña" placeholder="Ingrese su contraseña" required>
                    </div>
                    <div class="form-group mx-sm-4 pb-1">
                        <input class="btn btn-block ingresar2" value="INGRESAR" type="submit">
                    </div>
                  

                    
                   
                    
                    <!--<div class="form-group mx-sm-4 text-right">
                        <span><a class="olvide" href="#">Olvide mi contraseña</a></span>
                    </div>-->
                </form>
            </div>
        </div>
    </div>

    <!--ACCESO A CONTENIDO CON INICIO DE SESION -->
    <div class="container p-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <ul class="list-group post" id="post">
                </ul>
            </div>
        </div>
    </div>


   

    <!--Boostrap Scrips-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <!--Diseño de ventana emergente de error-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    

    <!--Mis Scrips-->
    <script src="funciones.js"></script>

</body>

</html>
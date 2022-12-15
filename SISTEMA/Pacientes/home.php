<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/alertify.core.css">
    <link rel="stylesheet" href="css/alertify.default.css">

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/funciones.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/alertify.js"></script>
    <script src="https://kit.fontawesome.com/eb443385a1.js" crossorigin="anonymous"></script>
    <script src="js/chart.js"></script>
    <title>Document</title>
</head>
<body>
    <hr>
    <div class="containerasd">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid" style="color: white;">
            <a class="navbar-drand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupported"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#", id="menuInicio"><i class="fa-solid fa-house-user"></i>Inicio</a>
                    </li>
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-download">
                        Administrar
                       </i>  
                       </a>
                       <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" id="menuAlumno">Estadisticas</a></li>
                        <li><a class="dropdown-item" onclick="location.href='../index.html'" >SALIR</a></li>
                        
                        
                    </ul>
                       
                   </li>
                   
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn-outline-succes" type="submit">Search</button>
                </form>
            </div>
        </div>
        </nav>
    </div>
    <!--Div de cuerpo-->
    <hr><br>
    <div class="container">
        <!--Inicia Pag de principal-->
        <div id="divPrincipal" style="text-align: center;">
            <div class="alert alert-success">
                ESTADISTICAS
            </div>
            <img src="img/991.png" width="250px" height="250px" style="border-radius: 50%;">
        </div>
         <!--Termina Pag de principal-->
    </div>
    <!--Termina div de cuerpo-->
    <!--Inicia div de cuerpo-->
   
        
        <div class="col-9" id="mostrarAlumnos"> </div>
        </div>

        <!--Inicia div para mostrar grafica-->
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8" id="mostrarGrafica"></div>
        </div>
    </div>
</body>
</html>

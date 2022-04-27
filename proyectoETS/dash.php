<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" href="images/ico/favicon.ico" sizes="32x32" />
    <!--Fonts and icons-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">  
    <link href="assets/css/black-dashboard.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/color.css">

    <title>Control Escolar - Administrador</title>
    <style>
        label.error {
            margin-bottom: 15px !important;
            color: bisque !important;
        }
        
    </style>
</head>
<body>

<div class="wrapper">
<div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <span class="simple-text logo-mini">
                        Bienvenido Admin: <b><?php echo ($nombreUsuario); ?> </b>
                    </span>
                </div>
                <ul class="nav">
                    <li class="active ">
                        <a href="dash.php">
                            <i class="fa fa-home"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="fa fa-sign-out-alt"></i>
                            <p>Salir</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
        <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <span class="navbar-brand" style="margin-top:3%">Control Escolar</span>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!--CONTENEDOR -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header">
                                        <h3 class="title" style="margin-bottom: 10px !important;">Listado de Administrador
                                        </h3>
                                        <hr style="border-top: 1px solid #2aa7df;">
                                </div>
                                <!--List Table-->
                                <div class="row row-cols-1 row-cols-md-4">
                                <div class="col mb-4">
                                    <div class="card">
                                    <img src="assets/img/materias.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Materias</h5>
                                        <p class="card-text">Dentro de este enlace podras insertar, modificar o borrar registros correspondientes a las Materias de la Institución</p>
                                        <a href="view-admin-crud-materia.php" class="btn btn-primary btn-block">Entrar</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card">
                                    <img src="assets/img/prof.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Profesor</h5>
                                        <p class="card-text">Dentro de este enlace podras insertar, modificar o borrar registros correspondientes a los Profesores de la Institución.</p>
                                        <a href="view-admin-crud-profesor.php" class="btn btn-primary btn-block">Entrar</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card">
                                    <img src="assets/img/profe.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Alumno</h5>
                                        <p class="card-text">Dentro de este enlace podras insertar, modificar o borrar registros correspondientes a los Alumnos de la Institución.</p>
                                        <a href="view-admin-crud-alumno.php" class="btn btn-primary btn-block">Entrar</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="card">
                                    <img src="assets/img/curso.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Curso</h5>
                                        <p class="card-text">Dentro de este enlace podras insertar, modificar o borrar registros correspondientes a los Cursos de la Institución.</p>
                                        <a href="view-admin-crud-curso.php" class="btn btn-primary btn-block">Entrar</a>
                                    </div>
                                    </div>
                                </div>
                                </div>

                                <!-- End List Table-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script src="js/jquery-3.5.1.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
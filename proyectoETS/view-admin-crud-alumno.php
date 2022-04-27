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
    <link href="css/loaderStyle.css" rel="stylesheet">
    <!-- Style Datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">  
    <link href="assets/css/black-dashboard.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/color.css">

    <title>Control Escolar - Administrador</title>
    <style>
    label.error {
        margin-bottom: 15px !important;
        color: bisque !important;
    }
    table.dataTable tbody tr {
    background-color: transparent;
    }
    .dataTables_length{
        display: none;
    }
    .dataTables_wrapper .dataTables_filter {
    width: 100%;
    }
    .dataTables_wrapper .dataTables_filter label {
    float: left !important;
    text-align: left !important;
    width: 100%;
    }
    .dataTables_wrapper .dataTables_filter input {
    height: 2rem;
    width: 100%;
    font-size: 10px;
    }
    .dataTables_wrapper .dataTables_info{
    color: #2aa7df;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    color: white !important;
    border: 1px solid #e2d3d3;
    background: transparent;
    }
    .dataTables_scroll .dataTables_scrollBody::-webkit-scrollbar {
    width: 10px;
    }
    .dataTables_scroll .dataTables_scrollBody::-webkit-scrollbar-thumb {
    background: #2aa7df; 
    border-radius: 10px;
    transition: 0.3s;
    }
    .dataTables_scroll .dataTables_scrollBody::-webkit-scrollbar-thumb:hover {
    opacity: 1
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
                    <li>
                        <a href="dash.php">
                            <i class="fa fa-home"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="view-admin-crud-alumno.php">
                            <i class="fa fa-list"></i>
                            <p>Alumno</p>
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
                                        <h3 class="title" style="margin-bottom: 10px !important;">CRUD Alumnos
                                        </h3>
                                        <hr style="border-top: 1px solid #2aa7df;">
                                </div>
                                <!--List Table-->
                                <div class='container'>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-user-plus">  Nuevo</i></a>
                                    <table id="tab_proyectos" width="100%" class='table'>
                                        <thead>
                                            <tr>
                                                <th scope='col' class='titulo'>ID Alumno</th>
                                                <th scope='col' class='titulo'>ID Curso</th>
                                                <th scope='col' class='titulo'>Nombre</th>
                                                <th scope='col' class='titulo'>Apellido P</th>
                                                <th scope='col' class='titulo'>Apellido M</th>
                                                <th scope='col' class='titulo'>Telefono/th>
                                                <th scope='col' class='titulo'>Email</th>
                                                <th scope='col' class='titulo'>Boleta</th>
                                                <th scope='col' class='titulo'>Usuario</th>
                                                <th scope='col' class='titulo'>Acciones</th>
                                            </tr>
                                        </thead>
                                        
                                        <tr>
                                            <td>1</td>
                                            <td>2CV30</td>
                                            <td>Juanito</td>
                                            <td>Perez</td>
                                            <td>Diaz</td>
                                            <td>5524492132</td>
                                            <td>juanito@gmail.com</td>
                                            <td>2020402020</td>
                                            <td>juanp456</td>
                                            <td> <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> <a href="#" id="link" class="btn btn-primary btn-sm"><i class="fa fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2CV30</td>
                                            <td>Juanito</td>
                                            <td>Perez</td>
                                            <td>Diaz</td>
                                            <td>5524492132</td>
                                            <td>juanito@gmail.com</td>
                                            <td>2020402020</td>
                                            <td>juanp456</td>
                                            <td> <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> <a href="#" id="link" class="btn btn-primary btn-sm"><i class="fa fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2CV30</td>
                                            <td>Juanito</td>
                                            <td>Perez</td>
                                            <td>Diaz</td>
                                            <td>5524492132</td>
                                            <td>juanito@gmail.com</td>
                                            <td>2020402020</td>
                                            <td>juanp456</td>
                                            <td> <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> <a href="#" id="link" class="btn btn-primary btn-sm"><i class="fa fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2CV30</td>
                                            <td>Juanito</td>
                                            <td>Perez</td>
                                            <td>Diaz</td>
                                            <td>5524492132</td>
                                            <td>juanito@gmail.com</td>
                                            <td>2020402020</td>
                                            <td>juanp456</td>
                                            <td> <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> <a href="#" id="link" class="btn btn-primary btn-sm"><i class="fa fa-trash-alt"></i></a></td>
                                        </tr>
                                    </table>
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
<script src="js/buscar.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script> 
        $(document).on("click","#link",function(){
            alert("Ya quedo :)");
        });
        $(document).ready(function() {
            $('#tab_proyectos').DataTable({
                "lengthMenu": [[10], [10]],
                "pagingType": "numbers",
                "ordering": false,
                scrollY: '44vh',
                scrollCollapse: true,
                autoFill: true,
                responsive: true,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ proyectos por pagina",
                    "zeroRecords": "No se encontro",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros",
                    "infoFiltered": "(Se filtraron de _MAX_ registros en total)"
                }
            });
            $("input.form-control").attr("placeholder", "Realiza tu busqueda");
        });

        
    </script> 
</body>
</html>
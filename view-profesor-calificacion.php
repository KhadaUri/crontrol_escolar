<?php
session_start();
if (isset($_SESSION['usuario'])) {
    if($_SESSION['usuario']['tipo_usuario']!='2'){
        header('Location:view-alumno.php');
    }
}else{
    header('Location:index.php');
}
$id_usuario = $_REQUEST['id_usuario'];
  require 'conexion.php';
  
  $id_usuario = $_GET['id_usuario'];
  
  $sentencia = "SELECT usuario.id_curso,materias.nombre_materia, usuario.nombre
FROM materias
INNER JOIN usuario
ON materias.id_curso=usuario.id_curso WHERE id_usuario = '$id_usuario'";
 $res = $cnx->query($sentencia);
  $row = $res->fetch_array(MYSQLI_ASSOC);
?>

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
    <!-- CSS Files -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="assets/css/black-dashboard.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/color.css">

    <title>Control Escolar - Profesor</title>
    <style>
        form .form-control{
        background-color: #1d253b8c;
      }
      option{
        color: black;
      }
      .enc{
        padding-left: 15px;
      }
    </style>
</head>
<body>

<div class="wrapper">
<div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <span class="simple-text logo-mini">
                        Bienvenido Profesor: <b><?php echo $_SESSION['usuario']['usuario']?> </b>
                    </span>
                </div>
                <ul class="nav">
                    <li>
                        <a href="view-profesor-curso.php">
                            <i class="fa fa-list"></i>
                            <p>Cursos</p>
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
                                        <h3 class="title" style="margin-bottom: 10px !important;">Materias de <?php echo $row['nombre']?>
                                        </h3>
                                        <hr style="border-top: 1px solid #2aa7df;">
                                </div>
                                <!--List Table-->
                                
                                    <p class="enc">NOMBBRE: <?php echo $row['nombre']?></p>
                                    <p class="enc">MATERIA: <?php echo $row['nombre_materia']?></p>
                                    <p class="enc">Escoge una calificación de 0 a 10</p>
                                    
                                    <form action="insert-calif.php" method="post">
                                    <label for="nombre"></label>
                                        <input type="hidden" class="form-control" value="<?php echo $row['nombre'];?>" name="nombre" required >
                                        <label for="nombre"></label>
                                        <input type="hidden" class="form-control" value="<?php echo $row['nombre_materia'];?>" name="nombre_materia" required >
                                        <label for="nombre"></label>
                                        <input type="hidden" class="form-control" value="<?php echo $row['id_curso'];?>" name="id_curso" required >
                                      <div class="form-row align-items-center">
                                        <div class="col-auto">

                                         
                                          <select class="custom-select form-control" name="calificacion" required>
                                            <option selected disabled value="<?php echo $row['calificacion'];?>">Escoge una calificación...</option>
                                                <option value="0">0</option>
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
                                          </select>
                                        </div>
                                        <div class="col-auto my-1">
                                          <button type="submit" class="btn btn-primary btn-block ">Calificar</button>
                                        </div>
                                      </div>
                                    </form>
                                <!-- End List Table-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--Javascript Files-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="js/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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
                "ordering": true,
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
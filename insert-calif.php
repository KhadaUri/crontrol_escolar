<?php
include("conexion.php");
    $nombre_materia= $_POST['nombre_materia'];
    $nombre=$_POST['nombre'];
    $calificacion= $_POST['calificacion'];
    $id_curso= $_POST['id_curso'];
    
   

    $query="INSERT INTO control_escolar.calificaciones(nombre_materia,nombre,calificacion,id_curso) VALUES('$nombre_materia','$nombre','$calificacion','$id_curso')";
    $res=$cnx->query($query);
    if($res){
        echo "<script>
                alert('Calificación registrada con Éxito');
                window.location.href='view-profesor-curso.php';
              </script>";
    }
    else{
        echo "<script>
                alert('Ocurrio un error');
                window.location.href='view-profesor-curs.php';
              </script>";
    }
?>

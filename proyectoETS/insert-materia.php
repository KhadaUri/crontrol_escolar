<?php
include("conexion.php");
    $id_materia = $_POST['id_curso'];
    $id_curso= $_POST['nombre'];
    $nombre_materia= $_POST['apaterno'];
   

    $query="INSERT INTO control_escolar.usuario(id_materia, id_curso, nombre_materia) VALUES('$id_materia','$id_curso','$nombre_materia')";
    $res=$cnx->query($query);
    if($res){
        echo "<script>
                alert('Materia registrada con Éxito');
                window.location.href='view-admin-crud-profesor.php';
              </script>";
    }
    else{
        echo "<script>
                alert('Ocurrio un error');
                window.location.href='view-admin-crud-materia.php';
              </script>";
    }
?>

<?php
    include("Conexion.php");
    
    $id=$_GET["id"];
    
    $sql="DELETE FROM datos WHERE id='$id'";
    
    $resultado = mysqli_query($conex, $sql);
    
    if($resultado){
        echo "<script>alert('Registro eliminado con exito');
        location.href='../Index.html';
        </script>";
    }else{
        echo "<script>alert('Error al eliminar el registro');
        location.href='../Index.html';
        </script>";
    }
?>
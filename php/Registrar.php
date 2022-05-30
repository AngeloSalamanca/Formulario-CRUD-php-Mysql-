<?php
    include("Conexion.php");

    $Nombre=$_POST["nombre"];
    $Cargo=$_POST["cargo"];
    $Edad=$_POST["edad"];
    $Peso=$_POST["peso"];
    $Estatura=$_POST["estatura"];

    $sql="INSERT INTO datos(nombre, cargo, edad, peso, estatura) VALUES ('$Nombre', '$Cargo', '$Edad', '$Peso', '$Estatura')";

    $resultado = mysqli_query($conex, $sql);

    if($resultado){
        echo "<script>alert('Registro guardado con exito');
        location.href='../Index.html';
        </script>";
    }else{
        echo "<script>alert('Error al guardar el registro');
        location.href='../Index.html';
        </script>";
    }
?>
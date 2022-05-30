<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Estadisticas</title>
</head>
<?php
    include("Conexion.php");

    $sql = "SELECT * FROM datos";
    $resultado = mysqli_query($conex, $sql);
?>

<header>
    <div class="card">
        <div class="card-header">
            <h1>Estadisticas</h1>
        </div>
    </div>
</header>
<body>
<div class="card-body">        
    <div class="table-responsive">
        <table id="tablaDatos" class="table table-bordered">
            <tr>
                <td><strong>Nombre</strong></td>
                <td><strong>Cargo</strong></td>
                <td><strong>Edad</strong></td>
                <td><strong>Peso</strong></td>
                <td><strong>Estatura</strong></td>
                <td><strong>Acción</strong></td>
            </tr>
    <?php
    while($mostrar=mysqli_fetch_array($resultado)){
    ?>
            <tr>
                <td><?php echo $mostrar['nombre']; ?></td>
                <td><?php echo $mostrar['cargo']; ?></td>
                <td><?php echo $mostrar['edad']; ?></td>
                <td><?php echo $mostrar['peso']; ?></td>
                <td><?php echo $mostrar['estatura']; ?></td>
                <td>
                    <a class="link-success" href="Editar.php?id=<?php echo $mostrar['id']?>">Editar</a>
                    <a class="link-danger" href="Eliminar.php?id=<?php echo $mostrar['id']?>">Eliminar</a>
            </tr>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
?>
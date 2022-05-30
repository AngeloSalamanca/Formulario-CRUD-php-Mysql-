<?php
    include("Conexion.php");
    
    $id=$_GET["id"];
    
    $sql="SELECT * FROM datos WHERE id='$id'";
    
    $resultado = mysqli_query($conex, $sql);
    
    $mostrar = mysqli_fetch_array($resultado);
        $Nombre=$mostrar['nombre'];
        $Cargo=$mostrar['cargo'];
        $Edad=$mostrar['edad'];
        $Peso=$mostrar['peso'];
        $Estatura=$mostrar['estatura'];

        if(isset($_POST["nombre"])){
            $Nombre=$_POST["nombre"];
            $Cargo=$_POST["cargo"];
            $Edad=$_POST["edad"];
            $Peso=$_POST["peso"];
            $Estatura=$_POST["estatura"];
            
            $sql="UPDATE datos SET nombre='$Nombre', cargo='$Cargo', edad='$Edad', peso='$Peso', estatura='$Estatura' WHERE id='$id'";
            
            $resultado = mysqli_query($conex, $sql);
            
            if($resultado){
                echo "<script>alert('Registro actualizado con exito');
                location.href='../Index.html';
                </script>";
            }else{
                echo "<script>alert('Error al actualizar el registro');
                location.href='../Index.html';
                </script>";
            }
        }
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registro de datos</title>
</head>
<header>
    <div class="card">
        <div class="card-header">
            <h1>Editar datos</h1>
        </div>
    </div>
</header>
<body>
    <div class="card">
      <form action="Editar.php?id=<?php echo $_GET['id']?>" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="nombre" class="form-label">Nombre: *</label>
                <input type="text" name="nombre" id="nombre" placeholder="Digite su nombre" required class="form-control"/>
              </div>
              <div class="form-group">
                <label for="cargo" class="form-label">Cargo: *</label>
                <select id="cargo" name="cargo" required class="form-control">
                  <option value="Gerente" selected>Gerente</option>
                  <option value="Subgerente">Subgerente</option>
                  <option value="Lider">Lider</option>
                  <option value="Tecnico">Tecnico</option>
                  <option value="Profesional">Profesional</option>
                  <option value="Operario">Operario</option>
                  <option value="ServiciosVarios">Servicios Varios</option>
                </select>
              </div>
              <div class="form-group">
                <label for="edad" class="form-label">Edad: *</label>
                <input type="number" name="edad" id="edad" placeholder="Digite su edad" required class="form-control"/>
              </div>
              <div class="form-group">
                <label for="peso" class="form-label">Peso (Kg): *</label>
                <input type="number" name="peso" id="peso" placeholder="Digite su peso" class="form-control"/>
              </div>
              <div class="form-group">
                <label for="estatura" class="form-label">Estatura (Metros): *</label>
                <input type="text" name="estatura" id="estatura" placeholder="Digite su estatura" required class="form-control"/>
              </div>
      
              <div class="form-group">
                <input type="submit" value="Guardar Datos" onclick="location.href='../Index.html'" class="btn btn-primary"/>
                <input type="button" value="Cancelar" onclick="location.href='../Index.html'" class="btn btn-primary"/>
              </div>
          </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<footer>
</footer>
</html>
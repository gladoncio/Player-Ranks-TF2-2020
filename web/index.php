<?php
include_once 'basesDeDatos/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM players ORDER BY points DESC";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
<?php 
const DATE_FORMAT = "%b %d, %Y"; 
?>
<html lang="en">
<link rel="stylesheet" href="estilos.css" />
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="fondo.css">

<!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="datatables.min.css"/>
    <title></title>
    <style>
        table.dataTable thead {
            color:white;
        }
        
    </style>  
      
  </head>
  <body>
      <div id="jajajaja" class="text-white">

    <h1 class="text-center text-white">Puntuaciones</h1>
      
    <h3 class="text-center text-white">Tabla de puntos de TF2</h3>
    
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table table-striped table-dark" style="width:100%">
                <thead class="text-center text-white">
                    <th>Nombre</th>
                    <th>Puntos</th>
                    <th>Ultima Conexion</th>
                    <th>Horas</th>
                    <th>Asesinatos</th>
                    <th>Headshoots</th>
                </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                            $fecha = $usuario["seen"];
                            $puntos = $usuario['points'];
                            $horas = $usuario['playtime'];
                
                    ?>
                    <tr>
        <td data-label="Nombre"><?php echo $usuario['nickname'] ?></td>
        <td data-label="Puntos"><?php echo number_format($puntos, 2) ?></td>
        <td data-label="Ultima Conexion"><?php echo strftime(DATE_FORMAT, $fecha)?></td>
        <td data-label="Horas"><?php echo round($horas / 3600, 2) ?></td>
        <td data-label="Asesinatos"><?php echo $usuario['kills'] ?></td>
        <td data-label="Headshoots"><?php echo $usuario['headshots'] ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
           </div>
       </div> 
    </div>
    </div>
   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
      
<!--    Datatables-->
    <script type="text/javascript" src="datatables.min.js"></script> 
      
      
    <script>
      $(document).ready(function(){
         $('#tablaUsuarios').DataTable({
        "order": [[ 1, "desc" ]]
    }
  
         ); 
      });
    </script>
      
  </body>
</html>
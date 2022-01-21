<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mostrar</title>
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
    <?php
    require_once 'metodos.php';
    $objMetodo = new metodos();
    $consulta = "SELECT * FROM Empleados";
    $objMetodo->realizarconsulta($consulta);
    if($objMetodo->comprobarnumrow()>0){

      echo
          '
            <table>
              <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>DNI</th>
              </tr>
              ';
              for($i=0;$i<$objMetodo->comprobarnumrow();$i++){
                $fila=$objMetodo->extraerfila();
                if(empty($fila["Correo"])){
                  $fila["Correo"] = "null";
                }
              echo '<tr>';
                echo '<td>'.$fila["Nombre"].'</td>';
                echo '<td>'.$fila["Correo"].'</td>';
                echo '<td>'.$fila["Telefono"].'</td>';
                echo '<td>'.$fila["DNI"].'</td>';
              echo '</tr>';
              }
          echo    '
            </table>
          ';
        }else {
          if($objMetodo->comprobarnumrow()<0){
            echo 'Se ha producido un error';
          }else {
            echo 'No hay datos';
          }
        }
     ?>
  </body>
</html>

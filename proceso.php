<!DOCTYPE html>
<html lang="en">
<head><title>CALCULO DEL AREA DE UN OCTAGONO REGULAR</title></head>
<body>
   <?php

   if(isset($_POST['btn'])&&($_POST['btn'] == 'Calcular')){

    $lados = $_POST['lados'];
    $apotema = $_POST['apotema'];
    $perimetro = null;
    $area = null;

        if(!empty($lados)or!empty($apotema)){ 
         
          echo "<h2 aling='center'>CALCULO DEL AREA DE UN OCTAGONO REGULAR</h2>";
         
          $perimetro = $lados * 8;
          $area = ($perimetro * $apotema) /2;

            echo "Perimetro: " . $perimetro;
            echo "<br/><br/>";
            echo "<br>Area del Octagono: " . $area . "cm2";
        }
   } 
   ?> 
</body>
</html>
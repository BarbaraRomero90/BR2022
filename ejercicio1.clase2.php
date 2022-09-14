<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    
    <?php
               /*
        Crear un archivo “tp1_backend.php” y realizar los siguientes ejercicios:
        1. Imprima por pantalla: “Hola mundo”.
        2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.
        3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
        entera y el resto de la división entera.
        4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
        pantalla.
        5. Implementar algoritmos que permitan:
        a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
        b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.
        */

        echo "hola mundo";
    ?>

        <br>
        <br>
    <?php
        $cadena="hola mundo";
        echo $cadena;
    ?>

        <br>
        <br>
    
    <?php

      $variable1="12";
      $variable2="6";

      echo "variable 1: ".$variable1. "y variable 2: ".$variable2;

     ?>
        <br>
        <br>
    <?php
  
      echo "suma: ".($variable1+$variable2);

    ?>

        <br>
        <br>

    <?php

       echo "resta: ".($variable1-$variable2);
    ?>
      
        <br>
        <br>

    <?php

        echo "division: ".($variable1/$variable2);
    ?>

        <br>
        <br>  
    <?php 

      echo "multiplicacion: ".($variable1*$variable2);

    ?>
    
         <br>
         <br>

    <?php
   
     $grados="20";

     echo "celsius: ".$grados." °c";

    ?>

       <br>

    <?php 

      echo "Fahrenheit: ".(($grados*1.8)+32) ." °C";

     ?>

       <br>
       <br>

    <?php
     
     $base="18";
     $altura="12";

    echo "base 18cm, altura 12cm";

    ?>
      <br>

    <?php

    echo "perimetro del rectangulo: ".(($base*2)+($altura*2));

    ?>
      <br>

    <?php
    echo "area del rectangulo: ".($base*$altura);
    ?>
   
    <br>
    <br>

    <?php
        $radio=30;
        echo "radio del circulo 30 cm";
        

    ?>
    
      <br>

    <?php

    echo "perimetro del circulo: ". 2*3.1416*$radio;

     ?>

     <br>

    <?php

      echo "area del circulo: ". 3.1416*pow($radio,2);
    ?>
    
</body>
</html>
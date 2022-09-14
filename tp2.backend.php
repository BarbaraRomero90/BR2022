<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

    <?php  
            /*Crear un archivo “tp2_backend.php” y realizar los siguientes ejercicios:
1. Crear una variable n y validar que sea un número positivo.
2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.
3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.
4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.*/
    
    $numero= 8;
    if($numero>0){
    echo"$numero es un numero positivo";
    }
    else{
    echo "$numero no es un numero positivo";
    }

    ?>
    <br>
    <br>
    
    <?php
    $numero=4;
    if ($numero > 1 and $numero < 10)
     {
        echo "$numero es mayor que 1, menor que 10";
      }  
     ?>
    <br>
    <br>

    <?php
    $num1=7;
    
    if($num1>10)
    {
    	echo "$num1 es un numero mayor a 10";
    }
    
   elseif ($num1<2)
    {
     	echo "$num1 en un numero menor a 2";
    }
    
    
    else
    { 
    	echo "$num1 es un numero entre 2 y 10";
    }

    ?>

    <br>
    <br>
    
    
    <?php
    $numero1=10;
    $numero2=6;
    
    echo "el numero 1  es:  $numero1 y el numero 2 es: $numero2";
    

    

    if ($numero1>$numero2)

   
    {  	echo "<br>suma: ".($numero1+$numero2);
    
     

      
    	echo "<br>resta: ".($numero1-$numero2);}
     
    elseif ($numero1<$numero2)
    {
        echo "<br>multiplicacion: ".($numero1*$numero2);
    

        "<br>division: ".($numero1/$numero2);

    }
    ?>

</body>	
</html>
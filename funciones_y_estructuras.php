<?php
echo "EJERCICIO 1"."<br>";
    function parImpar(){
    $edad = 32;
    if (($edad % 2) == 0) {
        echo 'Es un número par',"<br>";
    } else {
        echo 'Es un número impar',"<br>";
    }
    }
    parImpar();

    echo "EJERCICIO 2"."<BR>";
    function conteo(){
    
    for($i = 0; $i <= 10; $i+=2) {
        echo $i.'<br />';
    }
    }
    conteo();

     echo "EJERCICIO 3"."<BR>";
     /*Imagínate que queremos que cuente hasta un número diferente de 10. 
     Programa la función para que el final de la cuenta esté parametrizado.*/
     function conteoAleatorio($n){
     
         for($i = 1; $i <= $n; $i++) {
        echo $i.'<br />';
     }
    }conteoAleatorio(17);


     echo "EJERCICIO 4";
     /* Para prevenir olvidos al utilizar nuestra maravillosa opción "escondrijo" 
     estableceremos un parámetro por defecto igual a 10 en la función que se encarga de 
     realizar esta cuenta.-*/
    function aleatorio($n=10){
        
     for($i = 1; $i <= $n; $i++) {
        echo "<pre> <br>";
        var_dump($i).'<br />';
     }
    }
    aleatorio();



    echo "EJERCICIO 5". "<br>";
    /*Escribir una función para verificar el grado de un/a estudiante de acuerdo con la nota.

    Condiciones:

    Si la nota es 60% o más, el grado debería ser Primera División.
    Si la nota está entre el 45% y el 59%, el grado debería ser Segunda División.
    Si la nota está entre 33% a 44%, el grado debería ser Tercera División.
    Si la nota es menor a 33%, el estudiante reprobará.*/
   
    $nota =rand(0,100);
    function notas($nota){
        if ($nota >= 60){
            echo "Primera division". "<br>";
        }
        else if ($nota >= 45){
            echo "Segunda division". "<br>";
        }
        else if ($nota >= 33){
            echo "Tercera division". "<br>";
        }else {
            echo "El estudiante reprobara division". "<br>";

        }
    }
    echo "La nota obtenida es $nota" ."<br>";
    notas($nota);
    
    
    
    
    echo "EJERCICIO 6"."<br>";
    /*Charlie me mordió el dedo!

    Charlie te morderá el dedo exactamente el 50% del tiempo.

    Escribe La función isBitten () que devuelve TRUE con un 50% de probabilidad y
     FALSE de lo contrario.*/

     function isBitten(){
     $charlie = rand(0, 100);

     if ($charlie <= 50) { 
     echo "Charile te mordió el dedo!"."<br>"; 
     }

     else {
     echo "Charlie no te mordió."."<br>";
     }
     }
     isBitten()."<br>";

     echo "NIVEL 2 EJERCICIO 1.<BR>";
     /*Nos han pedido un listado de cada año donde se produjeron juegos olímpicos desde 1960 incluido hasta 2016. 
     Programa un bucle que calcule y muestre por pantalla los años olímpicos dentro de dicho intervalo.*/
     function years(){
        for ($i=1960; $i <=2016 ; $i+=4) { 
        echo "Año $i"."<br>";
        }
        return;
     }
     years();
     
     echo"NIVEL 2 EJERCICIO 2.<BR>";
     /*Escribe una función que determine la cantidad total a pagar por una llamada telefónica según las siguientes premisas:

     Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
     Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.*/
     
     $minuto=rand(0,100);
     function llamada ($minuto){
        if ($minuto<=3) {
            $costo=0.1;
        } else {
            for ($i=3; $i <= $minuto; $i++) { 
                $costo= ($i * 0.05) +0.1;
        }
    }return $costo;
    }
        
        
     
     echo "El total a pagar por $minuto minutos es ".llamada($minuto)."<br>";
     
?>

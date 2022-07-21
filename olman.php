<?php
$nombreCompleto="chueco no gabriel";
echo $nombreCompleto;
echo "<h6>".$nombreCompleto."</h1>";
//para las variables aritmeticas se usa la suma +,  la resta -, la multiplicacion *,
//la division /, exponente ** y ^, residuo %, = asigna el valor de una operacion
$num1=4;
$num2=17;
$total;
$total=$num1+$num2;
echo $total ."<br><br>";
$total2=$num1%$num2;
echo $total2 ."<br><br>";
$total3=$num1*$num2;
echo $total3 ."<br><br>";
//condicionales definen lo que necesito cuando son iguales se utiliza == si se usa un 
//signo de exclamacion y un igual != diferente igual a not
//>=, y <=, <, >, cumplen las mismas funciones que en mate y tambien funciona con texto
if( $total != $total2 ){
    echo "chueco te amo <br>";
}
$boolean = true;
if( $boolean ) {
    echo "olman <br>";
 }
if( !$boolean ) {
        echo "gabriel <br>";      
    }
else{
    echo "chueco ama mi polla";
}
//else obliga si el if no se cumple entra al else a fuerza;
?>




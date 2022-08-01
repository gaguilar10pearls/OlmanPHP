<?php
echo "<strong> TABLAS DE MULTIPLICAR </strong><br><br><br>";
$multiplicador = array(1,2,3,4,5,6,7,8,9,10);
$multi1 = array(1,2,3,4,5,6,7,8,9,10);
foreach($multiplicador as $multiplicando){
switch($multiplicando){
    case(1):
        echo "<strong>Table del uno</strong><br><br><br>";
        foreach($multi1 as $multi2){
            $resultado = $multiplicando * $multi2;
            echo "$resultado = $multiplicando x $multi2 <br>";
        }
    break;
    case(2):
        echo "<strong>Table del Dos</strong><br><br><br>";
        foreach($multi1 as $multi2){
            $resultado = $multiplicando * $multi2;
            echo "$resultado = $multiplicando x $multi2 <br>";
        }
    break;
    case(3):
        echo "<strong>Table del Tres</strong><br><br><br>";
        foreach($multi1 as $multi2){
            $resultado = $multiplicando * $multi2;
            echo "$resultado = $multiplicando x $multi2 <br>";
        }
    break;        
    case(4):
        echo "<strong>Table del cuatro</strong><br><br><br>";
        foreach($multi1 as $multi2){
            $resultado = $multiplicando * $multi2;
            echo "$resultado = $multiplicando x $multi2 <br>";
        }
    break;
    case(5):
        echo "<strong>Table del Cinco</strong><br><br><br>";
        foreach($multi1 as $multi2){
            $resultado = $multiplicando * $multi2;
            echo "$resultado = $multiplicando x $multi2 <br>";
        }
    break;
    case(6):
        echo "<strong>Table del Seis</strong><br><br><br>";
        foreach($multi1 as $multi2){
            $resultado = $multiplicando * $multi2;
            echo "$resultado = $multiplicando x $multi2 <br>";
        }
    break;
    case(7):
        echo "<strong>Table del Siete</strong><br><br><br>";
        foreach($multi1 as $multi2){
            $resultado = $multiplicando * $multi2;
            echo "$resultado = $multiplicando x $multi2 <br>";
        }
    break;
    case(8):
        echo "<strong>Table del Ocho</strong><br><br><br>";
        foreach($multi1 as $multi2){
            $resultado = $multiplicando * $multi2;
            echo "$resultado = $multiplicando x $multi2 <br>";
        }
    break;
    case(9):
        echo "<strong>Table del Nuevo</strong><br><br><br>";
        foreach($multi1 as $multi2){
            $resultado = $multiplicando * $multi2;
            echo "$resultado = $multiplicando x $multi2 <br>";
        }
    break; 
    case(10):
        echo "<strong>Table del Diez</strong><br><br><br>";
        foreach($multi1 as $multi2){
            $resultado = $multiplicando * $multi2;
            echo "$resultado = $multiplicando x $multi2 <br>";
        }
    break; 

}
echo "<br><br><br>";
}

?>
<?php
$total_compra = 87.66;
$diferencia =  90.00 - $total_compra ;
$mensaje1 = "Compra más o te cobraremos los abusivos 30 € euros de gastos de envío";
$mensaje2 = "¡¡¡Con solo $diferencia € más podrás tener gastos de envío gratis!!!";
$mensaje3 = "Gastos de envío incluidos";
$boolean1 = $total_compra > 30.00;
$boolean2 = $total_compra < 90.00;
$boolean3 = $total_compra >= 90.00;
if($total_compra <= 30.00){ 
    echo "<strong><strong><strong>$mensaje1";
}
if($boolean1)
if($boolean2)
{
    echo "<strong><strong>$mensaje2 ";
}
if($boolean3)
{
    Echo "<strong><strong>$mensaje3 ";
}
?>
<?php

$producto1='carne';
$producto2='arroz';
$producto3='arepas';
$producto4='chocola';
$producto5= 'huevos';
$producto6= 'cafe';
$producto7= 'queso';
$producto8= 'papas';
$producto9= 'manzana';
$producto10= 'frijol';


$precio1='22000';
$precio2='5000';
$precio3='6000';
$precio4='2500';
$precio5='11000';
$precio6='7500';
$precio7='8000';
$precio8='5000';
$precio9='8000';
$precio10='7000';

$total=$precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+$precio8+$precio9+$precio10;
$total=500;
$total=1000000;

$producto9='medellin';
switch($producto9){

    case 'manzana';
        echo('tenes descuento del 10%');
break;
    case 'bananos';
        echo('tiene descuento del 5%');
break;

default:
    echo('no hay descuento');
break;

}

/*if($total<=80000){
    echo('muchas gracias por su compra');

}else{
    echo('dinero insuficiente');
}
//echo(el total es: ' .$total);

?>
<?php
$dc = $_POST['dc'];
if (isset($_POST['spesial'])) {
    $spesial = $_POST['spesial'];
    $op1 = 'Special Steam Iron RM 15 ';
} else {
    $spesial = 0;
    $op1 = '';
}

if (isset($_POST['spesial1'])) {
    $spesial1 = $_POST['spesial1'];
    $op2 = 'Special Service (Clothes Iron) RM 15';
} else {
    $spesial1 = 0;
    $op2 = '';
}

if (isset($_POST['spesial2'])) {
    $spesial2 = $_POST['spesial2'];
    $op3 = 'Special Wash and Dry (Matress , Curtain , Blanket) RM 20';
} else {
    $spesial2 = 0;
    $op3 = '';
}


function calcTotal($spesial, $spesial1, $spesial2, $price)
{
    $total = $price + $spesial + $spesial1 + $spesial2;
    return $total;
}
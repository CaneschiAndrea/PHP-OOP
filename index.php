<?php
    require_once("Alunno.php");
    $array = [];
    $a = new Alunno("Andrea", "Caneschi", 18);
    $b = new Alunno("Lewis", "Hamilton", 19);
    $c = new Alunno("Lebron", "James", 20);
    array_push($array, $a);
    array_push($array, $b);
    array_push($array, $c);
    foreach($array as $alunno){
        echo $alunno->__toString();
    }
?>
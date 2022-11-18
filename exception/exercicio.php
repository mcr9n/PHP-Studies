<?php

function divisao($a, $b)
{
    if ($a == 0 || $b == 0) {
        throw new Exception("Os valores não podem ser zero");
    } else {
        return $a / $b;
    }
}
$a = 6;
$b = 0;
try {
    $divisao = divisao($a, $b);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}finally{
    echo PHP_EOL;
    echo $divisao;
    echo PHP_EOL;
}

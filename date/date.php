<?php

$data = new DateTime();
echo $data->format('d-m-y H:i:s');

echo PHP_EOL;

$intervalo = new DateInterval( 'P5DT10H5M' );
$data->sub( $intervalo );
echo $data->format('d-m-y H:i:s');

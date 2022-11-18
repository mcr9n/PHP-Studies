<?php

declare(strict_types=1);

$pdo = null;

try{
    $pdo = new PDO('mysql:host=localhost;dbname=exemplo', 'root','arthur32537420');
}catch(PDOException $e){
    echo $e->getMessage();
    die();
}

return $pdo;
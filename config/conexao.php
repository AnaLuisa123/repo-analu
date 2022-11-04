<?php

$porta="localhost:3307";
$ndobanco="conexao";
$usuario="root";
$senha="";

$conexao=new PDO("mysql:host=$porta;dbname=$ndobanco","$usuario","$senha");
?>
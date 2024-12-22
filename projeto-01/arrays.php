<?php


$ficha = [10, "vicente", 1.78, true];
$bebidas = [
    "sucos" => ["acerola", "cupuaçu"],
    "refris" => [
        "coca" => ["gelada", "quente"], // Transformado em subarray
        "guaraná"
    ]
];

// Exibindo o array
echo '<pre>';
print_r($bebidas);
echo '</pre>';

$categorias = [];
$categorias[0] = "programação";
$categorias[1] = "Design";

echo "<pre>";
print_r($ficha);
echo "<hr>";
print_r($bebidas);
echo "<pre>";

//escrever valores de um array

echo "$ficha[0] <br>";
echo $bebidas["refris"]['coca'][0];


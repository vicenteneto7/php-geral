<?php

$nomes = [
    'primos' => ['ja', 'dudu'], 
    'duda', 
    'vicente', 
    'pai', 
    'mãe'
];

// Percorrendo o array principal
foreach ($nomes as $index => $nome) {
    if (is_array($nome)) {
        echo "<p>$index:</p>";
        foreach ($nome as $subIndex => $subNome) {
            echo "<p>&nbsp;&nbsp;Subíndice $subIndex: $subNome</p>";
            
            // Exibindo o próximo valor no subarray
            if (isset($nome[$subIndex + 1])) {
                echo "<p>&nbsp;&nbsp;Atual: $subNome | Próximo: {$nome[$subIndex + 1]}</p>";
            } else {
                echo "<p>&nbsp;&nbsp;Atual: $subNome | Próximo: Não há mais elementos</p>";
            }
        }
    } else {
        echo "<p>$index: $nome</p>";
        
        // Exibindo o próximo valor no array principal
        if (isset($nomes[$index + 1])) {
            echo "<p>Atual: $nome | Próximo: {$nomes[$index + 1]}</p>";
        } else {
            echo "<p>Atual: $nome | Próximo: Não há mais elementos</p>";
        }
    }
}

<?php 
    echo "Hello Word";
    echo "Aula 07 de PHP";
    echo "<br>";
    $nome = "João Pedro de Oliveira";
    $idade = 18;
    echo "<br>";

    // Condicional
    if ($idade >= 18) {
        echo "Já pode ser preso";
    } else {
        echo "Só vai ter b.o";
    }

    echo "<br>";
    echo "<br>";
    
    // Repetição
    for ($i = 1; $i <= 10; $i++) {
        echo "Número: $i <br>";
    }

    echo "<br>";
    echo "<br>";

    // foreach
    $frutas = ["Maçã","Banana","Uva"];
	
	foreach ($frutas as $fruta) {
		echo $fruta . "<br>";
	}

    echo "<br>";
    echo "<br>";

    // Função

    echo ("Somando...");
    echo "<br>";

    function somar($a, $b) {
		return $a + $b;
	}
	
	echo somar(5, 10); // saída: 15
?>
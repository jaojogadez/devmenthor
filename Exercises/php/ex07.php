<?php 
  echo "Aplicando a sequência de Fibonacci... <br> A soma dos dois números anteriores da própria sequência <br><br>";

  function fibonacci($n) {
    $n1 = 0;
    $n2 = 1;

    echo "Índice da Sequência // Valor da Sequência <br>";
    echo "n(1) = " . $n1 . "<br>";
    echo "n(2) = " . $n2 . "<br>";

    for ($i = 3; $i <= $n ; $i++) { 
      $soma = $n1 + $n2;
      echo "n($i) = " . $soma . ", pois $n1 + $n2 é igual a " . $soma . "<br>";

      $n1 = $n2;
      $n2 = $soma;
    }
  }

  function showFibonacci($n){
    $n1 = 0;
    $n2 = 1;

    echo "Sequência de Fibonacci = [ ";
    for ($i = 3; $i <= $n ; $i++) { 
      $soma = $n1 + $n2;
      echo " " . $soma;

      $n1 = $n2;
      $n2 = $soma;
    }
    echo " ]";
  }

  echo fibonacci(10);
  echo "<br><br>";
  echo showFibonacci(10);
?>

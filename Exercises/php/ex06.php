<?php 
  echo "Calculando o Fatorial de um número... <br> <br>";

  function fatorial($number)  {
      $resultado = 1;

      for ($i = $number; $i > 0 ; $i--) { 

        echo "Contagem $i <br>";
        $resultado *= $i;

      }
      return $resultado;
  }

  echo "Resultado: " . fatorial(5);
?>

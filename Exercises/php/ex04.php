<?php 
   $notas = [10, 7, 8, 9, 6];
   $somaDasNotas = 0;

   echo "Notas: <br>";
   foreach ($notas as $nota) {
    echo "$nota <br>";
    $somaDasNotas += $nota;
   }

   echo "Soma das notas no final: $somaDasNotas <br> <br>";
   
   $media = $somaDasNotas/5;
   
   echo "Média final: $media <br>";

   if ($media >= 7) {
    echo "Aluno Aprovado.";
   } else {
    echo "Aluno Reprovado.";
   }
?>

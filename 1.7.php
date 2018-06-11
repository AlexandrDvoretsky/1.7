<?php
  // 1.7 Выяснить, есть ли в записи натурального числа N две одинаковые цифры.

  for($i=1000; $i<2000; $i++)
  {
    $fourth = floor(($i%100)%10);
    $third = floor(($i%100)/10);
    $second = floor(($i%1000)/100);
    $first = floor($i/1000);

      if(($first == $second || $first == $third || $first == $fourth) && ($second == $first || $second == $third  || $second == $fourth) && ($third == $first || $third == $second || $third == $fourth) && ($fourth == $first || $fourth == $second || $fourth == $third ))
    {
      echo $i."</br>";
    }
  }
?>

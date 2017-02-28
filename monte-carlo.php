<?php
/* 
 *  Adrian Statescu <mergesortv@gmail.com> http://adrianstatescu.com
 *  Computes the approximation of PI using Monte Carlo method.
 *  x^2 + y^2 <= 1
 *  MIT License
 */
 $n = 9000000;

 $count = 0;

 for($i = 1; $i <= $n; $i++) {

     $x = lcg_value();

     $y = lcg_value();

     $z = $x * $x + $y * $y;

     if($z <= 1) $count++;
 }

    $pi = $count / $n * 4;

    printf("Approxmation PI = %g", $pi);

    echo "<pre>";
    echo htmlentities(file_get_contents(__FILE__));
    echo "</pre>";

?>
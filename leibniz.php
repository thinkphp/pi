<?php

/*
 *  Adrian Statescu <mergesortv@gmail.com> http://adrianstatescu.com
 *  Computes the approximation of PI using Leibniz method.
 *  1-1/3+1/5-1/7...
 *  MIT License
 */

 $eps = 0.0001;

 $t1 = 1;

 $t2 = 1.0 - 1.0/3.0;
 
 $sign = 1;

 $i = 5;

 while( 4 * ( $t1 > $t2 ? $t1 - $t2 : $t2 - $t1 ) >= $eps ) {

        $t1 = $t2;

        $t2 += $sign * (double) 1.0/ $i;

        $sign = (-1)*$sign;

        $i += 2;   
 }     

 echo"<h1>Approximate PI using Leibniz Method</h1>";  

 printf("Approximate PI Built-in = " . pi());

 echo"<br/>";  

 printf("Approximate PI = " .  4 * $t2);  

 
    echo "<pre>";
    echo htmlentities(file_get_contents(__FILE__));
    echo "</pre>";

?>
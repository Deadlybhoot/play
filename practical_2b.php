<?php
// First write this 
    function fib($num) {
        if ($num <= 1)
            return $num;
        return fib($num-1) + fib($num-2);
    }
// then this
    function seriesOfFibonacci() {
        $offsetValue = readline("Enter the number upto which you want the fibonnaci series: ");
        for ($i=0; $i < $offsetValue; $i++) { 
            echo fib($i)." ";
        }
    }
    seriesOfFibonacci();
?>
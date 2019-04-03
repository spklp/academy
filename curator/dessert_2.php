<?php

function fib($c){
    if ($c > 2){
        return fib($c - 1) + fib($c - 2);
    }
    else{
        return 1;
    }
}

echo fib(20);



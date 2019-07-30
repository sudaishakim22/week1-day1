<?php
    // 1. fizz buzz (100) jadi PR


    for($i = 0; $i <= 100; $i++){
        if($i % 3 == 0){
            echo ($i." fizz");
            echo "<br>";
        }else if($i % 5 == 0){
            echo ($i." buzz");
            echo "<br>";
        }
        
        if($i % 3 == 0 && $i % 5 == 0){
            echo ($i." fizz buzz");
            echo "<br>";
        }else {
            echo $i;
            echo "<br>";
        }
    }






?>
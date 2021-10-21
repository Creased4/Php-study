<?php
    $i = 0;
    echo "연산자 실행 전";
    echo "1 = $1 <br>";
    $yes = array('this', 'is','an array');

    echo "연산자 2 실행 후 ";
    $i += 2;
    echo "i = $i <br>";
    
    echo "연산자 3 실행 후 ";
    $i += 3;
    echo "i = $i <br>";
    echo is_array($yes) ? 'array' : 'not an Array';
    echo "\n";

    echo "연산자 10 실행후";
    $i += 10;
    echo "i = $i <br>";
?>    $no = 'this is a string';

    echo is_array($no) ? 'array' : 'not an Array';
    ?>
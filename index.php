<?php
    $yes = array('this', 'is','an array');

    echo is_array($yes) ? 'array' : 'not an Array';
    echo "\n";

    $no = 'this is a string';

    echo is_array($no) ? 'array' : 'not an Array';
    ?>
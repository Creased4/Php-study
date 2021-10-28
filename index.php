<?php
    if (count($_COOKIE) > 0){
        echo "Cookies 존재. <br>";
        print_r($_COOKIE);
    } else {
        echo "Cookies 없음.<br>";
    }

    session_unset();

    session_destroy();

    session_start([
        'cache_limiter' => 'private',
        'read_and_close'=> true,
    ])

    echo "PATH_TRANSLATED = ". $_SERVER['PATH_TRANSLATED'];
    echo "<br>";

    echo "SCRIPT_FILENAME = ". $_SERVER['SCRIPT_FILENAME'];
    echo "<br>";
    
    echo "SCRIPT_NAME = ".$_SERVER['SCRIPT_FILENAME'];
    echo "<br>";

    echo "SCRIPT_URI =".$_SERVER['SCRIPT_URI'];
    echo "<br>";
?>

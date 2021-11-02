<?php
    class Jiny
    {
        public static $aaa = 10;
        public function show() {
            echo "show = ". self::$aaa;
        }
    }
    
    echo "aaa = ". Jiny::$aaa."<br>";

    Jiny::show();
    
    $x;

    if(is_null($x)) {
        echo "x = NULL입니다.";
    }else {
        echo "x = NULL이 아닙니다.";
    }

    echo"<br>";

    $username = $x ?? 'nobody' ;
    echo "username = $username";

    ?>
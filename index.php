<?php
    if (php_sapi_name() ==="cli-server") {
        echo "내장 웹 서버 실행환경 입니다.";
    }else {
        echo "외장 웹 서버 실행환경 입니다.";
    }
?> 
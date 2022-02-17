<?php

spl_autoload_register(function($className) {
    $file = $_SERVER["DOCUMENT_ROOT"].'/welliton/DesenvolvimentoWeb_II/libs/' . $className . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});
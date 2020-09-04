<?php
    spl_autoload_register(function ($class_name) {
        $documentWithCorrectLink = str_replace("Podcast\\", "", $class_name);
        $documentWithCorrectSeparator = str_replace("\\", DIRECTORY_SEPARATOR, $documentWithCorrectLink);
        $documentWithCorrectSeparator = DIRECTORY_SEPARATOR . strtolower($documentWithCorrectSeparator);
        include_once __DIR__ . $documentWithCorrectSeparator . ".php";
    });
?>
<?php
class errors
{
    static function catch($obj)
    {
        $error = [
            "message" => "Error Message: " . $obj->getMessage(),
            "file_line" => "Error File: " . $obj->getFile() . " Line: " . $obj->getLine(),
            "trace" => $obj->getTraceAsString(),
            "type" => get_class($obj),
        ];

        require_once "app/views/errorPage.php";
    }
}

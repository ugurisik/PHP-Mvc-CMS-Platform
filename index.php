<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);
session_start();
try {
    require_once "init.php";
    $system = new system();
} catch (\Throwable $th) {
    errors:: catch($th);
}

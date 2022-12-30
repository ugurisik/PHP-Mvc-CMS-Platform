<?php

class controller
{
    public $mailer;
    public $faker;
    public $session;
    public $cookie;
    public function __construct()
    {
        $this->mailer = new phpMail();
        $this->faker = new faker();
        $this->session = new sessionManager();
        $this->cookie = new cookieManager();
    }

    public function view($file, $param = [] or null)
    {
        if (file_exists(VIEWS_PATH . "/" . $file . ".php")) {
            require_once VIEWS_PATH . "/" . $file . ".php";
        } else {
            $error = ['error' => $file . " View dosyası bulunamadı!"];
            require_once "app/views/errorPage.php";
            exit;
            //exit($file . " View dosyası bulunamadı");
        }
    }
    public function model($file)
    {
        if (file_exists(MODELS_PATH . "/" . $file . ".php")) {
            require_once MODELS_PATH . "/" . $file . ".php";
            if (stripos($file, '/')) {
                $file = explode('/', $file);
                $file = end($file);
            }
            if (class_exists($file)) {
                return new $file;
            } else {
                $error = ['error' => $file . " Model dosyasında tanımlı bir class değil!"];
                require_once "app/views/errorPage.php";
                exit;
                // exit($file . " Model dosyasında tanımlı bir class değil!");
            }
        } else {
            $error = ['error' => $file . " Model dosyası bulunamadı!"];
            require_once "app/views/errorPage.php";
            exit;
            //exit($file . " Model dosyası bulunamadı!");
        }
    }
}

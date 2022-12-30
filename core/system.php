<?php
class system
{

    protected $controller;
    protected $method;
    public function __construct()
    {
        $this->controller = "main";
        $this->method = "index";
        if (isset($_GET['act'])) {
            $url = explode("/", filter_var(rtrim($_GET['act'], '/'), FILTER_SANITIZE_URL));
        } else {
            $url[0] = $this->controller;
            $url[1] = $this->method;
        }
        if ($url[0] == 'admincp' and !isset($url[1])) {
            $url[0] = 'admincp';
            $url[1] = 'main';
        }
        if (file_exists(CONTROLLERS_PATH . "/" . $url[0] . ".php")) {
            $this->controller = $url[0];
            if ($url[0] == 'admincp' and $url[1] != '') {
                $this->controller = $url[1];
            }
        }
        if ($url[0] == 'admincp' and $url[1] != '') {
            require_once ADMIN_CONTROLLERS_PATH . "/" . $this->controller . ".php";
        } else if($url[0] == 'api') {
            require_once API_CONTROLLERS_PATH . "/" . $this->controller . ".php";
        } else {
            require_once CONTROLLERS_PATH . "/" . $this->controller . ".php";
        }
        if (class_exists($this->controller)) {
            $this->controller = new $this->controller;
            if ($url[0] == 'admincp' and $url[1] != '') {
                array_shift($url);
            }
            array_shift($url);
        } else {
            $error = ['error' => $this->controller . "  Classı Bulunamadı"];
            require_once "app/views/errorPage.php";
            exit;
            //exit($this->controller . "  Classı Bulunamadı");
        }
        if (isset($url[0])) {
            if (method_exists($this->controller, $url[0])) {
                $this->method = $url[0];
                array_shift($url);
            } else {
                $error = ['error' => $url[0] . " Methodu Bulunamadı"];
                require_once "app/views/errorPage.php";
                exit;
                //exit($url[0] . " Methodu Bulunamadı");
                //$this->method = "index";
            }
        }
       

        //$this->controller->{$this->method}($url);
        call_user_func_array([$this->controller, $this->method], $url);
    }
}

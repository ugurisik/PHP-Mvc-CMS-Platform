<?php
class admincp extends controller
{
    public function index()
    {
        $this->log->createLog("main/index sayfasına giriş yapıldı");
        $this->view("admin/index");
    }
}

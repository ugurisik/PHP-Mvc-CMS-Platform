<?php
class main extends controller
{
    public function index()
    {
        $this->session->isAdminLogged();
        $this->view('admin/inc/header', ['pageTitle' => 'Dashboard']);
        $this->view('admin/index');
    }
}

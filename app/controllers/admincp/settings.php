<?php
class settings extends controller
{
    public function index()
    {
        $this->view('admin/inc/header', ['pageTitle' => 'Site Ayarları']);
        $this->view('admin/settings/site');
    }
}

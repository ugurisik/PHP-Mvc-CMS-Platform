<?php
class users extends controller
{
    public function index()
    {
        $this->view('admin/inc/header', ['pageTitle' => 'Kullanıcı Listesi']);
        $this->view('admin/users/list');
    }
    public function detail($guid)
    {
        $this->view('admin/inc/header', ['pageTitle' => 'Kullanıcı Düzenle']);
        $this->view('admin/users/user', ['guid' => $guid]);
    }
    public function add()
    {
        $this->view('admin/inc/header', ['pageTitle' => 'Kullanıcı Ekle']);
        $this->view('admin/users/user');
    }
}

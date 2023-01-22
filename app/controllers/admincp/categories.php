<?php
class categories extends controller
{
    public function index($type)
    {
        $this->view('admin/inc/header', ['pageTitle' => 'Kategori Listesi']);
        $this->view('admin/categories/list');
    }
    public function detail($guid)
    {
        $this->view('admin/inc/header', ['pageTitle' => 'Kategori Düzenle']);
        $this->view('admin/categories/category', ['guid' => $guid]);
    }
    public function add()
    {
        $this->view('admin/inc/header', ['pageTitle' => 'Kategori Ekle']);
        $this->view('admin/categories/category');
    }
}

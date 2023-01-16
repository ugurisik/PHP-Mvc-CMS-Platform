<?php
class product extends controller
{
    public function index()
    {
        $this->view('admin/inc/header', ['pageTitle' => 'Ürün Listesi']);
        $this->view('admin/products/list');
    }
    public function detail($guid)
    {
        $this->view('admin/inc/header', ['pageTitle' => 'Ürün Düzenle']);
        $this->view('admin/products/product', ['guid' => $guid]);
    }
    public function add()
    {
        $this->view('admin/inc/header', ['pageTitle' => 'Ürün Ekle']);
        $this->view('admin/products/product');
    }
}

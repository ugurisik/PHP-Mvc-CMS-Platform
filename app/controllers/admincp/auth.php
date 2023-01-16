<?php
class auth extends controller
{
    public function index()
    {
        $this->view('admin/auth/login');
    }
    public function login()
    {
        $this->view('admin/auth/login');
    }
    public function reset()
    {
        $this->view('admin/auth/reset');
    }
    public function password()
    {
        $this->view('admin/auth/password');
    }
}

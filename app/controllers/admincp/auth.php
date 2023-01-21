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
    public function l()
    {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            $data = [
                "status" => "error",
                "message" => "Lütfen boş alan bırakmayınız!"
            ];
        } else {
            $token = md5(uniqid(mt_rand(), true));
            $tarih = date("d-m-Y H:i:s");
            $mail = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->model('usersModel/users')->getWhereConditions(["email" => $mail])[0];
            if (!empty($user)) {
                if (password_verify($password, $user['password'])) {
                    if ($user['status'] == 1) {
                        $data = array(
                            'login' => 1,
                            'loginID' => $token
                        );
                        $updateLogin = $this->model("usersModel/users")->updateData($data, $user['ID']);
                        $data = array("userID" => $user['ID'], "date" => $tarih, "browser" => security::getBrowser(), "os" => security::getOS(), "ip" => security::getIP(), "userAgent" => security::getUserAgent());
                        $this->model("usersModel/authenticate")->addLoginInfo($data);
                        $this->session->createSession(['adminID' => $user['ID'], 'adminMail' => $user['email'], 'adminToken' => $token]);
                        $data = array(
                            "message" => "Giriş yapıldı. Yönlendiriliyorsunuz lütfen bekleyin!",
                            "type" => "success"
                        );
                        $this->log->createLog("$mail adresiyle yönetim paneline giriş yapıldı.");
                    } else if ($user['status'] == 2) {
                        $data = [
                            "type" => "error",
                            "message" => "Hesabınız pasif durumdadır!"
                        ];
                    } else if ($user['status'] == 3) {
                        $data = [
                            "type" => "error",
                            "message" => "Hesabınız yasaklanmıştır!"
                        ];
                    } else {
                        $data = [
                            "type" => "error",
                            "message" => "Yönetici paneline giriş yetkiniz bulunmuyor!"
                        ];
                    }
                } else {
                    if ($user['login'] < 3) {
                        $up = $user['login'] + 1;
                        $data = array('login' => $up);
                        $updateLogin = $this->model("usersModel/users")->updateData($data, $user['ID']);
                        $data = array("userID" => $user['ID'], "date" => $tarih, "userAgent" => security::getUserAgent(), "browser" => security::getBrowser(), "os" => security::getOS(), "ip" => security::getIP(), "username" => $mail, "password" => $password);
                        $this->model("usersModel/authenticate")->addLoginError($data);
                        $data = array(
                            "message" => "Şifreniz hatalı! Lütfen tekrar deneyiniz.",
                            "type" => "error"
                        );
                        $this->log->createLog("Hatalı şifreyle giriş tespit edildi. E-posta: " . $mail);
                    } else if ($user['login'] == 3) {
                        $data = array("startDate" => $tarih, "endDate" => date("d-m-Y H:i:s", strtotime('+15 minutes')), "ip" => security::getIP());
                        $this->model("usersModel/authenticate")->addLoginBan($data);
                        $data = array(
                            "message" => "Çok fazla hatalı girişi denemesi sebebi ile IP Adresiniz 15 dakika engellenmiştir!",
                            "type" => "error"
                        );
                        $this->log->createLog("Çok fazla hatalı giriş sebebiyle IP adresi 15 dakikalık engellenmiştir!. E-posta: " . $mail);
                    } else {
                        $data = array("userID" => $user['id'], "date" => $tarih, "userAgent" => security::getUserAgent(), "browser" => security::getBrowser(), "os" => security::getOS(), "ip" => security::getIP(), "username" => $mail, "password" => $password);
                        $this->model("usersModel/authenticate")->addLoginError($data);
                        $data = array(
                            "message" => "Şifreniz hatalı! Lütfen tekrar deneyiniz.",
                            "type" => "error"
                        );
                        $this->log->createLog("Hatalı şifreyle giriş tespiti. E-posta: " . $mail);
                    }
                }
            } else {
                $data = [
                    "type" => "error",
                    "message" => "Email adresiniz sistemde kayıtlı değildir!"
                ];
            }
        }
        print_r(json_encode($data, JSON_UNESCAPED_UNICODE));
        exit;
    }
    public function quit(){
        $this->log->createLog($this->session->getSession("adminMail")." adresiyle yönetici panelinden çıkış yapıldı.");
        $this->session->allSessionDelete();
        header("Location: ".SITE_URL."admincp/auth/login");
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

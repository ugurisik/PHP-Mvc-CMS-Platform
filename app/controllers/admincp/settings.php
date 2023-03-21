<?php
class settings extends controller
{
    public function index($langID = null)
    {
        $this->session->isAdminLogged();
        if($langID != null){
            $data = $this->model('settingsModel/siteSettings')->getWhereConditions(['langID' => $langID])[0];
        }else{
            $data = $this->model('settingsModel/siteSettings')->getAll()[0];
        }
        $this->view('admin/inc/header', ['pageTitle' => 'Site Ayarları']);
        $this->view('admin/settings/site',['data'=>$data]);
    }
    public function siteUpdate($langID){
        $this->session->isAdminLogged();
        if($_POST['settingsLang']){
            $data = [
                "langID"=>$_POST['settingsLang'],
                "logo"=>$_POST['logo'][0],
                "favicon"=>$_POST['favicon'][0],
                "title"=>$_POST['site_title'],
                "content"=>$_POST['site_description'],
                "keywords"=>$_POST['site_keywords'],
                "contact"=>json_encode($_POST['contact'], JSON_UNESCAPED_UNICODE),
                "map"=>$_POST['google_map'],
                "copyright"=>$_POST['copyright'],
                "json_data"=>json_encode($_POST['json'], JSON_UNESCAPED_UNICODE),
                "maintenance_mode"=>$_POST['maintenance_mode'],
            ];

            if($this->model('settingsModel/siteSettings')->updateData($data,$langID)){
                $data = [
                    "type"=>"success",
                    "message"=>"Site ayarları başarıyla güncellendi."
                ];
            }else{
                $data = [
                    "type"=>"error",
                    "message"=>"Site ayarları güncellenirken bir hata oluştu."
                ];
            }
        }else{
            $data = [
                "type"=>"warning",
                "message"=>"Lütfen bir dil seçiniz."
            ];
        }
        print_r(json_encode($data, JSON_UNESCAPED_UNICODE));
    }
}






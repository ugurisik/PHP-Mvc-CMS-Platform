<style>
    .contact-area {
        position: relative;
    }

    .contact-area .delete {
        position: absolute;
        left: -15px;
        top: -15px;
    }
</style>
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <!--begin::Card-->
        <div class="card card-flush">
            <form name="settingsForm">
                <!--begin::Card body-->
                <div class="card-body">
                    <div class="row fv-row mb-7">
                        <div class="col-md-3 text-md-end">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>Ayar Dili</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Site ayarını düzenleyeceğiniz ayar dilini seçiniz."></i>
                            </label>
                            <!--end::Label-->
                        </div>
                        <div class="col-md-8">
                            <div class="w-100">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" name="settingsLang" data-control="select2" data-hide-search="true" data-placeholder="Ayar dili seçiniz!">
                                    <option></option>
                                    <option value="1" <?php if ($param['data']['langID'] == 1) echo "selected" ?>>Türkçe</option>
                                    <option value="2" <?php if ($param['data']['langID'] == 2) echo "selected" ?>>İngilizce</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button type="button" name="saveButton" class="btn btn-primary">
                                Kaydet
                            </button>
                        </div>
                    </div>
                    <!--begin:::Tabs-->
                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-5 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general">
                                <span class="svg-icon svg-icon-2 me-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z" fill="currentColor" />
                                    </svg>
                                </span>Site Ayarları</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_store">
                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm004.svg-->
                                <span class="svg-icon svg-icon-2 me-2">
                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm96-96c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zm128-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->İletişim Bilgileri</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_localization">
                                <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                <span class="svg-icon svg-icon-2 me-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor" />
                                        <path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Localization</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_products">
                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm005.svg-->
                                <span class="svg-icon svg-icon-2 me-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M20 22H4C3.4 22 3 21.6 3 21V2H21V21C21 21.6 20.6 22 20 22Z" fill="currentColor" />
                                        <path d="M12 14C9.2 14 7 11.8 7 9V5C7 4.4 7.4 4 8 4C8.6 4 9 4.4 9 5V9C9 10.7 10.3 12 12 12C13.7 12 15 10.7 15 9V5C15 4.4 15.4 4 16 4C16.6 4 17 4.4 17 5V9C17 11.8 14.8 14 12 14Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Products</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_customers">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com014.svg-->
                                <span class="svg-icon svg-icon-2 me-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="currentColor" />
                                        <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="currentColor" />
                                        <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="currentColor" />
                                        <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Customers</a>
                        </li>
                        <!--end:::Tab item-->
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Logo</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Site logosunu ayarlayın."></i>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="gorseller" id="logo" orakuploader="on"></div>
                                </div>
                            </div>
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Favicon</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Site favicon görselini ayarlayın"></i>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="gorseller2" id="favicon" orakuploader="on"></div>
                                </div>
                            </div>
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Başlık</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="SEO için site başlığını ayarlayın."></i>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control form-control-solid" name="site_title" value="<?= $param['data']['title'] ?>" />
                                </div>
                            </div>
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Açıklama</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="SEO için site açıklamasını ayarlayın. Maks 150 karakter önerilir."></i>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <textarea class="form-control form-control-solid" name="site_description"><?= $param['data']['content'] ?></textarea>
                                </div>
                            </div>
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Copyright</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Footer copyright yazısı ayarlayın. {year} mevcut yılı gösterir."></i>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control form-control-solid" name="copyright" value="<?= $param['data']['copyright'] ?>" />
                                </div>
                            </div>
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Anahtar Kelime</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="SEO için anahtar kelime ayarlayın."></i>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control form-control-solid" id="keywords" name="site_keywords" value="<?php $tag = "";
                                                                                                                                            foreach (json_decode($param['data']['keywords'], true) as $tags) {
                                                                                                                                                $tag .= $tags['value'] . ",";
                                                                                                                                            }
                                                                                                                                            echo substr($tag, 0, strlen($tag) - 1); ?>" />
                                </div>

                            </div>
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Bakım Modu</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Bakımdayız modunu açıp kapatabilirsiniz. Açarsanız kullanıcılarınız websitenize erişemez."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value="1" name="maintenance_mode" id="maintenance_mode_on" <?php if ($param['data']['maintenance_mode'] == 1) echo "checked" ?> />
                                            <label class="form-check-label" for="maintenance_mode_on">Açık</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value="0" name="maintenance_mode" id="maintenance_mode_off" <?php if ($param['data']['maintenance_mode'] == 0) echo "checked" ?> />
                                            <label class="form-check-label" for="maintenance_mode_off">Kapalı</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Google Harita Linki</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Google embed harita linki giriniz."></i>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control form-control-solid" name="google_map" value="<?= $param['data']['map'] ?>" />
                                </div>
                            </div>
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <button type="button" onclick="AddNewContact()" class="btn btn-primary btn-sm">
                                            Yeni İletişim Bilgisi Ekle
                                        </button>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Yeni bir iletişim alanı ekleyebilirsiniz. Başlık olmak zorundadır!"></i>
                                    </label>
                                </div>
                                <div class="col-md-9 contacts">
                                    <?php
                                    $contacts = json_decode($param['data']['contact'], true);
                                    if(!empty($contacts)):
                                    for ($i = 0; $i < count($contacts['title']); $i++) :
                                    ?>
                                        <div class="contact-area border rounded p-3 mb-3">
                                            <div class="delete btn btn-icon btn-sm py-1" onclick=" $(this).parent().fadeOut(300).remove();"><i class="fa-solid fa-trash text-danger"></i></div>
                                            <input type="text" placeholder="Başlık" name="contact[title][]" class="form-control form-control-solid mb-3" value="<?= $contacts['title'][$i] ?>" />
                                            <input type="text" placeholder="GSM" name="contact[gsm][]" class="form-control form-control-solid mb-3" value="<?= $contacts['gsm'][$i] ?>" />
                                            <input type="text" placeholder="SABİT" name="contact[sabit][]" class="form-control form-control-solid mb-3" value="<?= $contacts['sabit'][$i] ?>" />
                                            <input type="text" placeholder="FAX" name="contact[fax][]" class="form-control form-control-solid mb-3" value="<?= $contacts['fax'][$i] ?>" />
                                            <input type="text" placeholder="E-POSTA" name="contact[eposta][]" class="form-control form-control-solid mb-3" value="<?= $contacts['eposta'][$i] ?>" />
                                            <input type="text" placeholder="ADRES" name="contact[adres][]" class="form-control form-control-solid mb-3" value="<?= $contacts['adres'][$i] ?>" />
                                        </div>
                                    <?php endfor; endif; ?>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">
                            <div class="row mb-7">
                                <div class="col-md-9 offset-md-3">
                                    <h2>Localization Settings</h2>
                                </div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Country</span>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Select2-->
                                    <select id="kt_ecommerce_localization_country" class="form-select form-select-solid" name="localization_country" data-kt-ecommerce-settings-type="select2_flags" data-placeholder="Select a country">
                                        <option></option>
                                        <option value="AF" data-kt-select2-country="<?= ADMIN_ASSETS ?>media/flags/afghanistan.svg">Afghanistan</option>
                                        <option value="AX" data-kt-select2-country="<?= ADMIN_ASSETS ?>media/flags/aland-islands.svg">Aland Islands</option>

                                    </select>
                                    <!--end::Select2-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Language</span>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="w-100">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid" name="localization_language" data-control="select2" data-placeholder="Select a language">
                                            <option></option>
                                            <option value="id">Bahasa Indonesia - Indonesian</option>
                                            <option value="msa">Bahasa Melayu - Malay</option>
                                            <option value="ca">Català - Catalan</option>
                                            <option value="cs">Čeština - Czech</option>
                                            <option value="da">Dansk - Danish</option>
                                            <option value="de">Deutsch - German</option>
                                            <option value="en">English</option>
                                            <option value="en-gb">English UK - British English</option>
                                            <option value="es">Español - Spanish</option>
                                            <option value="fil">Filipino</option>
                                            <option value="fr">Français - French</option>
                                            <option value="ga">Gaeilge - Irish (beta)</option>
                                            <option value="gl">Galego - Galician (beta)</option>
                                            <option value="hr">Hrvatski - Croatian</option>
                                            <option value="it">Italiano - Italian</option>
                                            <option value="hu">Magyar - Hungarian</option>
                                            <option value="nl">Nederlands - Dutch</option>
                                            <option value="no">Norsk - Norwegian</option>
                                            <option value="pl">Polski - Polish</option>
                                            <option value="pt">Português - Portuguese</option>
                                            <option value="ro">Română - Romanian</option>
                                            <option value="sk">Slovenčina - Slovak</option>
                                            <option value="fi">Suomi - Finnish</option>
                                            <option value="sv">Svenska - Swedish</option>
                                            <option value="vi">Tiếng Việt - Vietnamese</option>
                                            <option value="tr">Türkçe - Turkish</option>
                                            <option value="el">Ελληνικά - Greek</option>
                                            <option value="bg">Български език - Bulgarian</option>
                                            <option value="ru">Русский - Russian</option>
                                            <option value="sr">Српски - Serbian</option>
                                            <option value="uk">Українська мова - Ukrainian</option>
                                            <option value="he">עִבְרִית - Hebrew</option>
                                            <option value="ur">اردو - Urdu (beta)</option>
                                            <option value="ar">العربية - Arabic</option>
                                            <option value="fa">فارسی - Persian</option>
                                            <option value="mr">मराठी - Marathi</option>
                                            <option value="hi">हिन्दी - Hindi</option>
                                            <option value="bn">বাংলা - Bangla</option>
                                            <option value="gu">ગુજરાતી - Gujarati</option>
                                            <option value="ta">தமிழ் - Tamil</option>
                                            <option value="kn">ಕನ್ನಡ - Kannada</option>
                                            <option value="th">ภาษาไทย - Thai</option>
                                            <option value="ko">한국어 - Korean</option>
                                            <option value="ja">日本語 - Japanese</option>
                                            <option value="zh-cn">简体中文 - Simplified Chinese</option>
                                            <option value="zh-tw">繁體中文 - Traditional Chinese</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Currency</span>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="w-100">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid" name="localization_currency" data-control="select2" data-hide-search="true" data-placeholder="Select a currency">
                                            <option></option>
                                            <option value="USD">US Dollar</option>
                                            <option value="Euro">Euro</option>
                                            <option value="Pound">Pound</option>
                                            <option value="AUD">Australian Dollar</option>
                                            <option value="JPY">Japanese Yen</option>
                                            <option value="KRW">Korean Won</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Length Class</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the unit measurement for length."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="w-100">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid" name="localization_currency" data-control="select2" data-hide-search="true" data-placeholder="Select a length class">
                                            <option></option>
                                            <option value="cm" selected="selected">Centimeter</option>
                                            <option value="mm">Milimeter</option>
                                            <option value="in">Inch</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Weight Class</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the unit measurement for weight."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="w-100">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid" name="localization_currency" data-control="select2" data-hide-search="true" data-placeholder="Select a weight class">
                                            <option></option>
                                            <option value="kg" selected="selected">Kilogram</option>
                                            <option value="g">Gram</option>
                                            <option value="lb">Pound</option>
                                            <option value="oz">Ounce</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Action buttons-->
                            <div class="row py-5">
                                <div class="col-md-9 offset-md-3">
                                    <div class="d-flex">
                                        <!--begin::Button-->
                                        <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                            <span class="indicator-label">Save</span>
                                            <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Action buttons-->
                            <!--end::Form-->
                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_settings_products" role="tabpanel">
                            <!--begin::Form-->
                            <!--begin::Heading-->
                            <div class="row mb-7">
                                <div class="col-md-9 offset-md-3">
                                    <h2>Cateogries Settings</h2>
                                </div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Category Product Count</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Show the number of products inside the subcategories in the storefront header category menu. Be warned, this will cause an extreme performance hit for stores with a lot of subcategories!"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value="" name="category_product_count" id="category_product_count_yes" checked="checked" />
                                            <label class="form-check-label" for="category_product_count_yes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value="" name="category_product_count" id="category_product_count_no" />
                                            <label class="form-check-label" for="category_product_count_no">No</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-16">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Default Items Per Page</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Determines how many items are shown per page"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="products_items_per_page" value="10" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Heading-->
                            <div class="row mb-7">
                                <div class="col-md-9 offset-md-3">
                                    <h2>Reviews Settings</h2>
                                </div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Allow Reviews</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enable/disable review entries for registered customers"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value="" name="allow_reviews" id="allow_reviews_yes" checked="checked" />
                                            <label class="form-check-label" for="allow_reviews_yes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value="" name="allow_reviews" id="allow_reviews_no" />
                                            <label class="form-check-label" for="allow_reviews_no">No</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-16">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Allow Guest Reviews</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enable/disable review entries for public guest customers"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value="" name="allow_guest_reviews" id="allow_guest_reviews_yes" />
                                            <label class="form-check-label" for="allow_guest_reviews_yes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value="" name="allow_guest_reviews" id="allow_guest_reviews_no" checked="checked" />
                                            <label class="form-check-label" for="allow_guest_reviews_no">No</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Heading-->
                            <div class="row mb-7">
                                <div class="col-md-9 offset-md-3">
                                    <h2>Vouchers Settings</h2>
                                </div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Minimum Vouchers</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Minimum number of vouchers customers can attach to an order"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="products_min_voucher" value="1" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-16">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Maximum Vouchers</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Maximum number of vouchers customers can attach to an order"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="products_max_voucher" value="10" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Heading-->
                            <div class="row mb-7">
                                <div class="col-md-9 offset-md-3">
                                    <h2>Tax Settings</h2>
                                </div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Display Prices with Tax</span>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value="" name="product_tax" id="product_tax_yes" checked="checked" />
                                            <label class="form-check-label" for="product_tax_yes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value="" name="product_tax" id="product_tax_no" />
                                            <label class="form-check-label" for="product_tax_no">No</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Default Tax Rate</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Determines the tax percentage (%) applied to orders"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="products_tax_rate" value="15%" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Action buttons-->
                            <div class="row py-5">
                                <div class="col-md-9 offset-md-3">
                                    <div class="d-flex">
                                        <!--begin::Button-->
                                        <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                            <span class="indicator-label">Save</span>
                                            <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Action buttons-->
                            <!--end::Form-->
                        </div>
                        <div class="tab-pane fade" id="kt_ecommerce_settings_customers" role="tabpanel">
                            <!--begin::Form-->
                            <!--begin::Heading-->
                            <div class="row mb-7">
                                <div class="col-md-9 offset-md-3">
                                    <h2>Customers Settings</h2>
                                </div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Customers Online</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enable/disable tracking customers online status."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value="1" name="customers_online" id="customers_online_yes" checked="checked" />
                                            <label class="form-check-label" for="customers_online_yes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value="0" name="customers_online" id="customers_online_no" />
                                            <label class="form-check-label" for="customers_online_no">No</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Customers Activity</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enable/disable tracking customers activity."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value="" name="customers_activity" id="customers_activity_yes" checked="checked" />
                                            <label class="form-check-label" for="customers_activity_yes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value="" name="customers_activity" id="customers_activity_no" />
                                            <label class="form-check-label" for="customers_activity_no">No</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Customer Searches</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enable/disable logging customers search keywords."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value="" name="customers_searches" id="customers_searches_yes" checked="checked" />
                                            <label class="form-check-label" for="customers_searches_yes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value="" name="customers_searches" id="customers_searches_no" />
                                            <label class="form-check-label" for="customers_searches_no">No</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Allow Guest Checkout</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enable/disable guest customers to checkout."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value="" name="customers_guest_checkout" id="customers_guest_checkout_yes" />
                                            <label class="form-check-label" for="customers_guest_checkout_yes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value="" name="customers_guest_checkout" id="customers_guest_checkout_no" checked="checked" />
                                            <label class="form-check-label" for="customers_guest_checkout_no">No</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Login Display Prices</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Only show prices when customers log in."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value="" name="customers_login_prices" id="customers_login_prices_yes" />
                                            <label class="form-check-label" for="customers_login_prices_yes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value="" name="customers_login_prices" id="customers_login_prices_no" checked="checked" />
                                            <label class="form-check-label" for="customers_login_prices_no">No</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Max Login Attempts</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Set the max number of login attempts before the customer account is locked for 1 hour."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="customer_login_attempts" value="" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Action buttons-->
                            <div class="row py-5">
                                <div class="col-md-9 offset-md-3">
                                    <div class="d-flex">
                                        <!--begin::Button-->
                                        <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                            <span class="indicator-label">Save</span>
                                            <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Action buttons-->
                            <!--end::Form-->
                        </div>
                    </div>
                    <!--end:::Tab content-->
                </div>
                <!--end::Card body-->
            </form>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Content container-->
</div>
<?php $this->view('admin/inc/footer'); ?>
<script src="<?= ADMIN_ASSETS ?>js/custom/apps/ecommerce/settings/settings.js"></script>
<script>
    function AddNewContact() {
        var item = $('<div class="contact-area border rounded p-3 mb-3"> <div class="delete btn btn-icon btn-sm py-1" onclick=" $(this).parent().remove();"><i class="fa-solid fa-trash text-danger"></i></div> <input type="text" placeholder="Başlık" name="contact[title][]" class="form-control form-control-solid mb-3"  value="" /> <input type="text" placeholder="GSM" name="contact[gsm][]" class="form-control form-control-solid mb-3"  value="" /> <input type="text" placeholder="SABİT" name="contact[sabit][]" class="form-control form-control-solid mb-3"  value="" /> <input type="text" placeholder="FAX" name="contact[fax][]" class="form-control form-control-solid mb-3"  value="" /> <input type="text" placeholder="E-POSTA" name="contact[eposta][]" class="form-control form-control-solid mb-3"  value="" /> <input type="text" placeholder="ADRES" name="contact[adres][]" class="form-control form-control-solid mb-3"  value="" /> </div>').hide().fadeIn(300);
        $(".contacts").append(item)
    }
    $(document).ready(function() {
        orakuploader("logo", "<?= SITE_URL ?>", "logo", "Lütfen resim seçiniz!", "image/*", 1, ["<?= SITE_URL . $param['data']['logo'] ?>"]);
        orakuploader("favicon", "<?= SITE_URL ?>", "logo", "Lütfen resim seçiniz!", "image/*", 1, ["<?= SITE_URL . $param['data']['favicon'] ?>"]);
        tagify("keywords");


        $("button[name=saveButton]").on("click", () => {
            let form = $("form[name=settingsForm]").serializeArray();
            $.ajax({
                url: "<?= ADMIN_URL ?>settings/siteUpdate/<?= $param['data']['langID'] ?>",
                data: form,
                type: "POST",
                success: function(response) {
                    var response = JSON.parse(response);
                    console.log(response);
                    Swal.fire({
                        text: response.message,
                        icon: response.type,
                        confirmButtonText: "Kapat",
                    });
                },
            });
        });

        $("select[name=settingsLang").on("change", function() {
            let langID = $(this).val();
            window.location.href = "<?= ADMIN_URL ?>settings/" + langID;
        })


    });
</script>
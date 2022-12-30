<?php
require_once "config/config.php";
require_once "vendor/vendor/autoload.php";
require_once 'app/helpers/errors/errors.php';


require_once 'core/controller.php';
require_once 'core/model.php';
// require_once 'config/dil.php';
// require_once 'config/ayar.php';
require_once 'core/system.php';
// require_once 'config/helper.php';
// require_once 'config/sessionManager.php';
// require_once 'config/yetkiManager.php';
require_once 'app/helpers/database/MysqliDb.php';
require_once 'app/helpers/mail/phpmailer.php';
require_once 'app/helpers/faker/faker.php';
$mailer = new phpMail();


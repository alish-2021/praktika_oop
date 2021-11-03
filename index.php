<?php
use App\Services\App;

require_once __DIR__ . "/vendor/autoload.php"; // подключение файла с autoload
// composer dump-autoload -o установка autoload

App::start();
require_once __DIR__ . "/router/routes.php";

  

?>
 
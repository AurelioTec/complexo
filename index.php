<?php
ob_start();
define('R4F5CC', true);

require './vendor/autoload.php ';
$url = new Core\ConfigController();
$url->carregar();

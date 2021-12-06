<?php

namespace Core;

class ConfigController {

    private string $url;

    public function __construct() {

        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
        } else {

            $this->url = "home";
        }
    }

    public function carregar() {
         $this->config();
        $urlController = ucwords($this->url);
        $classe = "\\App\\sts\\Controllers\\" . $urlController;
        $classeCarregar = new $classe;
        $classeCarregar->index();
    }

    public function config() {

        define('URL', 'http://localhost/complexo/');
    }

}

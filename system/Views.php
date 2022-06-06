<?php


class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public static function output($viewPath, $emailData) {
        require_once $viewPath;
    }
}
<?php
class App
{
    protected $controller = "Welcome";
    protected $method     = "index";
    protected $params     = [];

    public function __construct()
    {
        $this->parseUri();
    }

    protected function parseUri()
    {
        $uri = ltrim($_SERVER["REQUEST_URI"], "/");
        $url = array_filter(explode("/", $uri));

        if (!empty($url[0])) {
            if (file_exists(CONTROLLER . $url[0] . ".php")) {
                $this->controller = $url[0];
                unset($url[0]);
            }
        }
        if (!empty($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        $this->params = !empty($url) ? array_values($url) : [];
        $this->call();

    }

    protected function call()
    {
        $this->controller = new $this->controller;
        call_user_func_array([$this->controller, $this->method], [$this->params]);

    }

}

<?php
class Controller
{
    protected function view($view, $params = [])
    {
        require_once VIEW . $view . ".php";
    }

}

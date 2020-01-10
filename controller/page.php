<?php
class Page extends Controller
{
    public function index($params)
    {
        $this->view("page", $params);
    }
}

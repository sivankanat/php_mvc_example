<?php
class Another extends Controller
{
    public function index($params)
    {
        $this->view("another", $params);
    }
}

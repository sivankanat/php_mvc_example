<?php
class Welcome extends Controller
{
    public function index($params)
    {
        $this->view("welcome", $params);
    }
}

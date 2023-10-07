<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function contact(): string
    {
        return "halo";
}
public function about(): string
    {
        return "ttttdtdddd";
    }
}
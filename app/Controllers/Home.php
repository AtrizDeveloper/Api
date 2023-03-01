<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        echo "supongo que esto también lo hacemos chido";
        return view('welcome_message');
    }
}

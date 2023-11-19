<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('User');
    }
    public function workshop(): string
    {
        return view('WorkShop');
    }
}

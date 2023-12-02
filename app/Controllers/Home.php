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
    public function gallery(): string
    {
        return view('gallery');
    }
    public function Contact(): string
    {
        return view('Contact');
    }
    public function Shop(): string
    {
        return view('Shop');
    }
    public function Cart(): string
    {
        return view('Cart');
    }
}

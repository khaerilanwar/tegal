<?php

namespace App\Controllers;

class Jasa extends BaseController
{
    public function index()
    {
        return view('jasa/index');
    }

    public function detail()
    {
        return view('jasa/jasa');
    }
}

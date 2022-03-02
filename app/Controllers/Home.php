<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['styles'][] = base_url('/assets/css/index.css');
        $data['scripts'][] = base_url('/assets/js/index.js');

        return view('welcome_message', $data);
    }
}

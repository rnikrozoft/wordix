<?php

namespace App\Controllers;

class Play extends BaseController
{
    public function index()
    {
        $data['styles'][] = base_url('/assets/css/play.css');
        $data['scripts'][] = base_url('/assets/js/play.js');
        

        return view('play', $data);
    }
}

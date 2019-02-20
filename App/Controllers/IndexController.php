<?php

namespace App\Controllers;

use App\View\TemplateView;

class IndexController
{
    public function index()
    {
        return new TemplateView("index");
    }

}

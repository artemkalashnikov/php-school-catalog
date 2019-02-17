<?php

namespace App\Controllers;

use App\View\StringView;
use App\View\TemplateView;

class FormController
{
    public function view($params)
    {
        //return new StringView('Forms view ' . $params['id']);
        return new TemplateView('forms_view', $params);
    }

    public function index()
    {
        return new StringView('Forms index');
    }

    public function update()
    {
        //
    }

    public function delete($id)
    {
        //
    }
}

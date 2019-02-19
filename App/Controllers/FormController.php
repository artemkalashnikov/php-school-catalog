<?php

namespace App\Controllers;

use App\Database\Connection;
use App\View\StringView;
use App\View\TemplateView;

class FormController
{
    public function view($params)
    {
        return new StringView('Forms view ' . $params['id']);
    }

    public function index()
    {
        $connection = Connection::connect();
        pd($connection);
        $forms = []; // TODO

        pd($forms);

        return new TemplateView('forms_index', ['forms' => $forms]);
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

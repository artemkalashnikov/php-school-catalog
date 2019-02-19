<?php

namespace App\Controllers;

use App\Database\Query;
use App\View\TemplateView;

class FormController
{
    public function view($params)
    {
        $query = new Query;
        $form = $query->fetchRow(
            "SELECT * FROM forms WHERE id = ?",
            [
                $params['id']
            ]
        );

        return new TemplateView('forms_view', ['form' => $form]);
    }

    public function index()
    {
        $query = new Query();
        $forms = $query->fetchArray("SELECT * FROM forms");

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

<?php

namespace App\Controllers;

class ToolsController
{
    public function phpinfo()
    {
        phpinfo();
        die;
    }
}

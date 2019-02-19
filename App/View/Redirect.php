<?php

namespace App\View;

class Redirect implements ViewInterface
{
    protected $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function render()
    {
        header('Location: ' . $this->url);
    }
}

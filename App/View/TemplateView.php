<?php

namespace App\View;

use Exception;

class TemplateView implements ViewInterface
{
    protected $template;
    protected $params;

    public function __construct($template, $params)
    {
        $this->template = $template;
        $this->params = $params;
    }

    /**
     * @throws \Exception
     */
    public function render()
    {
        extract($this->params);
        require __DIR__ . '/../../views/layout.php';
        try {
            require __DIR__ . '/../../views/'.$this->template.'.php';
        } catch (Exception $e) {
            throw new \Exception("Such template as ".$this->template." doesn't exist");
        }
    }
}

<?php

namespace App\View;

class TemplateView implements ViewInterface
{
    protected $template;

    protected $params;

    public function __construct(string $template, array $params = [])
    {
        $this->template = $template;
        $this->params = $params;
    }

    public function render()
    {
        extract($this->params);

        ob_start();
        require __DIR__ . '/../../views/' . $this->template . '.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layout.php';
    }
}

<?php

namespace ExampleApp;

use AG\WebApp\Tpl;
use AG\WebApp\Tpl\Twig;

class AppTwig implements Tpl {
    
    private $tpl;

    public function __construct(string $tplName, Tpl $tpl = null)
    {
        $this->tpl = $tpl ?? new Twig(
            $tplName,
            new \Twig\Environment(
                new \Twig\Loader\FilesystemLoader(
                    __DIR__ . '/tpl'
                ), 
                [
                    'cache' => __DIR__ . '/cache',
                    'debug' =>  true // @todo application mode Development or Production
                ]
            )
        );
    }

    public function render(array $data = null): string
    {
        return $this->tpl->render($data);
    }
}
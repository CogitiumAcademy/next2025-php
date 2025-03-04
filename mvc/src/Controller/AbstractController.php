<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

abstract class AbstractController
{
    public function render(string $content): Response
    {
        global $twig;
        $content = $twig->render($content);
        return new Response($content);
    }
}
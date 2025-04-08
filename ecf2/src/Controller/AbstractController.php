<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

abstract class AbstractController
{
    public function render(string $content, array $data = []): Response
    {
        global $twig;
        $content = $twig->render($content, $data);
        return new Response($content);
    }
}
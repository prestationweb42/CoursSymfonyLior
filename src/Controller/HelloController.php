<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HelloController{

    // route hello
    /**
     * @Route("/hello/{name?World}", name="hello", methods={"GET", "POST"})
     */
    public function hello($name = "World", Environment $twig){
        
        $html = $twig->render('hello.html.twig',
    [
        'name' => $name,
        'ages'=> [
            12,
            18,
            29,
            15
        ]
    ]
    );
        return new Response($html);
    }
}
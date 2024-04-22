<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExampleController extends AbstractController
{

    #[Route('/hello', name: 'hello')]
    public function hello() : Response
    {
        return new Response("Hello World!");
    }

    #[Route('/hello/{name}', name: 'hello_param')]
    public function helloParam($name) : Response
    {
        return new Response("Hello {$name}!");
    }

    #[Route('/view', name: 'view')]
    public function view() : Response
    {
        return $this->render('view.html.twig');
    }

}
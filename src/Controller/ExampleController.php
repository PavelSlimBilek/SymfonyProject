<?php

namespace App\Controller;

use App\Service\ExampleService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExampleController extends AbstractController
{

    private ExampleService $service;

    public function __construct(ExampleService $service)
    {
        $this->service = $service;
    }

    #[Route('/show', name: 'show_all')]
    public function showAll(): Response
    {
        return $this->render('show_all.html.twig', ['entities' => $this->service->getAll()]);
    }

    #[Route('/save/{name}', name: 'save')]
    public function save(string $name): Response
    {
        $this->service->save($name);
        return $this->redirectToRoute('show_all');
    }

}
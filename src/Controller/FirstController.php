<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class FirstController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function index(): Response
    {

        return $this->render('first/index.html.twig', [
            'name' => 'FAKHFAKH',
            'firstname' => 'Ahmed'
    ]);
    }

    #[Route('/sayHello/{name}/{firstname}', name: 'say.hello')]
    public function sayHello(Request $request1, $name, $firstname): Response
    {
        dd($request1);
        return $this->render('first/hello.html.twig', [
            'nom' => $name,
            'prenom' => $firstname
        ]);
    }
}

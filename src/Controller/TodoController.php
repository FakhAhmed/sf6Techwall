<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

#[Route("/todo")]
class TodoController extends AbstractController
{
    /**
     * @Route("/", name="todo")
     */
    public function index(Request $request): Response
    {
        $session = $request->getSession();
        //Afficher notre tableau de todo
        //Si je l'initialise puis j'affiche
        if (!$session->has('todos')){
            $todos = [
                'achat'=>'acheter clé usb',
                'cours'=>'Finaliser mon cours',
                'correction'=>'corriger mes examens'
            ];
            $session->set('todos', $todos);
            $this->addFlash('info', message: "La liste des todos viens d'etre initialiser");
        }
        //Sinon j'ai mon tableau de todo dans ma session je ne fait que l'afficher
        return $this->render('todo/index.html.twig');
    }
    #[Route(
        '/add/{name}/{content?sf6}',
        name: 'todo.add',
        defaults:['name'=>'samedi']
    )]
    public function addTodo(Request $request, $name, $content): RedirectResponse {
        $session = $request->getSession();
        //vérifier si j'ai mon tableau de todo dans la session
        if ($session->has('todos')){
            //si oui
            //verifier si on a un todo avec le meme name
            $todos = $session->get(name: 'todos');
            if (isset($todos[$name])){
                //Si oui afficher erreur
                $this->addFlash('error', message: "Le todo d'id $name existe deja dans la liste");

            }
            else{
                //Sinon on l'ajoute et on affiche un msg de succes
                $todos[$name]=$content;
                $session->set('todos',$todos);
                $this->addFlash('success', message: "Le todo d'id $name a ete ajoute avec succes");
            }
        }else{
            //Si non
            // afficher une erreur et on va redireger vers le controlleur index
            $this->addFlash('error', message: "La liste des todos n'a pas encore initialiser");

        }
        return $this->redirectToRoute('todo');

    }
    #[Route('/update/{name}/{content}', name: 'todo.update')]
    public function updateTodo(Request $request, $name, $content): RedirectResponse {
        $session = $request->getSession();
        //vérifier si j'ai mon tableau de todo dans la session
        if ($session->has('todos')){
            //si oui
            //verifier si on a un todo avec le meme name
            $todos = $session->get(name: 'todos');
            if (!isset($todos[$name])){
                //Si oui afficher erreur
                $this->addFlash('error', message: "Le todo d'id $name n'existe pas dans la liste");

            }
            else{
                //Sinon on l'ajoute et on affiche un msg de succes
                $todos[$name]=$content;
                $this->addFlash('success', message: "Le todo d'id $name a ete modifie avec succes");
                $session->set('todos',$todos);
            }
        }else{
            //Si non
            // afficher une erreur et on va redireger vers le controlleur index
            $this->addFlash('error', message: "La liste des todos n'a pas encore initialiser");

        }
        return $this->redirectToRoute('todo');

    }
    #[Route('/delete/{name}', name: 'todo.delete')]
    public function deleteTodo(Request $request, $name): RedirectResponse {
        $session = $request->getSession();
        //vérifier si j'ai mon tableau de todo dans la session
        if ($session->has('todos')){
            //si oui
            //verifier si on a un todo avec le meme name
            $todos = $session->get(name: 'todos');
            if (!isset($todos[$name])){
                //Si oui afficher erreur
                $this->addFlash('error', message: "Le todo d'id $name n'existe pas dans la liste");

            }
            else{
                //Sinon on l'ajoute et on affiche un msg de succes
                unset($todos[$name]);
                $this->addFlash('success', message: "Le todo d'id $name a ete supprime avec succes");
                $session->set('todos',$todos);
            }
        }else{
            //Si non
            // afficher une erreur et on va redireger vers le controlleur index
            $this->addFlash('error', message: "La liste des todos n'a pas encore initialiser");

        }
        return $this->redirectToRoute('todo');
    }
    #[Route('/reset', name: 'todo.reset')]
    public function resetTodo(Request $request): RedirectResponse {
        $session = $request->getSession();
        $session->remove(name: 'todos');
        return $this->redirectToRoute('todo');
    }
}



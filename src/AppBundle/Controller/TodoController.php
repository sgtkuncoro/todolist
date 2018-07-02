<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Todo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TodoController extends Controller
{
    /**
     * @Route("/todos", name="todo_list")
     */
    public function listAction(){
        $todos = $this->getDoctrine()
                ->getRepository('AppBundle:Todo')
                ->findAll();

        return $this->render('todo/index.html.twig', array(
            'todos' => $todos
        ));
    }

    /**
     * @Route("/todo/add", name="todo_add")
     */
    public function addAction(){
        return $this->render('todo/form.html.twig', array(
            'formTitle' => "Add Todo"
        ));
    }

    /**
     * @Route("/todo/create", name="todo_create")
     */
    public function createAction(Request $request) {
        return;
    }

    /**
     * @Route("/todo/edit/{id}", name="todo_edit")
     */
    public function editAction($id, Request $request) {
        return;
    }
    
    /**
     * @Route("/todo/detais/{id}", name="todo_detail")
     */
    public function detailsAction($id) {
        return;
    }
}

<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TodoController extends Controller
{
    /**
     * @Route("/todos", name="todo_list")
     */
    public function listAction(){
        return $this->render('todo/index.html.twig');
    }

    /**
     * @Route("/todo/create", name="todo_create")
     */
    public function createAction(Request $request) {
        return $this->render('todo/create.html.twig');
    }

    /**
     * @Route("/todo/edit/{id}", name="todo_edit")
     */
    public function editAction($id, Request $request) {
        return $this->render('todo/edit.html.twig');
    }
    
    /**
     * @Route("/todo/detais/{id}", name="todo_detail")
     */
    public function detailsAction($id) {
        return $this->render('todo/detais.html.twig');
    }
}

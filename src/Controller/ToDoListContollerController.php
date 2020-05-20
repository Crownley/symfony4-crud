<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ToDoListContollerController extends AbstractController
{
    /**
     * @Route("/to/do/list/contoller", name="to_do_list_contoller")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ToDoListContollerController.php',
        ]);
    }
}

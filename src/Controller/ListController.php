<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



class ListController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function index(Request $request)

    {   $link = mysqli_connect("localhost", "root", "mysql123", "apa1");
        $sql = "SELECT user.name,user.email,user.id FROM user";
        $result = mysqli_query($link, $sql);
        mysqli_close($link);



        return $this->render('list/index.html.twig', [
            'users' => $result,
        ]);


    }
}

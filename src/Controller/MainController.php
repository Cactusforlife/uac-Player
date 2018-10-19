<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 17-10-2018
 * Time: 18:19
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/")
     */

    public function home()
    {
        return $this->render('home.html.twig');
    }

}
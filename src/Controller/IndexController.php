<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class IndexController extends AbstractController
{

    #[Route(path: '/', name: 'index')]
    public function indexAction(): Response
    {
        return $this->render('index.html.twig');
    }
}

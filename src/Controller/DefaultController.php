<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends FrontendController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function defaultAction(Request $request): Response
    {
        return $this->render('default/webpage.html.twig');
    }

     /**
     * @param Request $request
     * @return Response
     */
    public function homePage(Request $request): Response
    {
        return $this->render('default/homepage.html.twig');
    }
}

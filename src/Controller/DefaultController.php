<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Clothings;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends FrontendController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function defaultAction(Request $request): Response

    {
        
        return $this->render('default/default.html.twig');
    }

<<<<<<<<< Temporary merge branch 1
    
=========
>>>>>>>>> Temporary merge branch 2
}

<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Clothings;
use Pimcore\Model\DataObject\Footwear;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FeedController extends FrontendController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function feedAction(Request $request): Response
    { 
        return $this->render('default/feedback.html.twig');
    }

   
        
}
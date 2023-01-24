<?php

namespace App\Controller;

use App\DataMapper\Areas\ClothingDataMapper;
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
        return $this->render('default/app.html.twig');
    }

    
    /**
     * @Route("/testing-url",name="testing_url")
     * 
     */
    public function test(Request $request)
    { 
        $test = Clothings::getById(38);
        // dd($test->getClass());

        // dd((new ClothingDataMapper($test))->toArray($request));
        dd((new ClothingDataMapper($test))->toArray($request));
    }


   
        
}
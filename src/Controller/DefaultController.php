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

     /**
     * @param Request $request
     * @return Response
     */
    public function homePageAction(Request $request): Response
    {
        $boyz = Clothings::getById(38);
        $boyz->getPrice("price");
        return $this->render('default/homepage.html.twig',['object' => $boyz]);
    }

     /**
     * @param Request $request
     * @return Response
     */
    public function headerAction(Request $request): Response

    {
        
        return $this->render('default/header.html.twig');
    }

     /**
     * @param Request $request
     * @return Response
     */
    public function footerAction(Request $request): Response

    {
        
        return $this->render('default/footer.html.twig');
    }




    

    
}

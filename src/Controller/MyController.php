<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Clothings;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\DataObject\Footwear;

class MyController extends FrontendController
{

    #[Route("/home" ,methods:["GET"] ,name:"homepage")]
    public function welcomeAction(Request $request){
        return $this->render("default/home.html.twig");
    }


    #[Route("/footwear" ,methods:["GET"] ,name:"footwear")]
    public function footwear(Request $request){
        $footwear = new Footwear\Listing();
        return $this->render("default/footwear.html.twig", ['footwear'=> $footwear]);
    }


    #[Route("/clothing" ,methods:["GET"] ,name:"clothing")]
    public function clothing(Request $request){
        return $this->render("default/clothing.html.twig");
    }
    

    #[Route("/beauty" ,methods:["GET"] ,name:"beauty")]
    public function beauty(Request $request){
        return $this->render("default/beauty.html.twig");
    }

    #[Route("/electronic" ,methods:["GET"] ,name:"electronic")]
    public function electronic(Request $request){
        return $this->render("default/electronic.html.twig");
    }

    #[Route("/feedback" ,methods:["GET"] ,name:"feedback")]
    public function feedback(Request $request){
        return $this->render("default/feedback.html.twig");
    }

}
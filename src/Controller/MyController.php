<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Clothings;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends FrontendController
{



    #[Route("/home" ,methods:["GET"] ,name:"homepage")]
    public function Welcome(Request $request){
       


        return $this->render("default/home.html.twig");
    }





    #[Route("/footwear" ,methods:["GET"] ,name:"footwear")]
    public function footwear(Request $request){
        return $this->render("default/footwear.html.twig");
    }


    #[Route("/clothing" ,methods:["GET"] ,name:"clothing")]
    public function clothing(Request $request){

        $boy1= Clothings::getById(38);
        $boy1 ->getPrice("price");
        $boy1 ->getImage("image");
        
        return $this->render("default/clothing.html.twig",["object"=>$boy1]);
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
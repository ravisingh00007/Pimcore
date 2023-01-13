<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Clothings;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\DataObject\Clothings\Listing;
use Pimcore\Model\Asset\MetaData\ClassDefinition\Data\DataObject;
use Pimcore\Model\DataObject\FeedClass;
use App\Controller\EntityManagerInterface;

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


    #[Route("/clothing" ,methods:["GET" ,"POST"] ,name:"clothing")]
    public function clothing(Request $request){

        $allCloths = new Clothings\Listing();
        

        
        return $this->render("default/clothing.html.twig" ,['object' => $allCloths]);
    }
    
    #[Route("/beauty" ,methods:["GET","POST"] ,name:"beauty")]
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
    
    #[Route("/handleFeedback" , methods:["POST"], name:"HandleFeedback")]
    public function handleFeed(Request $request){
        $name = $request->getContent().['name'];
        $email = $request->getContent().['email'];
        $address = $request->getContent().['address'];
        $suggestion = $request->getContent().[];
       
        // $data = json_decode($request->getContent(), true);
        // $name = $data['name'];
        // $email = $data['email'];
        // $address = $data['address'];
        // $suggestion = $data['suggestion'];

        $object = new FeedClass();
        $object->setKey($name);
        $object ->setParentId(42);

        $object->setName($name);
        $object->setEmail($email);
        $object->setAddress($address);
        $object->setSuggestion($suggestion);
        $object->setPublished(true);

        $object->save();
    
        return $this->json(['status' => 'object added!']);

    }


}
<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Clothings;
use Pimcore\Model\DataObject\Footwear;
use Pimcore\Model\DataObject\Beauty;
use Pimcore\Model\DataObject\Electronics;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MyController extends FrontendController
{
  
    #[Route("/home" ,methods:["GET"] ,name:"homepage")]
    public function welcomeAction(Request $request){
        return $this->render("default/home.html.twig");
    }


    #[Route("/footwear" ,methods:["GET"] ,name:"footwear")]
    public function footwear(Request $request){
        $footwear = new Footwear\Listing();

        // foreach($footwear->getCategory() as $foot){
        //     $classificationStore = $foot->getCategory();
        //     foreach ($classificationStore->getGroups() as $group) {
        //         $categoryName = array(($group->getConfiguration()->getName()));
        //     }
        // }
        //,['category'=>$categoryName]
        return $this->render("default/footwear.html.twig", ['footwear'=> $footwear]);
    }

    #[Route("/men" ,methods:["GET" ,"POST"] ,name:"men")]
    public function menFootwear(Request $request){
        $footwear = new Footwear\Listing();
        $men = new Footwear();
        $men = []; 
        foreach ($footwear as $item){
            if($item->getGender()=="Men"){
                array_push($men,$item);
            }else{
                continue;
            }
        }
        // $object = (object) $array;
        dd($men);
        return $this->render("default/footwear.html.twig", ['footwear'=>$men]);
    }




    #[Route("/clothing" ,methods:["GET" ,"POST"] ,name:"clothing")]
    public function clothing(Request $request){

        return $this->render("default/clothing.html.twig");
    }
    
    #[Route("/beauty" ,methods:["GET"] ,name:"beauty")]
    public function beauty(Request $request){
        $beauty = new Beauty\Listing();
        return $this->render("default/beauty.html.twig", ['beauty'=> $beauty]);
    }

    #[Route("/electronic" ,methods:["GET"] ,name:"electronic")]
    public function electronic(Request $request){
        $electronic = new Electronics\Listing();
        return $this->render("default/electronic.html.twig", ['electronic'=> $electronic]);
    }

    #[Route("/feedback" ,methods:["GET"] ,name:"feedback")]
    public function feedback(Request $request){
        return $this->render("default/feedback.html.twig");
    }

    #[Route("/test" ,methods:["GET"] ,name:"test")]
    public function testAction(Request $request){
       $test =  Footwear::getById(60);

       $classificationStore = $test->getCategory();

       foreach ($classificationStore->getGroups() as $group) {
             $categoryName = array(($group->getConfiguration()->getName()));
    
    // foreach ($group->getKeys() as $key) {
    //     $keyConfiguration = $key->getConfiguration();

    //     $value = $key->getValue();
    //     if ($value instanceof \Pimcore\Model\DataObject\Data\QuantityValue) {
    //         $value = (string)$value;
    //     }
    //     dump([
    //         $value,
    //         ($key->getFieldDefinition() instanceof QuantityValue),
    //     ]);
        }
          // dd( 'here');
        return $this->render("default/home.html.twig",['category'=>$categoryName]);
    }
}
<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Clothings;
use Pimcore\Model\DataObject\Footwear;
use Pimcore\Model\DataObject\Beauty;
use Pimcore\Model\DataObject\Electronics;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\DataObject\Clothings\Listing;
use Pimcore\Model\Asset\MetaData\ClassDefinition\Data\DataObject;
use Pimcore\Model\DataObject\FeedClass;

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
         $cloth = new Clothings\Listing();
        // dd($cloth);
        return $this->render("default/clothing.html.twig",['object'=>$cloth]);
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
        $flag = false;
        return $this->render("default/feedback.html.twig" ,['alert'=>$flag]);
    }
    
    #[Route("/handleFeedback" , methods:["POST"], name:"HandleFeedback")]
    public function handleFeed(Request $request){
        // $data = json_decode($request->getContent(), true);
        $flag = false ;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $suggestion = $_POST['suggestion'];

        $object = new FeedClass();
        $object ->setKey($name);
        $object ->setParentId(42);

        $object ->setName($name);
        $object ->setEmail($email);
        $object ->setAddress($address);
        $object ->setSuggestion($suggestion);
        $object ->setPublished(true);

         
         $mail=new \Pimcore\Mail();
         $mail->to('ravi@gmail.com');
         $mail->text("this is document");
         $mail->send();
         $object->save();

         if($object->save()){
            $flag=true;
         }
         
         return $this->render("default/feedback.html.twig"  , ['alert'=>$flag]);
     }


         
}
<?php

namespace App\Controller;

use App\DataMapper\Areas\ClothingDataMapper;
use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Clothings;
use Pimcore\Model\DataObject\Footwear;
use Pimcore\Model\DataObject\Beauty;
use Pimcore\Model\DataObject\Electronics;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\DataObject\FeedClass;
use Pimcore\Model\DataObject\Users;
use App\Repository\ClothingRepository;

class MyController extends FrontendController
{

    public function __construct(
        private ClothingRepository $clothingRepository
    )
    {
        
    }


  // home route
    #[Route("/home" ,methods:["GET"] ,name:"homepage")]
    public function welcomeAction(Request $request){
        return $this->render("default/home.html.twig");
    }

 //footwear
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

    //filters
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





   //clothings
    #[Route("/clothing" ,methods:["GET"] ,name:"clothing")]
    public function clothing(Request $request){

         $cloth = new Clothings\Listing();
         $cloth->setOrderKey('price');
         $cloth->setOrder('asc');
         $cloth->setLimit(3);

         
            
        
        return $this->render("default/clothing.html.twig",['object'=>$cloth]);
    }





    

    //beauty
    #[Route("/beauty" ,methods:["GET"] ,name:"beauty")]
    public function beauty(Request $request){
        $beauty = new Beauty\Listing();
        return $this->render("default/beauty.html.twig", ['beauty'=> $beauty]);
    }


    //electronics
    #[Route("/electronic" ,methods:["GET"] ,name:"electronic")]
    public function electronic(Request $request){
        $electronic = new Electronics\Listing();
        return $this->render("default/electronic.html.twig", ['electronic'=> $electronic]);
    }

    //feedback
    #[Route("/feedback" ,methods:["GET"] ,name:"feedback")]
    public function feedback(Request $request){
        $flag = false;
        return $this->render("default/feedback.html.twig" ,['alert'=>$flag]);
    }
    
    //feedback Submit
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


     //sign Up
     #[Route("/signup" ,methods:["GET"] ,name:"signUp")]
     public function showSingUpForm(Request $request){
         $userSave = false;

         return $this->render("default/signup.html.twig");
     }
    
     //sign up submit
     #[Route("/userSubmit" ,methods:["POST"] ,name:"signUpSubmit")]
     public function showSingUpFormSubmit(Request $request){
        $userSave = false;
        $object = new Users();

        $userName = $_POST['name'];
        $email = $_POST['email'];
        $userPassword = $_POST['password'];

        

        $object ->setKey($userName);
        $object -> setParentId(61);

        $object->setName($userName);
        $object->setEmail($email);
        $object->setPassword($userPassword);
        $object ->setPublished(true);

        $object ->save();

        if($object->save() == true){
            $userSave =true;
            return $this->render("default/login.html.twig",["userSave" =>$userSave]); 
        }else{
             $userSave = false ;
            return $this->render("default/signup.html.twig",["userSave" =>$userSave]);
        }

        // return $this->render("default/signup.html.twig");

     }
    
     //login
     #[Route("/login" ,methods:["GET"] ,name:"login")]
     public function showLoginForm(Request $request){
         $userSave = false;

         return $this->render("default/login.html.twig",['userSave' =>$userSave]);
     }

     //login submit
     #[Route("/loginSubmit" ,methods:["POST"] ,name:"loginSubmit")]
     public function LoginSubmit(Request $request){
         $userSave = false;

         $object = new Users\Listing();

         foreach($object as $user){
            if($user->getEmail() == $_POST['email'] && $user->getPassword() == $_POST['password']){
                $name = $user->getName();
                $visibilityLogout = "vissible";
                $visibilityLogin  ="hidden";
                return $this->render("default/home.html.twig",['visibilityLogout' =>$visibilityLogout]);
            }
         }

         return $this->render("default/login.html.twig",['userSave' =>$userSave]);
     }
   
     #[Route('/pagination' ,methods:["GET"] ,name:"Pagination")]
     public function pAGINATIONN(Request $request){
         return $this->render("default/pagination.html.twig");
     }

         
}
<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\Asset\MetaData\ClassDefinition\Data\DataObject;
use Pimcore\Model\DataObject\Clothings;
use Pimcore\Model\DataObject\Footwear;
use Pimcore\Model\DataObject\Beauty;
use Pimcore\Model\DataObject\Electronics;
use Pimcore\Model\DataObject\FeedClass;

class MyController extends FrontendController
{



    #[Route("/home" ,methods:["GET"] ,name:"homepage")]
    public function welcomeAction(Request $request){
        return $this->render("default/home.html.twig");
    }

//     /**
//      * @param Request $request
//      * @return Response
//      */
//     public function testAction( Request $request, \Knp\Component\Pager\PaginatorInterface $paginator)
// {
//     $list = new Clothings\Listing();
//     $list->setOrderKey("price");
//     $list->setOrder("asc");
 
//     $paginator = $paginator->paginate($list, $request->get('page', 1), 6 );

//     return $this->render('default/clothing.html.twig', ['paginator' => $paginator,'paginationVariables' => $paginator->getPaginationData()]);
// }
        


    // Listing and filtering for footwear Class

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

    // Route to filter men items
    
    #[Route("/men" ,methods:["GET" ,"POST"] ,name:"men")]
    public function menFootwear(Request $request){
        $footwear = new Footwear\Listing();
        $menitems = []; 
        foreach ($footwear as $item){
            if ($item->getLookingFor()=="Men"){
                array_push($menitems,$item);
            }
        }
        return $this->render("default/footwear.html.twig", ['footwear'=>$menitems]);
    }
    
    // Route to filter women items

    #[Route("/women" ,methods:["GET" ,"POST"] ,name:"women")]
    public function womenFootwear(Request $request){
        $footwear = new Footwear\Listing();
        $women = []; 
        foreach ($footwear as $item){
            if ($item->getLookingFor()=="Women"){
                array_push($women,$item);
            }
        }
        return $this->render("default/footwear.html.twig", ['footwear'=>$women]);
    }

    // Route to filter kids items

    #[Route("/kids" ,methods:["GET" ,"POST"] ,name:"kids")]
    public function kidsFootwear(Request $request){
        $footwear = new Footwear\Listing();
        $kids = []; 
        foreach ($footwear as $item){
            if ($item->getLookingFor()=="Kids"){
                array_push($kids,$item);
            }
        }
        return $this->render("default/footwear.html.twig", ['footwear'=>$kids]);
    }



    // Listing and filtering for clothing Class
    
    #[Route("/clothing" ,methods:["GET"] ,name:"clothing")]
    public function clothing(Request $request){
        $clothing = new Clothings\Listing();
        return $this->render("default/clothing.html.twig", ['clothing'=> $clothing]);
    }
    // Route to filter men items

    #[Route("/menclothing" ,methods:["GET" ,"POST"] ,name:"menclothing")]
    public function menClothing(Request $request){
        $clothing = new Clothings\Listing();
        $menitems = []; 
        foreach ($clothing as $item){
            if ($item->getLookingFor()=="Men"){
                array_push($menitems,$item);
            }
        }
        return $this->render("default/clothing.html.twig", ['clothing'=>$menitems]);
    }
    
    // Route to filter women items

    #[Route("/womenclothing" ,methods:["GET" ,"POST"] ,name:"womenclothing")]
    public function womenClothing(Request $request){
        $clothing = new Clothings\Listing();
        $women = []; 
        foreach ($clothing as $item){
            if ($item->getLookingFor()=="Women"){
                array_push($women,$item);
            }
        }
        return $this->render("default/clothing.html.twig", ['clothing'=>$women]);
    }

    // Route to filter kids items

    #[Route("/kidsfashion" ,methods:["GET" ,"POST"] ,name:"kidsfashion")]
    public function kidsFashion(Request $request){
        $clothing = new Clothings\Listing();
        $kids = []; 
        foreach ($clothing as $item){
            if ($item->getLookingFor()=="Kids"){
                array_push($kids,$item);
            }
        }
        return $this->render("default/clothing.html.twig", ['clothing'=>$kids]);
    }



    // Listing and filtering for beauty class

    #[Route("/beauty" ,methods:["GET"] ,name:"beauty")]
    public function beauty(Request $request){
        $beauty = new Beauty\Listing();
        return $this->render("default/beauty.html.twig", ['beauty'=> $beauty]);
    }
    
    // Route to filter skincare items

    #[Route("/skincare" ,methods:["GET" ,"POST"] ,name:"skincare")]
    public function skinCare(Request $request){
        $beauty = new Beauty\Listing();
        $items = []; 
        foreach ($beauty as $item){
            if ($item->getBeautyType()=="SkinCare"){
                array_push($items,$item);
            }
        }
        return $this->render("default/beauty.html.twig", ['beauty'=>$items]);
    }
    
     // Route to filter haircare items

     #[Route("/haircare" ,methods:["GET" ,"POST"] ,name:"haircare")]
     public function hairCare(Request $request){
         $beauty = new Beauty\Listing();
         $items = []; 
         foreach ($beauty as $item){
             if ($item->getBeautyType()=="HairCare"){
                 array_push($items,$item);
             }
         }
         return $this->render("default/beauty.html.twig", ['beauty'=>$items]);
     }
    
    // Route to filter haircare items

    #[Route("/makeup" ,methods:["GET" ,"POST"] ,name:"makeup")]
    public function bodyCare(Request $request){
        $beauty = new Beauty\Listing();
        $items = []; 
        foreach ($beauty as $item){
            if ($item->getBeautyType()=="makeup"){
                array_push($items,$item);
            }
        }
        return $this->render("default/beauty.html.twig", ['beauty'=>$items]);
    }

    // Route to filter haircare items

    #[Route("/fragnance" ,methods:["GET" ,"POST"] ,name:"fragnance")]
    public function fragnance(Request $request){
        $beauty = new Beauty\Listing();
        $items = []; 
        foreach ($beauty as $item){
            if ($item->getBeautyType()=="Fragnance"){
                array_push($items,$item);
            }
        }
        return $this->render("default/beauty.html.twig", ['beauty'=>$items]);
    }




    //Listing and filtering for electronic class

    #[Route("/electronic" ,methods:["GET"] ,name:"electronic")]
    public function electronic(Request $request){
        $electronic = new Electronics\Listing();
        return $this->render("default/electronic.html.twig", ['electronic'=> $electronic]);
    }

    // Route to filter audio items

    #[Route("/audio" ,methods:["GET" ,"POST"] ,name:"audio")]
    public function audio(Request $request){
        $electronic = new Electronics\Listing();
        $items = []; 
        foreach ($electronic as $item){
            if ($item->getSelectCategory()=="Audio"){
                array_push($items,$item);
            }
        }
        return $this->render("default/electronic.html.twig", ['electronic'=>$items]);
    }
    
    // Route to filter audio items

    #[Route("/laptop" ,methods:["GET" ,"POST"] ,name:"laptop")]
    public function laptop(Request $request){
        $electronic = new Electronics\Listing();
        $items = []; 
        foreach ($electronic as $item){
            if ($item->getSelectCategory()=="Laptop"){
                array_push($items,$item);
            }
        }
        return $this->render("default/electronic.html.twig", ['electronic'=>$items]);
    }
    
    // Route to filter audio items

    #[Route("/mobiles" ,methods:["GET" ,"POST"] ,name:"mobiles")]
    public function mobiles(Request $request){
        $electronic = new Electronics\Listing();
        $items = []; 
        foreach ($electronic as $item){
            if ($item->getSelectCategory()=="Mobiles"){
                array_push($items,$item);
            }
        }
        return $this->render("default/electronic.html.twig", ['electronic'=>$items]);
    }

    #[Route("/feedback" ,methods:["GET"] ,name:"feedback")]
    public function feedback(Request $request){
        return $this->render("default/feedback.html.twig");
    }
    
    #[Route("/handleFeedback" , methods:["POST","GET"], name:"HandleFeedback")]
    public function handleFeed(Request $request){
       
        $data = json_decode($request->getContent(), true);
        $name = $data['name'];
        $email = $data['email'];
        $address = $data['address'];
        $suggestion = $data['suggestion'];

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
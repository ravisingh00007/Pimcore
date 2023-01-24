<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Pimcore\Controller\Configuration\ResponseHeader;
use App\Repository\ClothingRepository ;
use Pimcore\Model\DataObject\Clothings;
use Symfony\Component\Routing\Annotation\Route;

use function PHPUnit\Framework\throwException;

class ClothingController extends FrontendController
{   


    /**
    * Very simple example using $this->>render() and passing the parameter 'foo'
    */
    public function indexAction()
    {

        return $this->render('default/clothing.html.twig');
    }

 


   /**
    *@Route("/clothing/{slug}-{clothId}" , name="cloth_show" , requirements={"slug"="[\w-]+" , "clothId" ="\d+"})
    *
    *@param Request $request
    *@param int $clothId
    * @return Response
    * @throws \Exception
    */

    public function showAction(Request $request , int $clothId)
    {   

        $cloth = Clothings::getById($clothId);
        
        if((empty($cloth))){
            throw new \Exception("No Cloths is found");
        }
        

        return $this->render('default/clothing.html.twig',
        [
            'cloth' => []
        ]
    );
    }



}
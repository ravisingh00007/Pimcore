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

//     return $this->render('default/pagination.html.twig', ['paginator' => $paginator,'paginationVariables' => $paginator->getPaginationData()]);
// }
        
}
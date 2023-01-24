<?php

namespace App\Repository;

use App\Service\ClothingListingQueryBuilder;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Pimcore\Model\DataObject\Clothings;
use Symfony\Component\HttpFoundation\Request;

//We are goind to call two methods
//1 is find() it accept an id and return a paticular Clothing with particular id
//2 is paginate() -> which is going to generate paginated result for our ClothingListing page .

class ClothingRepository
{
   public function find($id) : null|Clothings
   {
    return Clothings::getById($id);
   }

   public function paginate(Request $request , PaginatorInterface $paginator): PaginationInterface
   {
      $perPage = $request->get('perPage',default : 6);
      $page = $request->get('page' , default: 1);

      $clothings = (new ClothingListingQueryBuilder(new Clothings\Listing(),$request))->getListing();

      return $paginator ->paginate(
        $clothings,
        $page,
        $perPage
      );
   }
}
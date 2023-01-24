<?php
namespace App\Service;

use App\Service\AbstractListingQueryBuilder;
use Symfony\Component\HttpFoundation\Request;
use Pimcore\Model\DataObject\Clothings\Listing as ClothingListing ;

class ClothingListingQueryBuilder extends AbstractListingQueryBuilder
{
    public function __construct(
        ClothingListing $listing,
        Request $request
    )
    {
        parent::__construct($listing, $request);
    }

    //Query builder 
    protected function addQueryBefore()
    {
        $this->query->distinct(); //distict result will show 

        $this->query->orderBy('object_footwear.price' , 'desc');
    }

    //serching term by selectType
    public function query(string $term)
    { 
        $term = trim($term);
        if(empty($term)){
            return ;
        }

        $this->query->where("object_fashion.selectType LIKE '%{$term}%'");
    
    }
    
    //serching by brand (object brick)
    public function brand(array $brands =[]){
        //if serch by brand is empty
        if(!count($brands)){
            return ;
        }
         //?brands[]=1&brands[]=2
         
         $db = \Pimcore\Db::get();

         $brandConditions =[];

         foreach($brands as $brand){
            $brandConditions[] = "CONCATE(',' ,object_brick_store_Brand_fashion.Brand, ',')  LIKE ". $db->quote("%,{$brand},%");
         }

        $brandCondition = sprintf('(%s)', implode(' AND ' , $brandConditions));

        $this->query->andWhere($brandCondition);
    }
    
    //sorting by discount field
    public function sortByDiscount(string $price){
        //?sortBy=discount-desc

        $this->query->orderBy('object_query_fashion.discount' ,$price);
    }
}
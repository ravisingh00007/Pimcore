<?php

namespace App\DataMapper\Areas;

use App\DataMapper\AbstractDataMapper;
use Pimcore\Model\DataObject\Clothings;


/**
* @property Clothings $resource
*/
class ClothingDataMapper extends AbstractDataMapper
{   
    
    public function toArray($request): array{
      // dd($this->resource);

      $linkGenerator = $this->resource->getClass()->getLinkGenerator();
      // dd($linkGenerator);
        
       return [
         'id' => $this->resource->getId(),
         'image' => $this->resource->getImage(),
         'brand' => $this->resource->getBrand()->getBrand()->getBrand(),
         'price' =>$this->resource->getPrice(),
         'description' => $this->resource -> getDescription(),
         'discount' => $this->resource ->getDiscount(),
         'slug'=>'http://pimcore_project/clothing/'.$this->resource->getTitle().'-'.$this->resource->getId()
       ];

    }
}
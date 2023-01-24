<?php

namespace App\Service;

use Doctrine\DBAL\Query\QueryBuilder;
use Pimcore\Model\Listing\AbstractListing;
use Symfony\Component\HttpFoundation\Request;

abstract class AbstractListingQueryBuilder 
{
    protected QueryBuilder $query;

    public function __construct(
        private AbstractListing $listing,
        private Request $request

    )
    { 
        $this->listing->onCreateQueryBuilder(function (QueryBuilder $builder){
            $this->query = $builder;

            $this->addQueryBefore();

            foreach ($this->all() as $key=> $value){
                $method = $this ->getMethodName($key);

                if(!method_exists($this, $method) || !is_callable($this, $method)){
                    continue;
                }

                // ?test_parameter =ravi
                // testParameter(ravi)

                call_user_func([$this, $$method], $value);
            }
            $this->addQueryAfter();

        });
        
    }
   

    
    

    //Here we can fetch all parameter from the request
    protected function all() : array
    {   
        //returning request parameter
        return array_merge(

            //this request fetch all post parameter
            $this->request->request->all(),

            //this request fetch get parameter
            $this->request->query->all(),
            $this->request->attributes->all()
        );
    }

    private function getMethodName(string $key): string
    {
        //test_name_parameter
        //testNameParameter

        return lcfirst(
            implode('',
            array_map(function ($part){
                return ucfirst($part);
            },explode ('_',$key))
         ) 
        );
    }

    public function __call(string $name , array $arguments): array|AbstractListing
    {
        return call_user_func_array([$this->listing, $name], $arguments);
    }
    
    public function getQueryBuilder() : QueryBuilder
    {
        return $this->listing->getQueryBuilder();
    }

    public function getListing(): AbstractListing
    {
        return $this->listing;
    }

    protected function sortBy(string $sortBy)
    {
        //?sortBt=name-desc
        $elements = explode("-", $sortBy);
        $sortOrder = array_pop($element);
        $sortBy = strtolower(implode('-' , $elements));

        if(!in_array($sortOrder , ['asc','desc']) || empty($sortBy)){
            return ;
        }

        $method = 'sortBy'.ucwords($sortBy);

        if(method_exists($this, $method) && is_callable([$this, $method])){
           $this->{$method}($sortOrder);
        }
    

 
    }

    protected function addQueryBefore()
    {

    }

    protected function addQueryAfter()
    {
        
    }
   
}
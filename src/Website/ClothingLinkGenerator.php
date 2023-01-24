<?php

namespace App\Website\LinkGenerator;

use Pimcore\Model\DataObject\ClassDefinition\LinkGeneratorInterface;
use Pimcore\Model\DataObject\Clothings;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Tool;
use Pimcore\Twig\Extension\Templating\PimcoreUrl;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\String\Slugger\SluggerInterface ;

class ClothingLinkGenerator  implements LinkGeneratorInterface
{
    public function __construct(
        private SluggerInterface $slugger,
        private PimcoreUrl $pimcoreUrl,
        private ContainerInterface $container
    )
    {
        
        
    }

    public function generate(Concrete $object, array $params = []): string
    {
        if(!$object instanceof Clothings){
            throw new \InvalidArgumentException("Given object is not the Clothings object");
        }

        $slug = $this->slugger->slug($object->getTitle());

        $link = $this->pimcoreUrl->__invoke(
            [
                'slug' => $slug,
                'clothId' => $object->getId()
            ],
            'cloth_show',
            true
        );

        if(!str_contains($link, 'https://') && !str_contains($link, 'http://') ){
            $protocol = $this->container->getParameter('site_protocol');
            $link = Tool::getHostUrl($protocol).$link;
        }
        return $link;
    }
}
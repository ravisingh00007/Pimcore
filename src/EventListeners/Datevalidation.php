<?php

namespace App\EventListeners;

use Pimcore\Model\DataObject\Beauty;

class Datevalidation
{
    public function beforeupdate(\Pimcore\Event\Model\DataObjectEvent $event)
    {

        $object = $event->getObject();
        $manufacture = $object->getManufactureDate();
        $expire = $object->getExpiryDate();

        if ($object instanceof Beauty) {
            if ($expire<$manufacture) {
                throw new \Exception("expiry date can not be less than manufacture date");
            }
        }
    }
}
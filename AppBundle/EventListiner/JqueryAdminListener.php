<?php

namespace App\EventListener;

use Pimcore\Event\BundleManager\PathsEvent;
use Pimcore\Event\BundleManagerEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class JqueryAdminListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            BundleManagerEvents::JS_PATHS => 'addJSFiles'
        ];
    }

    public function addJSFiles(PathsEvent $event)
    {
        $event->setPaths(
            array_merge(
                $event->getPaths(),
                [
                    'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'
                ]
            )
        );
    }
}

<?php
namespace App\Listeners;

use Laventure\Component\Events\Event;
use Laventure\Component\Events\Listener\EventListener;

class DemoListener extends EventListener
{

    /**
     * @inheritDoc
    */
    public function handle(Event $event)
    {
         echo $event->getName();
    }
}
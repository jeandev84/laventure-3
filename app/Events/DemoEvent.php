<?php
namespace App\Events;

use Laventure\Component\Events\Event;

class DemoEvent extends Event
{

      public function getName(): string
      {
          return 'demo';
      }




      public function demo(): string
      {
           return 'demo';
      }
}
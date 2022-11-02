<?php
namespace App\Service\Form;

use Laventure\Component\Helpers\Html\Form\Types\EmailType;
use Laventure\Component\Helpers\Html\Form\Types\PasswordType;
use Laventure\Foundation\Service\Builder\FormBuilder;

class UserForm
{

      /**
        * @param FormBuilder $builder
        * @return void
      */
      public function build(FormBuilder $builder)
      {
           $builder->add('username', null, [

           ])->add('password', PasswordType::class, [

           ])->add('email', EmailType::class, [

           ]);
      }
}
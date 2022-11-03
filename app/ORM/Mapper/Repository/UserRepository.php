<?php
namespace App\ORM\Mapper\Repository;

use App\ORM\Mapper\Entity\User;
use Laventure\Component\Database\ORM\Mapper\Manager\EntityManager;
use Laventure\Component\Database\ORM\Mapper\Repository\ServiceRepository;


class UserRepository extends ServiceRepository
{
      public function __construct(EntityManager $em)
      {
          parent::__construct($em, User::class);
      }
}
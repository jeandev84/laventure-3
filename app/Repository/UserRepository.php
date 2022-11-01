<?php
namespace App\Repository;

use App\Entity\User;
use Laventure\Component\Database\ORM\Mapper\Manager\Contact\EntityManagerInterface;
use Laventure\Component\Database\ORM\Mapper\Manager\EntityManager;
use Laventure\Component\Database\ORM\Mapper\Repository\ServiceRepository;


class UserRepository extends ServiceRepository
{
      public function __construct(EntityManager $em)
      {
          parent::__construct($em, User::class);
      }
}
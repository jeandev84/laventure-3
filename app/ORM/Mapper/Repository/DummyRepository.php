<?php
namespace App\ORM\Mapper\Repository;


use App\ORM\Mapper\Entity\Dummy;
use Laventure\Component\Database\ORM\Mapper\Manager\EntityManager;
use Laventure\Component\Database\ORM\Mapper\Repository\ServiceRepository;


/**
 * @class DummyRepository

 * @package App\ORM\Mapper\Repository
 *
 * <Generated By Laventure 06/11/2022 06:06:34>
*/
class DummyRepository extends ServiceRepository
{

       /**
        * @param EntityManager $em
       */
       public function __construct(EntityManager $em)
       {
            parent::__construct($em, Dummy::class);
       }
}
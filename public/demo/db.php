<?php



require_once __DIR__.'/../vendor/autoload.php';



$database = new \Laventure\Component\Database\Manager\DatabaseManager();

$config = require (realpath(__DIR__.'/../config/params/database.php'));

$database->connect('mysql', $config);

$connection = $database->connection('mysql'); /* dump($connection); */


$qb = new \Laventure\Component\Database\Query\QueryBuilder($connection, 'users');


$em = new \Laventure\Component\Database\ORM\Mapper\Manager\EntityManager(
    $connection,
    new \App\Factory\EntityRepositoryFactoryExample()
);

// $em->registerClass(\App\Entity\User::class);

//dd($em->getRepository(\App\Entity\User::class));

$repository = new \App\Repository\UserRepository($em);

$user = new \App\Entity\User();
$user->setUsername('demo@gmail.com')
     ->setPassword('2022');


// $em->persist($user);

// dd($em->getClassMap()->getClassName());

// $em->flush();

/*
$users = $em->makeQB()
            ->select()
            ->getQuery()
            ->getResult();


$em->flush();
dd($em);

*/

/*
$user = $repository->findOneBy([
    'id' => 2
]);

$users = $repository->findAll();

dd($users);
$user = $repository->findOneById(2);

dd($user);
*/



$qb = new \Laventure\Component\Database\Query\QueryBuilder($connection, 'users');

/*
$sql1 = $qb->insert([
    [
        'username' => 'test1',
        'password' => '123'
    ],
    [
        'username' => 'test2',
        'password' => '123'
    ]
])->getSQL();

dd($sql1);
*/

$sql2 = $qb->select(['*'])
    //->where('id = :id')
    //->andWhere('foo = :foo')
    //->orWhere('bar = :bar')
    ->notWhere('username = :username')
    ->setParameters([
        'id' => 1,
        'foo' => 'test'
    ])
    ->getSQL()
;

dump($sql2);


$sql3 = $em->createQB()
           ->select(["*"])
          //->where('p = :p')
          //->andWhere('b = :b')
          ->andWhere("id = :id")
          ->setParameter('id', 3)
          //->orWhere("username = :username")
          ->getQuery()
          ->getOneOrNullResult()
;

dump($sql3);
<?php
namespace App\ORM\Mapper\Entity;

class User
{

      protected $id;

      protected $username;

      protected $password;


      protected $createdAt;


      public function __construct()
      {
          $this->createdAt = new \DateTime();
      }


      public function getId(): ?int
      {
          return $this->id;
      }


      public function setUsername($username): self
      {
          $this->username = $username;

          return $this;
      }


      public function getUsername()
      {
          return $this->username;
      }



      public function setPassword($password): self
      {
          $this->password = $password;

          return $this;
      }



      public function getPassword()
      {
          return $this->password;
      }
}
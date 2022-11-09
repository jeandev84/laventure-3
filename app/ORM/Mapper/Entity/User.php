<?php
namespace App\ORM\Mapper\Entity;

class User
{

      protected $id;
      protected $username;
      protected $password;
      protected $active = true;
      protected $created_at;
      protected $updated_at;


      public function __construct()
      {
          $this->created_at = new \DateTime();
          $this->updated_at = new \DateTime();
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




      /**
       * @param $active
       * @return void
      */
      public function setActive($active)
      {
          $this->active = $active;
      }



      /**
       * @return bool
      */
      public function isActive(): bool
      {
           return $this->active;
      }




      /**
       * @return string
      */
      public function checked(): string
      {
           return $this->active ? " checked" : '';
      }
}
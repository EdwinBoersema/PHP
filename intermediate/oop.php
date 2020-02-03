<?php 

    class Person{
        private $name;
        private $email;
        private static $ageLimit = 40;

        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__. ' Created';
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            echo $this->name;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            echo $this->email;
        }

        public static function getAgeLimit(){
            return self::$ageLimit;
        }
    }

    // echo Person::$ageLimit;
    echo Person::getAgeLimit();

    // $person1 = new Person;

    // $person1->setName('John Doe');

    // $person1->getName();

    // $person1 = new Person('John Doe', 'Jdoe@gmail.com');

    // $person1->getName();

    class Customer extends Person{
        private $balance;

        public function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'New '. __CLASS__. "Has been created";
        }

        public function setBalance($balance){
            $this->balance = $balance;
        }

        public function getBalance($balance){
            echo $this->$balance;
        }
    }

    // $customer1 = new Customer('John Doe', 'jdoe@email.com', 450);

    // echo $customer1->getBalance();


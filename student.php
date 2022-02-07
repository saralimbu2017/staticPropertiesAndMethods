<?php
  class Student
    {
      //attributes of Student class
      public $name;
      private $id;
      public static $stuCount = 0;

      //construct method
      public function __construct($name, $id)
      {
        //self refers to static attribute
        self::$stuCount += 1;
        $this->name = $name;
        $this->id =  $id;
      }


    }

    $stuObj = new Student("Amy", 1);
    $stuObj = new Student("Dot", 2);


?>
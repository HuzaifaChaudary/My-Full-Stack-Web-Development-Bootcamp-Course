<?php
class Fruit {
    public $name;
    public $color;
  
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    function __destruct() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  $apple = new Fruit("Apple", "red");

  
  //PS: Copied from w3 coz ive to left house for uni in hurry... so in destruct method we take over the get method. Like JAVA OOP we sout/echo in the get and write the right side name instead here in php we'l gonna write left side which is $this->name and can write String in destruct.
  //No use of echo in printing the variable and this construct and destruct combined are more similar and familiar with java oop.

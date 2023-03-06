<?php 

class Fruit {

    //attribute
    public $apple;
    public $banana;

    //Method
    function __construct($apple, $banana){
        $this->apple = $apple;
        $this->banana = $banana;
    }

    function show_apple() {
        return $this->apple;
      }

      function show_banana() {
        return $this->banana;
      }
    }

    $color = new Fruit("Red", "Banana");
    
    echo $color->show_apple();
    echo "<br>" ;
    echo $color->show_banana();


    // PS : Here in making construct we dont make any separate construct but instead we replace it with the set's name i.e function __construct($apple, $banana) { $this->apple ...} and in the get method we dont make a single method for the 2 or more attributes but the separate get method for separate attributes.
?>

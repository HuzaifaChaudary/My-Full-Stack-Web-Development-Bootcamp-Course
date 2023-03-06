<?php 

class Fruit {

    //attribute
    public $apple;
    public $banana;

    //Method
    function set_Apple($apple){
        $this->apple = $apple;
    }

    function set_Banana($banana){
        $this->banana = $banana;
    }

    function show_Apple() {
        return $this->apple;
      }

      function show_Banana() {
        return $this->banana;
      }
    }

    $color = new Fruit();

    $color->set_Apple("Red"); 
    $color->set_Banana("Banana");
    
    echo $color->show_Apple() ;
    echo "<br>";
    echo $color->show_Banana();


?>
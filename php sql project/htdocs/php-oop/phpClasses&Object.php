<?php 

class Fruit {

    //attribute
    public $apple;

    //Method
    function set_Fruit($apple){
        $this->apple = $apple;
    }

    function get_Fruit() {
        return $this->apple;
      }
    }
    
    $color = new Fruit();

    $color->set_Fruit("Red"); 

    echo $color->get_Fruit() ;

//PS: WE'LL USE $this->name = name INSTEAD OF this.name = name  AND return in the getFruit which is completely diff than JAVA.
?>
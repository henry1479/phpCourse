<?php

// абстрактный класс товара
abstract class Good {
    abstract function countfinalPrice();
}


// класс штучного товара
// имеет наценку 10%
class PieceGood extends Good {
    protected $price;
    static protected $charge = 10;

    function __construct(int $price) {
        $this->price = $price;
    }
   
    public function getPrice () {
        return $this -> price;
    }

    function countfinalPrice()
    {   $result = $this->price / 100 * self::$charge + $this->price;
        echo "The digit good's final price is {$result}";
    }
}


// класс цифрового товара 
// имеет наценку  13%
// зависимость от в цене от штучного товара 
// без создания собственного конструктора реализовать не получилось
class DigitGood extends PieceGood {
   
    private static $charge=13;
    function __construct(int $price)
    {
        parent::__construct($price);
        $this->price = $price/2;

    }

    function getPrice() {
        return $this->price;
    }
    function countfinalPrice()
    {
        $result= $this-> price / 100 * self::$charge + $this->price;
        echo "The digit good's final price is {$result}";
    }
    
}



    
    

// весовой товар 
// начальная цена фиксированная и имеет зависимость от количества проданного товара
class WeightGood extends Good {
    protected $price=300;
    protected $weigth;
    
    function __construct(int $weight)
    {
        $this->weigth = $weight;
    }
    function countfinalPrice()
         
    {
        $text = "Weight good costs ";
      if($this->weight <=100) {
        $res = $this->price /100 * 5 + $this->price;
        echo $text . $res;
      } elseif($this->weight <=600) {
          $res = $this->price /100 * 10 + $this->price;
        echo $text . $res;
      } else {
          $res = $this->price /100 * 20 + $this->price;
        echo $text . $res;
      }
        
    }
}




?>
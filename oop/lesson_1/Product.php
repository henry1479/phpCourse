<?php
// класс товара
class Product {
    public $id;
    protected $name;
    public $description;
    public $image;
    public $price;
    function __construct($id,$name,$description,$image,$price){
        $this ->id = $id;
        $this ->name = $name;
        $this ->description = $description;
        $this ->image = $image;
        $this -> price = $price;
        
    }
    public function getName() {
        return $this->name;
    }
    function setName($name) {
        $this->name = $name;
    }
    function info() {
        echo "<p>{$this->name} costs {$this->price} dollars.<br/>{$this->description}</p>";
    }
}

$product = new Product(1,'skirt','the good clothes','style-1.png', 400);
$product->info();
echo "{$product -> getName()}<br/>";
$product -> setName('hat');
echo $product->getName();





?>
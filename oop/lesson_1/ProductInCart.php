<?php

include "./Product.php";

// класс товара в корзине

class ProductInCart extends Product{
    public $count;
    public $color;
    public $size;
    function __construct($id,$name,$description,$image,$price,$count,$color,$size)
    {
        parent::__construct($id,$name,$description,$image,$price);
        $this -> count = $count;
        $this -> color = $color;
        $this -> size = $size;
        $this -> sum = $count * $price;
    }

    
    // выводит карточку в верcтку
    function displayCard () {
        echo "
            <div style='border: 1px solid #ccc;width:20%;text-align:center;'>
                <h3>{$this->name}</h3>
                <img src='img/{$this->image}' alt={$this->image}>
                <p>{$this->description}</p>
                <input name='count' value={$this->count}>
                <p>Price: {$this->price}</p>

            </div>
        ";
    }
    

}

$item = new ProductInCart($product->id, $product->getName(), $product->description, $product->image, $product->price,3, 'red', 'L');
$item -> displayCard();



?>
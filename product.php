<?php
class Product
{
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price)
    {
        $this->id = (int) $id;
        $this->name = (string) $name;
        $this->price = (float) $price;
    }

    public function getFormattedPrice(): string
    {
        return number_format($this->price, 2);
    }
    public function showDetails()
    {
        echo "Product Details:\n";
        echo "ID:{$this->id}\n";
        echo "Name:{$this->name}\n";
        echo "Price:{$this->price}\n";

    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();

<?php
abstract class Cars{
    protected $brand = 'BMW';
    public function showBrand(){
        return $this->brand;
    }
    abstract public function hideBrand($brand);
}

class Bmw extends Cars{
    public function displayData(){
        return $this->showBrand();
    }
    public function hideBrand($brand)
    {
        echo $brand;
    }
}

new Bmw()->displayData();
new Bmw()->hideBrand('xyz');

?>
<?php 




interface FormattedAccess{
    function getFormattedMileage();
    function getFormattedPrice();

}












abstract class Vehicle implements FormattedAccess{

    var $make;
    var $model;
    var $year;
    var $mileage;
    var $price;
    var $image;

    function getFormattedMileage()
    {
        return number_format($this->mileage,0);
    }
    function getFormattedPrice()
    {
        return number_format($this->price, 2);
    }

    function getOptions(){
        return "No additional options";
    }

}


class Car extends Vehicle{

    
    function __construct($make,$model, $year, $mileage, $price, $image)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->mileage = $mileage;
        $this->price = $price;
        $this->image = $image;    
    }
}


class Truck extends Vehicle{
    
    var $engine;
    
    function __construct($make,$model, $year, $mileage, $price, $image,$engine)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->mileage = $mileage;
        $this->price = $price;
        $this->image = $image;
        $this->engine = $engine;
    }

    function getOptions()
    {
        return "Towing package available $2,000.00";
    }

}

$v1 = new Car("Toyota","Camry 40","2012",500,50000.00,"veh-01.jpg");
$v2 = new Car("BMW","M3","2020",30000,31000.00,"veh-02.jpg");
$v3 = new Car("Mazda","Miata","2005",70000,15000.00,"veh-03.jpg");
$v4 = new Truck("Volvo","FH16","2020",400,65000.00,"veh-05.jpg", "Diesel");

$vehicles = [$v1,$v2,$v3, $v4];


?>

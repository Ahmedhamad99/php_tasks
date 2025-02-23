<?php


abstract class Person{

    public $name;
    public $address;

    public function __construct($name, $address){
                $this->name = $name;
                $this->address = $address;
    }

    abstract public function getName():string;
    abstract public function getAddress():string;
    abstract public function setAddress(string $address):void;

    abstract public function setName(string $name):void;
    public function toString():string{
        return "Your name is {$this->name} and your address {$this->address}";
    }
}



class Student extends Person{

    public $program;
    public $year;
    public $fee;
    public function __construct($name,$address,$program, $year, $fee){
         parent::__construct($name,$address);

         $this->program = $program;
         $this->year = $year;
         $this->fee = $fee;
    }


    public function getProgram():string
    {
        return $this->program;
    }
    public function getYear():int
    {
        return $this->year;
    }
    public function getFee():float
    {
        return $this->fee;
    }
    public function setProgram(string $program):void{
        $this->program = $program;
    }
    public function setYear(int $year):void
    {
        $this->year = $year;
    }
    public function setFee(float $fee):void
    {
        $this->fee = $fee;
    }
    public function getName() :string{
        return $this->name;
    
    }

    public function getAddress(): string{
            return $this->address;
    }
    public function setAddress(string $address):void{
        $this->address = $address;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }  
    public function toString():string{
        return "Your name is {$this->name}, your address {$this->address}, you are {$this->year},your program is {$this->program} and tour fee is {$this->fee} ";
    }  
    
}


$st = new Student("ahmed","23 sadat","cs",2024,23.3);


echo $st->toString()."<br>";








class Staff extends Person{

    public $school;
    public $pay;


    public function __construct($name,$address,string $school, float $pay){
        parent::__construct($name,$address);
        $this->school = $school;
        $this->pay = $pay;
    }

    public function getName(): string{
        return $this->name;
    }
    public function getAddress(): string{
      return $this->address;
    }

    public function setName(string $name): void{
        $this->name = $name;
    }
    public function setAddress(string $address): void{
      $this->address = $address;
    }

    public function setPay(float $pay): void{
     $this->pay= $pay;
    }

    public function setSchool(string $school): void{
        $this->school = $school;
    }
    public function toString():string{
        return "Your name is {$this->name}, your address {$this->address}, you are work in {$this->school} school ,you will get  {$this->pay}$.";
    }  
    
}


$emp = new Staff("Ali","25-new-capital","Modern egy",230000);

echo $emp->toString()."<br>";

















    class Shape{

    protected $color="red";
    protected $filled=true;

    public function __construct($color,$filled){

        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor():string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function setFilled(bool $filled): void
    {
        $this->filled = $filled;
    }
    public function isFilled(): bool{
        return $this->filled;
    }

    public function toString():string{
        return "The shape color is {$this->color} and it filld by {$this->filled}";
        }
    }


    class Cricle extends Shape{

        protected $radius;


        public function __construct($color,$filled,$radius){

            parent::__construct($color,$filled);
            $this->radius = $radius;
        }

        public function getColor():string
        {
        return $this->color;
        }
        public function setColor(string $color): void
        {
        $this->color = $color;
        }
        public function setFilled(bool $filled): void
        {
        $this->filled = $filled;
        }
        public function isFilled(): bool{
        return $this->filled;
        }
    

    public function getRadius(): float {
        return $this->radius;
    }

    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }

    public function toString(): string {
        return "Circle[" . parent::toString() . ", radius={$this->radius}]";
    }

}

$circl  =new Cricle("black",true,5);


echo $circl->toString() ."<br>";
echo "the area is ".$circl->getPerimeter() ."<br>";
echo "The color ".$circl->getColor() ."<br>";











class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($color,$filled,$width, $height) {
        parent::__construct($color,$filled);
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth():float{
        return $this->width;
    }
    public function getHeight():float{

        return $this->height;
    }
    public function setWidth(float $width): void {
        $this->width = $width;
    }
    public function setHeight(float $height): void {
        $this->height = $height;
    }

    public function getArea(): float {
        return $this->width * $this->height;
    }

public function getPerimeter(): float {
    return 2 * ($this->width + $this->height);
}

public function toString(): string {
    return "Rectangle[" . parent::toString() . ", width={$this->width}, length={$this->height}]";
}
}


$rect = new Rectangle("aqua",true,5,6);

echo $rect->toString() ."<br>";

echo "The area is ".$rect->getArea();




















class Square extends Rectangle{
    
    protected $side;
    public function __construct($color,$filled,$side) {

        parent::__construct($color,$filled,$side,$side);
    }


    public function getSide(): float {
        return $this->side;
    }
    public function setSide(float $side): void {
            $this->side = $side;
    }
    public function getArea(): float {
        return $this->side * $this->side;
    }

public function getPerimeter(): float {
    return 4 * ($this->side);
}

    
    public function toString(): string {
        return "Square[" . parent::toString() . "]";
    }

}



$square = new Square("yellow",true,5);

echo $square->toString() ."<br>";











class Animal{

    protected $name;

    public function __construct($name) {

        $this->name = $name;
    }
    public function toString(): string {
    
        return "The name animal is {$this->name}";
    }

}

class Mammal extends Animal{
    // protected $name;
    public function __construct($name)
    {
        parent::__construct($name);
        
    }
    public function toString(): string {
        return parent::toString();
    }
}


class Cat extends Mammal {
        
    public function __construct($name)
    {
        parent::__construct($name);
        
    }
    public function greets(){
        echo "Mewo<br>";
    }


    public function toString(): string {
        return parent::toString();
    }
        

}

class Dog extends Mammal {
        
    public function __construct($name)
    {
        parent::__construct($name);
        
    }
    public function greets()
    {
        echo "woof<br>";
    }

    public function toString(): string {
        return parent::toString();
    }
        

}



$dog = new Dog("dog");

echo $dog->toString() ."<br>";
$dog->greets();

$cat = new Cat("cat");

echo $cat->toString() ."<br>";
$cat->greets();






?>
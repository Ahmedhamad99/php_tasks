<?php



class Author{
    private string $name;
    private string $email;
    private string $gender;


    public function __construct($name, $email,$gender)
    {
        if(!in_array($gender,["f","m"]))
        {
            throw new InvalidArgumentException("Gender must be one of this characters m or f.");

        }

        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function getName(): string{
        return $this->name;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getGender(): string
    {
        return $this->gender;
    }
    public function setName(string $name): void{
        $this->name = $name;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setGender(string $gender): void {
        if (!in_array($gender, ["f", "m"])) {
            throw new InvalidArgumentException("Gender must be 'm' or 'f'.");
        }
        $this->gender = $gender;
    }
    public function toString(): string{
            return "Author[name={$this->name},email={$this->email},gender={$this->gender}]";
    }
}








class Book
{
    private string $name;
    private Author $author;
    private float $price;
    private int $qty;


    public function __construct( $name, $author,$price,$qty)
    {
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAuthor(): Author{
        return $this->author;
    }
    public function getPrice():float{
        return $this->price;
    }

    public function getQty(): int
    {
        return $this->qty;
    }
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
    public function setQty(int $qty): void
    {
        $this->qty = $qty;
    }

    public function toString(): string{
        return "Book[name={$this->name}," . $this->author->toString() . ",price={$this->price},qty={$this->qty}]";
    }
}
$author = new Author("k.j.rowling","ali@gamil.com","m");
$book = new Book("Harry potter and the half blood prince",$author,23.3,5);

echo $book->toString();



















class Book1
{
    private string $name;
    private array $authors;
    private float $price;
    private int $qty;


    public function __construct( $name, $authors,$price,$qty)
    {
        foreach($authors as $author)
        {
            if( !$author instanceof Author )
            {
                throw new InvalidArgumentException("Every element must be an Author object");
            }
        }
        $this->name = $name;
        $this->authors = $authors;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAuthors(): array{
        return $this->authors;
    }
    public function getPrice():float{
        return $this->price;
    }

    public function getQty(): int
    {
        return $this->qty;
    }
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
    public function setQty(int $qty): void
    {
        $this->qty = $qty;
    }
    public function authordata(array $data){
        $allAuthor ="";
        foreach($data as $author)
        {
                // $allAuthor += $author->toString();
                $allAuthor .= $author->toString();

        }
        return $allAuthor;
    }

    public function toString(): string{
        return "Book[name={$this->name}," . $this->authordata($this->authors). ",price={$this->price},qty={$this->qty}]";
    }
}


$author1 = new Author("Ali", "ali@gmail.com", "m");
$author2 = new Author("Sara", "sara@gmail.com", "f");
$book1 = new Book1("Harry Potter and the Half-Blood Prince", [$author1, $author2], 23.3, 5);
echo $book1->toString();






























trait Circle {
    private float $radius = 1.0;
    private string $color = "red";

    public function __construct(float $radius = 1.0, string $color = "red") {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function getArea(): float {
        return pi() * pow($this->radius, 2);
    }

    public function toString(): string {
        return "Circle[radius={$this->radius},color={$this->color}]";
    }
}

class Cylinder {
    use Circle;

    private float $height = 1.0;

    public function __construct(float $radius = 1.0, float $height = 1.0, string $color = "red") {
        $this->radius = $radius;  
        $this->color = $color;    
        $this->height = $height;
    }

    public function getHeight(): float {
        return $this->height;
    }

    public function setHeight(float $height): void {
        $this->height = $height;
    }

    public function getVolume(): float {
        return $this->getArea() * $this->height;
    }

    public function toString(): string {
        return "Cylinder[radius={$this->radius},color={$this->color},height={$this->height},volume={$this->getVolume()}]";
    }
}


$cylinder = new Cylinder(3.0, 5.0, "blue");
echo $cylinder->toString();
?>

?>
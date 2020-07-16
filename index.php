<html>
<body>


<?php

abstract class Animal {
    public $tail;
    public $paws;
    public $nose;
    public $eyes;

   public function __construct($tail, $paws, $nose, $eyes) {
        $this->tail = $tail;
        $this->paws = $paws;
        $this->nose = $nose;
        $this->eyes = $eyes;
    }

   abstract function getInfo();
}



class Dog extends Animal {
    private $power;

    function __construct($tail, $paws, $nose, $eyes, $power)
    {
        parent::__construct($tail, $paws, $nose, $eyes);
        $this->power = $power;
    }

    function getInfo() {
        $info = "{$this->tail}"."{$this->paws}"."{$this->nose}"."{$this->eyes}";
        $info .= "{$this->power}";
        return $info;
    }

}

$dog = new Dog("little ", "big ", "small ", "black ", "full");
echo '<pre>';
echo'Dog:  ';
echo $dog->getInfo();
echo '</pre>';


class Cat extends Animal {
    private $sly;

    function __construct($tail, $paws, $nose, $eyes, $sly)
    {
        parent::__construct($tail, $paws, $nose, $eyes);
        $this->sly = $sly;
    }

    function getInfo() {
        $info = "{$this->tail}"."{$this->paws}"."{$this->nose}"."{$this->eyes}";
        $info .= "{$this->sly}";
        return $info;
    }

}

$cat = new Cat("little ", "big ", "small ", "black ", "sly");
echo '<pre>';
echo'Cat:  ';
echo $cat->getInfo();
echo '</pre>';

?>


</body>
</html>


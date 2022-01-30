<?php


namespace App\classes;


class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;

    public function index()
    {
    //    $this->firstName = 'Rohim';
     //   $this->lastName = 'Khan';
      //  echo "Full name is"." ".$this->firstName." ".$this->lastName;
        /*   =====Operator=====
         * Arithmetic Operator
            * Binary Operator (+,-,*,/,%)
            * Unary Operator (++,--,(-))
         * Assignment Operator (=,+=,-=,*=,/=,%=,.=)
         * Conditional Operator (>, >=, <, <=, ==, !=, ===, !==)
         * Logical Operator (&&,||,!)
         */

        $this->x =10;
        $this->y =20;
        $this->z =30;

        echo ($this->x > $this->y) || ($this->y > $this->z);
        echo '<br/>....<br/>';
        echo ($this->x > $this->y) || ($this->y < $this->z);
        echo '<br/>....<br/>';
        echo ($this->x < $this->y) || ($this->y > $this->z);
        echo '<br/>....<br/>';
        echo ($this->x < $this->y) || ($this->y < $this->z);
        echo '<br/>....<br/>';
//        echo $this->x += $this->y;
//        echo '<br/>';
//        echo $this->x -= $this->y;
//        echo '<br/>';
//        echo $this->x *= $this->y;
//        echo '<br/>';
//        echo $this->x /= $this->y;
//        echo '<br/>';
//        echo $this->x %= $this->y;
//        echo '<br/>';
//        echo $this->x .= $this->y;
//        echo '<br/>';

        //echo $this->x++;
        //echo '<br/>';
        //echo $this->x;


     //   echo $this->x + $this->y;
      //  echo '<br/>';
       // echo $this->x - $this->y;
       // echo '<br/>';
       // echo $this->x * $this->y;
       // echo '<br/>';
     //   echo $this->x / $this->y;
      //  echo '<br/>';
       // echo $this->x % $this->y;

    }

}
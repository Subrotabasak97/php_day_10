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
    public $data = [];

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
         *

         */
        /*
         *   =====Statement=====
         * Single Line Statement
         * Conditional Statement
         * IF
         * IF Else If
         * Switch
         * Repeated Statement
         * While
         * Do While
         * Foreach
         *
         * Array
         *
         */
        $this->data = [10,20,30, 'Bitm',100.200, true];
//        echo $this->data[2];
            foreach ($this->data as $item)
            {
                echo $item;
            }
//        $this->x =100;
//        do{
//            echo 'Hello World <br/>';
//            $this->x++;
//        } while($this->x < 110);




//        $this->x =100;
//        while ($this->x < 110)
//        {
//            echo 'Hello World<br/>';
//            $this->x++;
//        }



//        for ($this->y =99; $this->y >=75;$this->y++)
//        {
//         echo $this->y.' ';
//        }



//        switch ($this->x)
//        {
//            case 10:
//                echo 'Hello World';
//                break;
//            case 20:
//                echo 'Hello Bangladesh';
//                break;
//            case 30:
//                echo 'Hello Dhaka';
//                break;
//            default:
//                echo 'Hello Bitm';
//        }

//        $this->x =10;
//        $this->y =20;
//        $this->z =30;

//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';
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
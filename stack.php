<?php

class Stack {
    public $stack = [];
    public $max_item = 5;
    public $index = -1;

    public function push($data) {
        $this->index++;
        if($this->max_item <= $this->index){
            echo "Stack is Overflow\n";
        } else {
            $this->stack[$this->index] = $data;
            // $this->index = 4;
        }
    }

    public function pop() {
        if($this->index < 0){
            echo "Stack is Underflow";
        } else{
            unset($this->stack[$this->index]);
            $this->index--;
            echo "Pop is success \n";
        }
    }

}
$s1 = new Stack();
$s1->push(5);
$s1->push(10);
$s1->push(15);
$s1->push(20);
$s1->push(25);
$s1->push(30);
$s1->push(35);

print_r($s1->stack);

$s1->pop();




?>
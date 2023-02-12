<?php
interface Pushable{
    public function push(mixed $value);
    public function pop(): mixed;
}

class Fifo implements Pushable{

    private $fifo;

    public function __construct(){
        $this->fifo = [];
    }
    public function push(mixed $value){
        array_push($this->fifo, $value);
        return $this;
    }
    public function pop():mixed{
        echo array_shift($this->fifo)." ";
        array_values($this->fifo);
        return $this;
    }
}

<?php

interface DisplayInterface{
    public function displayDataInterface(array $data);
}

class Display implements DisplayInterface {
    public function display(){}
    public function displayDataInterface(array $data){
        echo "I am doing anything I want here ".$data['name'];
    }
}

$display = new Display();
$display->display();
$display->displayDataInterface(['name'=>'Justo Jaramillo']);

?>
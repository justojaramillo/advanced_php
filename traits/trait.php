<?php

use Display as GlobalDisplay;

trait Display{
    protected function showThis($message){
        echo $message;
    }
}


class Main{

    use  Display;

    public function displayingDate(){
        $this->showThis('Trait used');
    }
}
(new Main())->displayingDate(); # parentheses not requiered since PHP 8
new Main()->displayingDate();

?>
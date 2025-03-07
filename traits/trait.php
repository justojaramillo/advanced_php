<?php

use Display as GlobalDisplay;

trait Display{
    protected function showThis($message){
        echo $message;
    }
}
trait SaveData{
    protected function saveThis($message){
        return $message;
    }
}


class Main{

    use  Display;
    use SaveData;

    public function displayingDate(){
        $this->showThis('Trait used');
    }

    public function savingData(){
        return $this->saveThis('Saving Data');
    }
}
(new Main())->displayingDate(); # parentheses not requiered since PHP 8
new Main()->displayingDate();
echo (new Main()->savingData());

?>
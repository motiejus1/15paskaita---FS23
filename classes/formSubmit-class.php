<?php 

class FormSubmit {
    public $skaicius;
    public $skaiciu1;

    public function __construct() {

        if(isset($_POST["patvirtinti"])) {
            $this->skaicius = $_POST["skaicius"];
            $this->skaicius1 = $_POST["skaicius1"];
            echo $this->skaicius;
            echo "<br>";
            echo $this->skaicius1;
        }
    }
}

?>
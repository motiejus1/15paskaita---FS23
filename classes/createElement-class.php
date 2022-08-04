<?php 
//pagal pageidavima sukurs frontend elementa
class createElement{
    public $tagStart;
    public $tagEnd;
    public $tagContent;

    public function __construct($tagStart, $tagEnd, $tagContent ) {
        $this->$tagStart = $tagStart;
        $this->$tagEnd = $tagEnd;
        $this->$tagContent = $tagContent;

        echo "<".$this->$tagStart.">".$this->$tagContent."</".$this->$tagEnd.">";

    }
}

?>
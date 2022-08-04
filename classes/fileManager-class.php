<?php 

class FileManager {
    public $filePath;
    public $fileContent;

    public function __construct($filePath, $fileContent) {
        $this->fileContent = $fileContent;
        $this->filePath = $filePath;
    }

    public function fileRead() {
        return file_get_contents($this->filePath);
    }

    public function fileWrite() {
        return file_put_contents($this->filePath, $this->fileContent);
    }

    //nuskaityk ir atkoduok metodas
    public function fileReadJsonToPhpArray() {
        return json_decode($this->fileRead(), true);
    }

    public function fileWriteJsonString($phpArray) {
        return file_put_contents($this->filePath, json_encode($phpArray));
    }
}

?>
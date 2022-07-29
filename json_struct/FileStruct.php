<?php

class FileStruct{

    public $file;
    public $size;

    public function __construct($file, $size)
    {
        $this->file = strval($file);
        $this->size = intval($size);
    }
}
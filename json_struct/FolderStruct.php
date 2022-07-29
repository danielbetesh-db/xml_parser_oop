<?php


class FolderStruct{

    public $location;
    public $totalSize;
    public $totalItems;
    public $files;

    public function __construct($location)
    {
        $this->location = strval($location);
        $this->totalSize = 0;
        $this->totalItems = 0;
        $this->files = array();
    }

    public function add_file(FileStruct $file){
        $this->totalSize += intval($file->size);
        $this->totalItems += 1;
        $this->files[] = $file;
    }


}

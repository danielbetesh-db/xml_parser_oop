<?php


class ParentStruct extends JsonGenerator {
    public $type;
    public $totalSize;
    public $totalItems;
    public $results;

    public function __construct($type)
    {
        $this->type = strval($type);
        $this->results = array('folders');
    }

    function add_folder(FolderStruct $folder){
        $this->totalSize += $folder->totalSize;
        $this->totalItems += $folder->totalItems;
        $this->results['folders'][] = $folder;
    }

}
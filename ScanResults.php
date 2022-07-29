<?php


class ScanResults implements I_JsonGenerator {
    private $data_struct;

    public function __construct($xml)
    {
        $this->data_struct = new ParentStruct($xml->attributes()->type);
        foreach ($xml as $dir){
            $folder = new FolderStruct($dir->attributes()->name);
            foreach ($dir as $file){
                $folder->add_file(new FileStruct($file->attributes()->path, $file->attributes()->sizeBytes));
            }
            $this->data_struct->add_folder($folder);
        }
    }

    public function get_json(){
        return $this->data_struct->get_json();
    }

    public function order_by_size($order = 'ASC'){
        NumericSorter::sort($this->data_struct->results['folders'], 'totalSize', $order);
        foreach($this->data_struct->results['folders'] as &$v){
            NumericSorter::sort($v->files, 'size', $order);
        }
    }

    public function order_by_alpha_numeric($order = 'ASC'){
        AlphaSorter::sort($this->data_struct->results['folders'], 'location', $order);
        foreach($this->data_struct->results['folders'] as &$v){
            AlphaSorter::sort($v->files, 'file', $order);
        }
    }

    public function print_result(){
        return 'Size : ' . $this->data_struct->totalSize . ' Items : ' . $this->data_struct->totalItems;
    }

}







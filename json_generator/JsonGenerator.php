<?php


abstract class JsonGenerator implements I_JsonGenerator {
    public function get_json(){
        return json_encode($this, JSON_PRETTY_PRINT);
    }
}


<?php


class AlphaSorter extends Sorter {

    public static function asc($a, $b){
        return strcmp($a->{self::$sort_key}, $b->{self::$sort_key});
    }

    public static function desc($a, $b){
        return -strcmp($a->{self::$sort_key}, $b->{self::$sort_key});
    }
}

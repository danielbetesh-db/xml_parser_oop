<?php


class NumericSorter extends Sorter {


    public static function asc($a, $b){
        return ($a->{self::$sort_key} < $b->{self::$sort_key}) ? -1 : 1;
    }

    public static function desc($a, $b){
        return ($a->{self::$sort_key} > $b->{self::$sort_key}) ? -1 : 1;
    }
}
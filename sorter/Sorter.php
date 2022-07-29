<?php


abstract class Sorter implements I_Sorter {

    protected static $sort_key;
    protected static $oreder_by;

    public static function sort(&$data, $key, $oreder_by = 'ASC'){
        self::$oreder_by = $oreder_by;
        self::$sort_key = $key;
        usort($data, function ($a, $b) {
            return self::$oreder_by == 'ASC' ? static::asc($a, $b) : static::desc($a, $b);
        });
    }

}


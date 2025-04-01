<?php


namespace App;

class SortHelper
{
    public static function sortArrayAscending(array $arr): array
    {
        $nines = array_filter($arr, fn ($n) => $n === 9);
        $others = array_filter($arr, fn ($n) => $n !== 9);
        sort($others);

        return array_merge($nines, $others);
    }
}

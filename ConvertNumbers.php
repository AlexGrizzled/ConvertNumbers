<?php


class ConvertNumbers
{
    const MAP = ['Z' => 2000, 'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50,
        'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1];
    const PATTERN_ROMAN = '/^[IVXLCDMZ]+$/';

    static function toRoman(int $number): string
    {
        if ($number < 1) {
            return '';
        }
        $result = '';
        while ($number > 0) {
            foreach (self::MAP as $roman => $int) {
                if($number >= $int) {
                    $number -= $int;
                    $result .= $roman;
                    break;
                }
            }
        }
        return $result;
    }

    static function toArabic(string $roman): int
    {
        $roman = mb_strtoupper($roman);
        if (preg_match(self::PATTERN_ROMAN, $roman) == false) {
            return 0;
        }
        $romanMap = str_split($roman);
        try {
            $result = array_reduce($romanMap, function($result, $val) use ($romanMap) {
                global $i;
                $i = isset($i) ? $i + 1 : 0;
                $a = self::MAP[$romanMap[$i]];
                $b = self::MAP[$romanMap[$i + 1]];
                $c = self::MAP[$romanMap[$i + 2]];
                if ($b && $c && $a <= $b && $b < $c) {
                    throw new Error();
                }
                return $b > $a ? $result - $a : $result + $a;
            });
        } catch (Error $e) {
            $result = 0;
        }
        return $result;
    }
}
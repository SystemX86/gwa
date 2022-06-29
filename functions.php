<?php

/**
 * Возвращает все цифры встречающиеся в указанной последовательности нечетное количество раз
 *
 * @param string $incomingSequence
 * @return string
 */
function getNumbersUnpairedQuantity(string $incomingSequence): string
{
    $arrayAmount = [];
    $stringResult = '';

    $stringDigit = preg_replace('~\D+~', '', $incomingSequence);
    $arrayDigits = str_split($stringDigit);

    if (count($arrayDigits) > 0) {
        foreach ($arrayDigits as $digit) {
            $arrayAmount[$digit] = $arrayAmount[$digit] + 1;
        }

        foreach ($arrayAmount as $key => $amount) {
            if (($amount & 1)) {
                $stringResult .= $key;
            }
        }
    }

    return $stringResult;
}

/**
 * Добавляет GET-параметр v=hash ссылкам тегов img, где hash рандомное 7-значное число
 *
 * @param string $incomingHtml HTML (строка) для обработки
 * @return string
 */
function setHashForTagsImg(string $incomingHtml): string
{
    $digits = '0123456789';
    $patternSearch = '#<img.+?src="([^"]*)".*?/?>#i';

    return preg_replace_callback($patternSearch, function ($m) use (&$array, $digits) {
        $randomDigits = '';

        for ($i = 0; $i < 7; $i++) {
            $randomDigits .= $digits[mt_rand(0, strlen($digits) - 1)];
        }
        return str_replace($m[1], $m[1] . '?v=' . $randomDigits, $m[0]);
    }, $incomingHtml);
}


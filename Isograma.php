<?php

/**
 * @author Alonso Fernández Vidal
 * @copyright Copyright (c) 2020 Alonso Fernández
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * esIsograma
 *
 * @param string $s
 * @return void
 */
function esIsograma($s)
{
    $s = mb_str_split(mb_ereg_replace('[- ]', '', mb_strtolower($s)));
    return array_unique($s) == $s;
}

<?php

if (! function_exists('format_money')) {


    /**
     * @param int|null $money
     * @return string
     */
    function format_money(?int $money): string
    {
        if (!$money) {
            return "";
        }
        $reversed = strrev($money);
        $sliced = str_split($reversed, 3);
        return '$ ' . strrev(implode('.', $sliced));
    }


    function generify($string, $gender)
    {
        $re = '/([A-Za-z áéíóúÁÉÍÓÚÑñ\d]*){([A-Za-z áéíóúÁÉÍÓÚÑñ\d]*)\|([A-Za-z áéíóúÁÉÍÓÚÑñ\d]*)}([A-Za-z áéíóúÁÉÍÓÚÑñ\d]*)/m';
        if (strpos($string, '{') !== false) {

            if ($gender == 'f') {
                $subst = '$1$2$4';
            } elseif ($gender == 'm') {
                $subst = '$1$3$4';
            } else {
                $subst = '$1$4';
            }
            return preg_replace($re, $subst, trim($string));
        } else {
            return $string;
        }
    }

}

<?php

calculateAmount(34499, 500, 4, 6666, 5000);
function calculateAmount($costOfCommodity, $commision, $rate, $additionPaymant, $maxPayment)
{
    $rest = $costOfCommodity;
    while (true) {
        $rest = ($rest + ($rest * ($rate / 100)) + $commision) - $maxPayment;
        echo $rest . "\n";
        if ($rest <= 0) {
            break;
        }
    }

    $rest = $costOfCommodity;
    $final_sum = ($rest + 2960.5344679157);
    echo 'Кредит виплачено за 10 місяців. ' . 'Всього витрачено: ' . $final_sum . "\n";
    while (true) {

        $rest = ($rest + ($rest * (3 / 100)) + 1000) - $maxPayment;
        echo $rest . "\n";
        if ($rest <= 0) {
            break;
        }
    }

    $rest = $costOfCommodity;
    $final_sum = ($rest + 3359.7791623367);
    echo 'Кредит виплачено за 11 місяців. ' . 'Всього витрачено: ' . $final_sum . "\n";

    while (true) {
        $rest = ($rest + ($rest * (2 / 100))) - $maxPayment;
        echo $rest . "\n";
        if ($rest <= 0) {
            break;
        }
    }

    $final_sum += ($rest + $additionPaymant + 2493.7682653692);
    echo 'Кредит виплачено за 9 місяців. ' . 'Всього витрачено: ' . $final_sum . "\n" ;
}
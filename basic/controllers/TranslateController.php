<?php 

namespace app\controllers;

use yii\web\Controller;

class TranslateController extends Controller {
    
    public function actionDigitTranslate($digit = null) {
        $numeral = [
            0 => "ноль",
            1 => "один",
            2 => "два",
            3 => "три",
            4 => "четыре",
            5 => "пять",
            6 => "шесть",
            7 => "семь",
            8 => "восемь",
            9 => "девять"
        ];
        $numeral_keys = array_keys($numeral);
        if ($digit != null){
            if ($digit < 10 && $digit >= 0){
                return $this->render('translate', ['digit' => $numeral[$digit]]);
            }
            else {
                $digit = 'присвойте значение не меньше нуля и не больше 9';
            }
        }
        else {
            $digit = 'присвойте значение digit';
        }   
        return $this->render('translate', ['digit' => $digit]);
    }
}
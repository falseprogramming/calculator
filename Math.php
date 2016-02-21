<?php

class Math {

    static $result;
    static $arr;
    static $minusNumber;
    static $justValue;

    static function showNumbers($number1,$number2){
        return 'Number 1 : '.$number1.'<br>Number 2 : '.$number2;
    }

    static function plusNumbers($number1,$number2){
         return $number1+$number2;
    }

    static function minusNumbers($number1,$number2){
        return $number1-$number2;
    }

    static function timeNumbers($number1,$number2){
        return $number1*$number2;
    }

    static function divideNumbers($number1,$number2){
        if($number2 == 0){
            return "Sinu teine argument on 0 !";
        }
        else{
            return $number1/$number2;
        }
    }

    static function intNumber($justNumber){
        if($justNumber > 0){
            $arr=explode('.',$justNumber);
            return '['.$justNumber.'] = '.$arr[0];
        }
        elseif($justNumber < 0){
            $arr=explode('.',$justNumber);
            $result = $arr[0] - 1;
            return '['.$justNumber.'] = '.$result;
        }
        else{
            return "Sinu number on 0 !";
        }
    }

    static function absNumber($justNumber){
        if($justNumber == 0){
            return "Sinu number on 0 !";
        }
        else{
            if($justNumber > 0){
                return "Sinu ABS number ".$justNumber." on : ".$justNumber;
            }
            else{
                $minusNumber = $justNumber * -1;
                return "Sinu ABS number sellest ".$justNumber." on : ".$minusNumber;
            }
        }
    }

    static function logNumber($justNumber){
        if($justNumber < 0){
            return "Sinu number on negatiivne !";
        }
        else{
            return log($justNumber);
        }
    }

    static function powerNumber($number1,$number2){
        return pow($number1,$number2);
    }

    static function roundNumber($justNumber){
        return 'Sinu ümmargune number sellest numbrist '.$justNumber.' on : '.round($justNumber);
    }

    static function sinDegree($justDegree){
        return sin($justDegree);
    }

    static function cosDegree($justDegree){
        return cos($justDegree);
    }

    static function tanDegree($justDegree){
        return tan($justDegree);
    }

    static function cotDegree($justDegree){
        return tan(M_PI_2 - rad2deg($justDegree));
    }

    static function arcSinDegree($justDegree){
        return asin($justDegree);
    }

    static function arcCosDegree($justDegree){
        return acos($justDegree);
    }

    static function arcTanDegree($justDegree){
        return atan($justDegree);
    }

    static function arcCotDegree($justDegree){
        return pi()/2 - atan($justDegree);
    }

    static function diffSin($justDegree){
        return cos($justDegree);
    }

    static function diffCos($justDegree){
        return -1 * sin($justDegree);
    }

    static function diffTan($justDegree){
        return 1 + pow(tan($justDegree),2);
    }

    static function diffCot($justDegree){
        return -(1 + pow(tan(M_PI_2 - rad2deg($justDegree)),2));
    }

    static function secDegree($justDegree){
        return 1 / cos($justDegree);
    }

    static function cosecDegree($justDegree){
        return 1 / sin($justDegree);
    }

}
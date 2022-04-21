<?php

//namespace Kosipov\Ttteeesst;

class RulesPassword
{   public const STRONG_PASSWORD = 'Пароль строгий';
    public const MIDDLE_STRONG_PASSWORD = 'Средняя надёжность';
    public const SLABY_STORNG_PASSWORD = 'Вообще не надёжный';

    public function generate(int $length, bool $number = false, bool $letter = true, bool $symbol = false): string 
    {
        $mess = '';
        if ($length >= 8)
        {
             if ($symbol == true && $number == true) {
                  $mess =self::STRONG_PASSWORD;
             }
             elseif ($number == true) {
                  $mess =self::MIDDLE_STRONG_PASSWORD;
             }
             elseif ($symbol == true) {
                  $mess =self::MIDDLE_STRONG_PASSWORD;
             }  
             else {
               $mess =self::SLABY_STORNG_PASSWORD;
             }
        }
        else {
             $mess =self::SLABY_STORNG_PASSWORD;
        
        }
     return $mess;
     } 
     
}
<?php

//namespace Lalalisa;

class PasswordGenerator
{
    public const letter = "qazxswedcvfrtgbnhyujmkiolpQAZXSWEDCVFRTGBNHYUJMKIOLP";
    public const numbers = "1234567890";
    public const symbols = "_\I/.,~!=+-()*@#$%*&";
    public const v1 = self::numbers.self::letter;
    public const v2 = self::symbols.self::letter;
    public const chars = self::letter.self::numbers.self::symbols;

    public const NUMBERS = "number";
    public const SYMBOLS = "symbol";
    public const LETTER = "letter";

    

    public const MAX_LENGTH_PASSWORD = 128;

    public function generate(int $length, bool $number = false, bool $letter = true, bool $symbol = false): string
    {
        if ($length > self::MAX_LENGTH_PASSWORD) {
            throw new \Exception("Неверная длина пароля");
        }
      //  $lenght = (int) $_POST ['text'];
        $pass = ''; 
        while ($length--) 
        {
            //var_dump($length);

            if ($symbol == true && $number == true) {
                 $pass.=self::chars[rand (0, strlen (self::chars)-1)];
            }
            elseif ($number == true) {
                 $pass.=self::v1[rand (0, strlen (self::v1)-1)];
            }
            elseif ($symbol == true) {
                 $pass.=self::v2[rand (0, strlen (self::v2)-1)];
            }
            else {
              $pass.=self::letter[rand (0, strlen (self::letter)-1)];
            }  
       }
       return $pass;
    }
    
}


    /*public function generate(int $length, bool $number = true, bool $letter = true, bool $symbol = false): string
    {
        if ($length > self::MAX_LENGTH_PASSWORD) {
            throw new \Exception("Неверная длина пароля");
        }
        while ($lenght--){
            $pass.=$v1[rand (0, strlen ($v1)-1)];}   
        }
    public function generate(int $length, bool $number, bool $letter = true, bool $symbol): string
    {
        if ($length > self::MAX_LENGTH_PASSWORD) {            
            throw new \Exception("Неверная длина пароля");
        }
        while ($lenght--) {
            $pass.=$v2[rand (0, strlen ($v2)-1)];
       }
    }  */      
    /* Здесь надо описать те if в которых генерируется пароль */

        //return "gen_password";
    
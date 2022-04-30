<?php

class HTMLFormatter {


    public function printPasswordStronger(int $passwordStronger)
    {
        switch ($passwordStronger) {
            case StrongPassword::STRONG_PASSWORD:
                return "Пароль строгий";
                break;
            case StrongPassword::MIDDLE_STRONG_PASSWORD:
                return "Средняя надёжность";
                break;
            case StrongPassword::SLABY_STORNG_PASSWORD:
                return "Вообще не надёжный";
                break;
        }
    }
}
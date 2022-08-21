<?php


namespace Services;


class Lang
{
    public $code;
    public $user_lang = ['rus','eng','ger'];

    public function __construct($lang)
    {
        $isFound = false;
        foreach ($this->user_lang as $langCode) {
            if($langCode === $lang) {
                $isFound = true;
                break;
            }
        }
        //TODO: ловить исключения и показывать 404.
        if(!$isFound) $lang = 'rus';
        $this->code = $lang;
    }

}
<?php

namespace App\Http\Contracts;

interface TranslatorProvider
{
    public function setBaseUrl();
    public function translate($string = "", $from = 'en', $to = 'en');
}

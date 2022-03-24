<?php

namespace App\Http\Repositories;

use App\Http\Contracts\TranslatorProvider;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class JustTranslate implements TranslatorProvider
{
    private $base_url = '';

    public function __construct()
    {
        $this->setBaseUrl();
    }

    public function setBaseUrl()
    {
        $this->base_url = "https://yandextranslatezakutynskyv1.p.rapidapi.com/translate";
    }

    public function translate($string = "", $from = 'en', $to = 'en')
    {
        try {
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://just-translated.p.rapidapi.com/?lang=" . $to . "&text=" . urlencode($string),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "x-rapidapi-host: just-translated.p.rapidapi.com",
                    "x-rapidapi-key: ddbcc77120msh400731b99d2704ep10283ejsn84cc6ad7bd47"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                return "cURL Error #:" . $err;
            } else {
                return $response;
            }
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }
}

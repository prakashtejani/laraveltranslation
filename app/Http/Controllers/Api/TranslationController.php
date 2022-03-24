<?php

namespace App\Http\Controllers\Api;

use App\Http\Contracts\TranslatorProvider;
use Illuminate\Http\Request;

class TranslationController
{
    public function translate(Request $request, TranslatorProvider $translatorProvider)
    {
        try {
            return response()->json($translatorProvider->translate($request->q, $request->from, $request->to));
        } catch (\Throwable $e) {
            return $e;
        }
    }
}

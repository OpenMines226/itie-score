<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $languages = [
            'en' => __('English'),
            'fr' => __('French')
        ];

        $language = $request->input('language');

        session(['local' => $language]);

        flash(__("Application language has been set to ").__($languages[$language]));

        return back();
    }
}

<?php

namespace App\Http\Controllers;

class Localizationcontroller extends Controller
{
    public function handleLocalization($locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Locale;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Redirect;
use Session;

class LocaleController extends Controller
{
    protected function switchLang($lang)
	{
        Session::put('locale', $lang);
        return Redirect::back();
	}
}

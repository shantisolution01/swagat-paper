<?php

namespace App\Http\Controllers\web;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\Validator;
use App;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $userIp = $request->ip();
        $locationData = \Location::get($userIp);
        $country = $locationData->countryCode;
        switch($country)
        {
            case "DJ":
            case "ER":
            case "ET":

                $lang = "aa";
                break;

            case "AE":
            case "BH":
            case "DZ":
            case "EG":
            case "IQ":
            case "JO":
            case "KW":
            case "LB":
            case "LY":
            case "MA":
            case "OM":
            case "QA":
            case "SA":
            case "SD":
            case "SY":
            case "TN":
            case "YE":

                $lang = "ar";
                break;

            case "AZ":

                $lang = "az";
                break;

            case "BY":

                $lang = "be";
                break;

            case "BG":

                $lang = "bg";
                break;

            case "BD":

                $lang = "bn";
                break;

            case "BA":

                $lang = "bs";
                break;

            case "CZ":

                $lang = "cs";
                break;

            case "DK":

                $lang = "da";
                break;

            case "AT":
            case "CH":
            case "DE":
            case "LU":

                $lang = "de";
                break;

            case "MV":

                $lang = "dv";
                break;

            case "BT":

                $lang = "dz";
                break;

            case "GR":

                $lang = "el";
                break;

            case "AG":
            case "AI":
            case "AQ":
            case "AS":
            case "AU":
            case "BB":
            case "BW":
            case "CA":
            case "GB":
            case "IE":
            case "KE":
            case "NG":
            case "NZ":
            case "PH":
            case "SG":
            case "US":
            case "ZA":
            case "ZM":
            case "ZW":
            case "IN":

                $lang = "en";
                break;

            case "AD":
            case "AR":
            case "BO":
            case "CL":
            case "CO":
            case "CR":
            case "CU":
            case "DO":
            case "EC":
            case "ES":
            case "GT":
            case "HN":
            case "MX":
            case "NI":
            case "PA":
            case "PE":
            case "PR":
            case "PY":
            case "SV":
            case "UY":
            case "VE":

                $lang = "es";
                break;

            case "EE":

                $lang = "et";
                break;

            case "IR":

                $lang = "fa";
                break;

            case "FI":

                $lang = "fi";
                break;

            case "FO":

                $lang = "fo";
                break;

            case "BE":
            case "FR":
            case "SN":

                $lang = "fr";
                break;

            case "IL":

                $lang = "he";
                break;

            case "HR":

                $lang = "hr";
                break;

            case "HT":

                $lang = "ht";
                break;

            case "HU":

                $lang = "hu";
                break;

            case "AM":

                $lang = "hy";
                break;

            case "ID":

                $lang = "id";
                break;

            case "IS":

                $lang = "is";
                break;

            case "IT":

                $lang = "it";
                break;

            case "JP":

                $lang = "ja";
                break;

            case "GE":

                $lang = "ka";
                break;

            case "KZ":

                $lang = "kk";
                break;

            case "GL":

                $lang = "kl";
                break;

            case "KH":

                $lang = "km";
                break;

            case "KR":

                $lang = "ko";
                break;

            case "KG":

                $lang = "ky";
                break;

            case "UG":

                $lang = "lg";
                break;

            case "LA":

                $lang = "lo";
                break;

            case "LT":

                $lang = "lt";
                break;

            case "LV":

                $lang = "lv";
                break;

            case "MG":

                $lang = "mg";
                break;

            case "MK":

                $lang = "mk";
                break;

            case "MN":

                $lang = "mn";
                break;

            case "MY":

                $lang = "ms";
                break;

            case "MT":

                $lang = "mt";
                break;

            case "MM":

                $lang = "my";
                break;

            case "NP":

                $lang = "ne";
                break;

            case "AW":
            case "NL":

                $lang = "nl";
                break;

            case "NO":

                $lang = "no";
                break;

            case "PL":

                $lang = "pl";
                break;

            case "AF":

                $lang = "ps";
                break;

            case "AO":
            case "BR":
            case "PT":

                $lang = "pt";
                break;

            case "RO":

                $lang = "ro";
                break;

            case "RU":
            case "UA":

                $lang = "ru";
                break;

            case "RW":

                $lang = "rw";
                break;

            case "AX":

                $lang = "se";
                break;

            case "SK":

                $lang = "sk";
                break;

            case "SI":

                $lang = "sl";
                break;

            case "SO":

                $lang = "so";
                break;

            case "AL":

                $lang = "sq";
                break;

            case "ME":
            case "RS":

                $lang = "sr";
                break;

            case "SE":

                $lang = "sv";
                break;

            case "TZ":

                $lang = "sw";
                break;

            case "LK":

                $lang = "ta";
                break;

            case "TJ":

                $lang = "tg";
                break;

            case "TH":

                $lang = "th";
                break;

            case "TM":

                $lang = "tk";
                break;

            case "CY":
            case "TR":

                $lang = "tr";
                break;

            case "PK":

                $lang = "ur";
                break;

            case "UZ":

                $lang = "uz";
                break;

            case "VN":

                $lang = "vi";
                break;

            case "CN":
            case "HK":
            case "TW":

                $lang = "zh";
                break;

            default:break;
        }
        App::setLocale($lang);
        session()->put('locale', $lang);

        return view('web.home');
    }

    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }
}

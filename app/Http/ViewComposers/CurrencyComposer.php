<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Session;

class CurrencyComposer
{

    public $country;


    const CURRENCY = [
        'USD' => '&#36;', // $
        'EURO' => '&#8364;', // €
        'GBP' => '&#163;'  // £
    ];

    public function __construct()
    {
        $this->getCountry();
    }

    private function getCountry()
    {
        if (!(session()->has('country'))) {
            $ip =  geoip()->getClientIP();
            if (env('APP_ENV') == 'develop-mtl') {
                $ip = '163.82.113.160'; // to test in local env
            }
            $countryInfo = geoip()->getLocation($ip);
            $isoCode = $countryInfo->getAttribute('iso_code');
            $currencySymbol = $this->getCurrencyType($isoCode);
            $country = [
                'isoCode' => $isoCode,
                'currencySymbol' => $currencySymbol
            ];
            session(['country' => $country]);
        }
        $this->country = session('country');
    }

    private function getCurrencyType($iso_code)
    {
        $symbolType = config('constants.symbolType');
        if (in_array($iso_code, $symbolType['GBP'], true)) {
            return self::CURRENCY['GBP'];
        }
        if (in_array($iso_code, $symbolType['EURO'], true)) {
            return self::CURRENCY['EURO'];
        }
        return self::CURRENCY['USD'];
    }

    public function compose(View $view)
    {
        // todo logic will be done via helper and call for currency will be handled gateway api side
        $view->with('currencySymbol', $this->country['currencySymbol']);
    }
}

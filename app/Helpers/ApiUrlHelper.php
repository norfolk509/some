<?php

namespace App\Helpers;


class ApiUrlHelper
{
    /**
     * @param string $configPath
     * @param array $replaceBaseUrlParameters - NOTE: only obligatory parameters not query parameters
     * @return string|null
     */
    public static function getApiUrl(string $configPath, array $replaceBaseUrlParameters = [])
    {
        $uri = config($configPath);
        $baseUrl = config('api_url.base_url.'.config('app.env'));

        if (!empty($replaceBaseUrlParameters)) {
            foreach ($replaceBaseUrlParameters as $key => $value) {
                $replaceString = '{' . $key . '}';
                $uri = str_replace_first($replaceString, $value, $uri);
            }
        }
        return $baseUrl . $uri;
    }
}

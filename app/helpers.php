<?php
if (!function_exists('get_api_url')) {
    /**
     * @param string $configPath
     * @param array $replaceBaseUrlParameters - NOTE: only obligatory parameters not query parameters
     * @return string|null
     */
    function get_api_url(string $configPath, array $replaceBaseUrlParameters = [])
    {
        return \App\Helpers\ApiUrlHelper::getApiUrl($configPath, $replaceBaseUrlParameters);
    }
}

if (!function_exists('device_agent')) {
    /**
     * Used for Device detection (Desktop/Tablet/Mobile)
     * Documentation available at: https://github.com/jenssegers/agent
     * @return \Jenssegers\Agent\Agent
     */

    function device_agent()
    {
        return new \Jenssegers\Agent\Agent();
    }
}

if (!function_exists('asset')) {
    /**
     * Overwrite default asset method for security reasons
     * @param string $path
     * @param bool $isCdn
     * @return string
     */
    function asset(string $path, bool $isCdn = false): string
    {
        if ($path[0] === '/')
            $path = substr($path, 1);

        /**
         * TODO: modify in the future to use multiple CDNs
         */
        if ($isCdn) {
            return config('cdn.url') . '/' . $path;
        }

        return '/' . $path;
    }
}

<?php namespace Keios\GeoLocaleSwitcher\Classes;


/**
 * Class GeoLocaleRepository
 *
 * @package Keios\GeoLocaleSwitcher\Classes
 */
class GeoLocaleRepository
{
    /**
     * @var array
     */
    const countryToLocale = [
        'AD' => 'ca',
        'AE' => 'ar',
        'AF' => 'ps',
        'AG' => 'en',
        'AL' => 'sq',
        'AM' => 'hy',
        'AN' => 'pap',
        'AR' => 'es',
        'AT' => 'de',
        'AU' => 'en',
        'AW' => ['nl', 'pap'],
        'AZ' => 'az',
        'BA' => 'bs',
        'BD' => 'bn',
        'BE' => ['de', 'fr', 'li', 'nl', 'wa'],
        'BG' => 'bg',
        'BH' => 'ar',
        'BO' => 'es',
        'BR' => 'pt',
        'BT' => 'dz',
        'BW' => 'en',
        'BY' => ['be', 'ru'],
        'CA' => ['en', 'fr', 'ik', 'iu', 'shs'],
        'CH' => ['de', 'fr', 'it', 'wae'],
        'CL' => 'es',
        'CN' => ['bo', 'ug', 'zh'],
        'CO' => 'es',
        'CR' => 'es',
        'CU' => 'es',
        'CW' => 'pap',
        'CY' => ['el', 'tr'],
        'CZ' => 'cs',
        'DE' => ['de', 'fy', 'hsb', 'nds'],
        'DJ' => ['aa', 'so'],
        'DK' => ['da', 'en'],
        'DO' => 'es',
        'DZ' => ['ar', 'ber'],
        'EC' => 'es',
        'EE' => 'et',
        'EG' => 'ar',
        'ER' => ['aa', 'byn', 'gez', 'ti', 'tig'],
        'ES' => ['an', 'ast', 'ca', 'es', 'eu', 'gl'],
        'ET' => ['aa', 'am', 'gez', 'om', 'sid', 'so', 'ti', 'wal'],
        'FI' => ['fi', 'sv'],
        'FO' => 'fo',
        'FR' => ['br', 'ca', 'fr', 'ia', 'oc'],
        'GB' => ['cy', 'en', 'gd', 'gv', 'kw', 'ka'],
        'GH' => 'ak',
        'GL' => 'kl',
        'GR' => 'el',
        'GT' => 'es',
        'HK' => ['en', 'yue', 'zh'],
        'HN' => 'es',
        'HR' => 'hr',
        'HT' => 'ht',
        'HU' => 'hu',
        'ID' => 'id',
        'IE' => ['en', 'ga'],
        'IL' => ['he', 'iw'],
        'IN' => [
            'anp',
            'ar',
            'as',
            'bho',
            'bn',
            'bo',
            'brx',
            'doi',
            'en',
            'gu',
            'hi',
            'hne',
            'kn',
            'kok',
            'ks',
            'mag',
            'mai',
            'ml',
            'mni',
            'mr',
            'or',
            'pa',
            'sa',
            'sat',
            'sd',
            'ta',
            'te',
            'ur'
        ],
        'IQ' => 'ar',
        'IR' => 'fa',
        'IS' => 'is',
        'IT' => ['ca', 'fur', 'it', 'lij', 'sc'],
        'JO' => 'ar',
        'JP' => 'ja',
        'KE' => ['om', 'so', 'sw'],
        'KG' => 'ky',
        'KH' => 'km',
        'KR' => 'ko',
        'KW' => 'ar',
        'KZ' => 'kk',
        'LA' => 'lo',
        'LB' => 'ar',
        'LK' => ['si', 'ta'],
        'LT' => 'lt',
        'LU' => ['de', 'fr', 'lb'],
        'LV' => 'lv',
        'LY' => 'ar',
        'MA' => ['ar', 'ber'],
        'ME' => 'sr',
        'MG' => 'mg',
        'MK' => ['mk', 'sq'],
        'MM' => 'my',
        'MN' => 'mn',
        'MT' => 'mt',
        'MV' => 'dv',
        'MX' => ['es', 'nhn'],
        'MY' => 'ms',
        'NG' => ['en', 'ha', 'ig', 'yo'],
        'NI' => 'es',
        'NL' => ['nl', 'fy', 'li', 'nds'],
        'NO' => ['nb', 'nn', 'se'],
        'NP' => ['ne', 'the'],
        'NU' => 'niu',
        'NZ' => ['en', 'mi', 'niu'],
        'OM' => 'ar',
        'PA' => 'es',
        'PE' => ['ayc', 'es', 'quz'],
        'PH' => ['en', 'fil', 'tl'],
        'PK' => ['pa', 'ur'],
        'PL' => ['pl', 'szl', 'csb'],
        'PR' => 'es',
        'PT' => 'pt',
        'PY' => 'es',
        'QA' => 'ar',
        'RO' => 'ro',
        'RS' => 'sr',
        'RU' => ['cv', 'mhr', 'os', 'ru', 'tt'],
        'RW' => 'rw',
        'SA' => 'ar',
        'SD' => 'ar',
        'SE' => 'sv',
        'SG' => ['en', 'zh'],
        'SI' => 'sl',
        'SK' => 'sk',
        'SN' => ['ff', 'wo'],
        'SO' => 'so',
        'SS' => 'ar',
        'SV' => 'es',
        'SY' => 'ar',
        'TH' => 'th',
        'TJ' => 'tg',
        'TM' => 'tk',
        'TN' => 'ar',
        'TR' => ['ku', 'tr'],
        'TW' => ['cmn', 'hak', 'lzh', 'nan', 'zh'],
        'TZ' => 'sw',
        'UA' => ['crh', 'ru', 'uk'],
        'UG' => 'lg',
        'US' => ['en', 'es', 'unm', 'yi'],
        'UY' => 'es',
        'VE' => 'es',
        'VN' => 'vi',
        'YE' => 'ar',
        'ZA' => ['af', 'en', 'nr', 'nso', 'ss', 'st', 'tn', 'ts', 've', 'xh', 'zu'],
        'ZM' => ['bem', 'en'],
        'ZW' => 'en',
    ];

    /**
     * @param $isoCode
     *
     * @return CountryLocale
     */
    public function resolve($isoCode)
    {
        $locale = null;
        if (array_key_exists($isoCode, self::countryToLocale)) {
            $locale = self::countryToLocale[$isoCode];
        }

        if (is_string($locale)) {
            $locale = [$locale];
        }

        return new CountryLocale($locale, $isoCode);
    }
}
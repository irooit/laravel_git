<?php
/**
 * Created by PhpStorm.
 * User: hongcoo
 * Date: 2018/10/4
 * Time: 上午11:36
 */
namespace App\Factories;

class DateFormatFactory
{
    /**
     * @param string $locale
     * @return DateFormat_CN|DateFormat_TW|DateFormat_UK|DateFormat_US
     */
    public static function bind(string $locale)
    {
        switch ($locale)
        {
            case 'CN':
                return new DateFormat_CN();
            case 'TW':
                return new DateFormat_TW();
            case 'UK':
                return new DateFormat_UK();
            default:
                return new DateFormat_US();
        }
    }
}

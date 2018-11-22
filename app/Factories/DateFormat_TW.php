<?php
/**
 * Created by PhpStorm.
 * User: hongcoo
 * Date: 2018/10/4
 * Time: 上午11:34
 */
namespace App\Factories;

use Carbon\Carbon;

class DateFormat_TW implements DateFormatInterface
{
    /**
     * @param Carbon $date
     * @return string
     */
    public function showDate(Carbon $date): string
    {
        // TODO: Implement showDate() method.
        return $date->format('Y/m/d');
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: hongcoo
 * Date: 2018/10/4
 * Time: 上午11:38
 */
namespace App\Factories;

use Carbon\Carbon;

class DateFormat_US implements DateFormatInterface
{
    /**
     * @param Carbon $date
     * @return string
     */
    public function showDate(Carbon $date): string
    {
        // TODO: Implement showDate() method.
        return $date->format('m/d Y');
    }
}

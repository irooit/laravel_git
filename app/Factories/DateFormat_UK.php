<?php
/**
 * Created by PhpStorm.
 * User: hongcoo
 * Date: 2018/10/4
 * Time: 上午11:33
 */

namespace App\Factories;

use Carbon\Carbon;

class DateFormat_UK implements DateFormatInterface
{
    /**
     * @param Carbon $date
     * @return string
     */
    public function showDate(Carbon $date): string
    {
        return $date->format('d M, Y');
    }
}

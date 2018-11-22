<?php
/**
 * Created by PhpStorm.
 * User: hongcoo
 * Date: 2018/10/4
 * Time: 上午11:30
 */
namespace App\Factories;

use Carbon\Carbon;

interface DateFormatInterface
{
    /**
     * @param Carbon $date
     * @return string
     */
    public function showDate(Carbon $date): string;
}

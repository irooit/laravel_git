<?php
/**
 * Created by PhpStorm.
 * User: hongcoo
 * Date: 2018/10/4
 * Time: 下午3:37
 */
namespace App\Factories;

use Carbon\Carbon;

class DateFormat
{
    protected $locale;
    public function __construct(DateFormatInterface $locale)
    {
        $this->locale = $locale;
    }

    public function format(Carbon $date)
    {
        return $this->locale->showDate($date);
    }
}

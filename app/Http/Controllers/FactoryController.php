<?php

namespace App\Http\Controllers;

use App\Factories\DateFormat;
use App\Factories\DateFormat_TW;
use App\Factories\DateFormatFactory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FactoryController extends Controller
{
    public function index()
    {
        $factory = app()->make('DateFormat_TW');
        $data = $factory->showDate(Carbon::now());
        dump($data);
    }

    public function index2()
    {
        $method = new DateFormat_TW();
        $format = new DateFormat($method);
        $data = $format->format(Carbon::now());
        dump($data);
    }

    public function index1()
    {
        $locale = 'TW';
        $factory = DateFormatFactory::bind($locale);
        $data = $factory->showDate(Carbon::now());
        dump($data);
    }
}

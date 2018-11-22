<?php

namespace App\Http\Controllers;

use App\Libs\CacheModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {

        $set = \Cache::set('hello', 'hello world', Carbon::now()->addSeconds(10000));
        $get = \Cache::get('hello');
        dd($get);
        //echo $this->getResult(100.338);
    }

    function getResult($input):int
    {
        return $input;
    }
}

<?php

namespace App\Http\Controllers;

use App\Libs\CacheModel;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {

        $account = get_chosed_account();
        dd($account);
        $cache = new CacheModel();

        $cache->updateCache();
        //echo $this->getResult(100.338);
    }

    function getResult($input):int
    {
        return $input;
    }
}

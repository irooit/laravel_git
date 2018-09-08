<?php

namespace App\Http\Controllers\api\Test;

use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    use Helpers;
    public function index()
    {
        $data = @file_get_contents('https://weixin.feisudu.com/addons/rooit_mission/template/style/error.png');
        echo "<pre>";
        var_dump($data);
        return $this->response->item([]);
    }
}

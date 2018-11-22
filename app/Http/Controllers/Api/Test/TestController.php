<?php

namespace App\Http\Controllers\api\Test;

use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    use Helpers;

    /**
     * Hello world
     */

    public function index()
    {
        dump('Hello world');
    }

    public function index1()
    {
        $url = 'https://open.uzanpaidang.com/addons/quickcredit/css/style.css?v=203';
        $data = file_get_contents($url);
        file_put_contents('style.css', $data);
        $data = @file_get_contents('https://weixin.feisudu.com/addons/rooit_mission/template/style/error.png');
        $data1 = @file_get_contents('https://weixin.feisudu.com/addons/rooit_mission/template/style/newbtn.png');
        echo "<pre>";
        var_dump($data);
        var_dump($data1);
        return $this->response->item([]);
    }
}

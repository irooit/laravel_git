<?php

namespace App\Http\Controllers\Api\Git;

use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class DeployController extends Controller
{
    use Helpers;

    public function __invoke(Request $request)
    {
        $params = $request->all();
        if (isset($params['password']) && 'Gitee' == $params['password']) {
            $data = shell_exec("cd /data/wwwroot/feisudu && git pull");
        }
        return $this->response->array(['data' => 'success'. time()]);
    }
}

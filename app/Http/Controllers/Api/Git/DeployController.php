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
        $all = $request->all();
        Log::info('gitee', $all);
        return $this->response->array($request->all());
    }
}

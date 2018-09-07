<?php

namespace App\Http\Controllers\Api\Git;

use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeployController extends Controller
{
    use Helpers;

    public function __invoke(Request $request)
    {
        return $this->response->array($request->all());
    }
}

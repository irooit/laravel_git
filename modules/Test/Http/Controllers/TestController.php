<?php

namespace Modules\Test\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use TencentCloud\Common\Credential;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Soe\V20180724\Models\InitOralProcessRequest;
use TencentCloud\Soe\V20180724\Models\TransmitOralProcessRequest;
use TencentCloud\Soe\V20180724\SoeClient;
use TencentCloud\Vpc\V20170312\Models\TransformAddressRequest;

class TestController extends Controller
{

    public function index()
    {
        try {
            $cred = new Credential("AKIDc3GFzUEqeCXdU9swymLfkbDbjcFhbt51", "pPltnSs30iBNL2TdXGkxub1IK9j49yXr");
            $httpProfile = new HttpProfile();
            $httpProfile->setEndpoint("soe.tencentcloudapi.com");

            $clientProfile = new ClientProfile();
            $clientProfile->setHttpProfile($httpProfile);
            $client = new SoeClient($cred, "ap-beijing", $clientProfile);

            $req = new InitOralProcessRequest();

            $params = '{"SessionId":"12345","RefText":"Hello Tommy How old are you","WorkMode":"1","EvalMode":"1","ScoreCoeff":"1.5"}';
            $req->fromJsonString($params);


            $resp = $client->InitOralProcess($req);

            print_r($resp->toJsonString());
            $req = new TransmitOralProcessRequest();

            $params = '{"SeqId":"1","IsEnd":"1","VoiceFileType":"3","VoiceEncodeType":"1","UserVoiceData":"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","SessionId":"12345"}';
            $req->fromJsonString($params);


            $resp = $client->TransmitOralProcess($req);

            dd(json_decode($resp->toJsonString()), true);
        }
        catch(TencentCloudSDKException $e) {
            echo $e->getMessage().$e->getLine();
        }
        /*$data = file_get_contents('text2audio.mp3');
        dump(base64_encode($data));*/
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index1()
    {
        $key = "yWIgLcAeYXn8YzzmqYayVCMP";
        $secret = "j9CxKU1KYtjO31l6zjCXYa8WqVQvrTca";
        $api = "https://openapi.baidu.com/oauth/2.0/token?grant_type=client_credentials&client_id=".$key."&client_secret=". $secret;
        /*$JsonData = file_get_contents($api);
        $data = json_decode($JsonData, true);
        session()->put('api', $data);*/
        $session = session()->get('api');
        $voice = "http://tsn.baidu.com/text2audio?lan=zh&ctp=1&cuid=abcdxxx&tok=".$session['access_token']."&tex=".urlencode(urlencode('Hello, Tom, How are you'))."&vol=9&per=0&spd=5&pit=5&aue=3";
        dump($voice);
        /*$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $host);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, false);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $result = curl_exec($ch);
        curl_close($ch);
        print_r($result);
        file_put_contents($output_filename, $result);*/
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('test::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('test::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('test::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}

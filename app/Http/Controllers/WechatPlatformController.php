<?php

namespace App\Http\Controllers;

use EasyWeChat\Factory;
use EasyWeChat\OpenPlatform\Application;
use Illuminate\Http\Request;

class WechatPlatformController extends Controller
{
    protected $openPlatform;
    protected $config;

    public function __construct()
    {
        $this->config = \Config::get('wechat.open_platform.default');
        $this->openPlatform = app('wechat.open_platform');
    }
    public function notify()
    {
        $server = $this->openPlatform->server;
        $response = $server->serve();
        return $response;
        $server->setMessageHandler(function($event) use($openPlatform){
            switch ($event->InfoType) {
                case Guard::EVENT_AUTHORIZED: // 授权成功
                    $res = $openPlatform->getAuthorizationInfo($event->AuthorizationCode);
                    //@TODO 此处需要检查res是否正常
                    //Save to DB
                    $appid = $res->authorization_info['authorizer_appid'];
                    $refresh_token = $res->authorization_info['authorizer_refresh_token'];
                    DB::table("wechat_platform")->where('app','hr')->update(['appid' => $appid,'refresh_token' => $refresh_token]);

                    break;
                case Guard::EVENT_UPDATE_AUTHORIZED:    // 更新授权
                    //
                    break;
                case Guard::EVENT_UNAUTHORIZED: // 取消授权
                    //
                    break;

            }
        });

        $response = $server->serve();
        return $response;

    }

    public function auth(){
        $response = $this->openPlatform->getPreAuthorizationUrl(route('wechat.openCallback'));
        return $response;
    }

    public function wxcallback(){
        $server = $this->openPlatform->server;
        return $server->serve();

        $options = ['open_platform' => config('wechat.open_platform')];
        $app = new Application($options);
        $openPlatform = $app->open_platform;


        try{
            $res = $openPlatform->getAuthorizationInfo($authorizationCode = null);
            $appid = $res->authorization_info['authorizer_appid'];
            $refresh_token = $res->authorization_info['authorizer_refresh_token'];

            DB::table("wechat_platform")->where('app','hr')->update(['appid' => $appid,'refresh_token' => $refresh_token]);

            return 'Success';
        }catch (Exception $ex){
            abort(404,$ex->getMessage());
        }
    }

    public function test(){
        $options = ['open_platform' => config('wechat.open_platform')];
        $app = new Application($options);
        $openPlatform = $app->open_platform;
        $authInfo = DB::table("wechat_platform")->where('app','hr')->first();

        $app = $openPlatform->createAuthorizerApplication($authInfo->appid, $authInfo->refresh_token);
        $userService = $app->user;
        $user = $userService->get("oSQ2Ks_6ns0ahqKvzO_voIzbMdjI");
        dd($user);

    }

    public function index()
    {

    }

    public function open()
    {
        dump($this->config);
        dump(config('wechat.open_platform.default'));
        echo route('wechat.openCallback');
        return view('wechat.index');
    }
}

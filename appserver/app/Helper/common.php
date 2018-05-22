<?php
//
//    ______     ______     __  __
//   /\  ___\   /\  ___\   /\_\_\_\
//   \ \  __\   \ \ \____  \/_/\_\/_
//    \ \_____\  \ \_____\   /\_\/\_\
//     \/_____/   \/_____/   \/_/\/_
//
//   英斯特哈博（北京）科技有限公司
//
//  -----------------------------------------------------------------------------
//
//   一、协议的许可和权利
//
//    1. 您可以在完全遵守本协议的基础上，将本软件应用于商业用途；
//    2. 您可以在协议规定的约束和限制范围内修改本产品源代码或界面风格以适应您的要求；
//    3. 您拥有使用本产品中的全部内容资料、商品信息及其他信息的所有权，并独立承担与其内容相关的
//       法律义务；
//    4. 获得商业授权之后，您可以将本软件应用于商业用途，自授权时刻起，在技术支持期限内拥有通过
//       指定的方式获得指定范围内的技术支持服务；
//
//   二、协议的约束和限制
//
//    1. 未获商业授权之前，禁止将本软件用于商业用途（包括但不限于企业法人经营的产品、经营性产品
//       以及以盈利为目的或实现盈利产品）；
//    2. 未获商业授权之前，禁止在本产品的整体或在任何部分基础上发展任何派生版本、修改版本或第三
//       方版本用于重新开发；
//    3. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回并承担相应法律责任；
//
//   三、有限担保和免责声明
//
//    1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的；
//    2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未获得商业授权之前，我们不承
//       诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任；
//    3. 英斯特哈博（北京）科技有限公司不对使用本产品构建的商城中的内容信息承担责任，但在不侵犯
//       用户隐私信息的前提下，保留以任何方式获取用户信息及商品信息的权利；
//
//   有关本产品最终用户授权协议、商业授权与技术服务的详细内容，均由英斯特哈博（北京）科技有限公司
//   独家提供。英斯特哈博（北京）科技有限公司拥有在不事先通知的情况下，修改授权协议的权力，修改后
//   的协议对改变之日起的新授权用户生效。电子文本形式的授权协议如同双方书面签署的协议一样，具有完
//   全的和等同的法律效力。您一旦开始修改、安装或使用本产品，即被视为完全理解并接受本协议的各项条
//   款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反
//   本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
//
//  -----------------------------------------------------------------------------
//
if ( ! function_exists('config_path'))
{
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }
}


if (! function_exists('trans')) {
    /**
     * Translate the given message.
     *
     * @param  string  $id
     * @param  array   $parameters
     * @param  string  $domain
     * @param  string  $locale
     * @return string
     */
    function trans($id = null, $parameters = [], $domain = 'messages', $locale = null)
    {
        if (is_null($id)) {
            return app('translator');
        }

        return app('translator')->trans($id, $parameters, $domain, $locale);
    }
}


if (! function_exists('bcrypt')) {
    /**
     * Hash the given value.
     *
     * @param  string  $value
     * @param  array   $options
     * @return string
     */
    function bcrypt($value, $options = [])
    {
        return app('hash')->make($value, $options);
    }
}


if (! function_exists('endWith')) {
    /**
     * 第一个是原串,第二个是 部份串
     * @param  [type] $haystack [description]
     * @param  [type] $needle   [description]
     * @return [type]           [description]
     */
    function endWith($haystack, $needle)
    {
        $length = strlen($needle);
        if($length == 0)
        {
          return true;
        }
        return (substr($haystack, -$length) === $needle);
    }
}

if (! function_exists('formatPhoto')) {
    /**
     * Format Photo
     *
     * @param  string $photo
     * @return array
     */
     function formatPhoto($img, $thumb = null, $domain = null)
    {
        if ($img == null) {
            return null;
        }
        if ($thumb == null) {
            $thumb = $img;
        }
        
        $domain = $domain == null ?  config('app.shop_url') : $domain ;

          if(!preg_match('/^http/', $thumb)  &&!preg_match('/^https/', $thumb) ){
           $thumb =  $domain.'/'.$thumb ;
        }


        if(!preg_match('/^http/', $img)  &&!preg_match('/^https/', $img) ){
           $img =  $domain.'/'.$img ;
        }         

        return [
            'width'  => null,
            'height' => null,

            //定义图片服务器
            'thumb'  => $thumb,
            'large'  => $img
        ];
    }
}

if (! function_exists('curl_request')) {
    /**
     * CURL Request
     */
    function curl_request($api, $method = 'GET', $params = array(), $headers = [])
    {
        $curl = curl_init();

        switch (strtoupper($method)) {
            case 'GET' :
                if (!empty($params)) {
                    $api .= (strpos($api, '?') ? '&' : '?') . http_build_query($params);
                }
                curl_setopt($curl, CURLOPT_HTTPGET, TRUE);
                break;
            case 'POST' :
                curl_setopt($curl, CURLOPT_POST, TRUE);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $params);

                break;
            case 'PUT' :
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
                curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
                break;
            case 'DELETE' :
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
                curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
                break;
        }

        curl_setopt($curl, CURLOPT_URL, $api);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_HEADER, 0);

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($curl);

        if ($response === FALSE) {
            $error = curl_error($curl);
            curl_close($curl);
            return FALSE;
        }else{
            // 解决windows 服务器 BOM 问题
            $response = trim($response,chr(239).chr(187).chr(191));
            $response = json_decode($response, true);
        }

        curl_close($curl);

        return $response;
    }
}

if (! function_exists('show_error')) {
    /**
     * Show Error
     */
    function show_error($code, $message)
    {
        $response = response()->json([
            'error' => true,
            'error_code' => $code,
            'error_desc' => $message
        ]);
        $response->header('X-'.config('app.name').'-ErrorCode', $code);
        $response->header('X-'.config('app.name').'-ErrorDesc', urlencode($message));
        return $response;
    }
}

if (! function_exists('make_semiangle')) {

    /**
     *  将一个字串中含有全角的数字字符、字母、空格或'%+-()'字符转换为相应半角字符
     *
     * @access  public
     * @param   string       $str         待转换字串
     *
     * @return  string       $str         处理后字串
     */
    function make_semiangle($str)
    {
        $arr = array('０' => '0', '１' => '1', '２' => '2', '３' => '3', '４' => '4',
                     '５' => '5', '６' => '6', '７' => '7', '８' => '8', '９' => '9',
                     'Ａ' => 'A', 'Ｂ' => 'B', 'Ｃ' => 'C', 'Ｄ' => 'D', 'Ｅ' => 'E',
                     'Ｆ' => 'F', 'Ｇ' => 'G', 'Ｈ' => 'H', 'Ｉ' => 'I', 'Ｊ' => 'J',
                     'Ｋ' => 'K', 'Ｌ' => 'L', 'Ｍ' => 'M', 'Ｎ' => 'N', 'Ｏ' => 'O',
                     'Ｐ' => 'P', 'Ｑ' => 'Q', 'Ｒ' => 'R', 'Ｓ' => 'S', 'Ｔ' => 'T',
                     'Ｕ' => 'U', 'Ｖ' => 'V', 'Ｗ' => 'W', 'Ｘ' => 'X', 'Ｙ' => 'Y',
                     'Ｚ' => 'Z', 'ａ' => 'a', 'ｂ' => 'b', 'ｃ' => 'c', 'ｄ' => 'd',
                     'ｅ' => 'e', 'ｆ' => 'f', 'ｇ' => 'g', 'ｈ' => 'h', 'ｉ' => 'i',
                     'ｊ' => 'j', 'ｋ' => 'k', 'ｌ' => 'l', 'ｍ' => 'm', 'ｎ' => 'n',
                     'ｏ' => 'o', 'ｐ' => 'p', 'ｑ' => 'q', 'ｒ' => 'r', 'ｓ' => 's',
                     'ｔ' => 't', 'ｕ' => 'u', 'ｖ' => 'v', 'ｗ' => 'w', 'ｘ' => 'x',
                     'ｙ' => 'y', 'ｚ' => 'z',
                     '（' => '(', '）' => ')', '〔' => '[', '〕' => ']', '【' => '[',
                     '】' => ']', '〖' => '[', '〗' => ']', '“' => '[', '”' => ']',
                     '‘' => '[', '’' => ']', '｛' => '{', '｝' => '}', '《' => '<',
                     '》' => '>',
                     '％' => '%', '＋' => '+', '—' => '-', '－' => '-', '～' => '-',
                     '：' => ':', '。' => '.', '、' => ',', '，' => '.', '、' => '.',
                     '；' => ',', '？' => '?', '！' => '!', '…' => '-', '‖' => '|',
                     '”' => '"', '’' => '`', '‘' => '`', '｜' => '|', '〃' => '"',
                     '　' => ' ');

        return strtr($str, $arr);
    }
}

if (! function_exists('keyToPem')) {
    /**
     * key To Pem
     */
    function keyToPem($key, $private=false)
    {
        //Split lines:
        $lines = str_split($key, 65);
        $body = implode("\n", $lines);
        //Get title:
        $title = $private? 'RSA PRIVATE KEY' : 'PUBLIC KEY';
        //Add wrapping:
        $result = "-----BEGIN {$title}-----\n";
        $result .= $body . "\n";
        $result .= "-----END {$title}-----\n";

        return $result;
    }
}

if (! function_exists('unserialize_config')) {
    /**
     * 处理序列化的支付、配送的配置参数
     * 返回一个以name为索引的数组
     *
     * @access  public
     * @param   string       $cfg
     * @return  void
     */
    function unserialize_config($cfg)
    {
        if (is_string($cfg) && ($arr = unserialize($cfg)) !== false)
        {
            $config = array();

            foreach ($arr AS $key => $val)
            {
                $config[$val['name']] = $val['value'];
            }

            return $config;
        }
        else
        {
            return false;
        }
    }
}

if (! function_exists('is_dev')) {
    function is_dev()
    {
        if (app('request')->cookie('78b5od367n99we5w') == '882q20qxt3089s0s') {
            return true;
        }

        return false;
    }
}

if (! function_exists('format_array')) {
    function format_array($array)
    {
        if (is_array($array)) {
            foreach ($array as $key => $value) {
                if ($value === null) {
                    $array[$key] = '';
                } else if (is_array($value)) {
                    $value = format_array($value);
                    if($value === null) {
                        $array[$key] = '';
                    } else {
                        $array[$key] = $value;
                    }
                }
            }
        }

        return $array;
    }
}


if (! function_exists('filterSpecialchar')) {
    /**
     * 正则去除特殊字符
     *
     * @access  public
     * @param   string       $osstr
     * @return  string
     */
    function filterSpecialchar($ostr){
        $regex = "/\/|\~|\!|\@|\#|\\$|\%|\^|\&|\*|\(|\)|\_|\+|\{|\}|\:|\<|\>|\?|\[|\]|\,|\.|\/|\;|\'|\`|\-|\=|\\\|\|/";
        return preg_replace($regex, "", $ostr);
    }
}

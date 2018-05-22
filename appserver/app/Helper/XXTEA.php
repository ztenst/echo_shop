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
namespace App\Helper;

class XXTEA {
    const DELTA = 0x9E3779B9;
    private static function long2str($v, $w) {
        $len = count($v);
        $n = $len << 2;
        if ($w) {
            $m = $v[$len - 1];
            $n -= 4;
            if (($m < $n - 3) || ($m > $n)) return false;
            $n = $m;
        }
        $s = array();
        for ($i = 0; $i < $len; $i++) {
            $s[$i] = pack("V", $v[$i]);
        }
        if ($w) {
            return substr(join('', $s), 0, $n);
        }
        else {
            return join('', $s);
        }
    }

    private static function str2long($s, $w) {
        $v = unpack("V*", $s. str_repeat("\0", (4 - strlen($s) % 4) & 3));
        $v = array_values($v);
        if ($w) {
            $v[count($v)] = strlen($s);
        }
        return $v;
    }

    private static function int32($n) {
        return ($n & 0xffffffff);
    }

    private static function mx($sum, $y, $z, $p, $e, $k) {
        return ((($z >> 5 & 0x07ffffff) ^ $y << 2) + (($y >> 3 & 0x1fffffff) ^ $z << 4)) ^ (($sum ^ $y) + ($k[$p & 3 ^ $e] ^ $z));
    }

    private static function fixk($k) {
        if (count($k) < 4) {
            for ($i = count($k); $i < 4; $i++) {
                $k[$i] = 0;
            }
        }
        return $k;
    }
    // $str is the string to be encrypted.
    // $key is the encrypt key. It is the same as the decrypt key.
    public static function encrypt($str, $key) {

        if ($str == "") {
            return "";
        }

        if (is_array($str)) {
            $str = json_encode($str);
        }

        $v = self::str2long($str, true);
        $k = self::fixk(self::str2long($key, false));
        $n = count($v) - 1;
        $z = $v[$n];
        $q = floor(6 + 52 / ($n + 1));
        $sum = 0;
        while (0 < $q--) {
            $sum = self::int32($sum + self::DELTA);
            $e = $sum >> 2 & 3;
            for ($p = 0; $p < $n; $p++) {
                $y = $v[$p + 1];
                $z = $v[$p] = self::int32($v[$p] + self::mx($sum, $y, $z, $p, $e, $k));
            }
            $y = $v[0];
            $z = $v[$n] = self::int32($v[$n] + self::mx($sum, $y, $z, $p, $e, $k));
        }
        return self::long2str($v, false);
    }

    // $str is the string to be decrypted.
    // $key is the decrypt key. It is the same as the encrypt key.
    public static function decrypt($str, $key = false) {

        if (!$key) {
            $key = config('security.xxtea_key');
        }

        if ($str == "") {
            return "";
        }
        $v = self::str2long($str, false);
        $k = self::fixk(self::str2long($key, false));
        $n = count($v) - 1;

        $y = $v[0];
        $q = floor(6 + 52 / ($n + 1));
        $sum = self::int32($q * self::DELTA);
        while ($sum != 0) {
            $e = $sum >> 2 & 3;
            for ($p = $n; $p > 0; $p--) {
                $z = $v[$p - 1];
                $y = $v[$p] = self::int32($v[$p] - self::mx($sum, $y, $z, $p, $e, $k));
            }
            $z = $v[$n];
            $y = $v[0] = self::int32($v[0] - self::mx($sum, $y, $z, $p, $e, $k));
            $sum = self::int32($sum - self::DELTA);
        }
        return self::long2str($v, true);
    }
}
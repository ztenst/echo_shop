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
return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"         => ":attribute 必须接受。",
    "active_url"       => ":attribute 不是一个有效的网址。",
    "after"            => ":attribute 必须是一个在 :date 之后的日期。",
    "alpha"            => ":attribute 只能由字母组成。",
    "alpha_dash"       => ":attribute 只能由字母、数字和斜杠组成。",
    "alpha_num"        => ":attribute 只能由字母和数字组成。",
    "array"            => ":attribute 必须是一个数组。",
    "before"           => ":attribute 必须是一个在 :date 之前的日期。",
    "between"          => [
        "numeric" => ":attribute 必须介于 :min - :max 之间。",
        "file"    => ":attribute 必须介于 :min - :max kb 之间。",
        "string"  => ":attribute 必须介于 :min - :max 个字符之间。",
        "array"   => ":attribute 必须只有 :min - :max 个单元。",
    ],
    "boolean"          => ":attribute 必须为布尔值。",
    "confirmed"        => ":attribute 两次输入不一致。",
    "date"             => ":attribute 不是一个有效的日期。",
    "date_format"      => ":attribute 的格式必须为 :format。",
    "different"        => ":attribute 和 :other 必须不同。",
    "digits"           => ":attribute 必须是 :digits 位的数字。",
    "digits_between"   => ":attribute 必须是介于 :min 和 :max 位的数字。",
    "email"            => ":attribute 不是一个合法的邮箱。",
    "exists"           => ":attribute 不存在。",
    "filled"           => ":attribute 不能为空。",
    "image"            => ":attribute 必须是图片。",
    "in"               => "已选的属性 :attribute 非法。",
    "integer"          => ":attribute 必须是整数。",
    "ip"               => ":attribute 必须是有效的 IP 地址。",
    'json'             => 'The :attribute must be a valid JSON string.',
    "max"              => [
        "numeric" => ":attribute 不能大于 :max。",
        "file"    => ":attribute 不能大于 :max kb。",
        "string"  => ":attribute 不能大于 :max 个字符。",
        "array"   => ":attribute 最多只有 :max 个单元。",
    ],
    "mimes"            => ":attribute 必须是一个 :values 类型的文件。",
    "min"              => [
        "numeric" => ":attribute 必须大于等于 :min。",
        "file"    => ":attribute 大小不能小于 :min kb。",
        "string"  => ":attribute 至少为 :min 个字符。",
        "array"   => ":attribute 至少有 :min 个单元。",
    ],
    "not_in"           => "已选的属性 :attribute 非法。",
    "numeric"          => ":attribute 必须是一个数字。",
    "regex"            => ":attribute 格式不正确。",
    "required"         => ":attribute 不能为空。",
    "required_if"      => "当 :other 为 :value 时 :attribute 不能为空。",
    "required_with"    => "当 :values 存在时 :attribute 不能为空。",
    "required_with_all" => "当 :values 存在时 :attribute 不能为空。",
    "required_without" => "当 :values 不存在时 :attribute 不能为空。",
    "required_without_all" => "当 :values 都不存在时 :attribute 不能为空。",
    "same"             => ":attribute 和 :other 必须相同。",
    "size"             => [
        "numeric" => ":attribute 大小必须为 :size。",
        "file"    => ":attribute 大小必须为 :size kb。",
        "string"  => ":attribute 必须是 :size 个字符。",
        "array"   => ":attribute 必须为 :size 个单元。",
    ],
    "string"           => ":attribute 必须是一个字符串。",
    "timezone"         => ":attribute 必须是一个合法的时区值。",
    "unique"           => ":attribute 已经存在。",
    "url"              => ":attribute 格式不正确。",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
    
    ],
];
<?php

$spbill_create_ip2=($_SERVER["REMOTE_ADDR"])? $_SERVER["REMOTE_ADDR"] : '127.0.0.1';

// 给下列参数赋值
$appid2 = "wx3e7ddcfb2e2e59ee";//替换appid
$appkey2 = "62PNF9abhLg4DsbYkrgrlNrZB8xaDK7MKWoWC6WibB96n25pKJD4pMvsksxZlTn5rE0VIjIyMxdu3a3TUEt72fZjpwG7WFeZcnT5VTXzzwWib4zd10r038ztHXFMlyn3";//替换appkey
$partner2 = "1220019101";//替换partnerid
$partnerKey2 ="b01d961b83bd549b5593f0f0a41b18a2";//替换partnerkey
$notify_url2 = "http://www.jinguishop.com/auth/wxpaynotify.php";

$input_charset2 = "UTF-8";
		
		//传递下列参数
		$body2 = !empty($_GET['orderName']) ? $_GET['orderName'] : '';
		$out_trade_no2 = !empty($_GET['orderid']) ? $_GET['orderid'] : ''; //订单号，商户需要保证该字段对于本商户的唯一性
		$total_fee2 = !empty($_GET['price']) ? $_GET['price'] : '';

$packageString = getPackage($body2,$input_charset2,$notify_url2,$out_trade_no2,$partner2,$spbill_create_ip2,$total_fee2,$partnerKey2);
$time_stamp = time();
$nonce_str = randomkeys();
$sign = getSign($appid2,$appkey2,$nonce_str,$packageString,$time_stamp);

function getPackage($body2,$input_charset2,$notify_url2,$out_trade_no2,$partner2,$spbill_create_ip2,$total_fee2,$partnerKey2)
{
		$banktype = "WX";
    $fee_type = "1";//费用类型，这里1为默认的人民币
    $body = $body2;
    $input_charset = $input_charset2;
    $notify_url = $notify_url2;
    $out_trade_no = $out_trade_no2;
    $partner = $partner2;
    $spbill_create_ip = $spbill_create_ip2;
    $total_fee = $total_fee2;
    $partnerKey = $partnerKey2;

    $signString = "bank_type=".$banktype."&body=".$body."&fee_type=".$fee_type."&input_charset=".$input_charset."&notify_url=".$notify_url."&out_trade_no=".$out_trade_no."&partner=".$partner."&spbill_create_ip=".$spbill_create_ip."&total_fee=".$total_fee."&key=".$partnerKey;
    $md5SignValue =  strtoupper(md5($signString));

    $banktype = rawurlencode($banktype);
    $body=rawurlencode($body);
    $fee_type=rawurlencode($fee_type);
    $input_charset = rawurlencode($input_charset);
    $notify_url = rawurlencode($notify_url);
    $out_trade_no = rawurlencode($out_trade_no);
    $partner = rawurlencode($partner);
    $spbill_create_ip = rawurlencode($spbill_create_ip);
    $total_fee = rawurlencode($total_fee);

    $completeString = "bank_type=".$banktype."&body=".$body."&fee_type=".$fee_type."&input_charset=".$input_charset."&notify_url=".$notify_url."&out_trade_no=".$out_trade_no."&partner=".$partner."&spbill_create_ip=".$spbill_create_ip."&total_fee=".$total_fee;
    $completeString = $completeString . "&sign=".$md5SignValue;
    
    return $completeString;
}

function getSign($appid2,$appkey2,$nonce_str,$packageString,$time_stamp)
{
    $keyvaluestring = "appid=".$appid2."&appkey=".$appkey2."&noncestr=".$nonce_str."&package=".$packageString."&timestamp=".$time_stamp;
    return sha1($keyvaluestring);
}

function randomkeys()
{
 $pattern='1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
 for($i=0;$i<32;$i++)
 {
   $key .= $pattern{mt_rand(0,61)};    //生成php随机数
 }
 return $key;
}

?>

<script language="javascript" src="http://res.mail.qq.com/mmr/static/lib/js/jquery.js"></script>
<script Language="javascript">

function getOrderId()
{
    return "<?php echo $out_trade_no2;?>";
}

function getAppId()
{
    return "<?php echo $appid2;?>";
}


function getPackage()
{
    return "<?php echo $packageString?>";
}
function getTimeStamp()
{
	return "<?php echo $time_stamp?>";
}

function getNonceStr()
{
	return "<?php echo $nonce_str?>";
}

function getSignType()
{
    return "SHA1";
}

function getSign()
{
    return "<?php echo $sign?>";
}

// 当微信内置浏览器完成内部初始化后会触发WeixinJSBridgeReady事件。
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {

	                          //公众号支付
	                          WeixinJSBridge.invoke('getBrandWCPayRequest',{
				                         "appId" : getAppId(), //公众号名称，由商户传入
				                         "timeStamp" : getTimeStamp(), //时间戳
				                         "nonceStr" : getNonceStr(), //随机串
				                         "package" : getPackage(),//扩展包
				                         "signType" : getSignType(), //微信签名方式:1.sha1
				                         "paySign" : getSign() //微信签名
				                         },function(res){
										 alert(res.err_msg);
				                         if(res.err_msg == "get_brand_wcpay_request:ok" ) {
				                         window.location.href="/respond.php?code=wxpay&out_trade_no="+getOrderId();
				                         }
				                         else
				                         {
				                         window.location.href="/mobile/respond.php?code=wxpay";
				                         }
				                     }); 
                          }, false);
</script>
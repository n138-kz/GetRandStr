<?php
// タイムゾーン設定
date_default_timezone_set('Asia/Tokyo');

// キャッシュ無効化
header('Content-Type: Application/json');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header('Pragma: no-cache');

// レスポンス用変数(array)準備
$response_data['result']=FALSE;
$response_data['detail']='INIT';
$response_data['remote']=$_SERVER['REMOTE_ADDR'];

// メソッドチェック、HTTP/GET以外はすべて拒否
if (strtolower($_SERVER['REQUEST_METHOD']) != 'get') {
  $response_data['detail']='Invalid request.';
  http_response_code(405) ;
  echo json_encode($response_data);exit();
}

$response_data = array_merge($response_data, $_GET);

// ライブラリ読み込み
Require_once('../GetRandStr.php');

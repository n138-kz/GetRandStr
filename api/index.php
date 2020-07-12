<?php
header('content-type: text/plain');

if (! (mb_strtolower($_SERVER["REQUEST_METHOD"]) == 'post' || mb_strtolower($_SERVER["REQUEST_METHOD"]) == 'get') ) {
  header('HTTP/1.1 405 Method Not Allowed');
  exit();
}

header('content-type: application/json');
$errres = array(
   'errmesg' => ''
  ,'string'  => ''
);

$randomstring_config = array(
   'length'  => 12
  ,'chrtype' => 'aA1@'
);

try{
  if (mb_strtolower($_SERVER["REQUEST_METHOD"]) != 'get') {
    throw new Exception('Method error. current method is ' . mb_strtolower($_SERVER["REQUEST_METHOD"]));
  }
  if ( isset( $_GET['chr'] ) ) {
    $randomstring_config['chrtype'] = $_GET['chr'];
  }
  if ( isset( $_GET['len'] ) ) {
    $randomstring_config['length'] = (int)$_GET['len'];
  }

  $strarr = array(
     'alpha_lower' => array()
    ,'alpha_upper' => array()
    ,'numeric'     => array()
    ,'symbols'     => array()
    ,'mergestr'    => array()
  );

  $c = 'alpha_lower';
  $s =  97;
  $e = 122;
  for( $i=$s;$i<=$e;$i++ ){ $strarr[$c][count($strarr[$c])] = chr($i); }

  $c = 'alpha_upper';
  $s =  65;
  $e =  90;
  for( $i=$s;$i<=$e;$i++ ){ $strarr[$c][count($strarr[$c])] = chr($i); }

  $c = 'numeric';
  $s =  48;
  $e =  57;
  for( $i=$s;$i<=$e;$i++ ){ $strarr[$c][count($strarr[$c])] = chr($i); }

  $c = 'symbols';
  $s =  33;
  $e =  47;
  for( $i=$s;$i<=$e;$i++ ){ $strarr[$c][count($strarr[$c])] = chr($i); }

  $s =  58;
  $e =  64;
  for( $i=$s;$i<=$e;$i++ ){ $strarr[$c][count($strarr[$c])] = chr($i); }

  $s =  91;
  $e =  96;
  for( $i=$s;$i<=$e;$i++ ){ $strarr[$c][count($strarr[$c])] = chr($i); }

  $s = 123;
  $e = 126;
  for( $i=$s;$i<=$e;$i++ ){ $strarr[$c][count($strarr[$c])] = chr($i); }

  if( strpos( $randomstring_config['chrtype'], 'a' ) !== FALSE ){
    foreach( $strarr['alpha_lower'] as $key => $val ){
      $strarr['mergestr'][count($strarr['mergestr'])] = $val;
    }
  }
  if( strpos( $randomstring_config['chrtype'], 'A' ) !== FALSE ){
    foreach( $strarr['alpha_upper'] as $key => $val ){
      $strarr['mergestr'][count($strarr['mergestr'])] = $val;
    }
  }
  if( strpos( $randomstring_config['chrtype'], '1' ) !== FALSE ){
    foreach( $strarr['numeric'] as $key => $val ){
      $strarr['mergestr'][count($strarr['mergestr'])] = $val;
    }
  }
  if( strpos( $randomstring_config['chrtype'], '@' ) !== FALSE ){
    foreach( $strarr['symbols'] as $key => $val ){
      $strarr['mergestr'][count($strarr['mergestr'])] = $val;
    }
  }

  if ( count ( $strarr['mergestr'] ) > 0 ){
    for($i=0;$i<$randomstring_config['length'];$i++){
      $errres['string'] .= $strarr['mergestr'][rand(0,(count($strarr['mergestr']))-1)];
    }
  } else {
    $errres['string'] = '';
  }

} catch (Exception $e){
  $errres['errmesg'] = $e->getMessage();
}

$errres = json_encode( $errres );

echo $errres ;

exit();

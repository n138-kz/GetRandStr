<?php namespace n138;
class genRandomStr
{
  /*
    [GetRandStr:n138-kz@github]
    (https://github.com/n138-kz/GetRandStr)
  */
  private $len = 8;
  private $chr = 15;
  /*
  all: 1111 = 15
  num: 1000 =  8
  sym: 0100 =  4
  low: 0010 =  2
  upp: 0001 =  1
  */
  private $str = [
    'alpha_lower' => array(),
    'alpha_upper' => array(),
    'numeric'     => array(),
    'symbols'     => array(),
    'str_stage1'  => array(),
    'str_stage2'  => '',
  ];

  public function getResult()
  {
    if( $this->chr & 8 ){ foreach( $this->str['numeric'] as $key => $val )     { $this->str['str_stage1'][count($this->str['str_stage1'])] = $val; } }
    if( $this->chr & 4 ){ foreach( $this->str['symbols'] as $key => $val )     { $this->str['str_stage1'][count($this->str['str_stage1'])] = $val; } }
    if( $this->chr & 2 ){ foreach( $this->str['alpha_lower'] as $key => $val ) { $this->str['str_stage1'][count($this->str['str_stage1'])] = $val; } }
    if( $this->chr & 1 ){ foreach( $this->str['alpha_upper'] as $key => $val ) { $this->str['str_stage1'][count($this->str['str_stage1'])] = $val; } }

    $this->str['str_stage2'] = '';
    if ( count ( $this->str['str_stage1'] ) > 0 ) {
      for($i=0; $i<$this->len; $i++) {
        $this->str['str_stage2'] .= $this->str['str_stage1'][rand(0,(count($this->str['str_stage1']))-1)];
      }
    }

    return $this->str['str_stage2'];
  }

  public function setLength   ($value=8)  { if (is_numeric($value) && $value>0) { $this->len = $value; } }
  public function setCharType ($value=15) { if (is_numeric($value) && $value>0) { $this->chr = $value; } }

  public function __construct()
  {
    $a=[
      [ 'alpha_lower',  97, 122],
      [ 'alpha_upper',  65,  90],
      [ 'numeric',      48,  57],
      [ 'symbols',      33,  47],
      [ 'symbols',      58,  64],
      [ 'symbols',      91,  96],
      [ 'symbols',     123, 126],
    ];
    foreach ($a as $key => $val) {
      for( $i=$val[1]; $i<=$val[2]; $i++ ){ $this->str[$val[0]][count( $this->str[$val[0]] )] = chr($i); }
    }

    $c = 'alpha_lower';
    $s =  97;
    $e = 122;
    for( $i=$s;$i<=$e;$i++ ){ $this->str[$c][count($this->str[$c])] = chr($i); }

    $c = 'alpha_upper';
    $s =  65;
    $e =  90;
    for( $i=$s;$i<=$e;$i++ ){ $this->str[$c][count($this->str[$c])] = chr($i); }

    $c = 'numeric';
    $s =  48;
    $e =  57;
    for( $i=$s;$i<=$e;$i++ ){ $this->str[$c][count($this->str[$c])] = chr($i); }

    $c = 'symbols';
    $s =  33;
    $e =  47;
    for( $i=$s;$i<=$e;$i++ ){ $this->str[$c][count($this->str[$c])] = chr($i); }

    #$c = 'symbols';
    $s =  58;
    $e =  64;
    for( $i=$s;$i<=$e;$i++ ){ $this->str[$c][count($this->str[$c])] = chr($i); }

    #$c = 'symbols';
    $s =  91;
    $e =  96;
    for( $i=$s;$i<=$e;$i++ ){ $this->str[$c][count($this->str[$c])] = chr($i); }

    #$c = 'symbols';
    $s = 123;
    $e = 126;
    for( $i=$s;$i<=$e;$i++ ){ $this->str[$c][count($this->str[$c])] = chr($i); }
  }

}

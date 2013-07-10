<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('encode_answer')){
	function encode_answer($answer)
	{
		// 兼容 4-6个选项
		$res = array("A"=>"","B"=>"","C"=>"","D"=>"");
		foreach ($answer as $key => $value) {
			# code...
			if ($key == 0) {
				$res['A'] = $value;
			}elseif($key == 1){
				$res['B'] = $value;
			}elseif($key == 2){
				$res['C'] = $value;
			}elseif($key == 3){
				$res['D'] = $value;
			}
		}

		return json_encode($res);
	}
}
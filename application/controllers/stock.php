<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * Stock 
	 */

	public function __construct()
	{
	  	parent::__construct();
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Expose-Headers: Access-Control-Allow-Origin');
		header('Content-type: application/json');
	}


	public function index()
	{
		// $this->load->view('welcome_message');
		echo "welcome";
	}

	public function realtime($symbol)
	{
		// echo '[{"c": "SH601000","t": 1370575770,"n": "江苏吴中","lc": 3.10,"o": 3.11,"h": 3.14,"l": 3.08,"np": 3.10,"v": 12763,"a": 3961752,"bp": [3.09,3.08,3.07,3.06,3.05], "bv": [311,1082,678,1316,956],"sp": [3.10,3.11,3.12,3.13,3.14],"sv": [164,1152,848,1356,733]},{"c": "SH601888","t": 1370575770,"n": "种田伊朗","lc": 3.10,"o": 3.11,"h": 3.14,"l": 3.08,"np": 3.10,"v": 12763,"a": 3961752,"bp": [3.09,3.08,3.07,3.06,3.05], "bv": [311,1082,678,1316,956],"sp": [3.10,3.11,3.12,3.13,3.14],"sv": [164,1152,848,1356,733]}]';

		echo '[{"c": "SH601000","t": 1370575770,"n": "江苏吴中","lc": 3.10,"o": 3.11,"h": 3.14,"l": 3.08,"np": 3.10,"v": 12763,"a": 3961752,"bp": [3.09,3.08,3.07,3.06,3.05], "bv": [311,1082,678,1316,956],"sp": [3.10,3.11,3.12,3.13,3.14],"sv": [164,1152,848,1356,733]}]';
	}

	public function testrealtime()
	{
		echo '[{"name": "Mohit Jain","age": "26"},{"name": "TTT Jain","age": "23"},{"name": "DDDD Jain","age": "24"}]';
	}

	public function saveStockList()
	{

		$url = 'http://www.stockbro.com/js/stock_by_line.js';
		$handle = fopen($url,'rb');
		$string = stream_get_contents($handle);

		$array = explode("\n", $string);
		// print_r($array);

		foreach ($array as $key => $value) {
			# code...
			$vals = explode(',',$value);
			$data = array(
			   'symbol' => $vals[0] ,
			   'short' => $vals[1] ,
			   'name' => $vals[2]
			);
			print_r($data);

			$this->db->insert('stock_list', $data); 
		}

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
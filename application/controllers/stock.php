<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message'); 
	}

	public function realtime($symbol)
	{
		echo '{"c": "SH601000","t": 1370575770,"n": "江苏吴中","lc": 3.10,"o": 3.11,"h": 3.14,"l": 3.08,"np": 3.10,"v": 12763,"a": 3961752,"bp": [3.09,3.08,3.07,3.06,3.05], "bv": [311,1082,678,1316,956],"sp": [3.10,3.11,3.12,3.13,3.14],"sv": [164,1152,848,1356,733]}';
	}

	public function getStockList()
	{
		//
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
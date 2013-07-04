<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Level extends CI_controller {

	/**
	 * Level list 
	 * level N 
	 * level more
	 */

	public function __construct()
	{
	  	parent::__construct();

	}

	public function index( $n="")
	{
		if (!empty($n)) {
			# code...
			echo "index ".$n;
		}else{
			echo "white page";
			$tt = array('tt' => "t2","bb" => 222 );
			echo json_encode($tt);
		}

		$this->load->view("level");
	}

	public function lki()
	{
		echo "list";
	}


	public function more()
	{
		echo "more";
	}
}

/* End of file level.php */
/* Location: ./application/controller/level.php */
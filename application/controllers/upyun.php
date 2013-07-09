<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Upyun extends CI_Controller {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function test()
    {
		// $this->someclass->some_function();
    	echo "=====test====\r\n";
    }

    public function getList()
    {
    	$params = array('ydkcar-question', 'mactive', 'mengqian2',NULL,NULL);

		$this->load->library('UpYunClass',$params,'upyun');

		try {
		    echo "=========获取目录文件列表\r\n";
		    $list = $this->upyun->getList('/demo/');
		    var_dump($list);
		    echo "=========DONE\r\n\r\n";
		}
		catch(Exception $e) {
		    echo $e->getCode();
		    echo $e->getMessage();
		}

    }
}

/* End of file upyun.php controller */
/* Location: ./application/controllers/upyun.php */
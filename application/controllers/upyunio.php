<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class UpyunIO extends CI_Controller {

	const PATH = 'http://ydkcar-question.b0.upaiyun.com';


	function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        $params = array('ydkcar-question', 'mactive', 'mengqian2',NULL,NULL);
		$this->load->library('UpYunClass',$params,'upyun');
    }

    public function test()
    {
		// $this->someclass->some_function();
    	$tt = mktime();
    	echo $tt."=====test====\r\n";

    }

    public function getList()
    {
		$data = array();
		try {
		    $list = $this->upyun->getList('/t/');
		    $data['path'] = self::PATH ;
		    // print_r($list);
		    $data['list'] = $list;
		    $this->load->view('admin/header');
		    $this->load->view('upyun/list',$data);
			$this->load->view('admin/footer');
		}
		catch(Exception $e) {
		    echo $e->getCode();
		    echo $e->getMessage();
		}

    }

    public function upload_form($handle='handle_input')
    {
    	$data['handle_input'] = $handle;
    	$this->load->view('upyun/upload_form',$data);
    }

    public function upload()
    {

    	try {

    		$file_name = $_FILES["file"]["name"];  
			$tmp_file = $_FILES["file"]["tmp_name"];  
		    $handle_input = $_POST['handle_input'];

		    // echo "=========Upload File Directly\r\n";

		    $fh = fopen($tmp_file, 'rb');

		    $time_name = mktime();

		    // 缩率图前缀
		    $prefix = '';
		    if ($handle_input == "thumbnail_input") {
		    	$prefix = '/t/';
		    }else if($handle_input == "image_input")
		    {
		    	$prefix = '/i/';
		    }


		    $rsp = $this->upyun->writeFile($prefix.$time_name, $fh, True);   // 上传图片，自动创建目录
		    fclose($fh);
		    // var_dump($rsp);
		    // echo "=========DONE\n\r\n";
		    $data['time_name'] = $time_name;
		    $data['handle_input'] = $handle_input;
		    $data['path'] = self::PATH ;
		    $data['prefix'] = $prefix ;

		    $this->load->view('upyun/upload_success',$data);
		}
	    catch(Exception $e) {
		    echo $e->getCode();
		    echo $e->getMessage();
		}
    }
}

/* End of file upyun.php controller */
/* Location: ./application/controllers/upyun.php */
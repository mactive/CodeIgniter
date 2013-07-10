<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Curd extends CI_Controller {

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

	var $title      = '';
    var $answer     = '';
    var $currect       = '';
    var $why = '';
    var $tip = '';
    var $grade = 'easy';
    var $height = '480';
    var $slice = '6';
    var $thumbnail = '';
    var $image = '';
    var $type = 'car';

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model("QuestionModel");
    }


	public function question_update()
	{
		$data = array();
		$data['id']= isset($_POST['id']) ? trim($_POST['id']): $id;
		$data['title']= isset($_POST['title']) ? trim($_POST['title']): $title;
        
        $data['answer']= isset($_POST['answer']) ? $_POST['answer'] : $answer;

        $data['currect']= isset($_POST['currect']) ? trim($_POST['currect']): $currect;
        $data['why']= isset($_POST['why']) ? trim($_POST['why']): $why;
        $data['tip']= isset($_POST['tip']) ? trim($_POST['tip']): $tip;
        $data['grade']= isset($_POST['grade']) ? trim($_POST['grade']): $grade;
        $data['height']= isset($_POST['height']) ? trim($_POST['height']): $height;
        $data['slice']= isset($_POST['slice']) ? trim($_POST['slice']): $slice;
        $data['thumbnail']= isset($_POST['thumbnail']) ? trim($_POST['thumbnail']): $thumbnail;
        $data['image']= isset($_POST['image']) ? trim($_POST['image']): $image;
        $data['type']= isset($_POST['type']) ? trim($_POST['type']): $type;

        $data['answer'] = $this->encode_answer($data['answer']);

        $this->QuestionModel->update_entry($data);
	}

	public function question_insert()
	{
		$data = array();
		$data['title']= isset($_POST['title']) ? trim($_POST['title']): $title;
        
        $data['answer']= isset($_POST['answer']) ? $_POST['answer'] : $answer;

        $data['currect']= isset($_POST['currect']) ? trim($_POST['currect']): $currect;
        $data['why']= isset($_POST['why']) ? trim($_POST['why']): $why;
        $data['tip']= isset($_POST['tip']) ? trim($_POST['tip']): $tip;
        $data['grade']= isset($_POST['grade']) ? trim($_POST['grade']): $grade;
        $data['height']= isset($_POST['height']) ? trim($_POST['height']): $height;
        $data['slice']= isset($_POST['slice']) ? trim($_POST['slice']): $slice;
        $data['thumbnail']= isset($_POST['thumbnail']) ? trim($_POST['thumbnail']): $thumbnail;
        $data['image']= isset($_POST['image']) ? trim($_POST['image']): $image;
        $data['type']= isset($_POST['type']) ? trim($_POST['type']): $type;

        $data['answer'] = $this->encode_answer($data['answer']);

        $this->QuestionModel->insert_entry($data);
	}

	public function encode_answer($answer)
	{
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


	/**
	 * 问题列表 显示所有问题
	 * level list
	 *
	 */
	public function levels()
	{

	}



	/**
	 * 问题列表 显示所有问题
	 * setting
	 *
	 */
	public function setting()
	{

	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
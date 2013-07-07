<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class QuestionModel extends CI_Model {

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
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('questions', 10);
        return $query->result_array();
    }

    function get_question($id)
    {
        $res = array();
        $query = $this->db->get_where('questions', array('id'=>$id));
        $res =  $query->row_array();
        $res['answer'] = json_decode($res['answer']);

        return $res;
    }

    function insert_entry()
    {
         // please read the below note
        $this->title    = isset($_POST['title']) ? trim($_POST['title']): $title;
        $this->answer   = isset($_POST['answer']) ? trim($_POST['answer']): $answer;
        $this->currect  = isset($_POST['currect']) ? trim($_POST['currect']): $currect;
        $this->why      = isset($_POST['why']) ? trim($_POST['why']): $why;
        $this->tip      = isset($_POST['tip']) ? trim($_POST['tip']): $tip;
        $this->grade    = isset($_POST['grade']) ? trim($_POST['grade']): $grade;
        $this->height   = isset($_POST['height']) ? trim($_POST['height']): $height;
        $this->slice    = isset($_POST['slice']) ? trim($_POST['slice']): $slice;
        $this->thumbnail= isset($_POST['thumbnail']) ? trim($_POST['thumbnail']): $thumbnail;
        $this->image    = isset($_POST['image']) ? trim($_POST['image']): $image;
        $this->type     = isset($_POST['type']) ? trim($_POST['type']): $type;

        $this->db->insert('questions', $this);
    }

    function update_entry($data)
    {
        if (!empty($data['id'])) {
            # code...
            $this->db->update('questions', $data, array('id' => $data['id']));

        }else{
            error_log('no id');
        }

    }

}
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class QuestionModel extends CI_Model {

    private $title      = '汽车外观';
    private $answer     = array("A"=>"t1","B"=>"t2","C"=>"t3","D"=>"t4");
    private $currect    = '';
    private $why        = '';
    private $tip        = '';
    private $grade      = 'easy';
    private $height     = '480';
    private $slice      = '6';
    private $thumbnail  = '';
    private $image      = '';
    private $type       = 'car';


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function get_last_ten_entries()
    {
        $query = $this->db->get('questions', 10);
        return $query->result_array();
    }

    public function question_model()
    {
        $data = array();


        $data['title']  = $this->title;
        $data['answer'] = $this->answer;
        $data['currect']= $this->currect;
        $data['why']    = $this->why;
        $data['tip']    = $this->tip;
        $data['grade']  = $this->grade;
        $data['height'] = $this->height;
        $data['slice']  = $this->slice;
        $data['thumbnail']= $this->thumbnail;
        $data['image']  = $this->image;
        $data['type']   = $this->type;

        $data['answer'] = $this->answer;


        return $data;
    }

    function get_question($id)
    {
        $res = array();
        $query = $this->db->get_where('questions', array('id'=>$id));
        $res =  $query->row_array();
        $res['answer'] = json_decode($res['answer']);

        return $res;
    }

    function insert_entry($data)
    {
         // please read the below note
        if (empty($data['id'])) {
            # code...
            $this->db->insert('questions', $data);
        }else{
            error_log("id is not empty");
        }
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

    function delete_entry($id)
    {
        if (!empty($id)) {
            # code...
            $this->db->delete('questions', array('id' => $id)); 
        }else{
            error_log('no id');
        }

    }

}
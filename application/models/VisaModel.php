<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 28-Dec-18
 * Time: 2:35 PM
 * Coded by Hitesh with love
 * Find me at confused1108.github.io
 */
Class VisaModel extends CI_Model
{
    Public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function apply_first($data){
        $query=$this->db->insert('application',$data);
        if($query){
            $result['status'] = true;
        }
        else{
            $result['status'] = false;
        }
    }
    public function apply_second($data){
        $appnum=$data['application_num'];
        $this->db->where('application_num', $appnum);
        $this->db->update('application', $data);

    }
    public function form_second($appnum){
        $sql="SELECT * FROM application WHERE application_num='$appnum'";
        $query=$this->db->query($sql);
        $result['appdata']=$query->result_array();
        return $result;
    }
}

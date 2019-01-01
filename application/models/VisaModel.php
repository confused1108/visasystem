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
    public function form_sixth($appnum){
        $sql="SELECT * FROM application WHERE application_num='$appnum'";
        $query=$this->db->query($sql);
        $result['appdata']=$query->result_array();
        $country=$result['appdata'][0]['country_code'];
        $country=substr($country,4);
        $type=$result['appdata'][0]['applicationtype'];
        if($type=="Normal Processing"){
            $word="normal";
        }else{
            $word="urgent";
        }
        $visa=$result['appdata'][0]['e_visatype'];
        if($visa=="e-Tourist Visa"){
            $new=$word.' tourist';
        }
        elseif($visa=="e-Medical Visa"){
            $new=$word.' medical';
        }
        else{
            $new=$word.' business';
        }
        $sql="SELECT * FROM fees WHERE country='$country'";
        $query=$this->db->query($sql);
        $data=$query->result_array();
        $result['fees']=$data[0][$new];
        return $result;
    }
}

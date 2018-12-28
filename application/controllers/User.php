<?php
/**
 * Created by PhpStorm.
 * User: Hitesh 
 * Date: 20-Sep-18
 * Time: 10:48 PM
 */ 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
    public function login_view()
    {
        $this->load->view('user/user_login');
    }
    public function check_login(){
        $data=array();
        $data['username']=$_POST['username'];
        $data['password']=sha1($_POST['password']);
        $this->load->Model('UserModel');
        $sheet = $this->UserModel->login_check($data);

        if($sheet['status']==TRUE){
            $user_id=$sheet['user_id'][0];
            $org_id=$sheet['org_id'][0];
            $this->session->set_userdata('user_id',$user_id);
            $this->session->set_userdata('org_id',$org_id);
            redirect(CTRL."User/user_new");
        }
        else{
            redirect(CTRL."User/login_view");
        }
    }
    public function user_new()
    {
        $this->load->Model('UserModel');
        $sheet = $this->UserModel->user_new($_SESSION['org_id']);
        $this->load->view('user/user_new',$sheet);
    }
    public function user_sporting(){
        $this->load->Model('UserModel');
        $org_id=$_SESSION['org_id'];
        $sheet=$this->UserModel->user_new_second($org_id);
        $this->load->view('user/user_sporting',$sheet);
    }
    public function user_new_second()
    {
        $this->load->Model('UserModel');
        $org_id=$_SESSION['org_id'];
        $sheet=$this->UserModel->user_new_second($org_id);
        $this->load->view('user/user_specific',$sheet);
    }
    public function user_specific(){
        $sport=$_POST['sport'];
        redirect(CTRL."User/user_new_second/$sport");
    }
    public function user_new_sporting($term){
        $cat_id=5;
            $gender=$_POST['gender'];
            $age=$_POST['age'];
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->user_sporting($term,$cat_id,$gender,$age);
        $sheet['gender']=$gender;
        $sheet['age']=$age;
		$sheet['category']="Sporting Talent";
        $this->load->view('user/user_new_form_4',$sheet);
    }
    public function user_new_specific($cat_id){
        $gender=$_POST['gender'];
        $age=$_POST['age'];
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->user_specific($cat_id,$gender,$age);
        $sheet['gender']=$gender;
        $sheet['age']=$age;
        $sheet['name']=$sheet['catdata'][0]['name'];
        $this->load->view('user/user_new_form',$sheet);
    }
    public function multiple_users($term,$cat_id,$age,$gender){
		
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->multiple_users($term,$cat_id,$gender,$age);
        $sheet['gender']=$gender;
        $sheet['age']=$age;
        $sheet['term']=$term;
        $sheet['name']=$sheet['catdata'][0]['name'];
        $this->load->view('user/user_new_multiple',$sheet);
    }
    public function user_new_genetic($cat_id){
		$gender=$_POST['gender'];
        $age=$_POST['age'];
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->user_genetic($cat_id,$gender);
        $sheet['gender']=$gender;
        $sheet['age']=$age;
        $sheet['name']=$sheet['catdata'][0]['name'];
        $this->load->view('user/user_new_form_2',$sheet);
    }
   public function user_new_both($cat_id){
        $gender=$_POST['gender'];
        $age=$_POST['age'];
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->user_both($cat_id,$gender,$age);
        $sheet['gender']=$gender;
        $sheet['age']=$age;
       $sheet['name']=$sheet['catdata'][0]['name'];
        $this->load->view('user/user_new_form_3',$sheet);
    }
    public function submit_assessment_edit($assessment_id){
       $term=$_POST['term'];
       if($_POST['term']=='specific'){
           $data=array();
           $data2['cat_id']=$_POST['cat_id'];
           $data['user_id']=$_SESSION['user_id'];
           $data['org_id']=$_SESSION['org_id'];
           $data2['parid']=$_POST['parid'];
           $data2['parinp']=$_POST['parinp'];
           if(isset($_POST['height']))
               $height=$_POST['height'];
           if(isset($_POST['weight'])){
               $weight=$_POST['weight'];
               $bmi=$weight/($height*$height);
               array_push($data2['parinp'],$bmi);
           }
           $data2['term']="specific";
           $this->load->Model('UserModel');
           $sheet=$this->UserModel->submit_assessment_edit($assessment_id,$term,$data,$data2);
           $assessment_id=$sheet['assessment_id'];
           $assessment_id_2=$sheet['assessment_id_2'];
           redirect(CTRL."User/show_result/$assessment_id/$assessment_id_2/");
       }
       else{
           $data=array();
           $data2['cat_id']=$_POST['cat_id'];
           $data['user_id']=$_SESSION['user_id'];
           $data['org_id']=$_SESSION['org_id'];
           $data2['parid']=$_POST['parid'];
           $data2['parinp']=$_POST['parinp'];
           $data2['term']="genetic";
           $this->load->Model('UserModel');
           $sheet=$this->UserModel->submit_assessment_edit($assessment_id,$term,$data,$data2);
           $assessment_id=$sheet['assessment_id'];
           $assessment_id_2=$sheet['assessment_id_2'];
           redirect(CTRL."User/show_result/$assessment_id/$assessment_id_2");
       }
    }
    public function submit_specific_sport($cat_id){
        $data=array();
        $data2['cat_id']=$cat_id;
        $data['user_id']=$_SESSION['user_id'];
        $data['org_id']=$_SESSION['org_id'];
        $data['name']=$_POST['name'];
       // $data['idtype']=$_POST['idtype'];
	   //$data['idtype']="";
        $data['idnumber']=$_POST['idnumber'];
        $data['age']=$_POST['age'];
        $data['gender']=$_POST['gender'];
        $data['email']=$_POST['email'];
        $data['phone']=$_POST['phone'];
        $data['city']=$_POST['city'];
        $data['state']=$_POST['state'];
        $data['country']=$_POST['country'];
        $data2['parid']=$_POST['parid'];
//        print_r($data2['parid']);
//        exit();
        $data2['parinp']=$_POST['parinp'];
        if(isset($_POST['height']))
            $height=$_POST['height'];
        if(isset($_POST['weight'])){
            $weight=$_POST['weight'];
            $bmi=$weight/($height*$height);
            array_push($data2['parinp'],$bmi);
        }
//        print_r($data2);
//        exit(1);


        $data2['term']="specific";
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->submit_specific_sport($data,$data2);
        $assessment_id=$sheet['assessment_id'];
        $assessment_id_2=$sheet['assessment_id_2'];
		$cat_id=$data2['cat_id'];
        redirect(CTRL."User/show_result/$assessment_id/$assessment_id_2/");
    }
    public function submit_multiple($term,$cat_id,$age,$gender,$num,$num2){
        $data=array();
        $data2['cat_id']=$cat_id;
        $data['user_id']=$_SESSION['user_id'];
        $data['org_id']=$_SESSION['org_id'];
        $data['name']=$_POST['name'];
        //$data['idtype']=$_POST['idtype'];
        $data['idnumber']=$_POST['idnumber'];
        $data['age']=$age;
        $data['gender']=$gender;
        $data['email']=$_POST['email'];
        $data['phone']=$_POST['phone'];
        $data['city']=$_POST['city'];
        $data['state']=$_POST['state'];
        $data['country']=$_POST['country'];
        $data2['parid']=$_POST['parid'];
        $data2['parinp']=$_POST['parinp'];
        if(isset($_POST['height']))
            $height=$_POST['height'];
        if(isset($_POST['weight'])){
            $weight=$_POST['weight'];
            $pos=0;
            foreach($height as $key => $n){
                $bmi=$weight[$key]/($n*$n);
                $bmi=round($bmi,2);
                $pos2=$pos+$num2;
                $pos=$pos2+$num+1;
                $data2['parinp'][$pos2]=$bmi;
            }
        }
        $data2['term']=$term;
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->submit_multiple($data,$data2);
        $this->load->view('user/user_multiple_result',$sheet);
    }

    public function submit_multiple_both($term,$cat_id,$age,$gender,$num,$num2){
        $data=array();
        $data2['cat_id']=$cat_id;
        $data['user_id']=$_SESSION['user_id'];
        $data['org_id']=$_SESSION['org_id'];
        $data['name']=$_POST['name'];
        //$data['idtype']=$_POST['idtype'];
        $data['idnumber']=$_POST['idnumber'];
        $data['age']=$age;
        $data['gender']=$gender;
        $data['email']=$_POST['email'];
        $data['phone']=$_POST['phone'];
        $data['city']=$_POST['city'];
        $data['state']=$_POST['state'];
        $data['country']=$_POST['country'];
        $data2['parid']=$_POST['parid'];
        $data2['parinp']=$_POST['parinp'];
        if(isset($_POST['height']))
            $height=$_POST['height'];
        if(isset($_POST['weight'])){
            $weight=$_POST['weight'];
            $pos=0;
            foreach($height as $key => $n){
                $bmi=$weight[$key]/($n*$n);
                $bmi=round($bmi,2);
                $pos2=$pos+$num2;
                $pos=$pos2+$num+1;
                $data2['parinp'][$pos2]=$bmi;
            }
        }
//        print_r($data2['parinp']);
//        exit();
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->submit_multiple_both($data,$data2);
//        print_r($sheet);
//        exit();
//        $assessment=$sheet['assessment'];
////        $assessment_id_2=$sheet['assessment_id_2'];
//        redirect(CTRL."User/show_result/$assessment");
        $this->load->view('user/user_multiple_result_both',$sheet);
    }
    public function submit_genetic_sport($cat_id){
        $data=array();
        $data2['cat_id']=$cat_id;
        $data['user_id']=$_SESSION['user_id'];
        $data['org_id']=$_SESSION['org_id'];
        $data['name']=$_POST['name'];
        //$data['idtype']=$_POST['idtype'];
        $data['idnumber']=$_POST['idnumber'];
        $data['age']=$_POST['age'];
        $data['gender']=$_POST['gender'];
        $data['email']=$_POST['email'];
        $data['phone']=$_POST['phone'];
        $data['city']=$_POST['city'];
        $data['state']=$_POST['state'];
        $data['country']=$_POST['country'];
        $data2['parid']=$_POST['parid'];
        $data2['parinp']=$_POST['parinp'];
        $data2['term']="genetic";
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->submit_genetic_sport($data,$data2);
        $assessment_id=$sheet['assessment_id'];
        $assessment_id_2=$sheet['assessment_id_2'];
        redirect(CTRL."User/show_result/$assessment_id/$assessment_id_2");
    }
    public function submit_both_sport($cat_id){
        $data=array();
        $data2['cat_id']=$cat_id;
        $data['user_id']=$_SESSION['user_id'];
        $data['org_id']=$_SESSION['org_id'];
        $data['name']=$_POST['name'];
        //$data['idtype']=$_POST['idtype'];
        $data['idnumber']=$_POST['idnumber'];
        $data['age']=$_POST['age'];
        $data['gender']=$_POST['gender'];
        $data['email']=$_POST['email'];
        $data['phone']=$_POST['phone'];
        $data['city']=$_POST['city'];
        $data['state']=$_POST['state'];
        $data['country']=$_POST['country'];
        $data2['parid']=$_POST['parid'];
        $data2['parinp']=$_POST['parinp'];
        $parinp1=$_POST['parinp1'];
        if(isset($_POST['height']))
            $height=$_POST['height'];
        if(isset($_POST['weight'])){
            $weight=$_POST['weight'];
            $bmi=$weight/($height*$height);
            array_push($data2['parinp'],$bmi);
        }
        $data2['parinp']=array_merge($data2['parinp'],$parinp1);
//        print_r($data2['parinp']);
        $data2['term']="specific & genetic";
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->submit_both_sport($data,$data2);
//        print_r($sheet);
//        exit();
        $assessment_id=$sheet['assessment_id'];
        $assessment_id_2=$sheet['assessment_id_2'];
        redirect(CTRL."User/show_result/$assessment_id/$assessment_id_2");
    }
    public function submit_sporting($term){
        $data=array();
        $data2['cat_id']=5;
        $data['user_id']=$_SESSION['user_id'];
        $data['org_id']=$_SESSION['org_id'];
        $data['name']=$_POST['name'];
        //$data['idtype']=$_POST['idtype'];
        $data['idnumber']=$_POST['idnumber'];
        $data['age']=$_POST['age'];
        $data['gender']=$_POST['gender'];
        $data['email']=$_POST['email'];
        $data['phone']=$_POST['phone'];
        $data['city']=$_POST['city'];
        $data['state']=$_POST['state'];
        $data['country']=$_POST['country'];
        $data2['parid']=$_POST['parid'];
        $data2['parinp']=$_POST['parinp'];
        $data2['term']=$term;
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->submit_sporting($data,$data2);
        $assessment_id=$sheet['assessment_id'];
        $assessment_id_2=$sheet['assessment_id_2'];
        redirect(CTRL."User/show_result/$assessment_id/$assessment_id_2");
    }
    public function show_result($assessment_id,$assessment_id_2){
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->show_result($assessment_id,$assessment_id_2);
		$sheet['a_id']=$assessment_id;
        $this->load->view('user/user_result',$sheet);
    }
    public function user_new_form()
    {
        $this->load->view('user/user_new_form');
    }
    public function user_old()
    {
        {
        $this->load->Model('UserModel');
        $sheet = $this->UserModel->user_old();
        $this->load->view('user/user_old',$sheet);
    }
    }
    public function user_old_view()
    {
        $this->load->view('user/user_old_view');
    }
    public function user_view_old($candidate_id){
        $this->load->Model('UserModel');
        $sheet = $this->UserModel->user_view_old($candidate_id);
        $this->load->view('user/user_view_old',$sheet);
    }
    public function user_details()
    {
        $user_id=$_SESSION['user_id'];
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->User_profile($user_id);
        $this->load->view('user/user_details',$sheet);
    }
    public function update_profile(){
        $data=array();
        $data['name']=$_POST['name'];
        $data['designation']=$_POST['designation'];
        $data['email']=$_POST['email'];
        $data['phone']=$_POST['phone'];
        $data['username']=$_POST['username'];
        $data['admin_id']=$_SESSION['user_id'];
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->update_profile($data);
        redirect(CTRL."user/user_details");
    }
    public function change_password(){
        $password=sha1($_POST['password']);
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->change_password($password);
        redirect(CTRL."user/user_details");
    }
    public function log_out(){
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('org_id');
        $this->session->sess_destroy();
        redirect(CTRL."User/login_view");
    }
    public function user_assessment_delete(){
		$candidate_id=$_GET['id'];
        $this->load->Model('UserModel');
        $this->UserModel->user_assessment_delete($candidate_id);
       redirect(CTRL."User/user_old");
    }
    public function assessment_print($assessment_id){
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->assessment_print($assessment_id);
        $this->load->view('user/assessment_print',$sheet);
    }
    public function assessment_edit($assessment_id){
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->assessment_edit($assessment_id);
        $this->load->view('user/assessment_edit',$sheet);
    }
	public function report_main(){
        $this->load->Model('AdminModel');
        $sheet=$this->AdminModel->report_main();
        $this->load->view('user/report_main',$sheet);
    }
	public function report_sports(){
        $data['category']=$_POST['category'];
        $cat_id=$_POST['category'];
        $data['type']=$_POST['type'];
        $data['start_date']=$_POST['start_date'];
		$data['end_date']=$_POST['end_date'];
		$data['radio']=$_POST['radio'];
		$data['order']=$_POST['order'];
        $this->load->Model('UserModel');
        $sheet=$this->UserModel->report_sports($data);
        $sheet['type']=$data['type'];
		$s_date=$data['start_date'];
		if($s_date!=""){
		$sheet['start_date']=date('j F Y',strtotime($s_date));
		} else {
		$sheet['start_date']="";	
		}
		$e_date=$data['end_date'];
		if($e_date!=""){
		$sheet['end_date']=date('j F Y',strtotime($e_date));
		} else {
		$sheet['end_date']="";
		}
        $this->load->view('user/report_sports',$sheet);
        
    }
}
?>
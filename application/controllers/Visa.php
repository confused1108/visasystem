<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 28-Dec-18
 * Time: 2:03 PM
 * Coded by Hitesh with love
 * Find me at confused1108.github.io
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Visa extends CI_Controller {

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
        $this->load->helper('string');
    }
    public function apply_visa(){
        $this->load->view('main/apply_visa');
    }
    public function apply_first(){
        $data=array();
        $data['application_num']=$_POST['country_code'].'-'.$_POST['fname'];
        $appnum=$data['application_num'];
        $data['applicationtype']=$_POST['applicationtype'];
        $data['fname']=$_POST['fname'];
        $data['lname']=$_POST['lname'];
        $data['telephone_no']=$_POST['telephone_no'];
        $data['passport_type']=$_POST['passport_type'];
        $data['country_code']=$_POST['country_code'];
        $data['port_of_arrival']=$_POST['port_of_arrival'];
        $data['passport_no']=$_POST['passport_no'];
        $data['dob']=$_POST['dob'];
        $data['email_id']=$_POST['email_id'];
        $data['exp_arrival_date']=$_POST['exp_arrival_date'];
        $data['e_visatype']=$_POST['e_visatype'];
        $this->load->Model('VisaModel');
        $sheet = $this->VisaModel->apply_first($data);
        redirect(CTRL."Visa/form_second/$appnum");
    }

    public function form_second($appnum){
        $this->load->Model('VisaModel');
        $sheet = $this->VisaModel->form_second($appnum);
        $this->load->view('main/form_second',$sheet);
    }
    public function form_third($appnum){
        $this->load->Model('VisaModel');
        $sheet = $this->VisaModel->form_second($appnum);
        $this->load->view('main/form_third',$sheet);
    }
    public function form_fourth($appnum){
        $this->load->Model('VisaModel');
        $sheet = $this->VisaModel->form_second($appnum);
        $this->load->view('main/form_third',$sheet);
    }
    public function apply_second($appnum){
        $data=array();
        $data['application_num']=$appnum;
        $data['applicationtype']=$_POST['applicationtype'];
        $data['e_visatype']=$_POST['e_visatype'];
        $data['email_id']=$_POST['email_id'];
        $data['lname']=$_POST['lname'];
        $data['mname']=$_POST['mname'];
        $data['fname']=$_POST['fname'];
        $data['previous_surname']=$_POST['previous_surname'];
        $data['previous_name']=$_POST['previous_name'];
        $data['sex']=$_POST['sex'];
        $data['dob']=$_POST['dob'];
        $data['birth_city']=$_POST['birth_city'];
        $data['birth_country']=$_POST['birth_country'];
        $data['religion']=$_POST['religion'];
        $data['education']=$_POST['education'];
        $data['nationality']=$_POST['nationality'];
        $data['acquire_nationality']=$_POST['acquire_nationality'];
        $data['apply_visa']=$_POST['apply_visa'];
        $data['passport_no']=$_POST['passport_no'];
        $data['passport_place_of_issue']=$_POST['passport_place_of_issue'];
        $data['passport_date_issue']=$_POST['passport_date_issue'];
        $data['passport_expiry_date']=$_POST['passport_expiry_date'];

        $this->load->Model('VisaModel');
        $sheet = $this->VisaModel->apply_second($data);
        redirect(CTRL."Visa/form_third/$appnum");
    }
    public function apply_third($appnum){
        $data=array();
        $data['application_num']=$appnum;
        $data['port_of_arrival']=$_POST['port_of_arrival'];
        $data['house_no']=$_POST['house_no'];
        $data['vill_town']=$_POST['vill_town'];
        $data['state']=$_POST['state'];
        $data['zip_code']=$_POST['zip_code'];
        $data['add_country']=$_POST['add_country'];
        $data['mobile_no']=$_POST['mobile_no'];
        $data['father_name']=$_POST['father_name'];
        $data['father_nationality']=$_POST['father_nationality'];
        $data['father_pnationality']=$_POST['father_pnationality'];
        $data['father_birthplace']=$_POST['father_birthplace'];
        $data['father_bcountry']=$_POST['father_bcountry'];
        $data['mother_name']=$_POST['mother_name'];
        $data['mother_nationality']=$_POST['mother_nationality'];
        $data['mother_pnationality']=$_POST['mother_pnationality'];
        $data['mother_birthplace']=$_POST['mother_birthplace'];
        $data['mother_bcountry']=$_POST['mother_bcountry'];
        $data['spouse_name']=$_POST['spouse_name'];
        $data['spouse_nationality']=$_POST['spouse_nationality'];
        $data['spouse_pnationality']=$_POST['spouse_pnationality'];
        $data['spouse_birthplace']=$_POST['spouse_birthplace'];
        $data['spouse_bcountry']=$_POST['spouse_bcountry'];
        $data['marital_status']=$_POST['marital_status'];
        $data['pak_vak']=$_POST['pak_vak'];
        $data['pak_naltional']=$_POST['pak_naltional'];
        $data['present_occupation']=$_POST['present_occupation'];
        $data['employer_name']=$_POST['employer_name'];
        $data['emp_designation']=$_POST['emp_designation'];
        $data['employer_add']=$_POST['employer_add'];
        $data['employer_phone']=$_POST['employer_phone'];

        $this->load->Model('VisaModel');
        $sheet = $this->VisaModel->apply_second($data);
        redirect(CTRL."Visa/form_fourth/$appnum");
    }
}


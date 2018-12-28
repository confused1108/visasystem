<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 28-Sep-18
 * Time: 12:44 AM
 */

Class UserModel extends CI_Model
{
    Public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function login_check($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        $result = array();
        $sql = "SELECT * FROM user where username='$username' AND password='$password'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
            $result['user_id'] = $data[0]['user_id'];
            $result['org_id'] = $data[0]['org_id'];
            $result['status'] = true;
        } else {
            $result['status'] = false;
        }
        return $result;
    }
    public function user_new($org_id){
        $sql="SELECT * FROM categories";
        $query=$this->db->query($sql);
        $result['catdata']=$query->result_array();
        $sql="SELECT * FROM organization where org_id='$org_id'";
        $query=$this->db->query($sql);
        $result['orgdata']=$query->result_array();
        return $result;
    }
    public function user_sporting($term,$cat_id,$gender,$age){
        $sql="SELECT * FROM categories WHERE cat_id=$cat_id";
        $query=$this->db->query($sql);
        $result['catdata']=$query->result_array();
        if($term=="both"){
            $termm="specific";
            $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND age='$age' AND gender='$gender' AND type='$termm'";
            $query=$this->db->query($sql);
            $result['paramdata']=$query->result_array();
            $termm="genetic";
            $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='$termm' AND gender='$gender'";
            $query=$this->db->query($sql);
            $result['paramdata1']=$query->result_array();
        }
        elseif($term=="specific"){
            $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='$term' AND age='$age' AND gender='$gender'";
            $query=$this->db->query($sql);
            $result['paramdata']=$query->result_array();
        }
        else{
            $termm="genetic";
            $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='$termm' AND gender='$gender'";
            $query=$this->db->query($sql);
            $result['paramdata']=$query->result_array();
        }
        $result['term']=$term;
        return $result;
    }
    public function user_specific($cat_id,$gender,$age){
        $sql="SELECT * FROM categories WHERE cat_id=$cat_id";
        $query=$this->db->query($sql);
        $result['catdata']=$query->result_array();
        $term="specific";
        $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='$term' AND age='$age' AND gender='$gender'";
        $query=$this->db->query($sql);
        $result['paramdata']=$query->result_array();
        $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='$term' AND gender='$gender' AND name='BMI'";
        $query=$this->db->query($sql);
        $result['paramdata1']=$query->result_array();
        return $result;
    }
    public function multiple_users($term,$cat_id,$gender,$age){
        $sql="SELECT * FROM categories WHERE cat_id=$cat_id";
        $query=$this->db->query($sql);
        $result['catdata']=$query->result_array();
        $result['num']=0;
        $result['num2']=0;
        if($term=='specific'){
            $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='$term' AND age='$age' AND gender='$gender'";
            $query=$this->db->query($sql);
            $result['paramdata']=$query->result_array();
            $result['num2']=$query->num_rows();
            $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='$term' AND gender='$gender' AND name='BMI'";
            $query=$this->db->query($sql);
            $result['paramdata2']=$query->result_array();
        }
        elseif($term=='genetic'){
            $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='$term' AND gender='$gender'";
            //echo $sql;
            //echo $gender;
            //exit();
            $query=$this->db->query($sql);
            $result['paramdata']=$query->result_array();
        }
        else{
            $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='specific' AND age='$age' AND gender='$gender'";
            $query=$this->db->query($sql);
            $result['paramdata']=$query->result_array();
            $result['num2']=$query->num_rows();
            $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='genetic' AND gender='$gender'";
            $query=$this->db->query($sql);
            $result['num']=$query->num_rows();
            $result['paramdata1']=$query->result_array();
            $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='specific' AND gender='$gender' AND name='BMI'";
            $query=$this->db->query($sql);
            $result['paramdata2']=$query->result_array();
        }

        return $result;
    }
    public function user_new_second($org_id){
        $sql="SELECT age FROM organization WHERE org_id=$org_id";
        $query=$this->db->query($sql);
        $result['agedata']=$query->result_array();
        return $result;
    }
    public function user_genetic($cat_id,$gender){
        $sql="SELECT * FROM categories WHERE cat_id=$cat_id";
        $query=$this->db->query($sql);
        $result['catdata']=$query->result_array();
        $term="genetic";
        $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='$term' AND gender='$gender'";
        $query=$this->db->query($sql);
        $result['paramdata']=$query->result_array();
        return $result;
    }
    public function user_both($cat_id,$gender,$age){
        $sql="SELECT * FROM categories WHERE cat_id=$cat_id";
        $query=$this->db->query($sql);
        $result['catdata']=$query->result_array();
        $term="specific";
        $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND age='$age' AND gender='$gender' AND type='$term'";
        $query=$this->db->query($sql);
        $result['paramdata']=$query->result_array();
        $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND gender='$gender' AND type='$term' AND name='BMI'";
        $query=$this->db->query($sql);
        if($query->num_rows()>0)
        $result['paramdata2']=$query->result_array();
        $term="genetic";
        $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='$term' AND gender='$gender' ";
        $query=$this->db->query($sql);
        $result['paramdata1']=$query->result_array();
        return $result;
    }

    public function submit_multiple($data,$data2){
        $cat_id=$data2['cat_id'];
        $user_id=$data['user_id'];
        $org_id=$data['org_id'];
        $name=$data['name'];
        //$idtype=$data['idtype'];
        $idnumber=$data['idnumber'];
		if($data['age']=='1'){
			$age='8-9 Years';
		} elseif($data['age']=='2'){
			$age='10-11 Years';
		} elseif($data['age']=='3'){
			$age='12-13 Years';
		} elseif($data['age']=='4'){
			$age='14-16 Years';
		} else {
			$age='NA';
		}
        $gender=$data['gender'];
        $email=$data['email'];
        $phone=$data['phone'];
        $city=$data['city'];
        $state=$data['state'];
        $country=$data['country'];
        $total_candidate=0;
        $term=$data2['term'];
        foreach($name as $n){
            $total_candidate++;
        }
        $parid=$data2['parid'];
        $parinp=$data2['parinp'];
        $total_para=0;
        foreach ($parid as $n){
            $total_para++;
        }
        $total_parameter=$total_para/$total_candidate;
        //return $total_candidate;
        $abcd=array();
        if($term=='specific'){
            for($h=0;$h<$total_candidate;$h++){
                $sql="Insert into candidate (org_id,name,idnumber,gender,age,city,state,country,email,phone,user_id) VALUES ('".$org_id."','".$name[$h]."','".$idnumber[$h]."','".$gender."','".$age."','".$city[$h]."','".$state[$h]."','".$country[$h]."','".$email[$h]."','".$phone[$h]."','".$user_id."')";
				
                $query=$this->db->query($sql);
                $candidate_id=$this->db->insert_id();
                if($query) {
                    $sql="INSERT INTO assessment_master(candidate_id) VALUES ('".$candidate_id."')";
                    $this->db->query($sql);
                    $assessment_id=$this->db->insert_id();
//                $param_id = $data2['parid'];
//                $param_input = $data2['parinp'];
                    $count = 0;
                $param_calculated_final = array_fill(1,1000, 0);
                    for ($key=$total_parameter*$h;$key<($total_parameter*($h+1));$key++) {
                        $input = $parinp[$key];
                        $n=$parid[$key];
                        $sql = "SELECT * FROM norms WHERE param_id=$n";
                        $query = $this->db->query($sql);
                        $num = $query->num_rows();
                        $data = $query->result_array();
                        $priority = $data[0]['priority'];
                        if($priority=="value_2"){
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-2]['upper_limit'];
                            if($input<$minimum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            elseif ($input>=$maximum){
                                $input_score=$input;
                                $calculated_score=100;
                            }
                            else{
                                $prev=1;
                                for($i=0;$i<$num;$i++){
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min<=$input && $max>$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                        $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                    $prev=$data[$i+1]['score'];
                                }
                            }
                        }
                        elseif($priority=="value_1"){
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-2]['upper_limit'];
                            if ($input < $minimum) {
                                $input_score = $input;
                                $calculated_score = 100;
                            }
                            elseif ($input>$maximum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            else{
                                for($i=0;$i<$num-1;$i++) {
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min==$input){
                                        $input_score=$input;
                                        $calculated_score=$data[$i]['score'];
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                    elseif($min<$input && $max>=$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                        $calculated_score=$data[$i+1]['score']-(($input-$max)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                }
                            }

                        }                        else{
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-1]['upper_limit'];
                            if($input<$minimum || $input>=$maximum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            else{
                                $kop=0;
                                $prev=1;
                                for($i=0;$i<22;$i++){
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min<=$input && $max>$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                        $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        $kop=1;
                                        break;
                                    }
                                    $prev=$data[$i+1]['score'];
                                }
                                if($kop==0){
                                    for($i=22;$i<44;$i++) {
                                        $min = $data[$i]['lower_limit'];
                                        $max = $data[$i]['upper_limit'];
                                        if($min==$input){
                                            $input_score=$input;
                                            $calculated_score=$data[$i]['score'];
                                            break;
                                        }
                                        elseif($min<$input && $max>=$input){
                                            $input_score=$input;
                                            $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                            $calculated_score=$data[$i]['score']-(($input-$min)*$per_unit);
                                            $calculated_score=round($calculated_score,2);
                                            break;
                                        }
                                        //$prev=$data[$i+1]['score'];
                                    }
                                }
                            }
                        }
                        $sql="Insert into assessment_details (assessment_id,param_id,input_score,output_score) VALUES ('".$assessment_id."','".$n."','".$input_score."','".$calculated_score."')";
                        $this->db->query($sql);

                        $sql="SELECT loading,group_id FROM distribution WHERE param_id=$n";
                        $query=$this->db->query($sql);
                        $data = $query->result_array();
                        $loading = $data[0]['loading'];
                        $g=$data[0]['group_id'];
						//$param_calculated_final=array();
                        $param_calculated_final[$g]=$param_calculated_final[$g]+$loading;
						//$loaded_score=array();
                        $loaded_score[$count]=$loading*$calculated_score;
                        $group_id[$count]=$data[0]['group_id'];
                        $count++;
                    }
                    $group_unique=$group_id;
                    $group_unique=array_unique($group_unique);

                    $total_sum=0;
                    $group_calculated_final=0;
                    foreach ($group_unique as $id){
						
                        $count2=0;
                        $sum=0;
                        for($i=0;$i<$count;$i++){
                            if($group_id[$i]==$id){
                                $sum=$sum+$loaded_score[$i];
                                $count2++;
                            }
                        }
						
                        $factor_score=$sum/$param_calculated_final[$id];
                        $sql="SELECT group_reliability FROM dist_group WHERE group_id=$id";
                        $query=$this->db->query($sql);
                        $data = $query->result_array();
                        $group_loading = $data[0]['group_reliability'];
                        $group_calculated_final=$group_calculated_final+$group_loading;
                        $group_score[$id]=($factor_score*$group_loading);
                        $total_sum=$total_sum+$group_score[$id];
                    }
                    $cat_id=$data2['cat_id'];
                    $sql="SELECT total_var FROM categories WHERE cat_id=$cat_id";
                    $query=$this->db->query($sql);
                    $data = $query->result_array();
                    $total_var = $data[0]['total_var'];
                    $overall_score=($total_sum/$group_calculated_final);
                    $overall_score=round($overall_score,2);
                    $term=$data2['term'];

                    $sql="SELECT * FROM grading";
                    $query=$this->db->query($sql);
                    $num=$query->num_rows();
                    $data = $query->result_array();
                    if($overall_score==0){
                        $talent_status=$data[0]['criteria'];
                    }
                    else{
                        for($i=0;$i<$num;$i++){
                            $min = $data[$i]['min'];
                            $max = $data[$i]['max'];
                            if($min-1<=$overall_score && $max>=$overall_score){
                                $talent_status=$data[$i]['criteria'];
                                break;
                            }
                        }
                    }
                    $sql="Update assessment_master SET cat_id='$cat_id',based_on='$term',overall_score='$overall_score',talent_status='$talent_status',user_id='$user_id' WHERE assessment_id='$assessment_id'";

//                    $sql="Insert into assessment_master (candidate_id,cat_id,based_on,overall_score,talent_status,user_id) VALUES ('".$candidate_id."','".$cat_id."','".$term."','".$overall_score."','".$talent_status."','".$user_id."')";
                    $this->db->query($sql);
                    //$assessment_id=$this->db->insert_id();
                    array_push($abcd,$assessment_id);
                }
            }
        }
        else{
            for($h=0;$h<$total_candidate;$h++){
                $sql="Insert into candidate (org_id,name,idnumber,gender,age,city,state,country,email,phone,user_id) VALUES ('".$org_id."','".$name[$h]."','".$idnumber[$h]."','".$gender."','".$age."','".$city[$h]."','".$state[$h]."','".$country[$h]."','".$email[$h]."','".$phone[$h]."','".$user_id."')";
				
                $query=$this->db->query($sql);
                $candidate_id=$this->db->insert_id();
                if($query) {
                    $sql="INSERT INTO assessment_master(candidate_id) VALUES ('".$candidate_id."')";
                    $this->db->query($sql);
                    $assessment_id=$this->db->insert_id();
//                $param_id = $data2['parid'];
//                $param_input = $data2['parinp'];
                    $count = 0;
                    $param_calculated_final = 0;
                    for ($key=$total_parameter*$h;$key<($total_parameter*($h+1));$key++) {
                        $input = $parinp[$key];
                        $n=$parid[$key];
                        $sql = "SELECT * FROM norms WHERE param_id=$n";
                        $query = $this->db->query($sql);
                        $num = $query->num_rows();
                        $data = $query->result_array();
                        $priority = $data[0]['priority'];
                        if($priority=="value_2"){
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-2]['upper_limit'];
                            if($input<$minimum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            elseif ($input>=$maximum){
                                $input_score=$input;
                                $calculated_score=100;
                            }
                            else{
                                $prev=1;
                                for($i=0;$i<$num;$i++){
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min<=$input && $max>$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                        $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                    $prev=$data[$i+1]['score'];
                                }
                            }
                        }
                        elseif($priority=="value_1"){
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-2]['upper_limit'];
                            if ($input < $minimum) {
                                $input_score = $input;
                                $calculated_score = 100;
                            }
                            elseif ($input>$maximum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            else{
                                for($i=0;$i<$num-1;$i++) {
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min==$input){
                                        $input_score=$input;
                                        $calculated_score=$data[$i]['score'];
                                        break;
                                    }
                                    elseif($min<$input && $max>=$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                        $calculated_score=$data[$i+1]['score']-(($input-$max)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                }
                            }

                        }                        else{
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-1]['upper_limit'];
                            if($input<$minimum || $input>=$maximum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            else{
                                $kop=0;
                                $prev=1;
                                for($i=0;$i<22;$i++){
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min<=$input && $max>$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                        $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        $kop=1;
                                        break;
                                    }
                                    $prev=$data[$i+1]['score'];
                                }
                                if($kop==0){
                                    for($i=22;$i<44;$i++) {
                                        $min = $data[$i]['lower_limit'];
                                        $max = $data[$i]['upper_limit'];
                                        if($min==$input){
                                            $input_score=$input;
                                            $calculated_score=$data[$i]['score'];
                                            break;
                                        }
                                        elseif($min<$input && $max>=$input){
                                            $input_score=$input;
                                            $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                            $calculated_score=$data[$i]['score']-(($input-$min)*$per_unit);
                                            $calculated_score=round($calculated_score,2);
                                            break;
                                        }
                                        //$prev=$data[$i+1]['score'];
                                    }
                                }
                            }
                        }
                        $param_calculated_final=$param_calculated_final+$calculated_score;
                        $sql="Insert into assessment_details (assessment_id,param_id,input_score,output_score) VALUES ('".$assessment_id."','".$n."','".$input_score."','".$calculated_score."')";
                        $this->db->query($sql);
                        $count++;
                    }
                    $overall_score=$overall_score=$param_calculated_final/($count);
                    $overall_score=round($overall_score,2);
                    $term=$data2['term'];

                    $sql="SELECT * FROM grading";
                    $query=$this->db->query($sql);
                    $num=$query->num_rows();
                    $data = $query->result_array();
                    for($i=0;$i<$num;$i++){
                        $min = $data[$i]['min'];
                        $max = $data[$i]['max'];
                        if($min-1<=$overall_score && $max>=$overall_score){
                            $talent_status=$data[$i]['criteria'];
                            break;
                        }
                    }
                    $sql="Update assessment_master SET cat_id='$cat_id',based_on='$term',overall_score='$overall_score',talent_status='$talent_status',user_id='$user_id' WHERE assessment_id='$assessment_id'";

                   // $sql="Insert into assessment_master (candidate_id,cat_id,based_on,overall_score,talent_status,user_id) VALUES ('".$candidate_id."','".$cat_id."','".$term."','".$overall_score."','".$talent_status."','".$user_id."')";
                    $this->db->query($sql);
                    //$assessment_id=$this->db->insert_id();
                    array_push($abcd,$assessment_id);
                }
            }
        }
        $s=0;
        foreach ($abcd as $l){
            $sql="SELECt * FROM assessment_master WHERE assessment_id=$l";
            $query=$this->db->query($sql);
            $data = $query->result_array();
            $result['asmtdata'][$s]=$query->result_array();
            $candidate_id = $data[0]['candidate_id'];
            $cat_id = $data[0]['cat_id'];
            $sql="SELECT * FROM candidate WHERE candidate_id=$candidate_id";
            $query=$this->db->query($sql);
            $result['candata'][$s] = $query->result_array();
            $s++;
        }
        $sql="SELECT * FROM categories WHERE cat_id=$cat_id";
        $query=$this->db->query($sql);
        $result['catdata'] = $query->result_array();
        $result['total']=$s;
        return $result;
    }

    public function submit_multiple_both($data,$data2){
        $cat_id=$data2['cat_id'];
        $user_id=$data['user_id'];
        $org_id=$data['org_id'];
        $name=$data['name'];
        //$idtype=$data['idtype'];
        $idnumber=$data['idnumber'];
        $a=$data['age'];
        if($a=='1'){
            $age= "8-9 Years";
		}
        elseif($a=='2'){
            $age= "10-11 Years";
        } elseif($a=='3') {
            $age= "12-13 Years";
        } elseif($a=='4') {
            $age= "14-16 Years";
		} else {
			$age="NA";
		}
        $gender=$data['gender'];
        $email=$data['email'];
        $phone=$data['phone'];
        $city=$data['city'];
        $state=$data['state'];
        $country=$data['country'];
        $total_candidate=0;
        foreach($name as $n){
            $total_candidate++;
        }
        $parid=$data2['parid'];
        $parinp=$data2['parinp'];
        $total_para=0;
        foreach ($parid as $n){
            $total_para++;
        }
        $total_parameter=$total_para/$total_candidate;
        //return $total_candidate;
        $abcd=array();
        $pqrs=array();
        for($h=0;$h<$total_candidate;$h++){
            $sql="Insert into candidate (org_id,name,idnumber,gender,age,city,state,country,email,phone,user_id) VALUES ('".$org_id."','".$name[$h]."','".$idnumber[$h]."','".$gender."','".$age."','".$city[$h]."','".$state[$h]."','".$country[$h]."','".$email[$h]."','".$phone[$h]."','".$user_id."')";
            $query=$this->db->query($sql);
            $candidate_id=$this->db->insert_id();
            if($query) {
                $sql="INSERT INTO assessment_master(candidate_id) VALUES ('".$candidate_id."')";
                $this->db->query($sql);
                $assessment_id=$this->db->insert_id();
//                $param_id = $data2['parid'];
//                $param_input = $data2['parinp'];
                $count = 0;
                $param_calculated_final = array_fill(1,1000, 0);
                for ($key=$total_parameter*$h;$key<($total_parameter*($h+1));$key++) {
                    $n=$parid[$key];
                    $sql="SELECT type FROM parameter WHERE param_id=$n";
                    $query=$this->db->query($sql);
                    $data = $query->result_array();
                    $type=$data[0]['type'];
                    if($type=='specific'){
                        $input = $parinp[$key];
                        $n=$parid[$key];
                        $sql = "SELECT * FROM norms WHERE param_id=$n";
                        $query = $this->db->query($sql);
                        $num = $query->num_rows();
                        $data = $query->result_array();
                        $priority = $data[0]['priority'];
                        if($priority=="value_2"){
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-2]['upper_limit'];
                            if($input<$minimum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            elseif ($input>=$maximum){
                                $input_score=$input;
                                $calculated_score=100;
                            }
                            else{
                                $prev=1;
                                for($i=0;$i<$num;$i++){
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min<=$input && $max>$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                        $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                    $prev=$data[$i+1]['score'];
                                }
                            }
                        }
                        elseif($priority=="value_1"){
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-2]['upper_limit'];
                            if ($input < $minimum) {
                                $input_score = $input;
                                $calculated_score = 100;
                            }
                            elseif ($input>$maximum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            else{
                                for($i=0;$i<$num-1;$i++) {
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min==$input){
                                        $input_score=$input;
                                        $calculated_score=$data[$i]['score'];
                                        break;
                                    }
                                    elseif($min<$input && $max>=$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                        $calculated_score=$data[$i+1]['score']-(($input-$max)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                }
                            }

                        }                        else{
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-1]['upper_limit'];
                            if($input<$minimum || $input>=$maximum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            else{
                                $kop=0;
                                $prev=1;
                                for($i=0;$i<22;$i++){
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min<=$input && $max>$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                        $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        $kop=1;
                                        break;
                                    }
                                    $prev=$data[$i+1]['score'];
                                }
                                if($kop==0){
                                    for($i=22;$i<44;$i++) {
                                        $min = $data[$i]['lower_limit'];
                                        $max = $data[$i]['upper_limit'];
                                        if($min==$input){
                                            $input_score=$input;
                                            $calculated_score=$data[$i]['score'];
                                            break;
                                        }
                                        elseif($min<$input && $max>=$input){
                                            $input_score=$input;
                                            $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                            $calculated_score=$data[$i]['score']-(($input-$min)*$per_unit);
                                            $calculated_score=round($calculated_score,2);
                                            break;
                                        }
                                        //$prev=$data[$i+1]['score'];
                                    }
                                }
                            }
                        }
                        $sql="Insert into assessment_details (assessment_id,param_id,input_score,output_score) VALUES ('".$assessment_id."','".$n."','".$input_score."','".$calculated_score."')";
                        $this->db->query($sql);

                        $sql="SELECT loading,group_id FROM distribution WHERE param_id=$n";
                        $query=$this->db->query($sql);
                        $data = $query->result_array();
                        $loading = $data[0]['loading'];
                        $g=$data[0]['group_id'];
                        $param_calculated_final[$g]=$param_calculated_final[$g]+$loading;
                        $loaded_score[$count]=$loading*$calculated_score;
                        $group_id[$count]=$data[0]['group_id'];
                        $count++;
                    }
                }
                $group_unique=$group_id;
                $group_unique=array_unique($group_unique);

                $total_sum=0;
                $group_calculated_final=0;
                foreach ($group_unique as $id){
                    $count2=0;
                    $sum=0;
                    for($i=0;$i<$count;$i++){
                        if($group_id[$i]==$id){
                            $sum=$sum+$loaded_score[$i];
                            $count2++;
                        }
                    }
                    $factor_score=$sum/$param_calculated_final[$id];
                    $sql="SELECT group_reliability FROM dist_group WHERE group_id=$id";
                    $query=$this->db->query($sql);
                    $data = $query->result_array();
                    $group_loading = $data[0]['group_reliability'];
                    $group_calculated_final=$group_calculated_final+$group_loading;
                    $group_score[$id]=($factor_score*$group_loading);
                    $total_sum=$total_sum+$group_score[$id];
                }
                $cat_id=$data2['cat_id'];
                $sql="SELECT total_var FROM categories WHERE cat_id=$cat_id";
                $query=$this->db->query($sql);
                $data = $query->result_array();
                $total_var = $data[0]['total_var'];
                $overall_score=($total_sum/$group_calculated_final);
                $overall_score=round($overall_score,2);

                $sql="SELECT * FROM grading";
                $query=$this->db->query($sql);
                $num=$query->num_rows();
                $data = $query->result_array();
                if($overall_score==0){
                    $talent_status=$data[0]['criteria'];
                }
                else{
                    for($i=0;$i<$num;$i++){
                        $min = $data[$i]['min'];
                        $max = $data[$i]['max'];
                        if($min-1<=$overall_score && $max>=$overall_score){
                            $talent_status=$data[$i]['criteria'];
                            break;
                        }
                    }
                }
                $sql="Update assessment_master SET cat_id='$cat_id',based_on='specific',overall_score='$overall_score',talent_status='$talent_status',user_id='$user_id' WHERE assessment_id='$assessment_id'";

                //$sql="Insert into assessment_master (candidate_id,cat_id,based_on,overall_score,talent_status,user_id) VALUES ('".$candidate_id."','".$cat_id."','specific & genetic','".$overall_score."','".$talent_status."','".$user_id."')";
                $this->db->query($sql);
                //$assessment_id=$this->db->insert_id();
                array_push($abcd,$assessment_id);

                //for genetic from now
                $assessment_id++;

                $count = 0;
                $param_calculated_final = 0;
                for ($key=$total_parameter*$h;$key<($total_parameter*($h+1));$key++){
                    $n=$parid[$key];
                    $sql="SELECT type FROM parameter WHERE param_id=$n";
                    $query=$this->db->query($sql);
                    $data = $query->result_array();
                    $type=$data[0]['type'];
                    if($type=='genetic'){
                        $input = $parinp[$key];
                        $n=$parid[$key];
                        $sql = "SELECT * FROM norms WHERE param_id=$n";
                        $query = $this->db->query($sql);
                        $num = $query->num_rows();
                        $data = $query->result_array();
                        $priority = $data[0]['priority'];
                        if($priority=="value_2"){
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-2]['upper_limit'];
                            if($input<$minimum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            elseif ($input>=$maximum){
                                $input_score=$input;
                                $calculated_score=100;
                            }
                            else{
                                $prev=1;
                                for($i=0;$i<$num;$i++){
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min<=$input && $max>$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                        $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                    $prev=$data[$i+1]['score'];
                                }
                            }
                        }
                        elseif($priority=="value_1"){
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-2]['upper_limit'];
                            if ($input < $minimum) {
                                $input_score = $input;
                                $calculated_score = 100;
                            }
                            elseif ($input>$maximum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            else{
                                for($i=0;$i<$num-1;$i++) {
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min==$input){
                                        $input_score=$input;
                                        $calculated_score=$data[$i]['score'];
                                        break;
                                    }
                                    elseif($min<$input && $max>=$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                        $calculated_score=$data[$i+1]['score']-(($input-$max)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                }
                            }

                        }                        else{
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-1]['upper_limit'];
                            if($input<$minimum || $input>=$maximum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            else{
                                $kop=0;
                                $prev=1;
                                for($i=0;$i<22;$i++){
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min<=$input && $max>$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                        $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        $kop=1;
                                        break;
                                    }
                                    $prev=$data[$i+1]['score'];
                                }
                                if($kop==0){
                                    for($i=22;$i<44;$i++) {
                                        $min = $data[$i]['lower_limit'];
                                        $max = $data[$i]['upper_limit'];
                                        if($min==$input){
                                            $input_score=$input;
                                            $calculated_score=$data[$i]['score'];
                                            break;
                                        }
                                        elseif($min<$input && $max>=$input){
                                            $input_score=$input;
                                            $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                            $calculated_score=$data[$i]['score']-(($input-$min)*$per_unit);
                                            $calculated_score=round($calculated_score,2);
                                            break;
                                        }
                                        //$prev=$data[$i+1]['score'];
                                    }
                                }
                            }
                        }
                        $param_calculated_final=$param_calculated_final+$calculated_score;
                        $sql="Insert into assessment_details (assessment_id,param_id,input_score,output_score) VALUES ('".$assessment_id."','".$n."','".$input_score."','".$calculated_score."')";
                        $this->db->query($sql);
                        $count++;
                    }
                }

                $overall_score=$param_calculated_final/($count);
                $overall_score=round($overall_score,2);

                $sql="SELECT * FROM grading";
                $query=$this->db->query($sql);
                $num=$query->num_rows();
                $data = $query->result_array();
                if($overall_score==0){
                    $talent_status=$data[0]['criteria'];
                }
                else{
                    for($i=0;$i<$num;$i++){
                        $min = $data[$i]['min'];
                        $max = $data[$i]['max'];
                        if($min-1<=$overall_score && $max>=$overall_score){
                            $talent_status=$data[$i]['criteria'];
                            break;
                        }
                    }
                }
                //$sql="Update assessment_master SET cat_id='$cat_id',based_on='specific & genetic',overall_score='$overall_score',talent_status='$talent_status',user_id='$user_id' WHERE assessment_id='$assessment_id'";

                $sql="Insert into assessment_master (candidate_id,cat_id,based_on,overall_score,talent_status,user_id) VALUES ('".$candidate_id."','".$cat_id."','genetic','".$overall_score."','".$talent_status."','".$user_id."')";
                $this->db->query($sql);
                $assessment_id=$this->db->insert_id();
                array_push($pqrs,$assessment_id);
            }
        }
        $s=0;
        foreach ($abcd as $l){
            $sql="SELECt * FROM assessment_master WHERE assessment_id=$l";
            $query=$this->db->query($sql);
            $data = $query->result_array();
            $result['asmtdata'][$s]=$query->result_array();
            $candidate_id = $data[0]['candidate_id'];
            $cat_id = $data[0]['cat_id'];
            $sql="SELECT * FROM candidate WHERE candidate_id=$candidate_id";
            $query=$this->db->query($sql);
            $result['candata'][$s] = $query->result_array();
            $s++;
        }
        $z=0;
        foreach ($pqrs as $l){
            $sql="SELECt * FROM assessment_master WHERE assessment_id=$l";
            $query=$this->db->query($sql);
            $data = $query->result_array();
            $result['asmtdata1'][$z]=$query->result_array();
            $z++;
        }
        $sql="SELECT * FROM categories WHERE cat_id=$cat_id";
        $query=$this->db->query($sql);
        $result['catdata'] = $query->result_array();
        $result['total']=$s;
        return $result;
    }
    public function submit_assessment_edit($assessment_id,$term,$data,$data2){
        $this->db->where('assessment_id', $assessment_id);
        $this->db->delete('assessment_details');
        $user_id=$data['user_id'];
        $cat_id=$data2['cat_id'];
        if($term=='specific'){
            $sql="SELECT * FROM assessment_master WHERE assessment_id='$assessment_id'";
            $query=$this->db->query($sql);
            $data=$query->result_array();
            $candidate_id=$data[0]['candidate_id'];
            if($query){
                $param_id=$data2['parid'];
                $param_input=$data2['parinp'];
                $count=0;
                $param_calculated_final = array_fill(1,1000, 0);
                foreach ($param_id as $key => $n){
                    $input=$param_input[$key];
                    $sql="SELECT * FROM norms WHERE param_id=$n";
                    $query=$this->db->query($sql);
                    $num=$query->num_rows();
                    $data = $query->result_array();
                    $priority=$data[0]['priority'];
                    if($priority=="value_2"){
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-2]['upper_limit'];
                        if($input<$minimum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        elseif ($input>=$maximum){
                            $input_score=$input;
                            $calculated_score=100;
                        }
                        else{
                            $prev=1;
                            for($i=0;$i<$num;$i++){
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min<=$input && $max>$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                    $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    break;
                                }
                                $prev=$data[$i+1]['score'];
                            }
                        }
                    }
                    elseif($priority=="value_1"){
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-2]['upper_limit'];
                        if ($input < $minimum) {
                            $input_score = $input;
                            $calculated_score = 100;
                        }
                        elseif ($input>$maximum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        else{
                            for($i=0;$i<$num-1;$i++) {
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min==$input){
                                    $input_score=$input;
                                    $calculated_score=$data[$i]['score'];
                                    break;
                                }
                                elseif($min<$input && $max>=$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                    $calculated_score=$data[$i+1]['score']-(($input-$max)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    break;
                                }
                            }
                        }
                    }
                    else{
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-1]['upper_limit'];
                        if($input<$minimum || $input>=$maximum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        else{
                            $kop=0;
                            $prev=1;
                            for($i=0;$i<22;$i++){
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min<=$input && $max>$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                    $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    $kop=1;
                                    break;
                                }
                                $prev=$data[$i+1]['score'];
                            }
                            if($kop==0){
                                for($i=22;$i<44;$i++) {
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min==$input){
                                        $input_score=$input;
                                        $calculated_score=$data[$i]['score'];
                                        break;
                                    }
                                    elseif($min<$input && $max>=$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                        $calculated_score=$data[$i]['score']-(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                    //$prev=$data[$i+1]['score'];
                                }
                            }
                        }
                    }
                    $sql="Insert into assessment_details (assessment_id,param_id,input_score,output_score) VALUES ('".$assessment_id."','".$n."','".$input_score."','".$calculated_score."')";
                    $this->db->query($sql);

                    $sql="SELECT loading,group_id FROM distribution WHERE param_id=$n";
                    $query=$this->db->query($sql);
                    $data = $query->result_array();
                    $loading = $data[0]['loading'];
                    $g=$data[0]['group_id'];
                    $param_calculated_final[$g]=$param_calculated_final[$g]+$loading;
                    $loaded_score[$count]=$loading*$calculated_score;
                    $group_id[$count]=$data[0]['group_id'];
                    $count++;
                }
                $group_unique=$group_id;
                $group_unique=array_unique($group_unique);

                $total_sum=0;
                $group_calculated_final=0;
                foreach ($group_unique as $id){
                    $count2=0;
                    $sum=0;
                    for($i=0;$i<$count;$i++){
                        if($group_id[$i]==$id){
                            $sum=$sum+$loaded_score[$i];
                            $count2++;
                        }
                    }
                    $factor_score=$sum/$param_calculated_final[$id];
                    $sql="SELECT group_reliability FROM dist_group WHERE group_id=$id";
                    $query=$this->db->query($sql);
                    $data = $query->result_array();
                    $group_loading = $data[0]['group_reliability'];
                    $group_calculated_final=$group_calculated_final+$group_loading;
                    $group_score[$id]=($factor_score*$group_loading);
                    $total_sum=$total_sum+$group_score[$id];
                }
                $cat_id=$data2['cat_id'];
                $sql="SELECT total_var FROM categories WHERE cat_id=$cat_id";
                $query=$this->db->query($sql);
                $data = $query->result_array();
                $total_var = $data[0]['total_var'];
                $overall_score=($total_sum/$group_calculated_final);
                $overall_score=round($overall_score,2);
                $term=$data2['term'];

                $sql="SELECT * FROM grading";
                $query=$this->db->query($sql);
                $num=$query->num_rows();
                $data = $query->result_array();
                for($i=0;$i<$num;$i++){
                    $min = $data[$i]['min'];
                    $max = $data[$i]['max'];
                    if($min-1<=$overall_score && $max>=$overall_score){
                        $talent_status=$data[$i]['criteria'];
                        break;
                    }
                }
                $sql="Update assessment_master SET cat_id='$cat_id',based_on='$term',overall_score='$overall_score',talent_status='$talent_status',user_id='$user_id' WHERE assessment_id='$assessment_id'";
                $this->db->query($sql);
                $result['assessment_id']=$assessment_id;
                $result['assessment_id_2']=0;
            }
            return $result;
        }
        else{
            $cat_id=$data2['cat_id'];
            $sql="SELECT * FROM assessment_master WHERE assessment_id='$assessment_id'";
            $query=$this->db->query($sql);
            $data=$query->result_array();
            $candidate_id=$data[0]['candidate_id'];

            if($query){
                $param_id=$data2['parid'];
                $param_input=$data2['parinp'];
                $count=0;
                $param_calculated_final=0;
                foreach ($param_id as $key => $n){
                    $input=$param_input[$key];
                    $sql="SELECT * FROM norms WHERE param_id=$n";
                    $query=$this->db->query($sql);
                    $num=$query->num_rows();
                    $data = $query->result_array();
                    $priority=$data[0]['priority'];
                    if($priority=="value_2"){
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-2]['upper_limit'];
                        if($input<$minimum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        elseif ($input>=$maximum){
                            $input_score=$input;
                            $calculated_score=100;
                        }
                        else{
                            $prev=1;
                            for($i=0;$i<$num;$i++){
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min<=$input && $max>$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                    $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    break;
                                }
                                $prev=$data[$i+1]['score'];
                            }
                        }
                    }
                    elseif($priority=="value_1"){
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-2]['upper_limit'];
                        if ($input < $minimum) {
                            $input_score = $input;
                            $calculated_score = 100;
                        }
                        elseif ($input>$maximum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        else{
                            for($i=0;$i<$num-1;$i++) {
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min==$input){
                                    $input_score=$input;
                                    $calculated_score=$data[$i]['score'];
                                    break;
                                }
                                elseif($min<$input && $max>=$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                    $calculated_score=$data[$i+1]['score']-(($input-$max)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    break;
                                }
                            }
                        }
                        if(isset($max)){
                            if($input>$max){
                                $input_score = $input;
                                $calculated_score = 0;
                            }
                        }
                    }
                    else{
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-1]['upper_limit'];
                        if($input<$minimum || $input>=$maximum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        else{
                            $kop=0;
                            $prev=1;
                            for($i=0;$i<22;$i++){
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min<=$input && $max>$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                    $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    $kop=1;
                                    break;
                                }
                                $prev=$data[$i+1]['score'];
                            }
                            if($kop==0){
                                for($i=22;$i<44;$i++) {
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min==$input){
                                        $input_score=$input;
                                        $calculated_score=$data[$i]['score'];
                                        break;
                                    }
                                    elseif($min<$input && $max>=$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                        $calculated_score=$data[$i]['score']-(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                    //$prev=$data[$i+1]['score'];
                                }
                            }
                        }
                    }
                    $param_calculated_final=$param_calculated_final+$calculated_score;
                    $sql="Insert into assessment_details (assessment_id,param_id,input_score,output_score) VALUES ('".$assessment_id."','".$n."','".$input_score."','".$calculated_score."')";
                    $this->db->query($sql);
                    $count++;
                }
                $overall_score=$param_calculated_final/($count);
                $overall_score=round($overall_score,2);
                $term=$data2['term'];

                $sql="SELECT * FROM grading";
                $query=$this->db->query($sql);
                $num=$query->num_rows();
                $data = $query->result_array();
                for($i=0;$i<$num;$i++){
                    $min = $data[$i]['min'];
                    $max = $data[$i]['max'];
                    if($min-1<=$overall_score && $max>=$overall_score){
                        $talent_status=$data[$i]['criteria'];
                        break;
                    }
                }
                $sql="Update assessment_master SET cat_id='$cat_id',based_on='$term',overall_score='$overall_score',talent_status='$talent_status',user_id='$user_id' WHERE assessment_id='$assessment_id'";

                //$sql="Insert into assessment_master (candidate_id,cat_id,based_on,overall_score,talent_status,user_id) VALUES ('".$candidate_id."','".$cat_id."','".$term."','".$overall_score."','".$talent_status."','".$user_id."')";
                $this->db->query($sql);
                $result['assessment_id']=$assessment_id;
                $result['assessment_id_2']=0;
            }
            return $result;
        }
    }
    public function submit_specific_sport($data,$data2){
        $query=$this->db->insert('candidate',$data);
        $candidate_id=$this->db->insert_id();
        $user_id=$data['user_id'];
        if($query){
            $sql="INSERT INTO assessment_master(candidate_id) VALUES ('".$candidate_id."')";
            $this->db->query($sql);
            $assessment_id=$this->db->insert_id();
            $param_id=$data2['parid'];
            $param_input=$data2['parinp'];
            $count=0;
            $param_calculated_final = array_fill(1,1000, 0);
            foreach ($param_id as $key => $n){
                $input=$param_input[$key];
                $sql="SELECT * FROM norms WHERE param_id=$n";
                $query=$this->db->query($sql);
                $num=$query->num_rows();
                $data = $query->result_array();
                $priority=$data[0]['priority'];
                if($priority=="value_2"){
                    $minimum=$data[0]['lower_limit'];
                    $maximum=$data[$num-2]['upper_limit'];
                    if($input<$minimum){
                        $input_score=$input;
                        $calculated_score=0;
                    }
                    elseif ($input>=$maximum){
                        $input_score=$input;
                        $calculated_score=100;
                    }
                    else{
                        $prev=1;
                        for($i=0;$i<$num;$i++){
                            $min = $data[$i]['lower_limit'];
                            $max = $data[$i]['upper_limit'];
                            if($min<=$input && $max>$input){
                                $input_score=$input;
                                $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                $calculated_score=round($calculated_score,2);
                                break;
                            }
                            $prev=$data[$i+1]['score'];
                        }
                    }
                }
                elseif($priority=="value_1"){
                    $minimum=$data[0]['lower_limit'];
                    $maximum=$data[$num-2]['upper_limit'];
                    if ($input < $minimum) {
                        $input_score = $input;
                        $calculated_score = 100;
                    }
                    elseif ($input>$maximum){
                        $input_score=$input;
                        $calculated_score=0;
                    }
                    else{
                        for($i=0;$i<$num-1;$i++) {
                            $min = $data[$i]['lower_limit'];
                            $max = $data[$i]['upper_limit'];
                            if($min==$input){
                                $input_score=$input;
                                $calculated_score=$data[$i]['score'];
                                break;
                            }
                            elseif($min<$input && $max>=$input){
                                $input_score=$input;
                                $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                $calculated_score=$data[$i+1]['score']-(($input-$max)*$per_unit);
                                $calculated_score=round($calculated_score,2);
                                break;
                            }
                        }
                    }
                }
                else{
                    $minimum=$data[0]['lower_limit'];
                    $maximum=$data[$num-1]['upper_limit'];
                    if($input<$minimum || $input>=$maximum){
                        $input_score=$input;
                        $calculated_score=0;
                    }
                    else{
                        $kop=0;
                        $prev=1;
                        for($i=0;$i<22;$i++){
                            $min = $data[$i]['lower_limit'];
                            $max = $data[$i]['upper_limit'];
                            if($min<=$input && $max>$input){
                                $input_score=$input;
                                $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                $calculated_score=round($calculated_score,2);
                                $kop=1;
                                break;
                            }
                            $prev=$data[$i+1]['score'];
                        }
                        if($kop==0){
                            for($i=22;$i<44;$i++) {
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min==$input){
                                    $input_score=$input;
                                    $calculated_score=$data[$i]['score'];
                                    break;
                                }
                                elseif($min<$input && $max>=$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                    $calculated_score=$data[$i]['score']-(($input-$min)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    break;
                                }
                                //$prev=$data[$i+1]['score'];
                            }
                        }
                    }
                }
                $sql="Insert into assessment_details (assessment_id,param_id,input_score,output_score) VALUES ('".$assessment_id."','".$n."','".$input_score."','".$calculated_score."')";
                $this->db->query($sql);

                $sql="SELECT loading,group_id FROM distribution WHERE param_id=$n";
                $query=$this->db->query($sql);
                $data = $query->result_array();
                $loading = $data[0]['loading'];
                $g=$data[0]['group_id'];
                $param_calculated_final[$g]=$param_calculated_final[$g]+$loading;
                $loaded_score[$count]=$loading*$calculated_score;
                $group_id[$count]=$data[0]['group_id'];
                $count++;
            }
            $group_unique=$group_id;
            $group_unique=array_unique($group_unique);

            $total_sum=0;
            $group_calculated_final=0;
            foreach ($group_unique as $id){
                $count2=0;
                $sum=0;
                for($i=0;$i<$count;$i++){
                    if($group_id[$i]==$id){
                        $sum=$sum+$loaded_score[$i];
                        $count2++;
                    }
                }
                $factor_score=$sum/$param_calculated_final[$id];
                $sql="SELECT group_reliability FROM dist_group WHERE group_id=$id";
                $query=$this->db->query($sql);
                $data = $query->result_array();
                $group_loading = $data[0]['group_reliability'];
                $group_calculated_final=$group_calculated_final+$group_loading;
                $group_score[$id]=($factor_score*$group_loading);
                $total_sum=$total_sum+$group_score[$id];
            }
            $cat_id=$data2['cat_id'];
            $sql="SELECT total_var FROM categories WHERE cat_id=$cat_id";
            $query=$this->db->query($sql);
            $data = $query->result_array();
            $total_var = $data[0]['total_var'];
            $overall_score=($total_sum/$group_calculated_final);
            $overall_score=round($overall_score,2);
            $term=$data2['term'];

            $sql="SELECT * FROM grading";
            $query=$this->db->query($sql);
            $num=$query->num_rows();
            $data = $query->result_array();
            for($i=0;$i<$num;$i++){
                $min = $data[$i]['min'];
                $max = $data[$i]['max'];
                if($min-1<=$overall_score && $max>=$overall_score){
                    $talent_status=$data[$i]['criteria'];
                    break;
                }
            }
            $sql="Update assessment_master SET cat_id='$cat_id',based_on='$term',overall_score='$overall_score',talent_status='$talent_status',user_id='$user_id' WHERE assessment_id='$assessment_id'";
            $this->db->query($sql);
            $result['assessment_id']=$assessment_id;
            $result['assessment_id_2']=0;
        }
        return $result;
    }

    public function submit_genetic_sport($data, $data2){
        $cat_id=$data2['cat_id'];
        $query=$this->db->insert('candidate',$data);
        $candidate_id=$this->db->insert_id();
        $user_id=$data['user_id'];
        if($query){
            $sql="INSERT INTO assessment_master(candidate_id) VALUES ('".$candidate_id."')";
            $this->db->query($sql);
            $assessment_id=$this->db->insert_id();
            $param_id=$data2['parid'];
            $param_input=$data2['parinp'];
            $count=0;
            $param_calculated_final=0;
            foreach ($param_id as $key => $n){
                $input=$param_input[$key];
                $sql="SELECT * FROM norms WHERE param_id=$n";
                $query=$this->db->query($sql);
                $num=$query->num_rows();
                $data = $query->result_array();
                $priority=$data[0]['priority'];
                if($priority=="value_2"){
                    $minimum=$data[0]['lower_limit'];
                    $maximum=$data[$num-2]['upper_limit'];
                    if($input<$minimum){
                        $input_score=$input;
                        $calculated_score=0;
                    }
                    elseif ($input>=$maximum){
                        $input_score=$input;
                        $calculated_score=100;
                    }
                    else{
                        $prev=1;
                        for($i=0;$i<$num;$i++){
                            $min = $data[$i]['lower_limit'];
                            $max = $data[$i]['upper_limit'];
                            if($min<=$input && $max>$input){
                                $input_score=$input;
                                $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                $calculated_score=round($calculated_score,2);
                                break;
                            }
                            $prev=$data[$i+1]['score'];
                        }
                    }
                }
                elseif($priority=="value_1"){
                    $minimum=$data[0]['lower_limit'];
                    $maximum=$data[$num-2]['upper_limit'];
                    if ($input < $minimum) {
                        $input_score = $input;
                        $calculated_score = 100;
                    }
                    elseif ($input>$maximum){
                        $input_score=$input;
                        $calculated_score=0;
                    }
                    else{
                        for($i=0;$i<$num-1;$i++) {
                            $min = $data[$i]['lower_limit'];
                            $max = $data[$i]['upper_limit'];
                            if($min==$input){
                                $input_score=$input;
                                $calculated_score=$data[$i]['score'];
                                break;
                            }
                            elseif($min<$input && $max>=$input){
                                $input_score=$input;
                                $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                $calculated_score=$data[$i+1]['score']-(($input-$max)*$per_unit);
                                $calculated_score=round($calculated_score,2);
                                break;
                            }
                        }
                    }
                    if(isset($max)){
                        if($input>$max){
                            $input_score = $input;
                            $calculated_score = 0;
                        }
                    }
                }
                else{
                    $minimum=$data[0]['lower_limit'];
                    $maximum=$data[$num-1]['upper_limit'];
                    if($input<$minimum || $input>=$maximum){
                        $input_score=$input;
                        $calculated_score=0;
                    }
                    else{
                        $kop=0;
                        $prev=1;
                        for($i=0;$i<22;$i++){
                            $min = $data[$i]['lower_limit'];
                            $max = $data[$i]['upper_limit'];
                            if($min<=$input && $max>$input){
                                $input_score=$input;
                                $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                $calculated_score=round($calculated_score,2);
                                $kop=1;
                                break;
                            }
                            $prev=$data[$i+1]['score'];
                        }
                        if($kop==0){
                            for($i=22;$i<44;$i++) {
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min==$input){
                                    $input_score=$input;
                                    $calculated_score=$data[$i]['score'];
                                    break;
                                }
                                elseif($min<$input && $max>=$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                    $calculated_score=$data[$i]['score']-(($input-$min)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    break;
                                }
                                //$prev=$data[$i+1]['score'];
                            }
                        }
                    }
                }
                $param_calculated_final=$param_calculated_final+$calculated_score;
                $sql="Insert into assessment_details (assessment_id,param_id,input_score,output_score) VALUES ('".$assessment_id."','".$n."','".$input_score."','".$calculated_score."')";
                $this->db->query($sql);
                $count++;
            }
            $overall_score=$param_calculated_final/($count);
            $overall_score=round($overall_score,2);
            $term=$data2['term'];

            $sql="SELECT * FROM grading";
            $query=$this->db->query($sql);
            $num=$query->num_rows();
            $data = $query->result_array();
            for($i=0;$i<$num;$i++){
                $min = $data[$i]['min'];
                $max = $data[$i]['max'];
                if($min-1<=$overall_score && $max>=$overall_score){
                    $talent_status=$data[$i]['criteria'];
                    break;
                }
            }
            $sql="Update assessment_master SET cat_id='$cat_id',based_on='$term',overall_score='$overall_score',talent_status='$talent_status',user_id='$user_id' WHERE assessment_id='$assessment_id'";

            //$sql="Insert into assessment_master (candidate_id,cat_id,based_on,overall_score,talent_status,user_id) VALUES ('".$candidate_id."','".$cat_id."','".$term."','".$overall_score."','".$talent_status."','".$user_id."')";
            $this->db->query($sql);
            $result['assessment_id']=$assessment_id;
            $result['assessment_id_2']=0;
        }
        return $result;
    }

    public function submit_both_sport($data, $data2){
        $query=$this->db->insert('candidate',$data);
        $candidate_id=$this->db->insert_id();
        $user_id=$data['user_id'];
        if($query){
            $sql="INSERT INTO assessment_master(candidate_id) VALUES ('".$candidate_id."')";
            $this->db->query($sql);
            $assessment_id=$this->db->insert_id();
            $param_id=$data2['parid'];
            $param_input=$data2['parinp'];
            $count=0;
            $param_calculated_final = array_fill(1,1000, 0);
            foreach ($param_id as $key => $n){
                $sql="SELECT type FROM parameter WHERE param_id=$n";
                $query=$this->db->query($sql);
                $data = $query->result_array();
                $type=$data[0]['type'];
                if($type=='specific'){
                    $input=$param_input[$key];
                    $sql="SELECT * FROM norms WHERE param_id=$n";
                    $query=$this->db->query($sql);
                    $num=$query->num_rows();
                    $data = $query->result_array();
                    $priority=$data[0]['priority'];
                    if($priority=="value_2"){
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-2]['upper_limit'];
                        if($input<$minimum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        elseif ($input>=$maximum){
                            $input_score=$input;
                            $calculated_score=100;
                        }
                        else{
                            $prev=1;
                            for($i=0;$i<$num;$i++){
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min<=$input && $max>$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                    $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    break;
                                }
                                $prev=$data[$i+1]['score'];
                            }
                        }
                    }
                    elseif($priority=="value_1"){
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-2]['upper_limit'];
                        if ($input < $minimum) {
                            $input_score = $input;
                            $calculated_score = 100;
                        }
                        elseif ($input>$maximum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        else{
                            for($i=0;$i<$num-1;$i++) {
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min==$input){
                                    $input_score=$input;
                                    $calculated_score=$data[$i]['score'];
                                    break;
                                }
                                elseif($min<$input && $max>=$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                    $calculated_score=$data[$i+1]['score']-(($input-$max)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    break;
                                }
                            }
                        }
                    }
                    else{
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-1]['upper_limit'];
                        if($input<$minimum || $input>=$maximum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        else{
                            $kop=0;
                            $prev=1;
                            for($i=0;$i<22;$i++){
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min<=$input && $max>$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                    $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    $kop=1;
                                    break;
                                }
                                $prev=$data[$i+1]['score'];
                            }
                            if($kop==0){
                                for($i=22;$i<44;$i++) {
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min==$input){
                                        $input_score=$input;
                                        $calculated_score=$data[$i]['score'];
                                        break;
                                    }
                                    elseif($min<$input && $max>=$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                        $calculated_score=$data[$i]['score']-(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                    //$prev=$data[$i+1]['score'];
                                }
                            }
                        }
                    }
                    $sql="Insert into assessment_details (assessment_id,param_id,input_score,output_score) VALUES ('".$assessment_id."','".$n."','".$input_score."','".$calculated_score."')";
                    $this->db->query($sql);

                    $sql="SELECT loading,group_id FROM distribution WHERE param_id=$n";
                    $query=$this->db->query($sql);
                    $data = $query->result_array();
                    $loading = $data[0]['loading'];
                    $g=$data[0]['group_id'];
                    $param_calculated_final[$g]=$param_calculated_final[$g]+$loading;
                    $loaded_score[$count]=$loading*$calculated_score;
                    $group_id[$count]=$data[0]['group_id'];
                    $count++;
                }
            }
            //return $param_calculated_final;
            $group_unique=$group_id;
            $group_unique=$group_unique=array_unique($group_unique);
            //return $group_unique;
            $test=array();
            $ih=0;
            $total_sum=0;
            $group_calculated_final=0;
            foreach ($group_unique as $id){
                $count2=0;
                $sum=0;
                for($i=0;$i<$count;$i++){
                    if($group_id[$i]==$id){
                        $sum=$sum+$loaded_score[$i];
                        $count2++;
                    }
                }
                $factor_score=$sum/$param_calculated_final[$id];
                $test[$ih++]=$factor_score;
                $sql="SELECT group_reliability FROM dist_group WHERE group_id=$id";
                $query=$this->db->query($sql);
                $data = $query->result_array();
                $group_loading = $data[0]['group_reliability'];
                $group_calculated_final=$group_calculated_final+$group_loading;
                $group_score[$id]=($factor_score*$group_loading);
                $total_sum=$total_sum+$group_score[$id];
            }
            //return $test;
            $cat_id=$data2['cat_id'];
            $sql="SELECT total_var FROM categories WHERE cat_id=$cat_id";
            $query=$this->db->query($sql);
            $data = $query->result_array();
            $total_var = $data[0]['total_var'];
            $overall_score=($total_sum/$group_calculated_final);
            $overall_score=round($overall_score,2);
            $term=$data2['term'];

            $sql="SELECT * FROM grading";
            $query=$this->db->query($sql);
            $num=$query->num_rows();
            $data = $query->result_array();
            for($i=0;$i<$num;$i++){
                $min = $data[$i]['min'];
                $max = $data[$i]['max'];
                if($min-1<=$overall_score && $max>=$overall_score){
                    $talent_status=$data[$i]['criteria'];
                    break;
                }
            }
            $sql="Update assessment_master SET cat_id='$cat_id',based_on='specific',overall_score='$overall_score',talent_status='$talent_status',user_id='$user_id' WHERE assessment_id='$assessment_id'";

            //$sql="Insert into assessment_master (candidate_id,cat_id,based_on,overall_score,talent_status,user_id) VALUES ('".$candidate_id."','".$cat_id."','specific','".$overall_score."','".$talent_status."','".$user_id."')";
            $this->db->query($sql);
            $result['assessment_id']=$assessment_id;
            // for genetic

            $sql="INSERT INTO assessment_master(candidate_id) VALUES ('".$candidate_id."')";
            $this->db->query($sql);
            $assessment_id=$this->db->insert_id();
            $param_id=$data2['parid'];
            $param_input=$data2['parinp'];
            $count=0;
            $param_calculated_final=0;
            foreach ($param_id as $key => $n){
                $sql="SELECT type FROM parameter WHERE param_id=$n";
                $query=$this->db->query($sql);
                $data = $query->result_array();
                $type=$data[0]['type'];
                if($type=='genetic') {
                    $input=$param_input[$key];
                    $sql="SELECT * FROM norms WHERE param_id=$n";
                    $query=$this->db->query($sql);
                    $num=$query->num_rows();
                    $data = $query->result_array();
                    $priority=$data[0]['priority'];
                    if($priority=="value_2"){
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-2]['upper_limit'];
                        if($input<$minimum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        elseif ($input>=$maximum){
                            $input_score=$input;
                            $calculated_score=100;
                        }
                        else{
                            $prev=1;
                            for($i=0;$i<$num;$i++){
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min<=$input && $max>$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                    $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    break;
                                }
                                $prev=$data[$i+1]['score'];
                            }
                        }
                    }
                    elseif($priority=="value_1"){
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-2]['upper_limit'];
                        if ($input < $minimum) {
                            $input_score = $input;
                            $calculated_score = 100;
                        }
                        elseif ($input>$maximum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        else{
                            for($i=0;$i<$num-1;$i++) {
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min==$input){
                                    $input_score=$input;
                                    $calculated_score=$data[$i]['score'];
                                    break;
                                }
                                elseif($min<$input && $max>=$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                    $calculated_score=$data[$i+1]['score']-(($input-$max)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    break;
                                }
                            }
                        }
                    }
                    else{
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-1]['upper_limit'];
                        if($input<$minimum || $input>=$maximum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        else{
                            $kop=0;
                            $prev=1;
                            for($i=0;$i<22;$i++){
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min<=$input && $max>$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                    $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    $kop=1;
                                    break;
                                }
                                $prev=$data[$i+1]['score'];
                            }
                            if($kop==0){
                                for($i=22;$i<44;$i++) {
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min==$input){
                                        $input_score=$input;
                                        $calculated_score=$data[$i]['score'];
                                        break;
                                    }
                                    elseif($min<$input && $max>=$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                        $calculated_score=$data[$i]['score']-(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                    //$prev=$data[$i+1]['score'];
                                }
                            }
                        }
                    }
                    $param_calculated_final=$param_calculated_final+$calculated_score;
                    $sql="Insert into assessment_details (assessment_id,param_id,input_score,output_score) VALUES ('".$assessment_id."','".$n."','".$input_score."','".$calculated_score."')";
                    $this->db->query($sql);
                    $count++;
                }
            }
            $overall_score=$param_calculated_final/($count);
            $overall_score=round($overall_score,2);
            $term=$data2['term'];

            $sql="SELECT * FROM grading";
            $query=$this->db->query($sql);
            $num=$query->num_rows();
            $data = $query->result_array();
            for($i=0;$i<$num;$i++){
                $min = $data[$i]['min'];
                $max = $data[$i]['max'];
                if($min-1<=$overall_score && $max>=$overall_score){
                    $talent_status=$data[$i]['criteria'];
                    break;
                }
            }
            $sql="Update assessment_master SET cat_id='$cat_id',based_on='genetic',overall_score='$overall_score',talent_status='$talent_status',user_id='$user_id' WHERE assessment_id='$assessment_id'";

            //$sql="Insert into assessment_master (candidate_id,cat_id,based_on,overall_score,talent_status,user_id) VALUES ('".$candidate_id."','".$cat_id."','genetic','".$overall_score."','".$talent_status."','".$user_id."')";
            $this->db->query($sql);
            $result['assessment_id_2']=$assessment_id;
        }
        return $result;
    }


    public function submit_sporting($data,$data2){
        $term=$data2['term'];
        if($term=='specific'){
            $query=$this->db->insert('candidate',$data);
            $candidate_id=$this->db->insert_id();
            $user_id=$data['user_id'];
            if($query){
                $sql="INSERT INTO assessment_master(candidate_id) VALUES ('".$candidate_id."')";
                $this->db->query($sql);
                $assessment_id=$this->db->insert_id();
                $param_id=$data2['parid'];
                $param_input=$data2['parinp'];
                $count=0;
                $param_calculated_final = array_fill(1,1000, 0);
                foreach ($param_id as $key => $n){
                    $input=$param_input[$key];
                    $sql="SELECT * FROM norms WHERE param_id=$n";
                    $query=$this->db->query($sql);
                    $num=$query->num_rows();
                    $data = $query->result_array();
                    $priority=$data[0]['priority'];
                    if($priority=="value_2"){
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-2]['upper_limit'];
                        if($input<$minimum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        elseif ($input>=$maximum){
                            $input_score=$input;
                            $calculated_score=100;
                        }
                        else{
                            $prev=1;
                            for($i=0;$i<$num;$i++){
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min<=$input && $max>$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                    $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    break;
                                }
                                $prev=$data[$i+1]['score'];
                            }
                        }
                    }
                    elseif($priority=="value_1"){
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-2]['upper_limit'];
                        if ($input < $minimum) {
                            $input_score = $input;
                            $calculated_score = 100;
                        }
                        elseif ($input>$maximum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        else{
                            for($i=0;$i<$num-1;$i++) {
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min==$input){
                                    $input_score=$input;
                                    $calculated_score=$data[$i]['score'];
                                    break;
                                }
                                elseif($min<$input && $max>=$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                    $calculated_score=$data[$i+1]['score']-(($input-$max)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    break;
                                }
                            }
                        }
                        if(isset($max)){
                            if($input>$max){
                                $input_score = $input;
                                $calculated_score = 0;
                            }
                        }
                    }
                    else{
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-1]['upper_limit'];
                        if($input<$minimum || $input>=$maximum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        else{
                            $kop=0;
                            $prev=1;
                            for($i=0;$i<22;$i++){
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min<=$input && $max>$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                    $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    $kop=1;
                                    break;
                                }
                                $prev=$data[$i+1]['score'];
                            }
                            if($kop==0){
                                for($i=22;$i<44;$i++) {
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min==$input){
                                        $input_score=$input;
                                        $calculated_score=$data[$i]['score'];
                                        break;
                                    }
                                    elseif($min<$input && $max>=$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                        $calculated_score=$data[$i]['score']-(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                    //$prev=$data[$i+1]['score'];
                                }
                            }
                        }
                    }
                    $sql="Insert into assessment_details (assessment_id,param_id,input_score,output_score) VALUES ('".$assessment_id."','".$n."','".$input_score."','".$calculated_score."')";
                    $this->db->query($sql);

                    $sql="SELECT loading,group_id FROM distribution WHERE param_id=$n";
                    $query=$this->db->query($sql);
                    $data = $query->result_array();
                    $loading = $data[0]['loading'];
                    $g=$data[0]['group_id'];
                    $param_calculated_final[$g]=$param_calculated_final[$g]+$loading;
                    $loaded_score[$count]=$loading*$calculated_score;
                    $group_id[$count]=$data[0]['group_id'];
                    $count++;
                }
                $group_unique=$group_id;
                $group_unique=array_unique($group_unique);

                $total_sum=0;
                $group_calculated_final=0;
                foreach ($group_unique as $id){
                    $count2=0;
                    $sum=0;
                    for($i=0;$i<$count;$i++){
                        if($group_id[$i]==$id){
                            $sum=$sum+$loaded_score[$i];
                            $count2++;
                        }
                    }
                    $factor_score=$sum/$param_calculated_final[$id];
                    $sql="SELECT group_reliability FROM dist_group WHERE group_id=$id";
                    $query=$this->db->query($sql);
                    $data = $query->result_array();
                    $group_loading = $data[0]['group_reliability'];
                    $group_calculated_final=$group_calculated_final+$group_loading;
                    $group_score[$id]=($factor_score*$group_loading);
                    $total_sum=$total_sum+$group_score[$id];
                }
                $cat_id=$data2['cat_id'];
                $sql="SELECT total_var FROM categories WHERE cat_id=$cat_id";
                $query=$this->db->query($sql);
                $data = $query->result_array();
                $total_var = $data[0]['total_var'];
                $overall_score=($total_sum/$group_calculated_final);
                $overall_score=round($overall_score,2);
                $term=$data2['term'];

                $sql="SELECT * FROM grading";
                $query=$this->db->query($sql);
                $num=$query->num_rows();
                $data = $query->result_array();
                for($i=0;$i<$num;$i++){
                    $min = $data[$i]['min'];
                    $max = $data[$i]['max'];
                    if($min-1<=$overall_score && $max>=$overall_score){
                        $talent_status=$data[$i]['criteria'];
                        break;
                    }
                }
                $sql="Update assessment_master SET cat_id='$cat_id',based_on='$term',overall_score='$overall_score',talent_status='$talent_status',user_id='$user_id' WHERE assessment_id='$assessment_id'";

                //$sql="Insert into assessment_master (candidate_id,cat_id,based_on,overall_score,talent_status,user_id) VALUES ('".$candidate_id."','".$cat_id."','".$term."','".$overall_score."','".$talent_status."','".$user_id."')";
                $this->db->query($sql);
                $result['assessment_id']=$assessment_id;
                $result['assessment_id_2']=0;
            }
            return $result;
        }
        elseif ($term=='genetic'){
            $cat_id=$data2['cat_id'];
            $query=$this->db->insert('candidate',$data);
            $candidate_id=$this->db->insert_id();
            $user_id=$data['user_id'];
            if($query){
                $sql="INSERT INTO assessment_master(candidate_id) VALUES ('".$candidate_id."')";
                $this->db->query($sql);
                $assessment_id=$this->db->insert_id();
                $param_id=$data2['parid'];
                $param_input=$data2['parinp'];
                $count=0;
                $param_calculated_final=0;
                foreach ($param_id as $key => $n){
                    $input=$param_input[$key];
                    $sql="SELECT * FROM norms WHERE param_id=$n";
                    $query=$this->db->query($sql);
                    $num=$query->num_rows();
                    $data = $query->result_array();
                    $priority=$data[0]['priority'];
                    if($priority=="value_2"){
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-2]['upper_limit'];
                        if($input<$minimum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        elseif ($input>=$maximum){
                            $input_score=$input;
                            $calculated_score=100;
                        }
                        else{
                            $prev=1;
                            for($i=0;$i<$num;$i++){
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min<=$input && $max>$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                    $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    break;
                                }
                                $prev=$data[$i+1]['score'];
                            }
                        }
                    }
                    elseif($priority=="value_1"){
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-2]['upper_limit'];
                        if ($input < $minimum) {
                            $input_score = $input;
                            $calculated_score = 100;
                        }
                        elseif ($input>$maximum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        else{
                            for($i=0;$i<$num-1;$i++) {
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min==$input){
                                    $input_score=$input;
                                    $calculated_score=$data[$i]['score'];
                                    break;
                                }
                                elseif($min<$input && $max>=$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                    $calculated_score=$data[$i+1]['score']-(($input-$max)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    break;
                                }
                            }
                        }
                        if(isset($max)){
                            if($input>$max){
                                $input_score = $input;
                                $calculated_score = 0;
                            }
                        }
                    }
                    else{
                        $minimum=$data[0]['lower_limit'];
                        $maximum=$data[$num-1]['upper_limit'];
                        if($input<$minimum || $input>=$maximum){
                            $input_score=$input;
                            $calculated_score=0;
                        }
                        else{
                            $kop=0;
                            $prev=1;
                            for($i=0;$i<22;$i++){
                                $min = $data[$i]['lower_limit'];
                                $max = $data[$i]['upper_limit'];
                                if($min<=$input && $max>$input){
                                    $input_score=$input;
                                    $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                    $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                    $calculated_score=round($calculated_score,2);
                                    $kop=1;
                                    break;
                                }
                                $prev=$data[$i+1]['score'];
                            }
                            if($kop==0){
                                for($i=22;$i<44;$i++) {
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min==$input){
                                        $input_score=$input;
                                        $calculated_score=$data[$i]['score'];
                                        break;
                                    }
                                    elseif($min<$input && $max>=$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                        $calculated_score=$data[$i]['score']-(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                    //$prev=$data[$i+1]['score'];
                                }
                            }
                        }
                    }
                    $param_calculated_final=$param_calculated_final+$calculated_score;
                    $sql="Insert into assessment_details (assessment_id,param_id,input_score,output_score) VALUES ('".$assessment_id."','".$n."','".$input_score."','".$calculated_score."')";
                    $this->db->query($sql);
                    $count++;
                }
                $overall_score=$param_calculated_final/($count);
                $overall_score=round($overall_score,2);
                $term=$data2['term'];

                $sql="SELECT * FROM grading";
                $query=$this->db->query($sql);
                $num=$query->num_rows();
                $data = $query->result_array();
                for($i=0;$i<$num;$i++){
                    $min = $data[$i]['min'];
                    $max = $data[$i]['max'];
                    if($min-1<=$overall_score && $max>=$overall_score){
                        $talent_status=$data[$i]['criteria'];
                        break;
                    }
                }
                $sql="Update assessment_master SET cat_id='$cat_id',based_on='$term',overall_score='$overall_score',talent_status='$talent_status',user_id='$user_id' WHERE assessment_id='$assessment_id'";

                //$sql="Insert into assessment_master (candidate_id,cat_id,based_on,overall_score,talent_status,user_id) VALUES ('".$candidate_id."','".$cat_id."','".$term."','".$overall_score."','".$talent_status."','".$user_id."')";
                $this->db->query($sql);
                $result['assessment_id']=$assessment_id;
                $result['assessment_id_2']=0;
            }
            return $result;
        }
        else{
            $query=$this->db->insert('candidate',$data);
            $candidate_id=$this->db->insert_id();
            $user_id=$data['user_id'];
            if($query){
                $sql="INSERT INTO assessment_master(candidate_id) VALUES ('".$candidate_id."')";
                $this->db->query($sql);
                $assessment_id=$this->db->insert_id();
                $param_id=$data2['parid'];
                $param_input=$data2['parinp'];
                $count=0;
                $param_calculated_final = array_fill(1,1000, 0);
                foreach ($param_id as $key => $n){
                    $sql="SELECT type FROM parameter WHERE param_id=$n";
                    $query=$this->db->query($sql);
                    $data = $query->result_array();
                    $type=$data[0]['type'];
                    if($type=='specific'){
                        $input=$param_input[$key];
                        $sql="SELECT * FROM norms WHERE param_id=$n";
                        $query=$this->db->query($sql);
                        $num=$query->num_rows();
                        $data = $query->result_array();
                        $priority=$data[0]['priority'];
                        if($priority=="value_2"){
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-2]['upper_limit'];
                            if($input<$minimum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            elseif ($input>=$maximum){
                                $input_score=$input;
                                $calculated_score=100;
                            }
                            else{
                                $prev=1;
                                for($i=0;$i<$num;$i++){
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min<=$input && $max>$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                        $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                    $prev=$data[$i+1]['score'];
                                }
                            }
                        }
                        elseif($priority=="value_1"){
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-2]['upper_limit'];
                            if ($input < $minimum) {
                                $input_score = $input;
                                $calculated_score = 100;
                            }
                            elseif ($input>$maximum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            else{
                                for($i=0;$i<$num-1;$i++) {
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min==$input){
                                        $input_score=$input;
                                        $calculated_score=$data[$i]['score'];
                                        break;
                                    }
                                    elseif($min<$input && $max>=$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                        $calculated_score=$data[$i+1]['score']-(($input-$max)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                }
                            }
                            if(isset($max)){
                                if($input>$max){
                                    $input_score = $input;
                                    $calculated_score = 0;
                                }
                            }
                        }
                        else{
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-1]['upper_limit'];
                            if($input<$minimum || $input>=$maximum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            else{
                                $kop=0;
                                $prev=1;
                                for($i=0;$i<22;$i++){
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min<=$input && $max>$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                        $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        $kop=1;
                                        break;
                                    }
                                    $prev=$data[$i+1]['score'];
                                }
                                if($kop==0){
                                    for($i=22;$i<44;$i++) {
                                        $min = $data[$i]['lower_limit'];
                                        $max = $data[$i]['upper_limit'];
                                        if($min==$input){
                                            $input_score=$input;
                                            $calculated_score=$data[$i]['score'];
                                            break;
                                        }
                                        elseif($min<$input && $max>=$input){
                                            $input_score=$input;
                                            $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                            $calculated_score=$data[$i]['score']-(($input-$min)*$per_unit);
                                            $calculated_score=round($calculated_score,2);
                                            break;
                                        }
                                        //$prev=$data[$i+1]['score'];
                                    }
                                }
                            }
                        }
                        $sql="Insert into assessment_details (assessment_id,param_id,input_score,output_score) VALUES ('".$assessment_id."','".$n."','".$input_score."','".$calculated_score."')";
                        $this->db->query($sql);

                        $sql="SELECT loading,group_id FROM distribution WHERE param_id=$n";
                        $query=$this->db->query($sql);
                        $data = $query->result_array();
                        $loading = $data[0]['loading'];
                        $g=$data[0]['group_id'];
                        $param_calculated_final[$g]=$param_calculated_final[$g]+$loading;
                        $loaded_score[$count]=$loading*$calculated_score;
                        $group_id[$count]=$data[0]['group_id'];
                        $count++;
                    }
                }
                $group_unique=$group_id;
                $group_unique=array_unique($group_unique);

                $total_sum=0;
                $group_calculated_final=0;
                foreach ($group_unique as $id){
                    $count2=0;
                    $sum=0;
                    for($i=0;$i<$count;$i++){
                        if($group_id[$i]==$id){
                            $sum=$sum+$loaded_score[$i];
                            $count2++;
                        }
                    }
                    $factor_score=$sum/$param_calculated_final[$id];
                    $sql="SELECT group_reliability FROM dist_group WHERE group_id=$id";
                    $query=$this->db->query($sql);
                    $data = $query->result_array();
                    $group_loading = $data[0]['group_reliability'];
                    $group_calculated_final=$group_calculated_final+$group_loading;
                    $group_score[$id]=($factor_score*$group_loading);
                    $total_sum=$total_sum+$group_score[$id];
                }
                $cat_id=$data2['cat_id'];
                $sql="SELECT total_var FROM categories WHERE cat_id=$cat_id";
                $query=$this->db->query($sql);
                $data = $query->result_array();
                $total_var = $data[0]['total_var'];
                $overall_score=($total_sum/$group_calculated_final);
                $overall_score=round($overall_score,2);
                $term=$data2['term'];

                $sql="SELECT * FROM grading";
                $query=$this->db->query($sql);
                $num=$query->num_rows();
                $data = $query->result_array();
                for($i=0;$i<$num;$i++){
                    $min = $data[$i]['min'];
                    $max = $data[$i]['max'];
                    if($min-1<=$overall_score && $max>=$overall_score){
                        $talent_status=$data[$i]['criteria'];
                        break;
                    }
                }
                $sql="Update assessment_master SET cat_id='$cat_id',based_on='specific',overall_score='$overall_score',talent_status='$talent_status',user_id='$user_id' WHERE assessment_id='$assessment_id'";

                //$sql="Insert into assessment_master (candidate_id,cat_id,based_on,overall_score,talent_status,user_id) VALUES ('".$candidate_id."','".$cat_id."','".$term."','".$overall_score."','".$talent_status."','".$user_id."')";
                $this->db->query($sql);
                $result['assessment_id']=$assessment_id;

                // for genetic

                $sql="INSERT INTO assessment_master(candidate_id) VALUES ('".$candidate_id."')";
                $this->db->query($sql);
                $assessment_id=$this->db->insert_id();
                $param_id=$data2['parid'];
                $param_input=$data2['parinp'];
                $count=0;
                $param_calculated_final=0;
                foreach ($param_id as $key => $n){
                    $sql="SELECT type FROM parameter WHERE param_id=$n";
                    $query=$this->db->query($sql);
                    $data = $query->result_array();
                    $type=$data[0]['type'];
                    if($type=='genetic') {
                        $input=$param_input[$key];
                        $sql="SELECT * FROM norms WHERE param_id=$n";
                        $query=$this->db->query($sql);
                        $num=$query->num_rows();
                        $data = $query->result_array();
                        $priority=$data[0]['priority'];
                        if($priority=="value_2"){
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-2]['upper_limit'];
                            if($input<$minimum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            elseif ($input>=$maximum){
                                $input_score=$input;
                                $calculated_score=100;
                            }
                            else{
                                $prev=1;
                                for($i=0;$i<$num;$i++){
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min<=$input && $max>$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                        $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                    $prev=$data[$i+1]['score'];
                                }
                            }
                        }
                        elseif($priority=="value_1"){
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-2]['upper_limit'];
                            if ($input < $minimum) {
                                $input_score = $input;
                                $calculated_score = 100;
                            }
                            elseif ($input>$maximum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            else{
                                for($i=0;$i<$num-1;$i++) {
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min==$input){
                                        $input_score=$input;
                                        $calculated_score=$data[$i]['score'];
                                        break;
                                    }
                                    elseif($min<$input && $max>=$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                        $calculated_score=$data[$i+1]['score']-(($input-$max)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        break;
                                    }
                                }
                            }
                            if(isset($max)){
                                if($input>$max){
                                    $input_score = $input;
                                    $calculated_score = 0;
                                }
                            }
                        }
                        else{
                            $minimum=$data[0]['lower_limit'];
                            $maximum=$data[$num-1]['upper_limit'];
                            if($input<$minimum || $input>=$maximum){
                                $input_score=$input;
                                $calculated_score=0;
                            }
                            else{
                                $kop=0;
                                $prev=1;
                                for($i=0;$i<22;$i++){
                                    $min = $data[$i]['lower_limit'];
                                    $max = $data[$i]['upper_limit'];
                                    if($min<=$input && $max>$input){
                                        $input_score=$input;
                                        $per_unit=($data[$i+1]['score']-$prev)/($max-$min);
                                        $calculated_score=$data[$i]['score']+(($input-$min)*$per_unit);
                                        $calculated_score=round($calculated_score,2);
                                        $kop=1;
                                        break;
                                    }
                                    $prev=$data[$i+1]['score'];
                                }
                                if($kop==0){
                                    for($i=22;$i<44;$i++) {
                                        $min = $data[$i]['lower_limit'];
                                        $max = $data[$i]['upper_limit'];
                                        if($min==$input){
                                            $input_score=$input;
                                            $calculated_score=$data[$i]['score'];
                                            break;
                                        }
                                        elseif($min<$input && $max>=$input){
                                            $input_score=$input;
                                            $per_unit=($data[$i]['score']-$data[$i+1]['score'])/($max-$min);
                                            $calculated_score=$data[$i]['score']-(($input-$min)*$per_unit);
                                            $calculated_score=round($calculated_score,2);
                                            break;
                                        }
                                        //$prev=$data[$i+1]['score'];
                                    }
                                }
                            }
                        }
                        $param_calculated_final=$param_calculated_final+$calculated_score;
                        $sql="Insert into assessment_details (assessment_id,param_id,input_score,output_score) VALUES ('".$assessment_id."','".$n."','".$input_score."','".$calculated_score."')";
                        $this->db->query($sql);
                        $count++;
                    }
                }
                $overall_score=$param_calculated_final/($count);
                $overall_score=round($overall_score,2);
                $term=$data2['term'];

                $sql="SELECT * FROM grading";
                $query=$this->db->query($sql);
                $num=$query->num_rows();
                $data = $query->result_array();
                for($i=0;$i<$num;$i++){
                    $min = $data[$i]['min'];
                    $max = $data[$i]['max'];
                    if($min-1<=$overall_score && $max>=$overall_score){
                        $talent_status=$data[$i]['criteria'];
                        break;
                    }
                }
                $sql="Update assessment_master SET cat_id='$cat_id',based_on='genetic',overall_score='$overall_score',talent_status='$talent_status',user_id='$user_id' WHERE assessment_id='$assessment_id'";

                //$sql="Insert into assessment_master (candidate_id,cat_id,based_on,overall_score,talent_status,user_id) VALUES ('".$candidate_id."','".$cat_id."','".$term."','".$overall_score."','".$talent_status."','".$user_id."')";
                $this->db->query($sql);
                $result['assessment_id_2']=$assessment_id;
            }
            return $result;
        }
    }


    public function show_result($assessment_id,$assessment_id_2){
        if($assessment_id_2!=0){
            $sql="SELECt * FROM assessment_master WHERE assessment_id=$assessment_id_2";
            $query=$this->db->query($sql);
            $result['asmtdata2']=$query->result_array();
            $result['both']=true;
        }
        else{
            $result['both']=false;
        }
        $sql="SELECt * FROM assessment_master WHERE assessment_id=$assessment_id";
        $query=$this->db->query($sql);
        $data = $query->result_array();
        $result['asmtdata']=$query->result_array();
        $candidate_id = $data[0]['candidate_id'];
        $cat_id = $data[0]['cat_id'];
        $sql="SELECT * FROM candidate WHERE candidate_id=$candidate_id";
        $query=$this->db->query($sql);
        $result['candata'] = $query->result_array();
        $sql="SELECT * FROM categories WHERE cat_id=$cat_id";
        $query=$this->db->query($sql);
        $result['catdata'] = $query->result_array();
        return $result;
    }
    public function user_profile($user_id){
        $result=array();
        $sql="SELECT * FROM user WHERE user_id=$user_id";
        $query=$this->db->query($sql);
        $result['userdata']=$query->result_array();
        return $result;
    }
    public function update_profile($data){
        $name=$data['name'];
        $username=$data['username'];
        $admin_id=$data['admin_id'];
        $designation=$data['designation'];
        $phone=$data['phone'];
        $email=$data['email'];

        $sql="UPDATE `user` SET `name`='$name',`username`='$username',`designation`='$designation',`phone`='$phone',`email`='$email' WHERE user_id='$admin_id'";
        $query=$this->db->query($sql);
        return 1;
    }
    public function change_password($password){
        $admin_id=$_SESSION['user_id'];
        $sql="UPDATE user SET `password`='$password' WHERE user_id='$admin_id'";
        $query=$this->db->query($sql);
        return 1;
    }
    public function user_old(){
        $sql="SELECT based_on,overall_score,talent_status,assessment_id,candidate.name,candidate.gender,candidate.age,categories.name as cname,candidate.candidate_id,assessment_master.timestamp FROM assessment_master,candidate,categories WHERE candidate.candidate_id=assessment_master.candidate_id && categories.cat_id=assessment_master.cat_id ";
        $query=$this->db->query($sql);
        $result=array();
        $result['userdata']=$query->result_array();
        return $result;
    }
    public function user_view_old($candidate_id){
        $sql = "SELECT ROUND(assessment_details.input_score,2) as input_score , assessment_details.output_score , parameter.name FROM assessment_details,assessment_master,parameter WHERE assessment_master.candidate_id='$candidate_id' AND assessment_master.assessment_id = assessment_details.assessment_id AND  assessment_details.param_id=parameter.param_id ";
        $query=$this->db->query($sql);
        $result=array();
        $result['olddata']=$query->result_array();
        $sql="SELECT assessment_id,based_on,overall_score,talent_status,candidate.name,candidate.gender,candidate.age,categories.name as cname,candidate.candidate_id FROM assessment_master,candidate,categories WHERE candidate.candidate_id=assessment_master.candidate_id && categories.cat_id=assessment_master.cat_id AND assessment_master.candidate_id='$candidate_id'";
        $query=$this->db->query($sql);
        $result['userdata']=$query->result_array();
        return $result;
    }
    public function user_assessment_delete($candidate_id){
		$sql="SELECT assessment_id FROM assessment_master WHERE candidate_id=$candidate_id";
		$query=$this->db->query($sql);
		$result['data']=$query->result_array();
		
		for($d=0;$d<sizeof($result['data']);$d++){
			$assessment_id=$result['data'][$d]['assessment_id'];
			$this->db->where('assessment_id', $assessment_id);
            $this->db->delete('assessment_details');
		}
		
        $this->db->where('candidate_id', $candidate_id);
        $this->db->delete('assessment_master');
        $this->db->where('candidate_id', $candidate_id);
        $this->db->delete('candidate');
		 
    }
    public function assessment_print($assessment_id){
        $sql="SELECT candidate_id FROM assessment_master WHERE assessment_id='$assessment_id'";
        $query=$this->db->query($sql);
        $data=$query->result_array();
        $candidate_id=$data[0]['candidate_id'];
        $sql="SELECT based_on,overall_score,talent_status,candidate.name,candidate.gender,candidate.age,candidate.org_id as org_id,categories.name as cname,assessment_master.timestamp as timee, assessment_master.cat_id as cat_id FROM assessment_master,candidate,categories WHERE candidate.candidate_id=assessment_master.candidate_id && categories.cat_id=assessment_master.cat_id && assessment_master.candidate_id='$candidate_id'";
        $query=$this->db->query($sql);
        $result=array();
        $result['userdata']=$query->result_array();
        $org_id=$result['userdata'][0]['org_id'];
        $result['cat_id']=$result['userdata'][0]['cat_id'];
        $sql="SELECT * FROM organization WHERE org_id='$org_id'";
        $query=$this->db->query($sql);
        $result['orgdata']=$query->result_array();
        return $result;
    }
    public function assessment_edit($assessment_id){
//        $this->db->where('assessment_id', $assessment_id);
//        $this->db->delete('assessment_details');
        $sql="SELECT * FROM assessment_master WHERE assessment_id='$assessment_id'";
        $query=$this->db->query($sql);
        $data=$query->result_array();
        $cat_id=$data[0]['cat_id'];
        $term=$data[0]['based_on'];
        $candidate_id=$data[0]['candidate_id'];
        $sql="SELECT * FROM candidate WHERE candidate_id='$candidate_id'";
        $query=$this->db->query($sql);
        $data=$query->result_array();
        $name=$data[0]['name'];
        $age=$data[0]['age'];
        if($age=='8-9 Years')
            $age=1;
        elseif($age=='10-11 Years')
            $age=2;
        elseif($age=='12-13 Years')
            $age=3;
        elseif($age=='14-16 Years')
            $age=4;
        $gender=$data[0]['gender'];
        if($term=='specific'){
            $sql="SELECT * FROM categories WHERE cat_id=$cat_id";
            $query=$this->db->query($sql);
            $result['catdata']=$query->result_array();
            $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='$term' AND age='$age' AND gender='$gender'";
            $query=$this->db->query($sql);
            $result['paramdata']=$query->result_array();
            $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='$term' AND gender='$gender' AND name='BMI'";
            $query=$this->db->query($sql);
            $result['paramdata1']=$query->result_array();
        }
        else{
            $term='genetic';
            $sql="SELECT * FROM categories WHERE cat_id=$cat_id";
            $query=$this->db->query($sql);
            $result['catdata']=$query->result_array();
            $sql="SELECT * FROM parameter WHERE cat_id=$cat_id AND type='$term' AND gender='$gender'";
            $query=$this->db->query($sql);
            $result['paramdata']=$query->result_array();
        }
        $sql="SELECT * FROM assessment_details WHERE assessment_id='$assessment_id'";
        $query=$this->db->query($sql);
        $result['assessdata']=$query->result_array();
        $result['cat_id']=$cat_id;
        $result['term']=$term;
        $result['gender']=$gender;
        $result['age']=$age;
        $result['name']=$name;
        return $result;
    }
    public function report_sports($data){
        $cat_id=$data['category'];
        $type=$data['type'];
        $s_date=$data['start_date'];
		$start_date = date("Y-m-d", strtotime($s_date));
		$e_date=$data['end_date'];
		$end_date = date("Y-m-d", strtotime($e_date));
		$radio=$data['radio'];
		$order=$data['order'];
        $result=array();
        if($type!="none"){
			if($s_date!="" && $e_date!=""){
				
        $sql="SELECT assessment_master.assessment_id,assessment_master.candidate_id,assessment_master.cat_id,assessment_master.based_on,assessment_master.overall_score,assessment_master.talent_status,assessment_master.user_id,assessment_master.timestamp,candidate.candidate_id,candidate.org_id,candidate.name,candidate.idnumber,candidate.gender,candidate.age,candidate.address,candidate.city,candidate.state,candidate.country from assessment_master join candidate on assessment_master.candidate_id=candidate.candidate_id where assessment_master.based_on='".$type."' and DATE(assessment_master.timestamp) >='$start_date' AND DATE(assessment_master.timestamp)<='$end_date' and assessment_master.cat_id='".$cat_id."' and assessment_master.user_id='".$_SESSION['user_id']."' ORDER BY $radio $order";
            $query=$this->db->query($sql);
			if($query->num_rows() > 0) {
            $result['data']=$query->result_array();
			} else {
			$result['msg']="No data found";	
			}
			} else {
				$sql="SELECT assessment_master.assessment_id,assessment_master.candidate_id,assessment_master.cat_id,assessment_master.based_on,assessment_master.overall_score,assessment_master.talent_status,assessment_master.user_id,assessment_master.timestamp,candidate.candidate_id,candidate.org_id,candidate.name,candidate.idnumber,candidate.gender,candidate.age,candidate.address,candidate.city,candidate.state,candidate.country from assessment_master join candidate on assessment_master.candidate_id=candidate.candidate_id where assessment_master.cat_id='".$cat_id."' and assessment_master.user_id='".$_SESSION['user_id']."' ORDER BY $radio $order";

            $query=$this->db->query($sql);
			if($query->num_rows() > 0) {
            $result['data']=$query->result_array();
			} else {
			$result['msg']="No data found";	
			}
			}
		} else {
			if($s_date!="" && $e_date!=""){
				
			$sql="SELECT assessment_master.assessment_id,assessment_master.candidate_id,assessment_master.cat_id,assessment_master.based_on,assessment_master.overall_score,assessment_master.talent_status,assessment_master.user_id,assessment_master.timestamp,candidate.candidate_id,candidate.org_id,candidate.name,candidate.idnumber,candidate.gender,candidate.age,candidate.address,candidate.city,candidate.state,candidate.country from assessment_master join candidate on assessment_master.candidate_id=candidate.candidate_id where DATE(assessment_master.timestamp) >='$start_date' AND DATE(assessment_master.timestamp)<='$end_date' and assessment_master.cat_id='".$cat_id."' and assessment_master.user_id='".$_SESSION['user_id']."' ORDER BY $radio $order";

            $query=$this->db->query($sql);
			if($query->num_rows() > 0) {
            $result['data']=$query->result_array();
			} else {
			$result['msg']="No data found";	
			}
			} else {
				$sql="SELECT assessment_master.assessment_id,assessment_master.candidate_id,assessment_master.cat_id,assessment_master.based_on,assessment_master.overall_score,assessment_master.talent_status,assessment_master.user_id,assessment_master.timestamp,candidate.candidate_id,candidate.org_id,candidate.name,candidate.idnumber,candidate.gender,candidate.age,candidate.address,candidate.city,candidate.state,candidate.country from assessment_master join candidate on assessment_master.candidate_id=candidate.candidate_id where assessment_master.cat_id='".$cat_id."' and assessment_master.user_id='".$_SESSION['user_id']."' ORDER BY $radio $order";
 
            $query=$this->db->query($sql);
			if($query->num_rows() > 0) {
            $result['data']=$query->result_array();
			} else {
			$result['msg']="No data found";	
			}
			}
		}
       $sql="SELECT name FROM categories where cat_id=$cat_id"; 
      	$query=$this->db->query($sql);
		$result['data1']=$query->result_array();
        return $result;
    }
}


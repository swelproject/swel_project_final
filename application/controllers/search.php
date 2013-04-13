<?php

class Search extends CI_Controller {

    public function index() {
       $this->search_golden();
    }
	
	
	
	function search_golden(){
		
		if($this->input->post('keywords')!=''){
			$this->load->model("search_model");
			$suffix="";
			$key=mysql_real_escape_string(trim($this->input->post('keywords')));
			$errors=array();
			if(empty($key)){
				$errors[]="من فضلك ادخل كلمه البحث";
				}else if(strlen($key)<3){
					$errors[]="عفوا كلمه البحث يجب ان لا تقل عن 3 احرف";
					
					
					}else if($this->search_model->search_results($key) === false){
						$errors[]="عفوا لا يوجد نتائج عن كلمه البحث التي ادخلتها";
						}
						
				if(empty($errors)){
					//search
					//echo '<pre>' ,print_r( search_results($key)), '</pre>';
					$result=$this->search_model->search_results($key);
					$data['results']=$this->search_model->search_results($key);
					$result_num=count($result);
					$suffix=($result_num != 1) ? 's':'' ;
					$data['result_num']='<p class="result">يوجد عدد <strong>'. $result_num .'</strong> نتيجه للبحث عن <strong> '.$key.' </strong>  </p>';
					foreach($result as $results){
					
				    $data['id']= $results['id'];
					$data['c_id']= $results['c_id'];
					$data['sc_id']= $results['sc_id'];
					$data['user_id'] =$results['user_id'];
					$data['title'] =$results['title'];
					$data['content'] =$results['content'];
					$data['t_photo_name'] =$results['t_photo_name'];
					$data['date'] =$results['date'];
					$data['num_seen'] =$results['num_seen'];
						}
					
					}else{
					foreach($errors as $error){
						$data['error']=$error.'</br>';
						}
						}
	
	}       
	         
	      
       
	         $this->load->view('search_blog',$data);

		}
}
<?php

class Search_model extends CI_Model {

function search_results($keywords){
	
	$returned_result=array();
	$where="";
	
	$keywords=preg_split('/[\s]+/',$keywords);
   
	$total_keywords=count($keywords);
	
	foreach($keywords as $key=>$keyword){
		$where .="`tags` like '%$keyword%'";
		if($key !=($total_keywords -1)){
			$where .="AND";
			}
		}
		$result="select * from topic where $where limit 1 ";
		$result_num= ($result = mysql_query($result)) ? mysql_num_rows($result) : 0 ;
		
		if( $result_num == 0){
			return false;
			}else{
				while($result_row= mysql_fetch_assoc($result)){
					$returned[]=array(
					'id'=> $result_row['id'],
					'c_id'=> $result_row['c_id'],
					'sc_id'=> $result_row['sc_id'],
					'user_id' =>$result_row['user_id'],
					'title' =>$result_row['title'],
					'content' =>$result_row['content'],
					't_photo_name' =>$result_row['t_photo_name'],
					'date' =>$result_row['date'],
					'num_seen' =>$result_row['num_seen'],
					
					
					);
					
					}
					
					return $returned;
				}
}
	
	
}
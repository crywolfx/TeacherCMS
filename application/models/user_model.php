<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User_model extends CI_Model{
		
		public function setUser($arr){   //注册帐号密码
			$this->db->insert('t_pwd',$arr);
			return $this->db->affected_rows();
		}
		public function get_name($name){   //检测该用户名是否注册
			$query=$this->db->query("select t_workid from t_pwd where t_workid='$name'");
			return $query->row();
		}
		public function setUserFile($arr){  //注册设置用户资料
			$this->db->insert('t_teacher',$arr);
			return $this->db->affected_rows();
		}
		public function checkLogin($arr){   //检测登录
			$query=$this->db->get_where('t_pwd',$arr);
		   return $query->result();
		}
		public function get_teacher_res($workid){   //教师资料
			$query=$this->db->query("select * from t_teacher where t_workid='$workid'");
			return $query->result_array();
		}
		public function update_new_pwd($arr,$workid){    //更改密码
			$this->db->where('t_workid',$workid);  
			$this->db->update('t_pwd', $arr);
		   return $this->db->affected_rows();
		}
		public function change_teacher_res($arr,$workid){  //更改资料
			$this->db->where('t_workid',$workid);  
			$this->db->update('t_teacher', $arr);
			return $this->db->affected_rows();
		}
		public function checkAdmin($workid){  //检测是否是管理员
			$query=$this->db->query("select t_workid from t_admin where t_workid='$workid'");
			return $query->row();
		}
		public function get_all_teachers($showPage,$begin){  //获取所有教师
			$this->db->select('*');
            $this->db->from('t_teacher');
            $this->db->limit($showPage,$begin);
			return $this->db->get()->result();
		}
		public function get_all_teachers_count(){ //获得教师数量
			$this->db->select('*');
            $this->db->from('t_teacher');
            return $this->db->count_all_results();
		}
		public function get_all_admins($showPage,$begin){  //获取所有管理员
			$this->db->select('*');
            $this->db->from('t_admin');
            $this->db->join('t_teacher','t_teacher.t_workid=t_admin.t_workid');
            $this->db->limit($showPage,$begin);
			return $this->db->get()->result();
		}
		public function get_all_admins_count(){	 //获取管理员数量
			$this->db->select('*');
            $this->db->from('t_admin');
            return $this->db->count_all_results();
		}
		public function set_admin($admin){   //提升管理员
			$this->db->insert('t_admin',$admin);
			return $this->db->affected_rows();
		}
		public function set_message($arr){  //设置反馈意见
			$this->db->insert('t_message',$arr);
			return $this->db->affected_rows();
		}
		public function get_message($workid){ //教师获取反馈信息
			$query=$this->db->query("select * from t_message where t_workid='$workid'");
			return $query->result();
		}
		public function get_all_message($showPage,$begin){  //获取所有反馈信息
			$this->db->select('*');
            $this->db->from('t_message');
            $this->db->order_by('t_id','DESC');
            $this->db->limit($showPage,$begin);
			return $this->db->get()->result();
		}
		public function get_all_message_count(){	 //获取反馈信息数量
			$this->db->select('*');
            $this->db->from('t_message');
            return $this->db->count_all_results();
		}
		public function update_message($arr,$t_workid,$t_message){  //更改资料
			$this->db->where('t_workid',$t_workid); 
			$this->db->where('t_message',$t_message); 
			$this->db->update('t_message', $arr);
			return $this->db->affected_rows();
		}
		public function get_teacher_res2($workid){ //教师获取反馈信息
			$this->db->select('*');
            $this->db->from('t_teacher');
            $this->db->where('t_workid',$workid);
            return $this->db->get()->result();
		}
		public function delAdmin($t_workid){
			$query=$this->db->query("delete from t_admin where t_workid='$t_workid'");
			return $query;
		}		
	}
?>
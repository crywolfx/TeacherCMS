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
	}
?>
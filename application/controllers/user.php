<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL^E_NOTICE);  //notice错误
class User extends CI_Controller {
	public function __construct(){
			parent::__construct();
			$this->load->model('user_model'); 
		}
	public function index()
	{
		$this->load->view('login');
	}
	public function regUser()  //注册帐号
	{
		$this->load->view('regUser');
	}

	public function reg()  //填写详细信息
	{    
		if($_SESSION['logged_in']=='TRUE'){
				$this->load->view('reg');
			}else{
				$this->load->view('regUser');
			}	
	}
	public function teacher()  //教师登陆
	{    
		if($_SESSION['logged_in']=='TRUE'){
				$this->load->view('teacher');
			}else{
				$this->load->view('login');
			}	
	}
	public function admin()  //管理员登录
	{   
		if($_SESSION['logged_in']=='TRUE'){
				$this->load->view('admin');
			}else{
				$this->load->view('login');
			}	
	}
	public function change(){  //修改密码页面
		$this->load->view('change');
	}
	public function logout(){  //登出操作
		$this->session->sess_destroy();
		redirect('user/index');
		// $this->load->view('login');
	}
	public function do_regUser(){   //完成帐号注册
			$uname=$this->input->post('uname');
			$upass=$this->input->post('upass');
			$arr=array(
				't_workid'=>$uname,
				't_pass'=>$upass,
			);
			$rs=$this->user_model->get_name($uname);
			if($rs){
				 echo "<script>alert('用户名已存在');</script>";
				 // redirect('user/regUser');
				 $this->load->view('regUser');
			}else{
				//redirect('user/login');
				$query=$this->user_model->setUser($arr);
				if($query){
					$user=array(
					't_workid'=>$uname,
					'logged_in'=>TRUE,
				);
				 	$this->session->set_userdata($user);	
					redirect('user/reg');
				}
				
			}
	}
	public function do_reg(){    //完成详细信息注册
		$name=$this->input->post('name');//姓名
		$sex=$this->input->post('sex');//性别
		$birth=$this->input->post('birth');//出生年月
		$nationality=$this->input->post('nationality');//民族
		$IDCard=$this->input->post('IDCard');//身份证号
		$address=$this->input->post('address');//通信地址
		$height=$this->input->post('height');//身高
		$weight=$this->input->post('weight');//体重
		$native=$this->input->post('native');//籍贯
		$health=$this->input->post('health');//健康状况
		$call=$this->input->post('call');//联系电话
		$email=$this->input->post('email');//邮箱
		$workyear=$this->input->post('workyear');//入职年份
		$qualification=$this->input->post('qualification');//最高学历
		$school=$this->input->post('school');//			学校
		$division=$this->input->post('division');	//	所属部门
		$title=$this->input->post('title');			//职称
		$politics=$this->input->post('politics');  //政治面貌
		$t_workid=$_SESSION['t_workid'];
		$arr = array(
			't_workid' =>$t_workid ,
			't_name' =>$name ,
			't_sex' =>$sex ,
			't_both' =>$birth ,
			't_nationality' =>$nationality ,
			't_idcard' =>$IDCard ,
			't_calladderss' =>$address ,
			't_height' =>$height ,
			't_weight' =>$weight ,
			't_native' =>$native ,
			't_health' =>$health ,
			't_call' =>$call ,
			't_email' =>$email ,
			't_inworkyear' =>$workyear ,
			't_qualification' =>$qualification ,
			't_school' =>$school ,
			't_department' =>$division ,
			't_title' =>$title ,
			't_politics' =>$politics ,
		);
		$query=$this->user_model->setUserFile($arr);
		if($query){
			$user=array(
					't_workid'=>$uname,
					'logged_in'=>TRUE,
					't_name'=>$name
				);
			$this->session->set_userdata($user);
						// redirect('user/teacher');  
			//直接注册完成后跳登录页面修改密码会出问题
			// $this->load->view('login');
			redirect('user/index');
		}
	}
	public function teacher_login(){     //教师验证登录
			$uname=$this->input->post('user');  //workid
			$upass=$this->input->post('pass');
			$arr = array('t_workid' =>$uname,'t_pass'=>$upass);
			$rs=$this->user_model->checkLogin($arr);
			if($rs){
			  $res=$this->user_model->get_teacher_res($uname);				
				 	$this->session->set_userdata($res[0]);
				 	$user=array(
					  'logged_in'=>TRUE,
				     );
				 	$this->session->set_userdata($user);
				 	$this->load->view('teacher');  
			}else{
				echo "<script>alert('用户名或者密码不正确');</script>";
				$this->load->view('login');
			}
	}
	public function admin_login(){    //管理员登录
		$uname=$this->input->post('user2');
		$upass=$this->input->post('pass2');
		$isAdmin=$this->user_model->checkAdmin($uname);
		if($isAdmin){
			$arr = array('t_workid' =>$uname,'t_pass'=>$upass);
			$rs=$this->user_model->checkLogin($arr);
			if($rs){
			  $res=$this->user_model->get_teacher_res($uname);			
				 	$this->session->set_userdata($res[0]);
				 	$user=array(
					  'logged_in'=>TRUE,
				     );
				 	$this->session->set_userdata($user);
				 	$this->load->view('admin');
			}else{
				echo "<script>alert('用户名或者密码不正确');</script>";
				$this->load->view('login');
			}
		}else{
			echo "<script>alert('你不是管理员');</script>";
			$this->load->view('login');
		}
	}
	public function do_change_pwd(){     //修改密码操作
			$oldpwd=$this->input->post('oldpwd');
			$newpwd=$this->input->post('newpwd');
			$workid=$_SESSION['t_workid'];
			$arr=array(
				't_workid'=>$workid,
				't_pass'=>$oldpwd,
			);
			$oldcheck=$this->user_model->checkLogin($arr);
			if($oldcheck){
				$arr2=array('t_pass'=>$newpwd);
				$rs=$this->user_model->update_new_pwd($arr2,$workid);
				if($rs){
					echo "<script>alert('成功修改密码,请重新登录！')</script>";
					$this->load->view('login');
				}
			}else{
				echo "<script>alert('密码错误!登录状态异常，请重新登录!')</script>";
				$this->load->view('login');
			}
		}
    public function change_teacher_res(){   //修改教师资料
    	$address=$this->input->post('address');//通信地址
		$height=$this->input->post('height');//身高
		$weight=$this->input->post('weight');//体重
		$health=$this->input->post('health');//健康状况
		$call=$this->input->post('call');//联系电话
		$email=$this->input->post('email');//邮箱
		$qualification=$this->input->post('qualification');//最高学历
		$school=$this->input->post('school');//			学校
		$department=$this->input->post('department');	//	所属部门
		$title=$this->input->post('title');			//职称
		$politics=$this->input->post('politics');  //政治面貌
		$workid=$_SESSION['t_workid'];
		$arr = array(
			't_calladderss' =>$address ,
			't_height' =>$height ,
			't_weight' =>$weight ,
			't_health' =>$health ,
			't_call' =>$call ,
			't_email' =>$email ,
			't_qualification'=>$qualification,
			't_school' =>$school ,
			't_department' =>$department ,
			't_title' =>$title ,
			't_politics' =>$politics ,
			);
		$rs=$this->user_model->change_teacher_res($arr,$workid);
		if($rs){
			echo "success";
		}		
    }
    public function get_all_teachers(){   //获取所有老师
    	   $page=$this->input->post('page');
    	   $count=$this->user_model->get_all_teachers_count();
    	   $showPage=$this->input->post('showPage');
    	   $pageNum=ceil($count/$showPage);
		   $rs=$this->user_model->get_all_teachers($showPage,($page-1)*$showPage);
		   if($page==$pageNum){
		   	   	$data = array('teacher' =>$rs ,'isEnd'=>true,'pageNum'=>$pageNum );
		   }else{
		   		$data= array('teacher' =>$rs ,'isEnd'=>false,'pageNum'=>$pageNum );
		   }
		    echo json_encode($data);
		}
		public function get_all_admins(){  //获取管理员
		   $page=$this->input->post('page');
    	   $count=$this->user_model->get_all_admins_count();
    	   $showPage=$this->input->post('showPage');
    	   $pageNum=ceil($count/$showPage);
		   $rs=$this->user_model->get_all_admins($showPage,($page-1)*$showPage);
		   if($page==$pageNum){
		   	   	$data = array('admin' =>$rs ,'isEnd'=>true ,'pageNum'=>$pageNum);
		   }else{
		   		$data= array('admin' =>$rs ,'isEnd'=>false ,'pageNum'=>$pageNum);
		   }
		    echo json_encode($data);
		}
	public function set_admin(){  //设置管理员
		$workid=$this->input->post('workid');
		$res=$this->user_model->checkAdmin($workid);
		if($res){
			echo "fail";
		}else{
		$admin = array('t_workid' =>$workid,'t_discribution'=>'管理员');
		$rs=$this->user_model->set_admin($admin);
		if($rs){
			echo "success";
		 	}
		}	
	}
	public function set_message(){   //发送反馈信息
		$t_workid=$_SESSION['t_workid'];
		$t_date=$this->input->post('t_date');
		$t_call=$this->input->post('t_call');
		$t_message=$this->input->post('t_message');
		$arr=array(
				't_workid'=>$t_workid,
				't_date'=>$t_date,
				't_call'=>$t_call,
				't_message'=>$t_message,
			);
		$rs=$this->user_model->set_message($arr);
		if($rs){
			echo "success";
		}
	}
	public function get_message(){  //教师获取反馈信息
		$t_workid=$_SESSION['t_workid'];
		$rs=$this->user_model->get_message($t_workid);
		if($rs){
			echo json_encode($rs);
		}
	}
	public function get_all_message(){  //获取反馈信息
		   $page=$this->input->post('page');
    	   $count=$this->user_model->get_all_message_count();
    	   $showPage=$this->input->post('showPage');
    	   $pageNum=ceil($count/$showPage);
		   $rs=$this->user_model->get_all_message($showPage,($page-1)*$showPage);
		   if($page==$pageNum){
		   	   	$data = array('message' =>$rs ,'isEnd'=>true ,'pageNum'=>$pageNum);
		   }else{
		   		$data= array('message' =>$rs ,'isEnd'=>false ,'pageNum'=>$pageNum);
		   }
		    echo json_encode($data);
		}
	public function update_message(){   //管理员回复
		$t_admin=$_SESSION['t_workid'];
		$t_workid=$this->input->post('t_workid');
		$t_message=$this->input->post('t_message');
		$t_answer=$this->input->post('t_answer');
		$arr = array('t_admin' =>$t_admin ,'t_answer'=>$t_answer);
		$rs=$this->user_model->update_message($arr,$t_workid,$t_message);
		if($rs){
			echo "success";
		}
	}
	public function get_teacher_res(){    //管理员获取老师详细信息
		$t_workid=$this->input->post('t_workid');
		$rs=$this->user_model->get_teacher_res2($t_workid);
		if($rs){
			echo json_encode($rs);
		}
	}
	public function delAdmin(){  //超级管理员删除普通管理员
		$t_workid=$this->input->post('t_workid');
		$rs=$this->user_model->delAdmin($t_workid);
		if($rs){
			echo "success";
		}
	}
}
<?php  
   if($_SESSION['logged_in']){
   	 $name=$_SESSION['t_name'];
   }
   echo $name;
?>
<base href = "<?php echo base_url();?>"/> 
<a href="user/change" title="">修改密码</a>
<a href="user/logout" title="">退出登录</a>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/teacher.js"></script>
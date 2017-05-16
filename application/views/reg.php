<base href = "<?php echo base_url();?>"/> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>教师注册</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="assets/css/reg.css">
</head>
<body>
<div id="content">
<h3>填写详细信息完成注册</h3>
	<div id="mainForm">
		<form action="user/do_reg" method="post" accept-charset="utf-8">
			<table>
				<tbody>
					<tr>
						<td class="text">姓名:</td>
						<td><input type="text" pattern="^[A-Za-z\u4e00-\u9fa5]+$" placeholder="不能存在数字和特殊字符" name="name"></td>
					</tr>
					<tr>
						<td class="text">性别:</td>
						<td>
							<input type="radio" checked="checked" name="sex" value="女">女
							<input type="radio" name="sex" value="男">男
						</td>
					</tr>
					<tr>
						<td>出生年月:</td>
						<td><input type="date" placeholder="2000-01-01" name="birth"></td>
					</tr>
					<tr>
						<td class="text">民族:</td>
						<td><input type="text" name="nationality"></td>
					</tr>
					<tr>
						<td class="text">身份证号:</td>
						<td><input type="text" pattern="^(\d{6})(\d{4})(\d{2})(\d{2})(\d{3})([0-9]|X)$"  name="IDCard"></td>
					</tr>
					<tr>
						<td class="text">通信地址:</td>
						<td><input type="text" name="address"></td>
					</tr>
					<tr>
						<td class="text">身高(cm):</td>
						<td><input type="number" name="height"></td>
					</tr>
					<tr>
						<td class="text">体重(kg):</td>
						<td><input type="number" name="weight"></td>
					</tr>
					<tr>
						<td class="text">籍贯:</td>
						<td><input type="text" name="native"></td>
					</tr>
					<tr>
						<td class="text">健康状况:</td>
						<td>
						<select name="health">
							<option value="良好">良好</option>
							<option value="一般">一般</option>
							<option value="差">差</option>
						</select>
						</td>
					</tr>
					<tr>
						<td class="text">联系电话:</td>
						<td><input type="tel"  name="call"></td>
					</tr>
					<tr>
						<td class="text">邮箱:</td>
						<td><input type="email" placeholder="xx@xx.com" name="email"></td>
					</tr>
					<tr>
						<td class="text">入职年份:</td>
						<td><input type="date" placeholder="2000-01-01" class="change" name="workyear"></td>
					</tr>
					<tr>
						<td class="text">最高学历:</td>
						<td>
							<select name="qualification">
								<option value="大专">大专</option>
								<option value="本科">本科</option>
								<option value="硕士">硕士</option>
								<option value="博士">博士</option>
								<option value="其他">其他</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="text">学校:</td>
						<td><input type="text" name="school"></td>
					</tr>
					<tr>
						<td class="text">所属部门:</td>
						<td>
						<select  name="division">
							<option value="教务处">教务处</option>
							<option value="后勤部">后勤部</option>
							<option value="办公室">办公室</option>
							<option value="公安部">公安部</option>
							<option value="宿管科">宿管科</option>
							<option value="组织部">组织部</option>
							<option value="学生处">学生处</option>
							<option value="学工部">学工部</option>
							<option value="宣传部">宣传部</option>
							<option value="校医院">校医院</option>
							<option value="档案馆">档案馆</option>
							<option value="图书馆">图书馆</option>
							<option value="就业指导办">就业指导办</option>
							<option value="其他">其他</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="text">职称:</td>
						<td>
							<select name="title">
								<option value="助教">助教</option>
								<option value="讲师">讲师</option>
								<option value="副教授">副教授</option>
								<option value="教授">教授</option>
								<option value="其他">其他</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="text">政治面貌:</td>
						<td>
							<select name="politics">
								<option value="中共党员">中共党员</option>
								<option value="共青团员">共青团员</option>
								<option value="人民群众">人民群众</option>
								<option value="其他">其他</option>
							</select>
						</td>
					</tr>
				</tbody>
			</table>
			<input type="submit" class="reg" name="" value="确定无误，点击注册">
		</form>
	</div>
</div>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('.reg').on('click',function(){
			// if(!$('input').val()){
			// 	alert("请检查未填项");
			// 	return false;
			// }
			var flag=true;
			for(var i=0;i<$('input').length;i++){
				if(!$($('input')[i]).val()){
					flag=false;
					break;
				}
			}
			if(!flag){
				alert("请检查未填项或未按要求填写项目")
				return false;
			}
		});
	})
</script>
</body>
</html>
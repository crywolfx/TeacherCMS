 <base href="<?php echo site_url();?>">
<!doctype html>
<html lang="ch">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="左右结构项目，属于大人员的社交工具">
        <meta name="keywords" content="左右结构项目 社交 占座 ">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <script src="assets/js/jquery.min.js"></script>
        <title>WEB教师信息管理系统</title>
        <link rel="stylesheet" type="text/css" href="assets/css/common.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/slide.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/flat-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.nouislider.css">
         <script>
             $(function() {
                $(".meun-item").click(function() {
                    $(".meun-item").removeClass("meun-item-active");
                    $(this).addClass("meun-item-active");
                    var itmeObj = $(".meun-item").find("img");
                    itmeObj.each(function() {
                        var items = $(this).attr("src");
                        items = items.replace("_grey.png", ".png");
                        items = items.replace(".png", "_grey.png");
                        $(this).attr("src", items);
                    });
                    var attrObj = $(this).find("img").attr("src");
              
                    attrObj = attrObj.replace("_grey.png", ".png");
                    $(this).find("img").attr("src", attrObj);
                });
                $("#topAD").click(function() {
                    $("#topA").toggleClass(" glyphicon-triangle-right");
                    $("#topA").toggleClass(" glyphicon-triangle-bottom");
                });
                $("#topBD").click(function() {
                    $("#topB").toggleClass(" glyphicon-triangle-right");
                    $("#topB").toggleClass(" glyphicon-triangle-bottom");
                });
                $("#topCD").click(function() {
                    $("#topC").toggleClass(" glyphicon-triangle-right");
                    $("#topC").toggleClass(" glyphicon-triangle-bottom");
                });
                $(".toggle-btn").click(function() {
                    $("#leftMeun").toggleClass("show");
                    $("#rightContent").toggleClass("pd0px");
                });
              });
        </script>
    </head>
<body>
        <div id="wrap">
            <!-- 左侧菜单栏目块 -->
            <div class="leftMeun" id="leftMeun">
                <div id="logoDiv">
                    <p id="logoP"><img id="logo" alt="左右结构项目" src="assets/img/logo.png"><span>教师管理系统</span></p>
                </div>
                <div id="personInfor">
                    <p id="userName"><?php echo $_SESSION['t_name'];?>老师您好！</p>
                    <p><span><?php echo $_SESSION['t_workid'];?></span> </p>
                    <p>
                        <a href="user/logout">退出登录</a>
                    </p>
                </div>
                <div class="meun-title">账号管理</div>
                <div class="meun-item meun-item-active" id="refresh" href="#stud" aria-controls="stud" role="tab" data-toggle="tab"><img src="assets/img/icon_card_grey.png">个人信息</div>
                <div class="meun-item" href="#change" aria-controls="change" role="tab" data-toggle="tab"><img src="assets/img/changeFile.png">修改信息</div>
                <div class="meun-item" href="#chan" aria-controls="chan" role="tab" data-toggle="tab"><img src="assets/img/chngePwd.png">修改密码</div>
                <div class="meun-item" href="#feedback" aria-controls="feedback" role="tab" data-toggle="tab"><img src="assets/img/xinxifankui.png">意见反馈</div>
            </div>
            <!-- 右侧具体内容栏目 -->
            <div id="rightContent">
                <a class="toggle-btn" id="nimei">
                    <i class="glyphicon glyphicon-align-justify"></i>
                </a>
                <!-- Tab panes -->
                <div class="tab-content">
            <!--人员管理模块-->
            <div role="tabpanel" class="tab-pane active" id="stud">
                <div class="check-div form-inline">
                    <div class="col-xs-5">
                    </div>
                </div>
                <div class="data-div">
                    <div class="row tableHeader">
                        <div class="col-xs-11 " style="text-align: center">
                        	基本信息
                        </div>
                    </div>
                    <div class="tablebody">

                        <div class="row">
                        	<div class="col-md-1">
                        		
                            </div>
                            <div class="col-md-2 col-xs-2 ">
                                工号：<?php echo $_SESSION['t_workid'];?>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                姓名：<?php echo $_SESSION['t_name'];?>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                性别： <?php echo $_SESSION['t_sex'];?>
                            </div>
                            <div class="col-md-3 col-xs-3">
                                出身年月： <?php echo $_SESSION['t_both'];?>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                民族： <?php echo $_SESSION['t_nationality'];?>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-md-1">
                        		
                            </div>
                            <div class="col-md-5 col-xs-5">
                                身份证号码：<?php echo $_SESSION['t_idcard'];?>
                            </div>
                            <div class="col-md-5 col-xs-5">
                                通信地址： <?php echo $_SESSION['t_calladderss'];?>
                            </div>
                        </div>
                       	<div class="row">
                       	<div class="col-md-1">
                        		
                            </div>
                            <div class="col-md-3 col-xs-3">
                              	身高： <?php echo $_SESSION['t_height'];?>cm
                            </div>
                            <div class="col-md-3 col-xs-3">
                              	体重： <?php echo $_SESSION['t_weight'];?>kg
                            </div>
                            <div class="col-md-3 col-xs-3">
                              	健康状况： <?php echo $_SESSION['t_health'];?>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-md-1">
                        		
                            </div>
                            <div class="col-md-5 col-xs-5">
                                联系电话： <?php echo $_SESSION['t_call'];?>
                            </div>
                            <div class="col-md-5 col-xs-5">
                                联系邮箱： <?php echo $_SESSION['t_email'];?>
                            </div>
                            <div class="col-xs-2">
                              	
                            </div>
                            <div class="col-xs-2">
                              	
                            </div>
                            <div class="col-xs-2">
                              	
                            </div>
                        </div>

                    </div>
                    <div class="row tableHeader">
                        <div class="col-xs-11 " style="text-align: center">
                        	职业信息
                        </div>
                    </div>
                    <div class="tablebody">

                        <div class="row">
                        	<div class="col-md-1">
                        		
                            </div>
                            <div class="col-md-2 col-xs-2 ">
                                最高学位： <?php echo $_SESSION['t_qualification'];?>
                            </div>
                            <div class="col-md-3 col-xs-3">
                                工作时间： <?php echo $_SESSION['t_inworkyear'];?>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                工作单位： <?php echo $_SESSION['t_school'];?>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-1">
                        		
                            </div>
                            <div class="col-md-3 col-xs-3">
                                工作部门： <?php echo $_SESSION['t_department'];?>
                            </div>
                            <div class="col-md-3 col-xs-3">
                                职称： <?php echo $_SESSION['t_title'];?>
                            </div>
                            <div class="col-md-3 col-xs-3">
                                政治面貌： <?php echo $_SESSION['t_politics'];?>
                            </div>
                            <div class="col-xs-2">
                                
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!--人员信息修改模块-->
            <div role="tabpanel" class="tab-pane" id="change">
                <div class="check-div form-inline">
                    <div class="col-xs-5">
                    </div>
                </div>
                <div class="data-div">
                    <div class="row tableHeader">
                        <div class="col-xs-11 col-md-11" style="text-align: center">
                        	基本信息
                        </div>
                    </div>
                    <div class="tablebody">
                        <div class="row">
                        	<div class="col-md-1">
                        		
                            </div>
                            <div class="col-md-2 col-xs-2">
							 <span style="color: red">*</span>工号：<?php echo $_SESSION['t_workid'];?>
                            </div>
                            <div class="col-md-2 col-xs-2">
                             <span style="color: red">*</span>姓名：<?php echo $_SESSION['t_name'];?>
                            </div>
                            <div class="col-md-2 col-xs-2">
                            <span style="color: red">*</span>性别： <?php echo $_SESSION['t_sex'];?>
                            </div>
                            <div class="col-md-3 col-xs-3">
                             <span style="color: red">*</span>出身年月： <?php echo $_SESSION['t_both'];?>
                            </div>
                            <div class="col-md-2 col-xs-2">
                             <span style="color: red">*</span>民族： <?php echo $_SESSION['t_nationality'];?>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-md-1">
                        		
                            </div>
                            <div class="col-md-5 col-xs-5">
                            <span style="color: red">*</span>身份证号码：<?php echo $_SESSION['t_idcard'];?>
                            </div>
                            <div class="col-md-5 col-xs-5">
                                通信地址：  <input style="height: 30px;width: 170px;border: 0;" type="text" value="<?php echo $_SESSION['t_calladderss'];?>" class="updateForm" name="address" placeholder="<?php echo $_SESSION['t_calladderss'];?>">
                            </div>
                        </div>
                        <div class="row">
                       	 <div class="col-md-1">
                        		
                            </div>
                            <div class="col-md-3 col-xs-3">
                              	身高： <input style="height: 30px;width: 30px;border: 0;" type="text" value="<?php echo $_SESSION['t_height'];?>" name="height" class="updateForm" placeholder="<?php echo $_SESSION['t_height'];?>">cm
                            </div>
                            <div class="col-md-3 col-xs-3">
                              	体重：  <input style="height: 30px;width: 30px;border: 0;" type="text" value="<?php echo $_SESSION['t_weight'];?>" name="weight" class="updateForm" placeholder="<?php echo $_SESSION['t_weight'];?>">kg
                            </div>
                            <div class="col-md-3 col-xs-3">
                              	健康状况：  						<select style="border: 0" class="updateForm" name="health" value="<?php echo $_SESSION['t_health'];?>">
                              											<option value="<?php echo $_SESSION['t_health'];?>"><?php echo $_SESSION['t_health'];?></option>
																		<option value="良好">良好</option>
																		<option value="一般">一般</option>
																		<option value="差">差</option>
																	</select>
                            </div>
                        </div>
                        <div class="row">
                       	 <div class="col-md-1 ">
                        		
                            </div>
                            <div class="col-md-5 col-xs-5">
                                联系电话：<input class="updateForm" style="height: 30px;width: 160px;border: 0;" type="text" value="<?php echo $_SESSION['t_call'];?>" name="call" placeholder="<?php echo $_SESSION['t_call'];?>">
                            </div>
                            <div class="col-md-5 col-xs-5">
                                联系邮箱：<input class="updateForm" style="height: 30px;width: 160px;border: 0;" type="text" value="<?php echo $_SESSION['t_email'];?>" name="email" placeholder="<?php echo $_SESSION['t_email'];?>">
                            </div>
                        </div>

                    </div>
                    <div class="row tableHeader">
                        <div class="col-xs-11 " style="text-align: center">
                        	职业信息
                        </div>
                    </div>
                    <div class="tablebody">

                        <div class="row">
                        <div class="col-md-1">
                        		
                            </div>
                            <div class="col-md-2 col-xs-2">
                                最高学位： <select class="updateForm" style="border: 0" name="qualification" value="<?php echo $_SESSION['t_qualification'];?>">
                                				<option value="<?php echo $_SESSION['t_qualification'];?>"><?php echo $_SESSION['t_qualification'];?></option>
												<option value="大专">大专</option>
												<option value="本科">本科</option>
												<option value="硕士">硕士</option>
												<option value="博士">博士</option>
												<option value="其他">其他</option>
											</select>
                            </div>
                            <div class="col-md-3 col-xs-3">
                            <span style="color: red">*</span>工作时间： <?php echo $_SESSION['t_inworkyear'];?>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                工作单位： <input class="updateForm" style="height: 30px;width: 160px;border: 0;" type="text" name="school"  value="<?php echo $_SESSION['t_school'];?>" placeholder="<?php echo $_SESSION['t_school'];?>">
                            </div>
                          </div>
                       <div class="row">
                        <div class="col-md-1">
                        		
                        </div>
                            <div class="col-md-3 col-xs-3">
                                工作部门： <select class="updateForm" style="border: 0" name="department" value="<?php echo $_SESSION['t_department'];?>">
                             <option value="<?php echo $_SESSION['t_department'];?>"><?php echo $_SESSION['t_department'];?></option>   
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
                            </div>
                        	<div class="col-md-3 col-xs-3">
                                职称： <select class="updateForm" style="border: 0" name="title" value="<?php echo $_SESSION['t_title'];?>">
                                 <option value="<?php echo $_SESSION['t_title'];?>"><?php echo $_SESSION['t_title'];?></option>
								<option value="助教">助教</option>
								<option value="讲师">讲师</option>
								<option value="副教授">副教授</option>
								<option value="教授">教授</option>
								<option value="其他">其他</option>
							</select>
                            </div>
                            <div class="col-md-3 col-xs-3">
                                政治面貌： <select class="updateForm" style="border: 0" name="politics" value="<?php echo $_SESSION['t_politics'];?>">
                                <option value="<?php echo $_SESSION['t_politics'];?>"><?php echo $_SESSION['t_politics'];?></option>
								<option value="中共党员">中共党员</option>
								<option value="共青团员">共青团员</option>
								<option value="人民群众">人民群众</option>
								<option value="其他">其他</option>
							</select>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <input style="display: block;position: fixed;left: 50%;width: 100px;" type="submit" value="提交修改"> -->
				<button id="changeForm" style="display: block;position: fixed;left: 50%;width: 100px;">提交修改</button>
            </div>
            <!-- 修改密码模块 -->
            <div role="tabpanel" class="tab-pane" id="chan">
                <div class="check-div">

                </div>
                <div style="padding: 50px 0;margin-top: 50px;background-color: #fff; text-align: right;width: 420px;margin: 50px auto;">
                    <form class="form-horizontal" action="user/do_change_pwd" method="post">
                        <div class="form-group">
                            <label for="sKnot" class="col-xs-4 control-label">原密码：</label>
                            <div class="col-xs-5">
                                <input type="password" name="oldpwd"  class="form-control input-sm duiqi oldpwd" id="sKnot" placeholder="" style="margin-top: 7px;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sKnot" class="col-xs-4 control-label">新密码：</label>
                            <div class="col-xs-5">
                                <input type="password" name="newpwd"  class="form-control input-sm duiqi newpwd" id="sKnot" placeholder="" style="margin-top: 7px;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sKnot" class="col-xs-4 control-label">重复密码：</label>
                            <div class="col-xs-5">
                                <input type="password" name="renewpwd"  class="form-control input-sm duiqi renewpwd" id="sKnot" placeholder="" style="margin-top: 7px;">
                                 <p id="tip" style="color: red;margin-right: 20px;position: absolute;display: none;">两次密码不一致</p>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <div class="col-xs-offset-4 col-xs-5" style="margin-left: 169px;">
                                <button type="reset" class="btn btn-xs btn-white">取 消</button>
                                <button type="submit" class="btn btn-xs btn-green save">保存</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- 意见反馈模块 -->
            <div role="tabpanel" class="tab-pane" id="feedback">
                <div class="check-div form-inline">
                    <div class="col-xs-5">
                    </div>
                </div>
                <div class="data-div">
                    <div class="row tableHeader">
                        <div class="col-xs-11 col-md-11" style="text-align: center">
                                    往期意见
                        </div>
                    </div>
                    <div class="tablebody" id="msgShow">
                    <script type="text/html" id="msg">
                            <div style="background: #eee;width: 800px; margin: 0 auto;word-wrap:break-word; word-break:break-all; ">
                                <ul>
                                    <li>日期:{{t_date}}</li>
                                    <li>内容:{{t_message}}</li>
                                    <li>管理员工号:{{t_admin}}</li>
                                    <li>管理员反馈:{{t_answer}}</li>
                                </ul>
                            </div>
                    </script>
                    </div>
                    <div class="row tableHeader">
                        <div class="col-xs-11 " style="text-align: center">
                                 反馈意见
                        </div>
                    </div>
                    <div class="tablebody">
                        <div style="background: #eee;width: 800px; margin: 0 auto;">
                                <table>
                                    <thead>
                                    </thead>
                                    <tbody> 
                                        <tr>
                                            <td style="text-align: right;">日期:</td>
                                            <td><input style="border: 0;background: #eee;margin-left: 20px;" class="getMsg" type="text" name="t_date" id="dateInput" disabled="true"></td>
                                            <td style="text-align: right;">联系方式:</td>
                                            <td><input style="border: 0;background: #eee;margin-left: 20px;" class="getMsg" type="number" name="t_call"></td>
                                        </tr>
                                        <tr>
                                            <textarea class="getMsg" placeholder="在此处填写反馈信息，不得超过200字哦" cols="30" maxlength="200" rows="5" style="width: 800px;border: 0;background: #eee" name="t_message"></textarea>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
                <button id="feedbackBtn" style="display: block;position: fixed;left: 50%;width: 100px;">提交反馈信息</button>
            </div>
        </div>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.nouislider.js"></script>	
<script type="text/javascript" src="assets/js/teacher.js"></script>
<script src="assets/js/template.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/changePwd.js"></script>
<script type="text/javascript" src="assets/js/message.js"></script>
</body>
</html>

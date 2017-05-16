<!doctype html>
<html lang="ch">

    <head>
    	<base href="<?php echo site_url();?>">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="左右结构项目，属于大人员的社交工具">
        <meta name="keywords" content="左右结构项目 社交 占座 ">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>WEB教师信息管理系统</title>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script>
            $(function() {
                $(".meun-item").click(function() {
                    $(".meun-item").removeClass("meun-item-active");
                    $(this).addClass("meun-item-active");
                    var itmeObj = $(".meun-item").find("img");
                    itmeObj.each(function() {
                        var items = $(this).attr("src");
                        items = items.replace("_grey.png", ".png");
                        items = items.replace(".png", "_grey.png")
                        $(this).attr("src", items);
                    });
                    var attrObj = $(this).find("img").attr("src");
                    ;
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
                })
            })
        </script>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/common.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/slide.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/flat-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.nouislider.css">
    </head>

    <body>
        <div id="wrap">
            <!-- 左侧菜单栏目块 -->
            <div class="leftMeun" id="leftMeun">
                <div id="logoDiv">
                    <p id="logoP"><img id="logo" alt="左右结构项目" src="assets/img/logo.png"><span>教师管理系统</span></p>
                </div>
                <div id="personInfor">
                    <p id="userName">管理员：<?php echo $_SESSION['t_name'];?></p>
                    <p><span>工号：<?php echo $_SESSION['t_workid'];?></span> </p>
                    <p>
                        <span style="display: none;" id="adminId"><?php echo $_SESSION['t_workid'];?></span>
                        <a href="user/logout">退出登录</a>
                    </p>
                </div>
                <div class="meun-title">账号管理</div>
                <!-- <div class="meun-item meun-item-active" href="#sour" aria-controls="sour" role="tab" data-toggle="tab"><img src="assets/img/icon_source.png">资源管理</div> -->
                <div class="meun-item meun-item-active" id="refresh" href="#stud" aria-controls="stud" role="tab" data-toggle="tab"><img src="assets/img/icon_card_grey.png">个人信息</div>
                <div class="meun-item" href="#change" aria-controls="change" role="tab" data-toggle="tab"><img src="assets/img/changeFile.png">修改信息</div>
                <div class="meun-item" href="#char" id="adminManige" aria-controls="char" role="tab" data-toggle="tab"><img src="assets/img/admin.png">权限管理</div>
                <div class="meun-item" href="#user" aria-controls="user" role="tab" data-toggle="tab" id="userManige"><img src="assets/img/teacher.png">教师管理</div>
                <div class="meun-item" href="#feedback" aria-controls="feedback" role="tab" data-toggle="tab" id="messageManige"><img src="assets/img/xinxifankui.png">信息反馈</div>
                <div class="meun-item" href="#chan" aria-controls="chan" role="tab" data-toggle="tab"><img src="assets/img/chngePwd.png">修改密码</div>
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
                                健康状况：                       <select style="border: 0" class="updateForm" name="health" value="<?php echo $_SESSION['t_health'];?>">
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
                    <!-- 权限管理模块 -->
            <div role="tabpanel" class="tab-pane" id="char">

                        <div class="check-div">
                            <!-- <button class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#addChar">添加权限</button> -->
                        </div>
                        <div class="data-div">
                            <div class="row tableHeader" style="text-align: center">
                                <div class="col-xs-1 ">
                                    编码
                                </div>
                                <div class="col-xs-1">
                                    工号
                                </div>
                                <div class="col-xs-1">
                                    姓名
                                </div>
                                <div class="col-xs-2">
                                    邮箱
                                </div>
                                <div class="col-xs-4">
                                    描述
                                </div>
                                <div class="col-xs-2">
                                    操作
                                </div>
                            </div>
                            <div class="tablebody" style="text-align: center">
                            	
                            	<script type="text/html" id="admin-list">
								<div class="row adminP">
									   <div class="col-xs-1 ">
									       {{id}}
									   </div>
									   <div class="col-xs-1">
									   </span>
									   <span>{{workid}}</span>
									   </div>
	                            	  <div class="col-xs-1">
	                                    <span>{{name}}</span>
	                            	  </div>
									<div class="col-xs-2">
	                                    <span>{{call}}</span>
	                            	</div>
	                            	<div class="col-xs-4">
	                                {{discribution}}
	                            	</div>
		                            <div class="col-xs-2">
		                                <button class="btn btn-success btn-xs delAdmin" data-toggle="modal">删除</button>
		                            </div>
	                        	</div>
								</script>
                 </div>

                  </div>
                <!--页码块-->
                <footer class="footer">
                    <ul class="pagination">
                        <li class="gray" id="adminThisPageCount">
                            当前是第1页
                        </li>
                        <li class="gray" id="adminAllPageCount">
                            
                        </li>
                        <li>
                            <i class="glyphicon glyphicon-menu-left" id="aprevPage">
                            </i>
                        </li>
                        <li>
                            <i class="glyphicon glyphicon-menu-right" id="anextPage">
                            </i>
                        </li>
                    </ul>
                </footer>
                <!--增加权限弹出窗口-->
                <div class="modal fade" id="addChar" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">添加权限</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form class="form-horizontal">
                                        <div class="form-group ">
                                            <label for="sName" class="col-xs-3 control-label">权限名：</label>
                                            <div class="col-xs-6 ">
                                                <input type="email" class="form-control input-sm duiqi" id="sName" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="sLink" class="col-xs-3 control-label">描述：</label>
                                            <div class="col-xs-6 ">
                                                <textarea class="form-control input-sm duiqi"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="sOrd" class="col-xs-3 control-label">系统资源：</label>
                                            <div class="col-xs-6">
                                                <input type="" class="form-control input-sm duiqi" id="sOrd" placeholder="">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                                <button type="button" class="btn btn-xs btn-green">保 存</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <!--修改权限弹出窗口-->
                <div class="modal fade" id="changeChar" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">是否删除该管理员</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                                <button type="button" class="btn btn-xs btn-green">确定</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <!--弹出删除权限警告窗口-->
                <div class="modal fade" id="deleteChar" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">提示</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    确定要删除该权限？删除后不可恢复！
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                                <button type="button" class="btn btn-xs btn-danger">保 存</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

            </div>
            <!--用户管理模块-->
            <div role="tabpanel" class="tab-pane" id="user">
                <div class="check-div form-inline">
                    <div class="col-xs-3">
                        <!-- <button class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#addUser">添加用户 </button> -->
                    </div>
                    <div class="col-xs-4">
                        <!-- <input type="text" class="form-control input-sm" placeholder="输入文字搜索">
                        <button class="btn btn-white btn-xs ">查 询 </button> -->
                    </div>
                    <div class="col-lg-3 col-lg-offset-2 col-xs-4" style=" padding-right: 40px;text-align: right;">
                       <!--  <label for="paixu">排序:&nbsp;</label>
                        <select class=" form-control">
                            <option>地区</option>
                            <option>地区</option>
                            <option>班期</option>
                            <option>性别</option>
                            <option>年龄</option>
                            <option>份数</option>
                        </select> -->
                    </div>
                </div>
                <div class="data-div">
                    <div class="row tableHeader">
                        <div class="col-xs-2 ">
                            编号
                        </div>
                        <div class="col-xs-2">
                            工号
                        </div>
                        <div class="col-xs-2">
                            姓名
                        </div>
                        <div class="col-xs-2">
                            部门
                        </div>
                        <div class="col-xs-2">
                            电话
                        </div>
                        <div class="col-xs-2">
                            操作
                        </div>
                    </div>
                    <div class="tablebody">
						<script type="text/html" id="teacher-list">
                        <div class="row teacher">
                            <div class="col-xs-2 ">
                                {{id}}
                            </div>
                            <div class="col-xs-2">
                                {{workid}}
                            </div>
                            <div class="col-xs-2">
                                {{name}}
                            </div>
                            <div class="col-xs-2">
                               {{department}}
                            </div>
                            <div class="col-xs-2">
                                {{call}}
                            </div>
                            <div class="col-xs-2">
                                <button class="btn btn-success btn-xs overTeacher" data-toggle="modal" data-target="#reviseUser">查看</button>
                                <!-- <button class="btn btn-danger btn-xs delTeacher" data-toggle="modal" data-target="#deleteUser">删除</button> -->
                                <button class="btn btn-danger btn-xs setAdminBtn" data-toggle="modal" data-target="#setadmin">设为管理</button>
                            </div>
                        </div>
						</script>
                    </div>

                </div>
                <!--页码块-->
                <footer class="footer">
                    <ul class="pagination">
                        <li class="gray" id="teacherThisPageCount">
                            当前是第1页
                        </li>
                        <li class="gray" id="teacherAllPageCount">
                            
                        </li>
                        <li>
                            <i id="tprevPage" style="cursor: pointer;" class="glyphicon glyphicon-menu-left">
                            </i>
                        </li>
                        <li>
                            <i id="tnextPage" style="cursor: pointer;" class="glyphicon glyphicon-menu-right">
                            </i>
                        </li>
                    </ul>
                </footer>

                <!--弹出添加用户窗口-->
                <div class="modal fade" id="addUser" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">添加用户</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form class="form-horizontal">
                                        <div class="form-group ">
                                            <label for="sName" class="col-xs-3 control-label">用户名：</label>
                                            <div class="col-xs-8 ">
                                                <input type="email" class="form-control input-sm duiqi" id="sName" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="sLink" class="col-xs-3 control-label">真实姓名：</label>
                                            <div class="col-xs-8 ">
                                                <input type="" class="form-control input-sm duiqi" id="sLink" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="sOrd" class="col-xs-3 control-label">电子邮箱：</label>
                                            <div class="col-xs-8">
                                                <input type="" class="form-control input-sm duiqi" id="sOrd" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="sKnot" class="col-xs-3 control-label">电话：</label>
                                            <div class="col-xs-8">
                                                <input type="" class="form-control input-sm duiqi" id="sKnot" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="sKnot" class="col-xs-3 control-label">地区：</label>
                                            <div class="col-xs-8">
                                                <select class=" form-control select-duiqi">
                                                    <option value="">国际关系地区</option>
                                                    <option value="">北京大学</option>
                                                    <option value="">天津大学</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="sKnot" class="col-xs-3 control-label">权限：</label>
                                            <div class="col-xs-8">
                                                <select class=" form-control select-duiqi">
                                                    <option value="">管理员</option>
                                                    <option value="">普通用户</option>
                                                    <option value="">游客</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="situation" class="col-xs-3 control-label">状态：</label>
                                            <div class="col-xs-8">
                                                <label class="control-label" for="anniu">
                                                    <input type="radio" name="situation" id="normal">正常</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <label class="control-label" for="meun">
                                                    <input type="radio" name="situation" id="forbid"> 禁用</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                                <button type="button" class="btn btn-xs btn-green">保 存</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <!--弹出修改用户窗口-->
                <div class="modal fade" id="reviseUser" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">查看用户详细资料</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form class="form-horizontal">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                工号:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_workid"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                姓名:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_name"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                性别:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_sex"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                出生日期:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_born"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                民族:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_nationality"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                政治面貌:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_politics"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                电话号码:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_call"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                电子邮箱:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_email"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                家庭住址:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_calladderss"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                最好学位:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_qualification"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                所在学校:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_school"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                所属部门:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_department"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                职称:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_title"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                入职日期:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_inworkyear"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                籍贯:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_native"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                身高:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_height"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                体重:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="t_weight"></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">确 定</button>
                                <!-- <button type="button" class="btn btn-xs btn-green">保 存</button> -->
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <!--弹出删除用户警告窗口-->
                <div class="modal fade" id="deleteUser" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">提示</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    确定要删除该用户？删除后不可恢复！
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                                <button type="button" class="btn  btn-xs btn-danger">保 存</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

            </div>
            <!-- 信息反馈 -->
            <div role="tabpanel" class="tab-pane" id="feedback">
                <div class="check-div form-inline">
                    <div class="col-xs-3">
                        <!-- <button class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#addUser">添加用户 </button> -->
                    </div>
                    <div class="col-xs-4">
                        <!-- <input type="text" class="form-control input-sm" placeholder="输入文字搜索">
                        <button class="btn btn-white btn-xs ">查 询 </button> -->
                    </div>
                    <div class="col-lg-3 col-lg-offset-2 col-xs-4" style=" padding-right: 40px;text-align: right;">
                        <!-- <label for="paixu">排序:&nbsp;</label>
                        <select class=" form-control">
                            <option>地区</option>
                            <option>地区</option>
                            <option>班期</option>
                            <option>性别</option>
                            <option>年龄</option>
                            <option>份数</option>
                        </select> -->
                    </div>
                </div>
                <div class="data-div">
                    <div class="row tableHeader">
                        <div class="col-xs-2">
                            编号
                        </div>
                        <div class="col-xs-2">
                            工号
                        </div>
                        <div class="col-xs-2">
                            日期
                        </div>
                        <div class="col-xs-2">
                            联系方式
                        </div>
                        <div class="col-xs-4">
                            操作
                        </div>
                    </div>
                    <div class="tablebody" id="amsgShow">
                        <script type="text/html" id="amsg">
                        <div class="row messageP">
                            <div class="col-xs-2">
                                {{id}}
                            </div>
                            <div class="col-xs-2">
                                {{t_workid}}
                            </div>
                            <div class="col-xs-2">
                                {{t_date}}
                            </div>
                            <div class="col-xs-2">
                                {{t_call}}
                            </div>
                            <div class="col-xs-4">
                                <button class="btn btn-success btn-xs seeMsg" data-toggle="modal"  data-target="#r">查看</button>
                                <button class="btn btn-danger btn-xs fbMsg" data-toggle="modal"  data-target="#fbackMsg">回复</button>
                                <button class="btn btn-xs" data-toggle="modal">{{isAnswer}}</button>
                            </div>
                        </div>
                        </script>
                    </div>

                </div>
                <!--页码块-->
                <footer class="footer">
                    <ul class="pagination">
                        <li class="gray" id="messageThisPageCount">
                            当前是第1页
                        </li>
                        <li class="gray" id="messageAllPageCount">
                            
                        </li>
                        <li>
                            <i id="mprevPage" style="cursor: pointer;" class="glyphicon glyphicon-menu-left">
                            </i>
                        </li>
                        <li>
                            <i id="mnextPage" style="cursor: pointer;" class="glyphicon glyphicon-menu-right">
                            </i>
                        </li>
                    </ul>
                </footer>


                <!--弹出回复反馈窗口-->
                <div class="modal fade" id="fbackMsg" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">详细反馈信息</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-xs-2">
                                                内容:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="msgContentC"></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-2">
                                                回复:
                                            </div>
                                            <div class="col-xs-10" style="word-wrap:break-word; word-break:break-all">
                                            <textarea id="sendContentC" style="border: 0" placeholder="在此处回复，不得超过200字哦" cols="25" maxlength="200" rows="8" name="t_message"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
                                <button type="button" class="btn btn-xs btn-green"  data-dismiss="modal" id="sendMsg">发 送</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                 <!--弹出查看反馈窗口-->
                <div class="modal fade" id="r" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">详细反馈信息</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-xs-2">
                                                内容:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="msgContentV"></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-2">
                                                回复:
                                            </div>
                                            <div class="col-xs-8" style="word-wrap:break-word; word-break:break-all">
                                                <p id="sendContentV"></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">确定</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

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
        </div>
    </div>
</div>
<script src="assets/js/jquery.nouislider.js"></script>
<script src="assets/js/admin.js"></script>
<script src="assets/js/template.js"></script>
<script src="assets/js/changePwd.js"></script>
<script type="text/javascript" src="assets/js/teacher.js"></script>
</body>

</html>
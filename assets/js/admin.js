$(function(){
	var Admin = function(id,workid,name,call,discribution){
		this.id = 1;
		this.workid = workid;
		this.name = name;
		this.call = call;
		this.discribution = discribution;
	}
	var Teacher = function(id,workid,name,department,call){
		this.id = 1;
		this.workid = workid;
		this.name = name;
		this.department = department;
		this.call = call;
	}
	function Message(t_id,t_workid,t_date,t_call,t_message,t_admin,t_answer){
	this.id=t_id;
	this.t_workid=t_workid;
	this.t_date=t_date;
	this.t_call=t_call;
	this.t_message=t_message;
	this.t_admin=t_admin;
	this.t_answer=t_answer;
	this.isAnswer="未处理";
	} 
	var teacherComp = {
		$adminList: $('#char .tablebody'),
		$teacherList: $('#user .tablebody'),
		$amsgShow:$('#amsgShow'),
		$userManige: $('#userManige'),
		$adminManige:$('#adminManige'),
		$messageManige:$('#messageManige'),
		$tnextPage:$('#tnextPage'),
		$tprevPage:$('#tprevPage'),
		$anextPage:$('#anextPage'),
		$aprevPage:$('#aprevPage'),
		$mnextPage:$('#mnextPage'),
		$mprevPage:$('#mprevPage'),
		$msgContentC:$('#msgContentC'),
		$sendContentC:$('#sendContentC'),
		$msgContentV:$('#msgContentV'),
		$sendContentV:$('#sendContentV'),
		$sendMsg:$('#sendMsg'),
		messageObj:new Object(),
		teacherPageNum:0, //总页数
		adminPageNum:0,
		msgPageNum:0,
		showPage:8,  //分页，一页显示几条数据,可修改
		teacherNum:0,//序号
		adminNum:0,//序号
		messageNum:0,
		page:1,  //当前页
		adminPage:1,//当前页
		msgPage:1,
		aisEnd:false,
	    isEnd:false,
	    misEnd:false,
		init: function(){
			var _this=this;
			this.loadAllMessage(function(msgPageNum){
				$('#messageAllPageCount').text("共"+msgPageNum+"页");
			});
			this.loadData(function(adminPageNum){
				$('#adminAllPageCount').text("共"+adminPageNum+"页");
			});
			this.loadTeacher(function(teacherPageNum){
				$('#teacherAllPageCount').text("共"+teacherPageNum+"页");
			});
			this.$adminManige.on('click',function(){  //权限管理点击
				this.$adminList.children().remove();
					this.loadData();
			}.bind(this));
			this.$userManige.on('click',function(){  //教师管理点击
				this.$teacherList.children().remove();
					this.loadTeacher();
			}.bind(this));
			this.$messageManige.on('click',function(){  //反馈信息点击
				this.$amsgShow.children().remove();
					this.loadAllMessage();
			}.bind(this));
			this.$amsgShow.on('click','.seeMsg',function(){   //查看详细反馈信息
				var msgContentV=$(this).parents('.messageP').data('t_message');
				var sendContentV=$(this).parents('.messageP').data('t_answer');
				_this.$msgContentV.text(msgContentV);
				_this.$sendContentV.text(sendContentV);
			});
			this.$amsgShow.on('click','.fbMsg',function(){  //回复框
				var messageObj=$(this).parents('.messageP').data();
				_this.messageObj=messageObj;
				var msgContentC=messageObj.t_message;
				_this.$msgContentC.text(msgContentC);
			});
			this.$sendMsg.on('click',function(){      //回复发送按钮点击
					if(!_this.$sendContentC.val()){
						alert("不能回复空消息！");
						return false;
					}else{
						_this.messageObj.t_answer=_this.$sendContentC.val();
						_this.sendAnswer();
					}
			});
			this.$anextPage.on('click',function(){ //管理员下一页
				if(!this.aisEnd){
					this.adminPage++;
					$('#adminThisPageCount').text("当前是第"+this.adminPage+"页");
					this.adminNum=(this.adminPage-1)*this.showPage; 
					this.$adminList.children().remove();
					this.loadData();
				}else{
					alert("没有数据了");
					return false;
				}
			}.bind(this));
			this.$aprevPage.on('click',function(){  //管理员上一页
				if(this.adminPage!=1){
					this.adminPage--;
					$('#adminThisPageCount').text("当前是第"+this.adminPage+"页");
					this.adminNum=(this.adminPage-1)*this.showPage; 
					this.$adminList.children().remove();
					this.loadData();
				}else{
					alert("当前是第1页!");
					return false;
				};
			}.bind(this));
			this.$adminList.on('click','.delAdmin',function(){   //超级管理员删除普通管理员
				var delAdmin=$(this).parents('.adminP').data();
				var adminId=$('#adminId').text();
				if(adminId=="20170001"){
					if(delAdmin.discribution=="超级管理员"){
						alert("不能删除自己！");
						return false;
					}else{
						_this.delAdmin(delAdmin.workid);
					}
				}else{
					alert("你没有权利删除！")
					return false;
				}
			});
			this.$teacherList.on('click','.setAdminBtn',function(){   //提升教师为管理员
				var setAdminId=$(this).parents('.teacher').data('tworkid');
				_this.setAdmin(setAdminId);
			});
			this.$teacherList.on('click','.overTeacher',function(){   //查看教师资料
				var overTeacher=$(this).parents('.teacher').data('tworkid');
				_this.overTeacher(overTeacher,function(data){
						$('#t_workid').text(data.t_workid);
						$('#t_name').text(data.t_name);
						$('#t_sex').text(data.t_sex);
						$('#t_born').text(data.t_both);
						$('#t_nationality').text(data.t_nationality);
						$('#t_politics').text(data.t_politics);
						$('#t_call').text(data.t_call);
						$('#t_email').text(data.t_email);
						$('#t_calladderss').text(data.t_calladderss);
						$('#t_qualification').text(data.t_qualification);
						$('#t_school').text(data.t_school);
						$('#t_department').text(data.t_department);
						$('#t_title').text(data.t_title);
						$('#t_inworkyear').text(data.t_inworkyear);
						$('#t_native').text(data.t_native);
						$('#t_height').text(data.t_height);
						$('#t_weight').text(data.t_weight);
				});
			});
			this.$tnextPage.on('click',function(){   //教师下一页
				if(!this.isEnd){
					this.page++;
					$('#teacherThisPageCount').text("当前是第"+this.page+"页");
					this.teacherNum=(this.page-1)*this.showPage;   
					this.$teacherList.children().remove();
					this.loadTeacher();
				}else{
					alert("没有数据了");
					return false;
				};
			}.bind(this));
			this.$tprevPage.on('click',function(){  //教师上一页
				if(this.page!=1){
					this.page--;
					console.log("111");
					$('#teacherThisPageCount').text("当前是第"+this.page+"页");
		         	this.teacherNum=(this.page-1)*this.showPage;  
					this.$teacherList.children().remove();
					this.loadTeacher();
				}else{
					alert("当前是第1页!");
					return false;
				}
			}.bind(this));
			this.$mnextPage.on('click',function(){   //反馈信息下一页
				if(!this.misEnd){
					this.msgPage++;
					$('#messageThisPageCount').text("当前是第"+this.msgPage+"页");
					console.log(this.msgPage);
					this.messageNum=(this.msgPage-1)*this.showPage;    
					this.$amsgShow.children().remove();
					this.loadAllMessage();
				}else{
					alert("没有数据了");
					return false;
				}
			}.bind(this));
			this.$mprevPage.on('click',function(){  //反馈信息上一页
				if(this.msgPage!=1){
					this.msgPage--;
					$('#messageThisPageCount').text("当前是第"+this.msgPage+"页");
		         	this.messageNum=(this.msgPage-1)*this.showPage;  
					this.$amsgShow.children().remove();
					this.loadAllMessage();
				}else{
					alert("当前是第1页!");
					return false;
				}
			}.bind(this));
		},
		loadData: function(callback){  //加载管理员
			$.post('user/get_all_admins',{page:this.adminPage,showPage:this.showPage},function(data){
				for(var i = 0 ;i< data.admin.length ;i++){
					var admin = new Admin(data.admin[i].id,data.admin[i].t_workid,data.admin[i].t_name,data.admin[i].t_email,data.admin[i].t_discribution);
					admin.id=this.adminNum+i+1;
					this.aisEnd=data.isEnd;
					adminHtml = template('admin-list',admin);
					var $adminHtml = $(adminHtml);
					$adminHtml.data(admin);
					this.$adminList.append($adminHtml);
					callback&&callback(data.pageNum);
				}
			}.bind(this),'json');
		},
		loadTeacher: function(callback){  //加载教师
			$.post('user/get_all_teachers',{page:this.page,showPage:this.showPage},function(data){
				for(var i = 0 ;i< data.teacher.length ;i++){
					var teacher = new Teacher(data.teacher[i].id,data.teacher[i].t_workid,data.teacher[i].t_name,data.teacher[i].t_department,data.teacher[i].t_call);
					teacher.id=this.teacherNum+i+1;
					this.isEnd=data.isEnd;
					this.teacherPageNum=data.pageNum;
					teacherHtml = template('teacher-list',teacher);
					var $teacherHtml = $(teacherHtml);
					$teacherHtml.data('tworkid',teacher.workid);
					this.$teacherList.append($teacherHtml);
					callback&&callback(data.pageNum);
				}
			}.bind(this),'json');
			
		},
		setAdmin: function(setAdminId){  //设置管理员
			$.post('user/set_admin',{workid:setAdminId},function(data){
				if(data=="success"){
					alert("添加管理员成功!");
				}else if(data=="fail"){
					alert("该用户已经是管理员！");
				}
			});
		},
		setPage:function(a,b){
			console.log(a,b);
		},
		loadAllMessage:function(callback){  //加载反馈信息
   	 	   $.post('user/get_all_message',{page:this.msgPage,showPage:this.showPage}, function(data){
   	 	   	console.log(data.message[0])
   	   		for(var i=0;i<data.message.length;i++){
   	   			var messageObj=new Message(data.message[i].id,data.message[i].t_workid,data.message[i].t_date,data.message[i].t_call,data.message[i].t_message,data.message[i].t_admin,data.message[i].t_answer);
   	   			messageObj.id=this.messageNum+i+1;
   	   			this.misEnd=data.isEnd;
   	   			if(messageObj.t_answer){
   	   				messageObj.isAnswer="已处理";
   	   			}
   	   			var messageHtml = template('amsg',messageObj);
   	   			var $messageHtml = $(messageHtml);
   	   			$messageHtml.data(messageObj);
   	   			this.$amsgShow.append($messageHtml);
   	   			callback&&callback(data.pageNum);
   	   		}
   	    }.bind(this),'json')
   	   },
   	   sendAnswer:function(){ //设置回复
   	   	  $.post('user/update_message',this.messageObj, function(data){
   	   	  		if(data=="success"){
   	   	  			alert("回复成功!");
   	   	  		}
   	   	  }.bind(this))
   	   },
   	   overTeacher:function($t_workid,callback){  //查看某个教师的资料
   	   	 $.post('user/get_teacher_res', {t_workid:$t_workid}, function(data){
   	   	 	   	callback&&callback(data[0]);
   	   	 }.bind(this),'json')
   	   },
   	   delAdmin:function(t_workid){
   	   	 $.post('user/delAdmin',{t_workid:t_workid}, function(data){
   	   	 	if(data=="success"){
   	   	 		alert("删除成功");
   	   	 		window.location.reload();
   	   	 	}
   	   	 }.bind(this));
   	   }
}
	teacherComp.init();
});

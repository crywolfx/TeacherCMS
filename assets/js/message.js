$(function(){

function Message(t_workid,t_date,t_call,t_message,t_admin,t_answer){
	this.t_workid=t_workid;
	this.t_date=t_date;
	this.t_call=t_call;
	this.t_message=t_message;
	this.t_admin=t_admin;
	this.t_answer=t_answer;
}  
var messageComp={
   $msgShow:$('#msgShow'),
   msgObj:new Object(),
   init:function(){
   		this.setDate();
   		this.loadMessage();
   		$('#feedbackBtn').on('click',function(){
   			if(!$('.getMsg').val()){
   				alert("请检查未填项！");
   				return false;
   			}else{
   			var getMsg=$('.getMsg');
   			for(var i=0;i<getMsg.length;i++){
					this.msgObj[$(getMsg[i]).attr('name')]=$(getMsg[i]).val();			
   			};
   			this.sendMessgae();
   		}
   		}.bind(this));
   },
   loadMessage:function(){
   	   $.post('user/get_message', function(data){
   	   		for(var i=0;i<data.length;i++){
   	   			var messageObj=new Message(data[i].t_workid,data[i].t_date,data[i].t_call,data[i].t_message,data[i].t_admin,data[i].t_answer);
   	   			console.log(data[i]);
   	   			var messageHtml = template('msg',messageObj);
   	   			this.$msgShow.append(messageHtml);
   	   		}
   	   }.bind(this),'json')
   },
   sendMessgae:function(){
       $.post('user/set_message',this.msgObj, function(data){
       		if(data=="success"){
       			alert("信息反馈成功!请刷新网页查看记录");
       		}
       });
   },
   setDate:function(){
   		var date=new Date();
   		var time=date.toLocaleDateString();
   		$('#dateInput').val(time);
   }
};
messageComp.init();
});
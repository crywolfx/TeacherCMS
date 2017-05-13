$(function(){
	$('#changeForm').on('click',function(){
		var updateObj=new Object();
		var updateNode=$('.updateForm');
		for(var i=0;i<updateNode.length;i++){
			updateObj[$(updateNode[i]).attr('name')]=$(updateNode[i]).val();
		}
		$.post('user/change_teacher_res',updateObj, function(data){
			if(data=="success"){
				alert("信息修改完成！");
			}else{
				alert("没有修改数据！");
			}
		})
	});
	$('#refresh').on('click',function(){
		window.location.reload();
	})
})
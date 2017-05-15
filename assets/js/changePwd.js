$(function(){
	var oldpwd=$('.oldpwd');
	var newpwd=$('.newpwd');
	var renewpwd=$('.renewpwd');
	renewpwd.keyup(function(){
            if($(this).val()!=newpwd.val()){
                $('#tip').show();
            }else{
                $('#tip').hide();
            }
        });
	 $('.save').on('click',function(){
             if(!newpwd.val()||!renewpwd.val()||!oldpwd.val()){
                alert("密码不能为空！");
                return false;
             }
			 if(renewpwd.val()!=newpwd.val()){
                alert("两次密码不一致!");
                return false;
             }
             if(newpwd.val()==oldpwd.val()){
             		alert("新密码不能和原密码相同!");
             		return false;
             	}
           });

})
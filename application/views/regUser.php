<base href = "<?php echo base_url();?>"/> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>登录</title>
	<link rel="stylesheet" href="assets/css/regUser.css">
</head>
<body>
    <div id="container">
    <h1>请输入注册信息</h1>
            <div class="content">
            <form action="user/do_regUser" method="post" accept-charset="utf-8">  <table cellspacing="10">
                <tbody>
                    <tr>
                  <td class="char">用户名:</td>
                  <td><input type="number" id="uname" name="uname"></td> 
                    </tr>
                    <tr>
                        <td class="char">密码:</td>
                        <td><input type="password" minlength="6" placeholder="最低不能小于6位" id="upass" name="upass"></td>
                    </tr>
                    <tr>
                        <td class="char">确认密码:</td>
                        <td><input type="password" minlength="6" placeholder="最低不能小于6位" id="rpass" name="rpass"></td>
                    </tr>
                </tbody>
            </table>
            <p id="tip">两次密码不一致</p>
            <input class="reg" type="submit" name="" value="注册">
            </form> 
        </div>     
    </div>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript">
        $('#rpass').keyup(function(){
            if($(this).val()!=$('#upass').val()){
                $('#tip').show();
            }else{
                $('#tip').hide();
            }
        });
        $('.reg').on('click',function(){
            var unameVal=$('#uname').val();
            var upassVal=$('#upass').val();
            var rpassVal=$('#rpass').val();
            if(!unameVal||!upassVal){
                alert("用户名和密码不能为空");
                return false;
            }else if(upassVal!=rpassVal){
                alert("两次密码不一致");
                return false;
            }
        })
    </script>
</body>
</html>
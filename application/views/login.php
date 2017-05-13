<base href = "<?php echo base_url();?>"/> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>登录</title>
	<link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div id="container">
        <ul id="tab">
            <li class="select"><h2>教师登录</h2></li>
            <li><h2>管理员登录</h2></li>
        </ul>
        <div class="cont">
            <div class="content selected">
            <form action="user/teacher_login" method="post" accept-charset="utf-8">  <table cellspacing="10">
                <tbody>
                    <tr>
                  <td class="char">用户名:</td>
                  <td><input type="text" class='input1' name="user"></td> 
                    </tr>
                    <tr>
                        <td class="char">密码:</td>
                        <td><input type="password" class='input1' name="pass"></td>
                    </tr>
                </tbody>
            </table>
            <input class="log1" type="submit" value="登录">
            </form> 
            <button class="reg"><a class="rega" href="user/regUser">注册</a></button>
        </div>
        <div class="content">
            <form action="user/admin_login" method="post" accept-charset="utf-8">  <table cellspacing="10">
                <tbody>
                    <tr>
                  <td class="char">用户名:</td>
                  <td><input type="text" class='input2' name="user2"></td> 
                    </tr>
                    <tr>
                        <td class="char">密码:</td>
                        <td><input type="password" class='input2' name="pass2"></td>
                    </tr>
                </tbody>
            </table>
            <input class="log2" type="submit" value="登录">
            </form> 
        </div>
        </div>       
    </div>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript">
 $(function(){
        $("#tab li").on('click',function(){
        $(this).addClass('select').siblings('li').removeClass('select');
        var index=$('#tab li').index($(this));
        $('.content').eq(index).addClass('selected').siblings('div').removeClass('selected');
    });
        $('.log1').on('click',function(){
            if(!$('.input1').val()){
                alert("用户名密码不能为空");
                return false;
            }
        });
        $('.log2').on('click',function(){
            if(!$('.input2').val()){
                alert("用户名密码不能为空");
                return false;
            }
        });
});
    </script>
</body>
</html>
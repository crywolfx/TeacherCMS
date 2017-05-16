<base href = "<?php echo base_url();?>"/> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>登录</title>
    <style>
    *{
    padding: 0;
    margin:0;
    }
    body{
    background: #4d5e70;
    }
        #container{
            width: 510px;
            height: 340px;
            background: url('assets/img/bg.jpg');
            margin: 200px auto;
            border-radius: 4px;
            position: relative;
            overflow: hidden;
        }
        #content{
            position: absolute;
            right: 60px;
            top: 120px;
        }
        a{
            text-decoration: none;
             color: #000;
             display: block;
             width: 80px;
             height: 30px;
             line-height: 33px;
             color: #fff;
        }
        input{
            height: 30px;
        }
        tr{
            display: block;
            margin-bottom: 10px;
        }
        td{
            color: #449FE5;
            text-align: right;
        }
        #reg,.log1{
            width: 80px;
            height: 30px;
            border: 0;
            background: #449FE5;
            border-radius: 6px;
            position: absolute;
            top: 110px;
            cursor: pointer;
            color: #fff;
        }
        .log1{
            left: 125px;
        }
        #reg{
            left: 25px;
        }
        h3{
            text-align: center;
            margin-top: 75px;
            color: #777;
        }
    </style>
</head>
<body>
   <!--  <div id="container">
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
    </div> -->
    <div id="container">
    <h3>教师管理系统</h3>
        <div id="content">
            <form action="user/admin_login" method="post" accept-charset="utf-8">
                <table>
                    <tbody>
                        <tr>
                            <td>用户名:</td>
                            <td><input type="text" placeholder="请输入工号" name="user2"></td>
                        </tr>
                        <tr>
                            <td>密&nbsp;&nbsp;&nbsp;码:</td>
                            <td><input type="password" placeholder="请输入密码" name="pass2"></td>
                        </tr>
                        <tr>
                            <td><button id="reg"><a href="user/regUser">注册</a></button></td>
                            <td><input class="log1" type="submit" value="登录"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript">
 $(function(){
    //     $("#tab li").on('click',function(){
    //     $(this).addClass('select').siblings('li').removeClass('select');
    //     var index=$('#tab li').index($(this));
    //     $('.content').eq(index).addClass('selected').siblings('div').removeClass('selected');
    // });
        $('.log1').on('click',function(){
            if(!$('input').val()){
                alert("用户名密码不能为空");
                return false;
            }
        });
        // $('.log2').on('click',function(){
        //     if(!$('.input2').val()){
        //         alert("用户名密码不能为空");
        //         return false;
        //     }
        // });
});
    </script>
</body>
</html>
# TeacherCMS
,教室管理系统.有管理员，有教师，完成注册登录，修改密码，修改教师信息，管理员权限管理等功能

有个问题
注册完成本来设计的是跳Index（之前会存session）,index里的用户名从session里取，在index里有有个修改密码功能，需要输入原密码先验证对错，对的话才可以修改。
这个时候问题就来了，验证原密码会一直查不到（调用的登录的方法）,这个时候退出登录，重新登录刚才注册的帐号，就可以修改密码（可以验证到密码）！！！
没查到，也没想出来问题出在哪

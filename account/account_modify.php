<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="../css/public.css">
	<title>网站管理系统</title>
	<style>
.form_account{
  width:  380px;
  margin: 50px auto;
}
.form_account>p{
   font-size: 1.5em;
}
.form_input{
   width: 300px;
   padding: 5px 10px 5px;
   font-size: 1em;
   border: none;
   outline: none;
   border-bottom: 1px solid gray;
   background: #fff;
}
.form_button{
    padding: 3px 6px;
    width: 110px;
    text-align: center;
    font-size: 20px;
    margin-left: 50px;
    border-radius: 18px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    cursor: pointer;
    background-color: #f8f8f8;
    color: black;
    border: 2px solid #555555;
}
.form_button:hover {
    background-color: #555555;
    color: #f8f8f8;
}
</style>
</head>
<body>
  <div class="container">
	  <div class="navbar">
      <div id="t_nav">  
    <a href="../home/home.html">首页</a>
    <div class="dropdown">
      <button class="dropbtn cursor">账号管理
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="./account_add.html">账号信息添加</a>
        <a href="./account_select.php">账号信息查询</a>
        <a href="./account_update.php">账号信息维护</a>
      </div>
    </div> 
    <div class="dropdown">
      <button class="dropbtn cursor">用户管理 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="../user/user_add.html">用户信息添加</a>
        <a href="../user/user_select.php">用户信息查询</a>
        <a href="../user/user_update.php">用户信息维护</a>
      </div>
    </div> 
    <div class="dropdown">
      <button class="dropbtn cursor">展商管理
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="../exhibitor/exhibitor_add.html">展商信息添加</a>
        <a href="../exhibitor/exhibitor_select.php">展商信息查询</a>
        <a href="../exhibitor/exhibitor_update.php">展商信息维护</a>
      </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn cursor">留言管理
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../message/message_add.html">留言信息添加</a>
      <a href="../message/message_select.php">留言信息查询</a>
      <a href="../message/message_update.php">留言信息维护</a>
    </div>
  </div> 
  <a href="../other/about_us.html">关于</a>
  <a href="../index.php">退出</a>
</div>  
</div>
<h2 class="title_h2">账号信息修改</h2>
<span class="title_span"></span>
<form class="form_account" method="POST">
  <p>账号：<input class="form_input" type="text" disabled="disabled" name="username" value="<?php echo $arr['username']; ?>"  ></p>
  <p>密码：<input class="form_input" type="password" name="password" value="<?php echo $arr['password']; ?>" required="required"></p>
  <input class="form_button" type="submit" value="提交" />
  <input class="form_button" type="reset"  value="重置" />
</form>
</div>  
</body>
</html>
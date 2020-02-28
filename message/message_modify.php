<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="../css/public.css">
	<title>网站管理系统</title>
	<style>
#div_form{
  height: 580px;
}
.form_account{
  width:  560px;
  margin: 20px auto;
}
.form_account>p{
   font-size: 1.2em;
}
.form_input{
   width: 400px;
   padding: 5px 10px 5px;
   font-size: 1.2em;
   border: none;
   outline: none;
   border-bottom: 1px solid gray;
   background: #fff;
}
.input_id{width: 440px;}
.input_username{width: 405px;}
.input_enterprise{width: 390px;}
.input_email{width: 420px;}
.message{
  font-size: 1em;
  overflow: auto;
  width: 480px;
}
.form_button{
    padding: 3px 6px;
    width: 110px;
    text-align: center;
    font-size: 20px;
    margin: 20px 0px 0px 70px;
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
        <a href="../account/account_add.html">账号信息添加</a>
        <a href="../account/account_select.php">账号信息查询</a>
        <a href="../account/account_update.php">账号信息维护</a>
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
      <a href="./message_add.html">留言信息添加</a>
      <a href="./message_select.php">留言信息查询</a>
      <a href="./message_update.php">留言信息维护</a>
    </div>
  </div> 
  <a href="../other/about_us.html">关于</a>
  <a href="../index.php">退出</a>
</div>  
</div>
<h2 class="title_h2">留言信息修改</h2>
<span class="title_span"></span>
<div id="div_form">
<form class="form_account" method="post">
  <p>id：<input class="form_input input_id" type="text" name="id" value="<?php echo $arr['id']; ?>" disabled="disabled"></p>
  <p>联系人：<input class="form_input input_username" type="text" name="username" value="<?php echo $arr['username']; ?>" disabled="disabled"></p>
  <p>企业品牌：<input class="form_input input_enterprise" type="text" name="enterprise" value="<?php echo $arr['enterprise']; ?>" disabled="disabled"></p>
  <p>邮箱：<input class="form_input input_email" type="text" name="email" value="<?php echo $arr['email']; ?>" disabled="disabled"></p>
  <p>留言：</p><textarea class="message" name="message" cols="50" rows="10" placeholder="可填写会展及展会相关问题或您的个人情况，届时会有工作人员反馈咨询到您的邮箱。"><?php echo $arr['message']; ?></textarea>
  <input class="form_button" type="submit" value="提交" />
  <input class="form_button" type="reset" value="重置" />
</form>           
</div>  
</div>  
</body>
</html>
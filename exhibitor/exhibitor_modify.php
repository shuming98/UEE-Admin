<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="../css/public.css">
	<title>网站管理系统</title>
	<style>
#div_form{
  height: 580px;
  overflow: auto;
}
.form_account{
  width:  600px;
  margin: 20px auto;
}
.form_account>p{
   font-size: 1em;
}
.small_title_span{
  color: #3198D5;
  font-size: 1.2em;
  font-weight: bold;
  position: relative;
  right: 50px;
}
.form_input{
   width: 400px;
   padding: 5px 10px 5px;
   font-size: 1em;
   border: none;
   outline: none;
   border-bottom: 1px solid gray;
}
input[type=radio]{
  cursor: pointer;
  width: 13px;
  height: 13px;
}
.form_number{
  width: 50px;
}
.form_button{
    padding: 3px 6px;
    width: 110px;
    text-align: center;
    font-size: 20px;
    margin:20px 0px 0px 70px;
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
        <a href="./exhibitor_add.html">展商信息添加</a>
        <a href="./exhibitor_select.php">展商信息查询</a>
        <a href="./exhibitor_update.php">展商信息维护</a>
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
<h2 class="title_h2">展商信息修改</h2>
<span class="title_span"></span>
<div id="div_form">
<form class="form_account" id="form_verify"  method="post">
  <span class="small_title_span">参展企业信息</span>
  <p>联系人：<input class="form_input" type="text" name="username" required="required" value="<?php echo $arr['username']; ?>"></p>
  <p>企业品牌：<input class="form_input" type="text" name="enterprise" required="required" value="<?php echo $arr['enterprise']; ?>"></p>
  <p>品牌发源地：<input class="form_input" type="text" name="address" required="required" value="<?php echo $arr['address']; ?>"></p>
  <p>联系号码：<input class="form_input" type="text" name="tel" required="required" value="<?php echo $arr['tel']; ?>"></p>
  <p>邮箱：<input class="form_input" type="text" name="email" required="required" value="<?php echo $arr['email']; ?>"></p>
  <span class="small_title_span">展区申请(单选)</span>
  <p>
  <input type="radio" value="零售类" name="application" required="required">零售类
  <input type="radio" value="娱乐类" name="application">娱乐类
  <input type="radio" value="生活类" name="application">生活类
  <input type="radio" value="餐饮类" name="application">餐饮类
  <input type="radio" value="健康类" name="application">健康类
  </p>
  <span class="small_title_span">意向展位规格(费用：请参考展位报价)</span>
  <p>展台类型：
  <input type="radio" value="标准展台单开" name="type" required="required">标准展台单开
  <input type="radio" value="标准展台双开" name="type">标准展台双开
  <input type="radio" value="豪华展台单开" name="type">豪华展台单开
  <input type="radio" value="豪华展台双开" name="type">豪华展台双开
  </p>
  <p>申请数量：<input class="form_input form_number" type="text" name="number" required="required" value="<?php echo $arr['number']; ?>">个</p> 
  <input class="form_button" type="submit" value="提交" />
  <input class="form_button" type="reset" value="重置" />
</form>           
</div> 
</div>  
<script>
  document.getElementById('form_verify').onsubmit=function(){
    var patt=/^1[3|4|5|7|8][0-9]{9}$/;
    if(!patt.test(document.getElementsByName('tel')[0].value)){
      alert('请输入正确的手机号码');
      return false;
    }
    var patt=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    if(!patt.test(document.getElementsByName('email')[0].value)){
      alert('请输入正确的Email');
      return false;
    }
  }
</script>
</body>
</html>
<!-- 验证码Demo -->
<?php
  //开启Session  
  session_start();
  //判断是否提交
  if(isset($_POST['dosubmit'])){
    //获取session中的验证码并转为小写
    $sessionCode=strtolower($_SESSION['code']);
    //获取输入的验证码
    $code=strtolower($_POST['code']);
    //判断是否相等
    if($sessionCode==$code){
      // echo "<script type='text/javascript'>self.location='home.php';</script>";
      echo "<script type='text/javascript'>alert('验证码正确!');</script>";
    }else{
      echo "<script type='text/javascript'>alert('验证码错误!');</script>";
    }
  }
?>
<!DOCTYPE html>  
<html>  
  <head>  
    <title>验证码Demo</title>  
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/> 
  </head>  
  <body>  
    <form method="post">  
      验证码:<input type="text" name="code" size="4" />  
      <img src="vcode.php" onclick="this.src='vcode.php?Math.random()'"/>  
      <input type="submit" value="验证" name="dosubmit"/> 
    </form> 
  </body>  
</html>  
<?php
  //开启Session
  session_start();
  //引入验证码类
  include("vcode.class.php");
  //创建验证码类
  $vcode=new Vcode();
  //将获取的验证码存入到session中
  $_SESSION['code']=$vcode->getCode();
  //验证码参数自定义
  $vcode->set("width",100);//图片宽度
  $vcode->set("height",30);//图片高度
  $vcode->set("num",4);//验证码个数
 // $vcode->set("img",10);//图片资源
  $vcode->set("pointNum",3);//干扰点个数
  $vcode->set("lineNum",5);//干扰线个数
  $vcode->set("fontFile","STLITI.TTF");//字体文件  font文件夹内
  //输出图像
  $vcode->outImg();
?>
<?php
namespace Home\Controller;
use Think\Controller;
use Home\Controller\CommonController;

class IndexController extends CommonController {
     /*
     *index继承common类,检测session cookie值 ,这个session跟cookie不存在 跳转至登录页面
     *如果session或cookie其中一个有值,跳过登录页面
      */
    public function index(){
    		  echo session('username');
          echo '登录成功index';

    }
   	public function demo(){
   		echo 'demo';
   	}
    public function test(){
      echo 'test';
    }

}
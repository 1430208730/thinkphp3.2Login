<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	 public function _initialize(){
	 	// public function __construct(){
	 	// parent::__construct();
	 	/*
	 	1、__initialize()不是php类中的函数，php类的构造函数只有__construct().
		2、类的初始化：子类如果有自己的构造函数（__construct()）,则调用自己的进行初始化，如果没有，则调用父类的构造函数进行自己的初始化。
		3、当子类和父类都有__construct()函数的时候，如果要在初始化子类的时候同时调用父类的__constrcut()，则可以在子类中使用parent::__construct().
		详细见:http://www.thinkphp.cn/code/367.html
	 	*/
    	if(session('username')==''){
    		if(cookie('username')!=''){
    			session('username',cookie('username'));
    			$this->redirect('Index/index');
    		}else{
    			$this->redirect('Login/index');
    		}
    	}
    }
}
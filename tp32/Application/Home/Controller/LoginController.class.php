<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	if(session('username')==''){
        if(cookie('username')!=''){
          session('username',cookie('username'));
          $this->redirect('Index/index',array('username'=>$this->getUserinfo(cookie('username'))));
        }
        $this->display('index');
      }else{
        $this->redirect('Index/index',array('username'=>$this->getUserinfo(cookie('username'))));
      }
      
    }

    public function login(){
    	
    	// echo md5(md5('123').'test');
    	$arr=array('username'=>'admin','password'=>'217143d18a0258a4946559e5b79ad5d5');
    	$data=I('post.');
	    	if($data['username']==$arr['username']){
	    		if(md5(md5($data['password']).'test')==$arr['password']){
	    			session('username',$arr['username']);
	    			if(!empty($data['checkbox'])){
	    				cookie('username',$data['username'],3600); // 指定cookie保存时间
	    				// cookie('username',$arr['username'],3600);//加密过低
	    			}
	    			$this->success('登录成功','Index/demo');
	    		}else{
	    			$this->error('密码错误');
	    		}
	    	}else{
	    		$this->error('账号错误');
	    	}
    }
//    	//正常应该多个接受值,然后获取用户信息
   	public function  getUserinfo($username){
   		return $username;
   	}

}
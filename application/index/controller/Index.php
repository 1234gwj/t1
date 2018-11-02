<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Session;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch('index/login');
    }

    public function logins(){
        $raf = input('post.');
        if (empty($raf['username'])){
            $this->error('用户名不存在');
        }

        if (empty($raf['password'])){
            $this->error('密码不存在');
        }

        $user = Db::name('login_rg')->where('username',$raf['username'])->find();

        if (empty($user)){
            $this->error('用户名错误');
        }

        if ($raf['password'] !=$user['password']){
            $this->error('密码错误');
        }

        if ($this){
            Session::set('username',$raf['username']);
            $this->success('登录成功','tabs');
        }else{
            $this->success('登录失败,联系管理员');
        }
        return $this->fetch('');
    }

    public function tabs(){
        return $this->fetch('tabs/tabs');
    }
}

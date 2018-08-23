<?php
namespace app\backend\controller;

use app\backend\Controller\Base;
use think\Request;
use app\common\model\UserModel;

class Reg extends Base
{
    
    public function reg()
    {
        return $this->fetch('reg/reg');
    }

    public function regSubmit(Request $request)
    {
        if (session('user')) {
            $this->redirect('homepage');
        }
        $postData = $request->post();
        // 用户名去除空格
        $username = $request->post('username', '', 'trim');
        // 验证用户名是否合法
        if (!check_username($username)) {
            $this->error('注册失败,用户名不合法');
        }

        // 验证重复密码是否一致
        if ($postData['password'] != $postData['repassword']) {
            $this->error('注册失败,两次密码不一致');
        }

        // 验证用户名是否重复 去数据库查一下该用户名是否存在
        $user = new UserModel;
        if ($user->isUserExist($username)) {
            $this->error('注册失败,用户名已存在');
        }

        // 添加用户
        $user->username = $username;
        $user->password = encrypt($postData['password']);
        $user->nickname = $username;
        $user->save();

        $this->success('注册成功', 'login');
    }

    public function userExist(Request $request)
    {
        $username = $request->get('username');
        $user = new UserModel;
        $res = $user->isUserExist($username);

        return json([
            'status' => 'success',
            'data'   => [
                'exist' => $res,
            ]
        ]);
    }

}

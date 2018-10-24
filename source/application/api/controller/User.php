<?php
namespace app\api\controller;

// use app\api\model\User as UserModel;
use think\Controller;
use think\Request;
use think\Db;

/* 用户管理
class User
@package app\api 
*/
class User extends Controller
{
    public function login()
    {
        
        // $model = new Usermodel;
        $userid = $_GET['userid'];
        $password = $_GET['password'];
        $condition['UserID'] = $userid;
        $condition['Pwd'] = $password;
        // $data = Db::table('userinfo')->select();
        $data = Db::table('userinfo')->where($condition)->find();
        if($data != ""){
            return array(
                "LoginStatus" => "1"
            );
        }

    }
    

}

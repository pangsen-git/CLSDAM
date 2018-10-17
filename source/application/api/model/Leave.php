<?php

namespace app\api\model;

use think\Db;

class Leave{
    public function submitLeaveInfo($get){
        $res=Db::table('leaveinfo')->insert($get);
        if($res){
            return true; 
        }
    }
}
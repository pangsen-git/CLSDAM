<?php
namespace app\api\controller;

use app\api\model\Leave as LeaveModel;
use think\Db;
use think\Request;

/* 请假信息提交 */
class Leave{
    public function submit()
    {
        $leavemodel = new LeaveModel;
        $isInsert = $leavemodel->submitLeaveInfo(Request::instance()->get());
        if($isInsert){
            return array(
                "isInsert" =>"true"
            );
        }
    }
}

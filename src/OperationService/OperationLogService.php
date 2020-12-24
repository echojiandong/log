<?php


namespace Record\OperationService;

use Record\OperationService\Contracts\OperationLogServiceInterface;
use Model\OperationService\OperationLog;
class OperationLogService implements OperationLogServiceInterface
{

    public function recordOperation($uid,$request)
    {
        $log = new OperationLog();

        if(!$request->isMethod('get')){
            $input = $request->all(); //获取用户输入信息
            $log->path = $request->path(); //请求路径
            $log->method = $request->method();//返回控制器操作方法
            $log->ip = $request->ip();//IP
            $log->uid = $uid;//用户ID
            $log->input = json_encode($input, JSON_UNESCAPED_UNICODE);
            $log->save();
        }
        return true;
    }
}
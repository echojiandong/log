<?php


namespace Record\OperationService;

use Record\OperationService\Contracts\OperationLogServiceInterface;
use Closure;
use Model\OperationService\OperationLog;
class OperationLogService implements OperationLogServiceInterface
{

    public function recordOperation($request, Closure $next)
    {
        if('GET' != $request->method()){
            $input = $request->all();
            $log = new OperationLog();
            $log->path = $request->path();
            $log->method = $request->method();
            $log->ip = $request->ip();
            $log->input = json_encode($input, JSON_UNESCAPED_UNICODE);
            $log->save();
        }
        return $next($request);
    }
}
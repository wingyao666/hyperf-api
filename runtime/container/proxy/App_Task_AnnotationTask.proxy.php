<?php

namespace App\Task;

use Hyperf\Task\Annotation\Task;
use Hyperf\Utils\Coroutine;
class AnnotationTask_18af4d8cc89996bf2ade310abd04e36c extends AnnotationTask
{
    use \Hyperf\Di\Aop\ProxyTrait;
    /**
     * @param $cid
     * @Task()
     * @return array
     */
    public function handle($cid)
    {
        $__function__ = __FUNCTION__;
        $__method__ = __METHOD__;
        return self::__proxyCall(AnnotationTask::class, __FUNCTION__, self::getParamsMap(AnnotationTask::class, __FUNCTION__, func_get_args()), function ($cid) use($__function__, $__method__) {
            return ['work.cid' => $cid, 'task.cid' => Coroutine::id()];
        });
    }
}
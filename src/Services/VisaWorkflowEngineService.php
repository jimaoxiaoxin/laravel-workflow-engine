<?php

namespace Jimaoxiaoxin\LaravelWorkflowEngine\Services;

class LaravelWorkflowEngineService {

    public function getConfig()
    {
        return config('workflow-engine');
    }
}

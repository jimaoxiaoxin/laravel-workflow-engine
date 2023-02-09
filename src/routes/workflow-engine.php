<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Jimaoxiaoxin\VisaWorkflowEngine\Services\VisaWorkflowEngineService;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/visa-workflow-engine/config', function($name) {
    return 'Hello';
//    $workflowEngineService = new VisaWorkflowEngineService();
//    return $workflowEngineService->getConfig();
});

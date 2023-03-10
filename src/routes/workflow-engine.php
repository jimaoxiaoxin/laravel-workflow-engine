<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Jimaoxiaoxin\LaravelWorkflowEngine\Services\LaravelWorkflowEngineService;

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

Route::get('/laravel-workflow-engine/config', function() {
    $workflowEngineService = new LaravelWorkflowEngineService();
    return $workflowEngineService->getConfig();
});

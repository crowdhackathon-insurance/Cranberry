<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'api/json','namespace' => 'App\Http\Controllers'], function($app)
{

	//return the issue for the issue id
    $app->get('getissue/{id}','IssueController@getIssue');
    //create a new issue. Automatic from app or manual for the backend
    $app->post('setissue','IssueController@setIssue');

    //return the issue status for the end user/backend operator
    $app->get('getissuestatus/{id}','IssueController@getIssueStatus');
    //creates a new schedule 
    $app->post('setschedule','ScheduleController@setSchedule');
    //create a new vehicle
    $app->post('setvehicle','VehicleController@setVehicle');
    //return info for the vehicle id
    $app->get('getvehicle/{id}','VehicleController@getVehicle');
    
    //send gps coordinates
    $app->post('setgpsco','Vehicle_gpsController@setGpsCo');
    $app->get('getvehicles','Vehicle_gpsController@getVehicles');

    //return all the issue assined to vehicle id
    $app->get('getmyissue/{id}','Vehicle_issueController@getMyIssue');

});
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Organizational routes
Route::get('/organizations', 'OrganizationController@index')->middleware('auth');
Route::post('/organizations', 'OrganizationController@store')->middleware('auth');
Route::get('/organizations/create', 'OrganizationController@create')->middleware('auth');
Route::get('/organizations/{organization}', 'OrganizationController@show')->middleware('auth');
Route::get('/organizations/{organization}/edit', 'OrganizationController@edit')->middleware('auth');
Route::put('/organizations/{organization}', 'OrganizationController@update')->middleware('auth');
Route::delete('/organizations/{organization}', 'OrganizationController@delete')->middleware('auth');

Route::get('/divisions', 'DivisionController@index')->middleware('auth');
Route::post('/divisions', 'DivisionController@store')->middleware('auth');
Route::get('/divisions/create', 'DivisionController@create')->middleware('auth');
Route::get('/divisions/{division}', 'DivisionController@show')->middleware('auth');
Route::get('/divisions/{division}/edit', 'DivisionController@edit')->middleware('auth');
Route::put('/divisions/{division}', 'DivisionController@update')->middleware('auth');
Route::delete('/divisions/{division}', 'DivisionController@delete')->middleware('auth');

Route::get('/branches', 'BranchController@index')->middleware('auth');
Route::get('/branches/{branch_id}', 'BranchController@show')->middleware('auth');

Route::get('/departments', 'DepartmentController@index')->middleware('auth');
Route::get('/departments/{department_id}', 'DepartmentController@show')->middleware('auth');

Route::get('/teams', 'TeamController@index')->middleware('auth');
Route::get('/teams/{team_id}', 'TeamController@show')->middleware('auth');

// Logical routes
Route::get('/jobs', 'JobController@index')->middleware('auth');
Route::get('/jobs/{job_id}', 'JobController@show')->middleware('auth');

Route::get('/clients', 'ClientController@index')->middleware('auth');
Route::post('/clients', 'ClientController@store')->middleware('auth');
Route::get('/clients/create', 'ClientController@create')->middleware('auth');
Route::get('/clients/{client}', 'ClientController@show')->middleware('auth');
Route::get('/clients/{client}/edit', 'ClientController@edit')->middleware('auth');
Route::put('/clients/{client}', 'ClientController@update')->middleware('auth');
Route::delete('/clients/{client}', 'ClientController@delete')->middleware('auth');

Route::get('/clientsites', 'ClientSiteController@index')->middleware('auth');
Route::get('/clientsites/{clientsite_id}', 'ClientSiteController@show')->middleware('auth');

Route::get('/equipment', 'EquipmentController@index')->middleware('auth');
Route::get('/equipment/{equipment_id}', 'EquipmentController@show')->middleware('auth');

Route::get('/workorders', 'WorkOrderController@index');
Route::get('/workorders/{workorder_id}', 'WorkOrderController@show')->middleware('auth');

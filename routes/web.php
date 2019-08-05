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
    return view('auth.login');
})->name('login');

Auth::routes();

//Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('sadmin/home', 'Super_Admin_Controller@ShowSadminHome')->name('sadmin.home');
Route::get('admin/home', 'Admin_Controller@ShowAdminHome')->name('admin.home');
Route::get('user/home', 'User_Controller@ShowUserHome')->name('user.home');

Route::get('user-register-form', 'Admin_Controller@showRegistrationForm')->name('user.registerform');
Route::post('user-register', 'User\RegisterController@register');

Route::get('admin-register', 'Super_Admin_Controller@showRegistrationForm')->name('admin.registerform');
Route::post('admin-register', 'Admin\RegisterController@register');

Route::get('sadmin-register', 'Super_admin\RegisterController@showRegistrationForm');
Route::post('sadmin-register', 'Super_admin\RegisterController@register');

Route::get('emp-register-form', 'User_Controller@showRegistrationForm')->name('emp.registerform');
Route::post('emp-register', 'Employee\RegisterController@register');

Route::get('emp-records', 'User_Controller@EmpRecords')->name('employee.records');
Route::get('/emp-profile/{id}', 'User_Controller@EmpProfiles')->name('emp.profiles');
Route::delete('/deleteemp/{id}','User_Controller@DeleteEmployee');
Route::get('/emp-basic-edit/{id}', 'User_Controller@showEditBasicForm')->name('emp.editbasic');
Route::post('/emp-basic-update/{id}', 'User_Controller@updatesBasics');
Route::get('/emp-finance-edit/{id}', 'User_Controller@showEditFinanceForm')->name('emp.editfinance');
Route::post('/emp-finance-update/{id}', 'User_Controller@updatesFinance');
Route::get('/emp-office-edit/{id}', 'User_Controller@showEditOfficeForm')->name('emp.editfinance');
Route::post('/emp-office-update/{id}', 'User_Controller@updatesOffice');

Route::get('user-records', 'Admin_Controller@UserRecords')->name('user.records');
Route::get('/user-profile/{id}', 'Admin_Controller@UserProfiles')->name('user.profiles');
Route::delete('/deleteuser/{id}','Admin_Controller@DeleteUser');
Route::get('/user-basic-edit/{id}', 'Admin_Controller@showEditBasicForm')->name('user.editbasic');
Route::post('/user-basic-update/{id}', 'Admin_Controller@updatesBasics');
Route::get('/user-finance-edit/{id}', 'Admin_Controller@showEditFinanceForm')->name('user.editfinance');
Route::post('/user-finance-update/{id}', 'Admin_Controller@updatesFinance');
Route::get('/user-office-edit/{id}', 'Admin_Controller@showEditOfficeForm')->name('user.editfinance');
Route::post('/user-office-update/{id}', 'Admin_Controller@updatesOffice');

Route::get('admin-records', 'Super_Admin_Controller@AdminRecords')->name('admin.records');
Route::get('/admin-profile/{id}', 'Super_Admin_Controller@AdminProfiles')->name('admin.profiles');
Route::delete('/deleteadmin/{id}','Super_Admin_Controller@DeleteAdmin');
Route::get('/admin-basic-edit/{id}', 'Super_Admin_Controller@showEditBasicForm')->name('admin.editbasic');
Route::post('/admin-basic-update/{id}', 'Super_Admin_Controller@updatesBasics');
Route::get('/admin-finance-edit/{id}', 'Super_Admin_Controller@showEditFinanceForm')->name('admin.editfinance');
Route::post('/admin-finance-update/{id}', 'Super_Admin_Controller@updatesFinance');
Route::get('/admin-office-edit/{id}', 'Super_Admin_Controller@showEditOfficeForm')->name('admin.editfinance');
Route::post('/admin-office-update/{id}', 'Super_Admin_Controller@updatesOffice');

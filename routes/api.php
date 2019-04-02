<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//table user
Route::get('user','UsersController@getAll')->name('getAlluser');
Route::post('user','UsersController@add')->name('adduser');
Route::get('user/{id}','UsersController@get')->name('getuser');
Route::put('user/{id}', 'UsersController@update')->name('updateuser');
Route::delete('user/delete/{id}','UsersController@delete')->name('deleteuser');
//Table Thí sinh
Route::get('thisinh','ThiSinhController@getAll')->name('getAllThiSinh');
Route::post('thisinh','ThiSinhController@add')->name('addThisinh');
Route::get('thisinh/{id}','ThiSinhController@get')->name('getThisinh');
Route::put('thisinh/{id}', 'ThiSinhController@update')->name('updateThisinh');
Route::put('thisinh_new/{id}','ThiSinhController@update_new');
Route::delete('thisinh/delete/{id}','ThiSinhController@delete')->name('deleteThisinh');
Route::get('thisinh/{name}','ThiSinhController@findName')->name('findNameThisinh');
//Table Môn học
Route::get('monhoc','MonhocController@getAll')->name('getAllMonhoc');
Route::post('monhoc','MonhocController@add')->name('addMonhoc');
Route::get('monhoc/{id}','MonhocController@get')->name('getMonhoc');
Route::put('monhoc/{id}', 'MonhocController@update')->name('updateMonhoc');
Route::delete('monhoc/delete/{id}','MonhocController@delete')->name('deleteMonhoc');
//Table Đề thi
Route::get('dethi','DethiController@getAll')->name('getAllDethi');
Route::post('dethi','DethiController@add')->name('addDethi');
Route::get('dethi/{id}','DethiController@get')->name('getDethi');
Route::put('dethi/{id}', 'DethiController@update')->name('updateDethi');
Route::delete('dethi/delete/{id}','DethiController@delete')->name('deleteDethi');
//Table Phiếu dk
Route::get('phieu_dk','Phieu_dkController@getAll')->name('getAllPhieu_dk');
Route::post('phieu_dk','Phieu_dkController@add')->name('addPhieu_dk');
Route::get('phieu_dk/{id}','Phieu_dkController@get')->name('getPhieu_dk');
Route::put('phieu_dk/{id}', 'Phieu_dkController@update')->name('updatePhieu_dk');
Route::delete('phieu_dk/delete/{id}','Phieu_dkController@delete')->name('deletePhieu_dk');
//Table Câu hỏi
Route::get('cauhoi','CauhoiController@getAll')->name('getAllCauhoi');
Route::post('cauhoi','CauhoiController@add')->name('addCauhoi');
Route::get('cauhoi/{id}','CauhoiController@get')->name('getCauhoi');
Route::put('cauhoi/{id}', 'CauhoiController@update')->name('updateCauhoi');
Route::delete('cauhoi/delete/{id}','CauhoiController@delete')->name('deleteCauhoi');
//Table Bài làm
Route::get('bailam','BailamController@getAll')->name('getAllBailam');
Route::post('bailam','BailamController@add')->name('addBailam');
Route::get('bailam/{id}','BailamController@get')->name('getBailam');
Route::put('bailam/{id}', 'BailamController@update')->name('updateBailam');
Route::delete('bailam/delete/{id}','BailamController@delete')->name('deleteBailam');
//Table Chi tiết bài làm
Route::get('ct_bailam','Ct_bailamController@getAll')->name('getAllCt_bailam');
Route::post('ct_bailam','Ct_bailamController@add')->name('addCt_bailam');
Route::get('ct_bailam/{id}','Ct_bailamController@get')->name('getCt_bailam');
Route::put('ct_bailam/{id}', 'Ct_bailamController@update')->name('updateCt_bailam');
Route::delete('ct_bailam/delete/{id}','Ct_bailamController@delete')->name('deleteCt_bailam');


<?php

use Illuminate\Support\Facades\Route;

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
//
// Route::get('/', function () {
//     return view('welcome');
// });

//다국어
Route::get('/switchLang/{lang}', 'Locale\LocaleController@switchLang');

Route::get('/', 'Front@main');

Route::get('/sub01/sub01_01', 'Front@sub01');
Route::get('/sub01/sub01_02', 'Front@sub01');

Route::get('/sub02', 'Front@sub02');

Route::get('/sub03', 'Front@sub03');

Route::get('/sub04/sub04_01', 'Front@sub04');
Route::get('/sub04/sub04_02', 'Front@sub04');

Route::get('/sub05', 'Front@sub05');

Route::get('/community/fq', 'Front@community');
Route::get('/community/news', 'Front@community');
Route::get('/community/fq/view', 'Front@view');
Route::get('/community/news/view', 'Front@view');



Route::get('/as_admin/login', 'Back@as_login');
Route::post('/as_admin/login_action', 'Back@as_login_action');
Route::get('/as_admin/logout', 'Back@as_logout');

Route::get('/as_admin/message', 'Back@as_board_list');
Route::get('/as_admin/message/write_board_form', 'Back@write_board_form');
Route::post('/as_admin/message/write_board_action', 'Back@write_board_action');
Route::get('/as_admin/message/write_board_form/modify', 'Back@write_board_form');

Route::get('/as_admin/main_set', 'Back@main_set');
Route::post('/as_admin/change_main_set', 'Back@change_main_set');

Route::get('/as_admin/slide/list', 'Back@list');
Route::get('/as_admin/popup/list', 'Back@popup_list');
Route::get('/as_admin/notice/list', 'Back@list');
Route::get('/as_admin/gallery/list', 'Back@list');
Route::get('/as_admin/member/list', 'Back@list');
Route::get('/as_admin/press/list', 'Back@list');
Route::get('/as_admin/event/list', 'Back@list');
Route::get('/as_admin/startUp/list', 'Back@list');
Route::get('/as_admin/fq/list', 'Back@list');
Route::get('/as_admin/news/list', 'Back@list');
Route::get('/as_admin/video/list', 'Back@list');
Route::get('/as_admin/gallery/list', 'Back@list');
Route::get('/as_admin/contact/list', 'Back@list');

Route::get('/as_admin/slide/write', 'Back@write');
Route::get('/as_admin/popup/write', 'Back@popup_write');
Route::get('/as_admin/notice/write', 'Back@write');
Route::get('/as_admin/gallery/write', 'Back@write');
Route::get('/as_admin/member/write', 'Back@write');
Route::get('/as_admin/gallery/write', 'Back@write');
Route::get('/as_admin/member/write', 'Back@write');
Route::get('/as_admin/press/write', 'Back@write');
Route::get('/as_admin/event/write', 'Back@write');
Route::get('/as_admin/startUp/write', 'Back@write');
Route::get('/as_admin/fq/write', 'Back@write');
Route::get('/as_admin/news/write', 'Back@write');
Route::get('/as_admin/video/write', 'Back@write');
Route::get('/as_admin/gallery/write', 'Back@write');

Route::get('/as_admin/slide/modify', 'Back@write');
Route::get('/as_admin/popup/modify', 'Back@popup_write');
Route::get('/as_admin/notice/modify', 'Back@write');
Route::get('/as_admin/gallery/modify', 'Back@write');
Route::get('/as_admin/member/modify', 'Back@write');
Route::get('/as_admin/gallery/modify', 'Back@write');
Route::get('/as_admin/member/modify', 'Back@write');
Route::get('/as_admin/press/modify', 'Back@write');
Route::get('/as_admin/event/modify', 'Back@write');
Route::get('/as_admin/startUp/modify', 'Back@write');
Route::get('/as_admin/fq/modify', 'Back@write');
Route::get('/as_admin/news/modify', 'Back@write');
Route::get('/as_admin/video/modify', 'Back@write');
Route::get('/as_admin/gallery/modify', 'Back@write');
Route::get('/as_admin/contact/modify', 'Back@write');

Route::post('/as_admin/slide/write_action', 'Back@write_action');
Route::post('/as_admin/popup/write_action', 'Back@popup_write_action');
Route::post('/as_admin/notice/write_action', 'Back@write_action');
Route::post('/as_admin/gallery/write_action', 'Back@write_action');
Route::post('/as_admin/member/write_action', 'Back@write_action');
Route::post('/as_admin/gallery/write_action', 'Back@write_action');
Route::post('/as_admin/member/write_action', 'Back@write_action');
Route::post('/as_admin/press/write_action', 'Back@write_action');
Route::post('/as_admin/event/write_action', 'Back@write_action');
Route::post('/as_admin/startUp/write_action', 'Back@write_action');
Route::post('/as_admin/fq/write_action', 'Back@write_action');
Route::post('/as_admin/news/write_action', 'Back@write_action');
Route::post('/as_admin/video/write_action', 'Back@write_action');
Route::post('/as_admin/gallery/write_action', 'Back@write_action');

Route::post('/as_admin/slide/control', 'Back@delete_action');
Route::post('/as_admin/popup/control', 'Back@delete_action');
Route::post('/as_admin/notice/control', 'Back@delete_action');
Route::post('/as_admin/gallery/control', 'Back@delete_action');
Route::post('/as_admin/member/control', 'Back@delete_action');
Route::post('/as_admin/gallery/control', 'Back@delete_action');
Route::post('/as_admin/member/control', 'Back@delete_action');
Route::post('/as_admin/press/control', 'Back@delete_action');
Route::post('/as_admin/event/control', 'Back@delete_action');
Route::post('/as_admin/startUp/control', 'Back@delete_action');
Route::post('/as_admin/fq/control', 'Back@delete_action');
Route::post('/as_admin/news/control', 'Back@delete_action');
Route::post('/as_admin/video/control', 'Back@delete_action');
Route::post('/as_admin/gallery/control', 'Back@delete_action');

Route::get('/as_admin/statistics_connect', 'Back@research_count');
Route::POST('/search_excel_down2', 'Back@search_excel_down2');
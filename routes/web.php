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


// index:プロジェクトの一覧
// show:プロジェクトの詳細情報
// store:プロジェクトのレコード作成
// update:プロジェクト情報の更新
// create:新規作成時の登録フォームページ
Route::resource('projects', 'ProjectsController', ['only' => ['index', 'show', 'update', 'store', 'create']]);
Route::resource('guidelines', 'GuidelinesController', ['only' => ['index', 'store', 'create']]);


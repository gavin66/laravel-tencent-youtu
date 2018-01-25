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
header("Access-Control-Allow-Origin: *");

Route::get('/', function () {
    return view('welcome');
});

Route::post('/pitu',function (){
    $image_base64 = \Illuminate\Support\Facades\Request::input('img_base64','');

    \App\Service\YouTu\Conf::setAppInfo('10116676','AKIDvjrvtkezKSRJzTM11pQoALNDrIagjPxJ','rZSDalkW6XL3lKl02ObfYFj5FH7kDZIq','896993802');
//    $image = file_get_contents('http://image.imspender.com/images/b009494be54b53167b61d3ce1d9339e2f51ee7c2.jpg');
//    $image_base64 = base64_encode($image);
    $uploadRet = \App\Service\YouTu\YouTu::pitu($image_base64);

    return $uploadRet;
});

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

Route::post('/pitu', function () {
    $image_base64 = \Illuminate\Support\Facades\Request::input('img_base64', '');

    \App\Service\YouTu\Conf::setAppInfo('10116676', 'AKIDvjrvtkezKSRJzTM11pQoALNDrIagjPxJ', 'rZSDalkW6XL3lKl02ObfYFj5FH7kDZIq', '896993802');
    $uploadRet = \App\Service\YouTu\YouTu::pitu($image_base64);

    return $uploadRet;
});

Route::post('/detectface', function () {
    $image_base64 = \Illuminate\Support\Facades\Request::input('img_base64', '');
    $mode = \Illuminate\Support\Facades\Request::input('mode', '0');

    \App\Service\YouTu\Conf::setAppInfo('10116676', 'AKIDvjrvtkezKSRJzTM11pQoALNDrIagjPxJ', 'rZSDalkW6XL3lKl02ObfYFj5FH7kDZIq', '896993802');
//    \App\Service\YouTu\Conf::setAppInfo('10116943', 'AKIDqaBbptYTzKUTGim95pbDfv0vfDfwjxhG', 'Yv6HYs9QXTEtOirqmoplcK5h8OTPCtQj', '896993802');

    $uploadRet = \App\Service\YouTu\YouTu::detectFaceByBase64($image_base64, $mode);

//    $uploadRet = \App\Service\YouTu\YouTu::detectface('icon_face_01.jpg', $mode);

    return $uploadRet;
});

//Route::post('/detectface', function () {
//    $image_base64 = \Illuminate\Support\Facades\Request::input('img_base64', '');
//    $mode = \Illuminate\Support\Facades\Request::input('mode', '0');
//
//    \App\Service\YouTu\Conf::setAppInfo('10116676', 'AKIDvjrvtkezKSRJzTM11pQoALNDrIagjPxJ', 'rZSDalkW6XL3lKl02ObfYFj5FH7kDZIq', '896993802');
//    $uploadRet = \App\Service\YouTu\YouTu::detectFaceByBase64($image_base64, $mode);
//
//    return $uploadRet;
//});
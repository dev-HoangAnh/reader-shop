<?php

// CRUD bao gồm: Danh sách, thêm, sửa, xem, xóa

// $router->before('GET|POST', '/admin/*.*', function() {
//     if (! isset($_SESSION['user'])) {
//         header('location: ' . url('login') );
//         exit();
//     }
// });

$router->mount('/admin', function () use ($router) {

    $router->get('/',               DashboardController::class . '@dashboard'); //Trang chủ Admin

    // CRUD USER
    $router->mount('/users', function () use ($router) {
        $router->get ('/',              UserController::class . '@index');      //Trang danh sách User
        $router->get ('/create',        UserController::class . '@create');     //Form thêm mới User
        $router->post('/store',         UserController::class . '@store');      //Lưu dữ liệu thêm mới vào DB
        $router->get ('/{id}/show',     UserController::class . '@show');       //Xem chi tiết
        $router->get ('/{id}/edit',     UserController::class . '@edit');       //Form sửa User
        $router->post('/{id}/update',   UserController::class . '@update');     //Lưu dữ liệu sửa vào DB 
        $router->get ('/{id}/delete',   UserController::class . '@delete');     //Xóa User 
    });
    
});
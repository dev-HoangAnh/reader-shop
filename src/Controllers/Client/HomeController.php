<?php

namespace Babavoss\ReaderShop\Controllers\Client;

use Babavoss\ReaderShop\Commons\Controller;
class HomeController extends Controller
{
    public function index() {
        $name = 'Hoàng Anh';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}
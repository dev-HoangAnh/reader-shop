<?php

namespace Babavoss\ReaderShop\Commons;

use eftec\bladeone\BladeOne;

class Controller
{
    public function renderViewClient($view, $data = [])
    {
        $templatePath = __DIR__ . '/../Views/Client';
        $compilePath  = __DIR__ . '/../Views/Compiles';

        $blade = new BladeOne($templatePath, $compilePath);

        echo $blade->run($view, $data);
    }

    public function renderViewAdmin($view, $data = [])
    {
        $templatePath = __DIR__ . '/../Views/Admin';
        $compilePath  = __DIR__ . '/../Views/Compiles';

        $blade = new BladeOne($templatePath, $compilePath);

        echo $blade->run($view, $data);
    }
}

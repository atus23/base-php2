<?php 

namespace Admin\Base\Controller\Client;

use Admin\Base\Commons\Controller;

class HomeController extends Controller{
    public function index(){
        $name = 'aTus23';

        $this->renderViewClient('home',[
            'name' => $name
        ]);
    }
}
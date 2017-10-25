<?php
namespace app\Index\controller;

use think\Controller;

class Test extends Controller {

    public function index(){
        return $this->fetch('index');
    }
}
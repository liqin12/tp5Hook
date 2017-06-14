<?php
namespace app\index\controller;

use app\common\Hook;
use think\Hook AS thinkHook;
class Index
{
    public function index()
    {
        Hook::call('Category' , 'index');
    }

    public function test(){
        Hook::call('Test','test');
    }

}

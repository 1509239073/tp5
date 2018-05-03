<?php
namespace app\index\controller;
use think\Controller;
/**
 * protected $beforeActionList = [
    'first', //在执行所有方法前都会执行first方法
    'second' => ['except'=>'hello'], //除hello方法外的方法执行前都要先执行second方法
    'three' => ['only'=>'hello,data'], //在hello/data方法执行前先执行three方法
];
 */
class HelloWorld extends Controller
{
   protected $beforeActionList = [
        'first',
        'second' =>  ['except'=>'helloA'],
        'three'  =>  ['only'=>'helloA,datab'],
    ];
    
    protected function first()
    {
        echo 'first<br/>';
    }
    
    protected function second()
    {
        echo 'second<br/>';
    }
    
    protected function three()
    {
        echo 'three<br/>';
    }

    public function helloA()
    {
        return 'hello';
    }
    
    public function dataB()
    {
        return 'data';
    }
}
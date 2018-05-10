<?php
namespace app\index\controller;
use think\Controller;
// use think\Request;
use think\Db;

use think\facade\Request;

class Index extends Controller
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP5')
    {   
    	// $this->success('新增成功', 'Index/show');
        // return url('new_read',['id'=>10]);
        return $this->fetch();
    }
    public function show($id=0){
        dump($id);
    	// $this->fetch();
    }
    public function request(){
        // echo 1;
        // echo Request::url(true);
        // echo Request::rootDomain();
        // return $request->name;
        echo Request::ext();
        dump(Request::header());
        // return Request::param('name');
        // return request()->param('name');
        // return $this->request->param('name');
    }
    //请求缓存
    //请求缓存仅对GET请求有效
    public function cacheInfo(){
        echo Request::param('name');
    }
    public function response(){
        $data = ['name' => 'thinkphp', 'status' => '1'];
        return redirect('new_show',['id'=>'thinkphp']);
        // return json($data);
    }
    // public function index()
    // {
    //     // 判断session完成标记是否存在
    //     if (session('?complete')) {
    //         // 删除session
    //         session('complete', null);
    //         return '重定向完成，回到原点!';
    //     } else {
    //         // 记住当前地址并重定向
    //         return redirect('hello')
    //             ->with('name', 'thinkphp')
    //             ->remember();
    //     }
    // }

    // public function hello()
    // {
    //     $name = session('name');
    //     return 'hello,' . $name . '! <br/><a href="/tp5/public/index/index/restore">点击回到来源地址</a>';
    // }

    // public function restore()
    // {
    //     // 设置session标记完成
    //     session('complete', true);
    //     // 跳回之前的来源地址
    //     dump(redirect()->restore());
    //     exit;
    //     return redirect()->restore();
    // }
    public function mysqlLog(){
        // $user = Db::table('users')->where('id',1)->findOrFail();
        // dump($user);
        // $user = Db::table('users')->where('id',2)->value('name');
        // //DB::table();全称呼
        // dump($user);
        // //json 数据查询
        // exit;
        // $usersIdList = Db::name('users')->field('id,name')->select();

        // foreach ($usersIdList as $key => $value) {
        //     $data['json'] = [
        //         'email'    => $value['name'].'@qq.com',
        //         'nickname' => $value['name'],

        //     ];
        //     Db::name('users')->where('id',$value['id'])->json(['json'])->update($data);
            
        // }
        // 
        // 
        // $data['name'] = mt_rand(0,9999);
        // $data['email'] =  $data['name'].'@qq.com';
        // $data['json'] = [
        //     'email'    => $data['name'].'@qq.com',
        //     'nickname' => $data['name'],

        // ];
        // dump($data);        
        // Db::name('users')->json(['json'])->insert($data);
        // $user = Db::name('users')->json(['json'])->where('json->nickname','chris.zhu')->select();
        // dump($user);
        // echo "string";
        

    }
}

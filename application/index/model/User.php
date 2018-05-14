<?php
namespace app\index\model;
use think\Model;

class User extends Model
{   
	protected $autoWriteTimestamp = true;
	protected $type = [
        
        'create_time'  =>  'timestamp:Y/m',
    ];
	protected static function init(){

	}
	public function userSearch(){
		// $user = User::getByType('9');
		// dump($user);
		// $user = User::where('id',1)->find();
		// dump($user);
        // echo $user->status;
		// return User::where('id','>',10)->select();
		// echo $user->name;
		 
	}
	public function getStatusAttr($value){
		$status = [-1=>'删除',0=>'禁用',1=>'正常',2=>'待审核'];
        return $status[$value];
	}
	public function setNameAttr($value){
		return strtolower($value);
	}
	// 	FieldName为数据表字段的驼峰转换，定义了获取器之后会在下列情况自动触发：

	//     模型的数据对象取值操作（$model->field_name）；
	//     模型的序列化输出操作（$model->toArray()及toJson()）；
	//     显式调用getAttr方法（$this->getAttr('field_name')）；

	// 获取器的场景包括：

	//     时间日期字段的格式化输出；
	//     集合或枚举类型的输出；
	//     数字状态字段的输出；
	//     组合字段的输出；
	//定义了修改器之后会在下列情况下触发：

    // 模型对象赋值；
    // 调用模型的data方法，并且第二个参数传入true；
    // 调用模型的save方法，并且传入数据；
    // 显式调用模型的setAttr方法；
    // 定义了该字段的自动完成；
    //模型关联
    //一对一关联 hasOne hasOne('关联模型','外键','主键'); belongsTo('关联模型','外键','关联主键'); 简单
    //一对多关联 一篇文章可以有多个评论 hasMany('关联模型','外键','主键'); belongsTo('关联模型','外键','关联主键'); 应该还是简单
    //远程一对多     每个城市有多个用户 每个用户有多个话题 城市和话题之间并无关联  City  $this->hasManyThrough('Topic','User'); hasManyThrough('关联模型','中间模型','外键','中间表关联键','主键'); 中间参数牵线搭桥 通过User
    //多对多关联 用户和角色就是一种多对多的关系  User $this->belongsToMany('Role'); belongsToMany('关联模型','中间表','外键','关联键');
    //关联模型（必须）：模型名或者模型类名
    //中间表：默认规则是当前模型名+_+关联模型名 （可以指定模型名）
    //外键：中间表的当前模型外键，默认的外键名规则是关联模型名+_id
    //关联键：中间表的当前模型关联键名，默认规则是当前模型名+_id
    //belongsToMany('Role','\\app\\model\\Access')  中间表模型类必须继承think\model\Pivot ,不太清楚，文档写的不好
    //多态一对多关联 用户可以评论书和文章，但评论表通常都是同一个数据表的设计。多态一对多关联关系
    // article
    //     id - integer
	//     title - string
	//     content - text

	// book
	//     id - integer
	//     title - string

	// comment
	//     id - integer
	//     content - text
	//     commentable_id - integer
	//     commentable_type - string
	//comment 表中的 commentable_id 和 commentable_type我们称之为多态字段。其中， commentable_id 用于存放书或者文章的 id（主键） ，而 commentable_type 用于存放所属模型的类型。
	//morphMany('关联模型','多态字段','多态类型');
	//$this->morphMany('Comment', 'commentable'); Article book id 存在于comment comment_id
	//
	//morphTo('多态字段',['多态类型别名']);
	//获取多态关联
	//自定义多态关联的类型字段 默认情况下，ThinkPHP 会使用模型名作为多态表的类型区分，例如，Comment属于 Article 或者 Book , commentable_type 的默认值可以分别是 Article 或者 Book 。我们可以通过定义多态的时候传入参数来对数据库进行解耦。
	//public function commentable()
    // {
    //     return $this->morphTo('commentable',[
    //     	   'book'	=>	'app\index\model\Book',
    //         'post'	=>	'app\admin\model\Article',
    //     ]);
    // }
    // 多态一对一关联
    // 个人和团队表，而无论个人还是团队都有一个头像需要保存但都会对应同一个头像表
    // member
	//     id - integer
	//     name - string
	    
	// team
	//     id - integer
	//     name - string
	    
	// avatar
	//     id - integer
	//     avatar - string
	//     imageable_id - integer
	//     imageable_type - string 
	//     morphOne('关联模型','多态字段','多态类型'); return $this->morphOne('Avatar', 'imageable');
	//     多态一对多和多态一对一区别在于数据表字段1111
    
    

}
<?php
namespace app\frontend\controller;

use think\Request;
use think\Controller;
use app\common\model\ArticleModel;
use app\common\model\UserModel;
use app\common\model\CategoryModel;
use app\common\model\TagModel;

class Index extends Controller
{
    public function index(Request $request)
    {
    	$articles = ArticleModel::order('id', 'desc')->limit(5)->select();

    	// foreach ($articles as $key => $article) {
    	// 	$article->user = UserModel::get($article->user_id);
    	// }

    	$tags      = TagModel::order('id', 'desc')->select();

		$this->assign('articles', $articles);
		$this->assign('tags', $tags);
        return $this->fetch('index/homepage');
    }
}

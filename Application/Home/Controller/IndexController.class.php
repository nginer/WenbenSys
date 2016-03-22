<?php
namespace Home\Controller;

use Think\Controller;
use Think\Model\MongoModel;
use Think\Page;

class IndexController extends Controller
{
    const page_size = 6;

    public function index()
    {
        $Jingjixueren = new MongoModel("jingjixueren");
        $Jingjixueren->create();

        $count = $Jingjixueren->count();
        $Page = new Page($count, IndexController::page_size);// 实例化分页类 传入总记录数和每页显示的记录数(25)

        $news = $Jingjixueren->order("time desc")->limit($Page->firstRow . ',' . $Page->listRows)->select();

        $show = $Page->show();// 分页显示输出

        $this->assign("news", $news);
        $this->assign('page', $show);// 赋值分页输出
        $this->display();
    }

    public function export()
    {
        $id = $_GET['id'];
        $Jingjixueren = new MongoModel("jingjixueren");
        $Jingjixueren->create();
        $content = $Jingjixueren->where(array('file_id' => $id))->find();
        $title = str_replace('&#039;', '\'', $content['title']);
        $doc_content = "<h2 style='text-align: center;'>" . $content['title'] .
            '</h2></p><div style="text-align:justify;line-height:10px;text-indent: 2em;">' . $content['body'] . "</p>";
        create_word($doc_content, $title);
    }

    public function showpage(){
        $id = $_GET['id'];
        $Jingjixueren = new MongoModel("jingjixueren");
        $Jingjixueren->create();
        $content = $Jingjixueren->where(array('file_id' => $id))->find();
        $this->assign('page', $content);// 赋值分页输出
        $this->assign('content',$content);
        $this->display();
    }
}
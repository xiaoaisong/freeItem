<?php
/**
 * Created by PhpStorm.
 * User: 小爱
 * Date: 2016/9/3
 * Time: 23:59
 */
namespace Home\Controller;
use Think\Controller;
class LiShiController extends Controller{

    public function showList(){
        $deptid = I('get.deptid');   //$deptid 需要是一个动值判断如何传递
        //dump($deptid);die;
        $model = M('Good');
        $count = $model -> count();

        //实例化分页类传递总记录数和每页显示行数
        $page = new \Think\Page($count,1);
        //每页显示3条记录
        $page -> rollPage   = 3;
        //关闭尾页显示总页数
        $page -> lastSuffix = false;
        $page -> setConfig('prev','上一页');
        $page -> setConfig('next','下一页');
        $page -> setConfig('first','首页');
        $page -> setConfig('last','尾页');
        //页面展示分类页面
        $show = $page -> show();
        $data = $model ->table('tp_dept as t2,tp_good as t1')
            ->field('t1.*,t2.name as deptname,t2.content as deptdesc')
            ->where("t1.dept_id = t2.id and dept_id = $deptid")
            ->limit($page -> firstRow, $page -> listRows)
            ->select();

        $this -> assign('data',$data);
        $this -> assign('show',$show);
        $this -> display();


    }




}
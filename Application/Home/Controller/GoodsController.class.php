<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {

    public function goods()
    {

        $model = M('Dept');
        $data =  $model -> select();
        $data1 = $model -> where('pid = 1') -> select();
        //dump($data1);die;
        $data2 = $model -> where('pid = 3') -> select();
        $data3 = $model -> where('pid = 6') -> select();
        $this -> assign('data',$data);
        $this -> assign('data1',$data1);
        $this -> assign('data2',$data2);
        $this -> assign('data3',$data3);
        $this -> display();



    }

//    public function ajax(){
//        $deptid = I('post.id');
//        $model = M('Good');
//        $data = $model -> where("dept_id = $deptid" ) -> select();//找出产品类型的名字,产品型号
//        //echo json_encode($data);
//        echo $data;
//    }



    public function search(){
        $deptid=I('post.category');
        //dump($deptid);
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
    
    
    public function topsearch(){
        $name = I('post.goodsname');
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
            ->where("t1.dept_id = t2.id and t1.name LIKE '%$name%'" )
            ->limit($page -> firstRow, $page -> listRows)
            ->select();
        //dump($data);

        $this -> assign('data',$data);
        $this -> assign('show',$show);
        $this -> display();

    }
    
    
    
    
    
    

//    public function home(){
//        $this ->display();
//    }


    public function content(){
        $id = I('get.id');
        $model = M('Good');
        $data = $model -> where("id = $id") -> select();
        //dump($data);
        $this -> assign('data',$data);
        $this -> display();
    }




    public function test(){
        $this -> display();
    }
    





}
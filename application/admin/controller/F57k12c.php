<?php

namespace app\admin\controller;

use app\common\controller\Backend;

/**
 * 
 *
 * @icon fa fa-circle-o
 */
class F57k12c extends Backend
{
    
    /**
     * F57k12c模型对象
     * @var \app\admin\model\F57k12c
     */
    protected $model = null;

    protected $datalimit = true;//开启数据授权检查
    protected $dataLimit = 'auth';//显示当前自己的数据和子类的数据
    protected $dataLimitField = 'admin_id';//数据限制字段


    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\F57k12c;
        $this->view->assign("cstatus", $this->model->getCStatusList());
        $this->view->assign("ctypeList", $this->model->getCtypeList());
        $this->view->assign("subctypeList", $this->model->getSubctypeList());
        $this->view->assign("type1List", $this->model->getType1List());
        $this->view->assign("type2List", $this->model->getType2List());
        $this->view->assign("solutionList", $this->model->getSolutionList());
        $this->view->assign("processstatusList", $this->model->getProcessstatusList());
    }
    
    /**
     * 默认生成的控制器所继承的父类中有index/add/edit/del/multi五个基础方法、destroy/restore/recyclebin三个回收站方法
     * 因此在当前控制器中可不用编写增删改查的代码,除非需要自己控制这部分逻辑
     * 需要将application/admin/library/traits/Backend.php中对应的方法复制到当前控制器,然后进行修改
     */
    
    public function forward($ids)
    {
        foreach($ids as $uk01){
            $sql = "call gnnr($uk01,1)";
            $res = Db::query($sql);
        }
        return $this->view->fetch();
    }
}


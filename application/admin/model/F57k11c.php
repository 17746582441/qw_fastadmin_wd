<?php

namespace app\admin\model;

use think\Model;


class F57k11c extends Model
{

    

    

    // 表名
    protected $table = 'f57k11c';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'CTYPE_text',
        'SubCType_text',
        'TYPE1_text',
        'TYPE2_text',
        'Feedback_text'
    ];
    

    
    public function getCtypeList()
    {
        return ['待定' => __('待定'), '虚假承诺' => __('虚假承诺'), '服务质量' => __('服务质量'), '会所环境' => __('会所环境')];
    }

    public function getSubctypeList()
    {
        return ['待定' => __('待定'), '态度不好' => __('态度不好'), '能力待提高' => __('能力待提高'), '沟通不及时' => __('沟通不及时')];
    }

    public function getType1List()
    {
        return ['A类' => __('A类'), 'B类' => __('B类'), 'C类' => __('C类'), 'D类' => __('D类')];
    }

    public function getType2List()
    {
        return ['a小类' => __('A小类'), 'b小类' => __('B小类'), 'c小类' => __('C小类'), 'd小类' => __('D小类')];
    }

    public function getFeedbackList()
    {
        return ['满意' => __('满意'), '不满意' => __('不满意'), '待评定' => __('待评定')];
    }


    public function getCtypeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['CTYPE']) ? $data['CTYPE'] : '');
        $list = $this->getCtypeList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getSubctypeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['SubCType']) ? $data['SubCType'] : '');
        $list = $this->getSubctypeList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getType1TextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['TYPE1']) ? $data['TYPE1'] : '');
        $list = $this->getType1List();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getType2TextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['TYPE2']) ? $data['TYPE2'] : '');
        $list = $this->getType2List();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getFeedbackTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['Feedback']) ? $data['Feedback'] : '');
        $list = $this->getFeedbackList();
        return isset($list[$value]) ? $list[$value] : '';
    }




}

define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'f57k12c/index' + location.search,
                    add_url: 'f57k12c/add',
                    edit_url: 'f57k12c/edit',
                    forward_url: 'f57k12c/forward',
                    del_url: 'f57k12c/del',
                    multi_url: 'f57k12c/multi',
                    table: 'f57k12c',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'UK01',
                sortName: 'UKID,UK01',
                sortOrder: 'desc,asc',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'UKID', title: __('Ukid')},
                        {field: 'CStatus', title: __('CStatus'), searchList: {"新建":__('新建'),"处理中":__('处理中'),"已回复":__('已回复'),"已评价":__('已评价')}, operate:'FIND_IN_SET', formatter: Table.api.formatter.label},
                        // {field: 'UK03', title: __('Uk03')},
                        {field: 'ALPH', title: __('ALPH')},
                        {field: 'A030', title: __('A030')},
                        {field: 'E58MBMB', title: __('E58MBMB')},
                        {field: 'STEP', title: __('Step')},
                        {field: 'admin_id', title: __('Admin_id')},
                        {field: 'Solution', title: __('Solution'), searchList: {"电话回访":__('电话回访'),"赠送权益":__('赠送权益'),"调换教练":__('调换教练')}, operate:'FIND_IN_SET', formatter: Table.api.formatter.label},
                        {field: 'Comments', title: __('Comments')},
                        // {field: 'PassCondition', title: __('Passcondition')},
                        {field: 'ProcessStatus', title: __('Processstatus'), searchList: {"已接收":__('已接收'),"处理中":__('处理中'),"已提交":__('已提交'),"中止":__('中止')}, formatter: Table.api.formatter.status},
                        {field: 'CTYPE', title: __('Ctype'), 
                            searchList: {"待定":__('待定'),"虚假承诺":__('虚假承诺'),"服务质量":__('服务质量'),"会所环境":__('会所环境')}, 
                            formatter: Table.api.formatter.normal
                            //  ,visible: (2==1)? true :false  
                        },
                        {field: 'SubCTYPE', title: __('Subctype'), searchList: {"待定":__('待定'),"态度不好":__('态度不好'),"能力待提高":__('能力待提高'),"沟通不及时":__('沟通不及时')}, formatter: Table.api.formatter.normal},
                        {field: 'TYPE1', title: __('Type1'), searchList: {"A类":__('A类'),"B类":__('B类'),"C类":__('C类'),"D类":__('D类')}, formatter: Table.api.formatter.normal},
                        {field: 'TYPE2', title: __('Type2'), searchList: {"a小类":__('A小类'),"b小类":__('B小类'),"c小类":__('C小类'),"d小类":__('D小类')}, formatter: Table.api.formatter.normal},
                        {field: 'ReceiveOn', title: __('Receiveon'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'CLUB', title: __('Club')},
                        {field: 'AutoPassMin', title: __('Autopassmin')},
                        {field: 'StartOn', title: __('Starton'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'CompletionOn', title: __('Completionon'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'UK02', title: __('Uk02')},
                        {field: 'UK01', title: __('Uk01')},
                        {field: 'CreateOn', title: __('Createon'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },

        forward: function () {
            Controller.api.bindevent();
        },

        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});
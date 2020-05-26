define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'f57k01/index' + location.search,
                    add_url: 'f57k01/add',
                    edit_url: 'f57k01/edit',
                    del_url: 'f57k01/del',
                    multi_url: 'f57k01/multi',
                    table: 'f57k01',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'UKID',
                sortName: 'CTYPE,SubCType,TYPE1,TYPE2,STEP',
                sortOrder: 'asc,asc,asc,asc,asc',
                columns: [
                    [
                        {checkbox: true},
                        // {field: 'UKID', title: __('Ukid')},
                        {field: 'CTYPE', title: __('Ctype'), searchList: {"待定":__('待定'),"虚假承诺":__('虚假承诺'),"服务质量":__('服务质量'),"会所环境":__('会所环境')}, formatter: Table.api.formatter.normal},
                        {field: 'SubCType', title: __('Subctype'), searchList: {"待定":__('待定'),"态度不好":__('态度不好'),"能力待提高":__('能力待提高'),"沟通不及时":__('沟通不及时')}, formatter: Table.api.formatter.normal},
                        {field: 'TYPE1', title: __('Type1'), searchList: {"A类":__('A类'),"B类":__('B类'),"C类":__('C类'),"D类":__('D类')}, formatter: Table.api.formatter.normal},
                        {field: 'TYPE2', title: __('Type2'), searchList: {"a小类":__('A小类'),"b小类":__('B小类'),"c小类":__('C小类'),"d小类":__('D小类')}, formatter: Table.api.formatter.normal},
                        {field: 'STEP', title: __('Step')},
                        {field: 'DL01', title: __('Dl01')},
                        {field: 'POS', title: __('Pos')},
                        // {field: 'PassCondition', title: __('Passcondition')},
                        {field: 'Memo', title: __('Memo')},
                        // {field: 'EFFF', title: __('Efff'), operate:'RANGE', addclass:'datetimerange'},
                        // {field: 'EFFT', title: __('Efft'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'AutoPassMin', title: __('Autopassmin')},
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
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});
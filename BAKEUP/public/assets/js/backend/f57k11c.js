define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'f57k11c/index' + location.search,
                    add_url: 'f57k11c/add',
                    edit_url: 'f57k11c/edit',
                    del_url: 'f57k11c/del',
                    multi_url: 'f57k11c/multi',
                    table: 'f57k11c',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'UKID',
                sortName: 'UKID',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'UKID', title: __('Ukid')},
                        {field: 'CTYPE', title: __('Ctype'), searchList: {"待定":__('待定'),"虚假承诺":__('虚假承诺'),"服务质量":__('服务质量'),"会所环境":__('会所环境')}, formatter: Table.api.formatter.normal},
                        {field: 'SubCType', title: __('Subctype'), searchList: {"待定":__('待定'),"态度不好":__('态度不好'),"能力待提高":__('能力待提高'),"沟通不及时":__('沟通不及时')}, formatter: Table.api.formatter.normal},
                        {field: 'TYPE1', title: __('Type1'), searchList: {"A类":__('A类'),"B类":__('B类'),"C类":__('C类'),"D类":__('D类')}, formatter: Table.api.formatter.normal},
                        {field: 'TYPE2', title: __('Type2'), searchList: {"a小类":__('A小类'),"b小类":__('B小类'),"c小类":__('C小类'),"d小类":__('D小类')}, formatter: Table.api.formatter.normal},
                        {field: 'CLUB', title: __('Club')},
                        {field: 'E58NMID', title: __('E58nmid')},
                        {field: 'ALPH', title: __('Alph')},
                        {field: 'E58MBMB', title: __('E58mbmb')},
                        {field: 'CPHC1', title: __('Cphc1')},
                        {field: 'CPHC2', title: __('Cphc2')},
                        {field: 'A030', title: __('A030')},
                        {field: 'CEML1', title: __('Ceml1')},
                        {field: 'CEML2', title: __('Ceml2')},
                        {field: 'CREATEON', title: __('Createon'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'PRUKID', title: __('Prukid')},
                        {field: 'Feedback', title: __('Feedback'), searchList: {"满意":__('满意'),"不满意":__('不满意'),"待评定":__('待评定')}, formatter: Table.api.formatter.normal},
                        {field: 'Rate', title: __('Rate')},
                        {field: 'Comments', title: __('Comments')},
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
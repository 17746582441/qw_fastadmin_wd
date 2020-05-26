define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'f57type1/index' + location.search,
                    add_url: 'f57type1/add',
                    edit_url: 'f57type1/edit',
                    del_url: 'f57type1/del',
                    multi_url: 'f57type1/multi',
                    table: 'f57type1',
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
                        {field: 'TYPE1', title: __('Type1')},
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
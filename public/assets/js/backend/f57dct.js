define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'f57dct/index' + location.search,
                    add_url: 'f57dct/add',
                    edit_url: 'f57dct/edit',
                    del_url: 'f57dct/del',
                    multi_url: 'f57dct/multi',
                    table: 'f57dct',
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
                        {field: 'DCT', title: __('Dct')},
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
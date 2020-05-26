define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'f57k11a/index' + location.search,
                    add_url: 'f57k11a/add',
                    edit_url: 'f57k11a/edit',
                    del_url: 'f57k11a/del',
                    multi_url: 'f57k11a/multi',
                    table: 'f57k11a',
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
                        {field: 'DOC', title: __('Doc')},
                        {field: 'DCT', title: __('Dct')},
                        {field: 'CO', title: __('Co')},
                        {field: 'E58NMID', title: __('E58nmid')},
                        {field: 'ALPH', title: __('Alph')},
                        {field: 'E58MBMB', title: __('E58mbmb')},
                        {field: 'CPHC1', title: __('Cphc1')},
                        {field: 'CPHC2', title: __('Cphc2')},
                        {field: 'A030', title: __('A030')},
                        {field: 'CEML1', title: __('Ceml1')},
                        {field: 'CEML2', title: __('Ceml2')},
                        {field: 'CREATEON', title: __('Createon'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'TYPE1', title: __('Type1')},
                        {field: 'TYPE2', title: __('Type2')},
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
define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'f57k12l/index' + location.search,
                    add_url: 'f57k12l/add',
                    edit_url: 'f57k12l/edit',
                    del_url: 'f57k12l/del',
                    multi_url: 'f57k12l/multi',
                    table: 'f57k12l',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'UK01',
                sortName: 'UK01',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'UK01', title: __('Uk01')},
                        {field: 'NLIN', title: __('Nlin')},
                        {field: 'UKID', title: __('Ukid')},
                        {field: 'UK02', title: __('Uk02')},
                        {field: 'UK03', title: __('Uk03')},
                        {field: 'DOC', title: __('Doc')},
                        {field: 'DCT', title: __('Dct')},
                        {field: 'CO', title: __('Co')},
                        {field: 'STEP', title: __('Step')},
                        {field: 'HandledByAN8', title: __('Handledbyan8')},
                        {field: 'A030', title: __('A030')},
                        {field: 'PassCondition', title: __('Passcondition')},
                        {field: 'ProcessStatus', title: __('Processstatus'), formatter: Table.api.formatter.status},
                        {field: 'ReceiveOn', title: __('Receiveon'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'StartOn', title: __('Starton'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'CompletionOn', title: __('Completionon'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'ForwardOn', title: __('Forwardon'), operate:'RANGE', addclass:'datetimerange'},
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
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});
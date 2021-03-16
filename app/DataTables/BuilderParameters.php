<?php

namespace App\DataTables;

trait BuilderParameters
{

    /**
    * @param $selectColumns describtion
    * Select columns is a multi dimensional array
    * structure
    * [
    *      [
    *          'index_num' => the datatable column number ex: 1,2,3
    *          'selectValues' => [
    *                              'key' => 'val' // <option value="'.$key.'">'.$val.'</option>
    *                          ]
    *      ]
    * ]
    */

    protected function getCustomBuilderParameters(array $columns = [], array $selectColumns = [], bool $enableArabic = false, bool $enableScrollX = false, bool $hasDatePicker = false) : array
    {
        $parameters = [
            'dom' => 'Blfrtip',
            "lengthMenu" => [[10, 25, 50, -1], [10, 25, 50, trans('main.all_records')]],
            'buttons' => $this->getButtons(),
            'scrollX' => $enableScrollX,
            'initComplete' => "function () { ". $this->getJsStr($columns, $selectColumns, $hasDatePicker) ." }",
            'order' => [[1, 'asc']],
        ];

        if ($enableArabic) {
            $parameters['language'] = [
                'url' => asset('backend/datatables/arabic.json')
            ];
        }

        return $parameters;
    }

    public function getJsStr(array $columns, array $selectColumns, bool $hasDatePicker) : string
    {
        $str = '';
        $str .= $this->getNormalColumns($columns);
        $str .= $this->getSelectColumns($selectColumns);
        $str .= $hasDatePicker ? $this->addDatePicker() : '';
        return $str;
    }

    protected function getSelectColumns(array $selectColumns) : string
    {
        $jqCode = '';
        if (count($selectColumns)) {
            foreach ($selectColumns as $column) {
                if (array_key_exists('index_num', $column) && array_key_exists('selectValues', $column) && is_array($column['selectValues'])) {
                    $options = '<option value="empty">'.trans('main.select').'</option>';
                    foreach ($column['selectValues'] as $key => $val) {
                        $options .= '<option value="'.$key.'">'.$val.'</option>';
                    }
                    $jqCode .= $this->getSelectJqCode($column, $options);
                } else {
                    throw new \Exception("Error In Datatable Trait By Mohamed Zayed :)", 1);
                }
            }
        }
        return $jqCode;
    }

    protected function getSelectJqCode(array $column, string $options) : string
    {
        return "this.api().columns([".$column['index_num']."]).every(function () {
            var column = this;
            var select = document.createElement(\"select\");
            $(select).attr( 'style', 'width: 100%');
            $(select).attr( 'class', 'form-control');
            $(select).html('".$options."');
            $(select).appendTo($(column.footer()).empty()).on('change', function () {
                if($(this).val() != 'empty'){
                    column.search($(this).val()).draw();
                } else {
                    column.search('').draw();
                }
            });
        });";
    }

    protected function getNormalColumns(array $columns) : string
    {
        return "this.api().columns([".implode(', ', $columns)."]).every(function () {
            var column = this;
            var input = document.createElement(\"input\");
            $(input).attr( 'style', 'width: 100%');
            $(input).attr( 'class', 'form-control');
            $(input).appendTo($(column.footer()).empty())
            .on('keyup', function () {
                column.search($(this).val()).draw();
            });
        });";
    }

    protected function addDatePicker() : string
    {
        return "$('.date-picker').datepicker({
            isRtl:true,
            format: 'yyyy-mm-dd',
            orientation: 'bottom',
            autoclose: true,
            language: '{{ GetLanguage() }}'
        });";
    }

    protected function getButtons() : array
    {
        return [
            [
                'text' => '<i class="fa fa-plus"></i> ' . trans('main.add'),
                'className' => 'btn default createBtn'
            ],
            ['extend' => 'print', 'className' => 'btn default', 'text' => '<i class="fa fa-print"></i> ' . trans('main.print')],
            ['extend' => 'excel', 'className' => 'btn default', 'text' => '<i class="fa fa-file-excel-o"> </i> ' . trans('main.export_excel')],
            ['extend' => 'csv', 'className' => 'btn default', 'text' => '<i class="fa fa-file-excel-o"> </i> ' . trans('main.export_csv')],
            ['extend' => 'reload', 'className' => 'btn default', 'text' => '<i class="fa fa fa-refresh"></i> ' . trans('main.reload')],
            [
                'text' => '<i class="fa fa-trash"></i> ' . trans('main.delete'),
                'className' => 'btn red deleteBtn',
            ],
        ];
    }

    protected function getAjaxResponseData()
    {
        $this->request()->merge([]);

        $response = app()->call([$this, 'ajax']);

        $data     = $response->getData(true);

        return $data['data'];
    }
}

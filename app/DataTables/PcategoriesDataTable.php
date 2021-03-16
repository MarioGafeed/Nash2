<?php

namespace App\DataTables;

use App\Models\Pcategory;
use Yajra\DataTables\Services\DataTable;

class PcategoriesDataTable extends DataTable
{
    use BuilderParameters;

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
     public function dataTable($query)
     {
       return datatables($query)
       ->addColumn('checkbox', '<input type="checkbox" class="selected_data" name="selected_data[]" value="{{ $id }}">')
       ->addColumn('pcategories.title_en', function($model){
                return json_decode($model->title)->en;
            })
       ->addColumn('pcategories.title_ar', function($model){
                     return json_decode($model->title)->ar ?? trans('main.n_a');
                 })
       ->addColumn('pcategories.summary_en', function($model){
                          return json_decode($model->summary)->en;
                 })
       ->addColumn('pcategories.summary_ar', function($model){
                          return json_decode($model->summary)->ar ?? trans('main.n_a');
                 })
       ->addColumn('show', 'backend.pcategories.buttons.show')
       ->addColumn('edit', 'backend.pcategories.buttons.edit')
       ->addColumn('delete', 'backend.pcategories.buttons.delete')
       ->rawColumns(['checkbox','title','title_en','title_ar','show','edit', 'delete'])
       ;
     }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Pcategory $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $query = Pcategory::query()->select('pcategories.*');
        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        $html =  $this->builder()
        ->columns($this->getColumns())
        ->ajax('')
        ->parameters($this->getCustomBuilderParameters([1,2,3,4], [], GetLanguage() == 'ar'));
        return $html;
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            [
                'name' => 'checkbox',
                'data' => 'checkbox',
                'title' => '<input type="checkbox" class="select-all" onclick="select_all()">',
                'orderable'      => false,
                'searchable'     => false,
                'exportable'     => false,
                'printable'      => false,
                'width'          => '10px',
                'aaSorting'      => 'none'
            ],
            [
                'name'       => "pcategories.title",
                'data'       => 'pcategories.title_en',
                'title'      => trans('main.titlepcat')." en",
                'searchable' => true,
                'orderable'  => true,
                'width'      => '200px',
            ],
            [
                'name'       => "pcategories.title",
                'data'       => 'pcategories.title_ar',
                'title'      => trans('main.titlepcat')." ar",
                'searchable' => true,
                'orderable'  => true,
                'width'      => '200px',
            ],
            [
                'name'       => "pcategories.summary",
                'data'       => 'pcategories.summary_en',
                'title'      => trans('main.summary')." en",
                'searchable' => true,
                'orderable'  => true,
                'width'      => '200px',
            ],
            [
                'name'       => "pcategories.summary",
                'data'       => 'pcategories.summary_ar',
                'title'      => trans('main.summary')." ar",
                'searchable' => true,
                'orderable'  => true,
                'width'      => '200px',
            ],
            [
                'name' => 'show',
                'data' => 'show',
                'title' => trans('main.show'),
                'exportable' => false,
                'printable'  => false,
                'searchable' => false,
                'orderable'  => false,
            ],
            [
                'name' => 'edit',
                'data' => 'edit',
                'title' => trans('main.edit'),
                'exportable' => false,
                'printable'  => false,
                'searchable' => false,
                'orderable'  => false,
            ],
            [
                'name' => 'delete',
                'data' => 'delete',
                'title' => trans('main.delete'),
                'exportable' => false,
                'printable'  => false,
                'searchable' => false,
                'orderable'  => false,
            ],

        ];
    }

    protected function filename()
    {
        return 'Pcategories_' . date('YmdHis');
    }
}

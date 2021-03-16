<?php

namespace App\DataTables;

use App\Models\Vpost;
use Yajra\DataTables\Services\DataTable;

class VpostsDataTable extends DataTable
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
        ->addColumn('vposts.title_en', function($model){
                 return json_decode($model->title)->en;
             })
        ->addColumn('vposts.title_ar', function($model){
                      return json_decode($model->title)->ar ?? trans('main.n_a');
                  })
        ->addColumn('show', 'backend.vposts.buttons.show')
        ->addColumn('edit', 'backend.vposts.buttons.edit')
        ->addColumn('delete', 'backend.vposts.buttons.delete')
        ->rawColumns(['checkbox','show','edit', 'delete'])
        ;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Video post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $query = Vpost::query()->with('vcategory')->select('vposts.*');
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
         ->parameters($this->getCustomBuilderParameters([1], [], GetLanguage() == 'ar'));

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
                 'name'       => "vposts.title",
                 'data'       => 'vposts.title_en',
                 'title'      => trans('main.titlevcat')." en",
                 'searchable' => true,
                 'orderable'  => true,
                 'width'      => '200px',
             ],
             [
                 'name'       => "vposts.title",
                 'data'       => 'vposts.title_ar',
                 'title'      => trans('main.titlevcat')." ar",
                 'searchable' => true,
                 'orderable'  => true,
                 'width'      => '200px',
             ],
             [
                 'name' => "vposts.status",
                 'data'    => 'status',
                 'title'   => trans('main.status'),
                 'searchable' => true,
                 'orderable'  => true,
                 'width'          => '200px',
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
        return 'Vposts_' . date('YmdHis');
    }
}

<?php
namespace App\DataTables;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Services\DataTable;

class RolesDatatable extends DataTable
{
    use BuilderParameters;

    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('checkbox', '<input type="checkbox" class="selected_data" name="selected_data[]" value="{{ $id }}">')
            ->addColumn('permissions_name', 'backend.roles.buttons.permissions_name')
            ->addColumn('show', 'backend.roles.buttons.show')
            ->addColumn('edit', 'backend.roles.buttons.edit')
            ->addColumn('delete', 'backend.roles.buttons.delete')
            ->rawColumns(['checkbox','show','edit', 'delete', 'permisions_name']);
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return mixed
     */
    public function query()
    {
        $query = Role::query()->orderBy('id', 'DESC')->with('permissions')->select('roles.*');
        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        $html =  $this->builder()
         ->columns($this->getColumns())
         ->ajax('')
         ->parameters($this->getCustomBuilderParameters([1], []));

        if (GetLanguage() == 'ar') {
            $html = $html->parameters($this->getCustomBuilderParameters([1], [], true));
        }

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
                'name' => "roles.name",
                'data'    => 'name',
                'title'   => trans('main.role_name'),
                'searchable' => true,
                'orderable'  => true,
            ],
            [
                'name' => "permissions.name",
                'data'    => 'permissions_name',
                'title'   => trans('main.permissions'),
                'searchable' => false,
                'orderable'  => false,
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

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'RolesDataTable_' . time();
    }
}

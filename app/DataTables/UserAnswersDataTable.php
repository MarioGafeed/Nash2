<?php

namespace App\DataTables;

use App\Models\UserAnswer;
use Yajra\DataTables\Services\DataTable;

class UserAnswersDataTable extends DataTable
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
        // ->addColumn('checkbox', '<input type="checkbox" class="selected_data" name="selected_data[]" value="{{ $id }}">')
        ->rawColumns([])
        ;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Course_Detail $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $query = UserAnswer::query()->with('question_relation', 'answer_relation', 'user_relation')->select('user_answers.*');
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
         ->parameters($this->getCustomBuilderParameters([0,1,2,3], [], GetLanguage() == 'ar'));

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
                 'name' => "question_relation.title",
                 'data'    => 'question_relation.title',
                 'title'   => trans('main.question'),
                 'searchable' => true,
                 'orderable'  => true,
                 'width'          => '100px',
             ],
             [
                 'name' => "answer_relation.answer",
                 'data'    => 'answer_relation.answer',
                 'title'   => trans('main.answer'),
                 'searchable' => true,
                 'orderable'  => true,
                 'width'          => '100px',
             ],
             [
                 'name' => "user_relation.name",
                 'data'    => 'user_relation.name',
                 'title'   => trans('main.user'),
                 'searchable' => true,
                 'orderable'  => true,
                 'width'          => '100px',
             ],
             [
                 'name' => "user_answers.answer_status",
                 'data'    => 'answer_status',
                 'title'   => trans('main.status'),
                 'searchable' => true,
                 'orderable'  => true,
                 'width'          => '100px',
             ],
         ];
    }

    protected function filename()
    {
        return 'answers' . date('YmdHis');
    }
}

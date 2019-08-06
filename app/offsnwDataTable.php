<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/9/2560
 * Time: 0:27
 */



namespace App;

use App\Model\offsnw;
//use Yajra\Datatables\Services\DataTable;
use Yajra\Datatables\Datatables;

class offsnwDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @return \Yajra\Datatables\Engines\BaseEngine
     */
    public function dataTable()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'offsnw.edit');
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return mixed
     */
    public function query()
    {
        $query = offsnw::query();

        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->ajax('')
            ->addAction(['width' => '80px'])
            ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id', 'nikay', 'zone_jwad', 'zone_supv', 'name_chaya','name_add','name_tel'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'offsnw_' . time();
    }
}
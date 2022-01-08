<?php

namespace App\DataTables;

use App\Models\Cliente;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ClientesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function($cli){
                return '<button data-id=" '.$cli->id.' " data-Nombre=" '.$cli->Nombre.' " data-Cedula=" '.$cli->Cedula.' " 
                data-Direccion=" '.$cli->Direccion.' "  data-Telefono=" '.$cli->Telefono.' "  data-email=" '.$cli->email.' " 
                 type="button" class="btn btn-info btn-sm" onclick="selecionar(this)">  <i class="fa fa-plus"></i>Seleccionar</button>';
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Cliente $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Cliente $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
        ->columns($this->getColumnsTable())
        // ->minifiedAjax()
        ->ajax(['data' => 'function(d) { d.table = "Clientes"; }'])
        ->addAction(['width' => '80px','title'=>'Selecionar'])
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
           'id',
           'Nombre',
           'Cedula',
           'Direccion',
           'Telefono',
           'email'
        ];
    }

    protected function getColumnsTable()
    {
        return [
            // 'id',
            'Nombre',
            'Cedula'=>['title'=>'Cédula'],
            'Direccion'=>['title'=>'Dirección'],
            'Telefono'=>['title'=>'Teléfono'],
            'email'
        ];
    }
    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Clientes_' . date('YmdHis');
    }
}

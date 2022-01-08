<?php

namespace App\DataTables;

use App\Models\Producto;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProductosDataTable extends DataTable
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
            ->addColumn('action', function($prod){
                return '<button data-id=" ' .$prod->id.' "  data-nombre=" ' .$prod->nombre.' "  data-precioventa=" ' .$prod->precioventa.' "
                data-stock=" ' .$prod->stock.' "   data-imagen=" ' .$prod->imagen.' "
                type="button" class="btn btn-info btn-sm" onclick="selecionarPro(this)">  <i class="fa fa-plus"></i>Agregar</button>';
            })
            ->addColumn('imagen', function ($img) { $url=asset("storage/imagen/Productos/$img->imagen"); 
                return '<img src='.$url.' border="0" width="40" class="img-rounded" align="center" />';
          
            })
         
           
            ->rawColumns(['imagen','action']);

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Producto $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Producto $model)
    {
        return $model->newQuery()->select($this->getColumns());
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
        ->minifiedAjax()
        ->ajax(['data' => 'function(d) { d.table = "Productos"; }']) 
        ->addAction(['width' => '80px','title'=>'Acción'])
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
            'nombre',
            'precioventa',
            'stock',
            'imagen'

       
   
         ];
    }

    protected function getColumnsTable()
    {
        return [
            // 'id',
            'nombre'=>['title'=>'Nombre'],
            
            'precioventa'=>['title'=>'Precio'],
            'stock'=>['title'=>'Stock'],
           'imagen'
         
     
        ];
    }
    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Productos_' . date('YmdHis');
    }
}

<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class ProductoController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        

			$this->filter = \DataFilter::source(new \App\Producto);
			$this->filter->add('nombre', 'Nombre', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('nombre', 'Nombre');
			$this->grid->add('descripcion', 'Descripcion');
			$this->grid->add('la_categoria','Categoría');
			$this->addStylesToGrid();

                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        
			$this->edit = \DataEdit::source(new \App\Producto());

			$this->edit->label('Editar Producto');

			$this->edit->add('nombre', 'Nombre', 'text')->rule('required');
		
			$this->edit->add('descripcion', 'Descripcion', 'text');

        return $this->returnEditView();
    }    
}
